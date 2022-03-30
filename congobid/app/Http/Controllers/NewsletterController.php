<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Statut;
use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Historique;
use Illuminate\Support\Facades\Auth;
use App\Models\Promotion;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::orderBy('id', 'desc')->get();
        $promotions = Promotion::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.newsletters', compact('newsletters', 'promotions', 'chats'));
    }

    public function indexfilter($id)
    {
        $newsletters = Newsletter::orderBy('id', 'desc')->get();
        $promotions = Promotion::where('user_id', $id)->orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.newsletters', compact('newsletters', 'promotions', 'chats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuts = Statut::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.newsletters.create', compact('statuts', 'chats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $mail = Promotion::create([
                "sujet" => $request->sujet,
                "message" => $request->message,
                "statut_id" => 3,
                "user_id" => Auth::user()->id,
            ]);

            $contenu = [
                'title' => $request->sujet,
                'body' => $request->message,
            ];

            $emails = Newsletter::where('statut_id', '3')->get();

            foreach ($emails as $key => $email) {
                \Mail::to($email->email)->send(new \App\Mail\NewsletterMail($contenu));
            }

            Historique::create([
                'action' => $request->statut_id == '3' ? 'Envoie d\'un e-mail' : 'Enregistrement d\'un e-mail',
                'type' => '6',
                'destination_id' => $mail->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('newsletters.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $state)
    {
        try{
            Newsletter::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'une adresse e-mail';
            } else if($state == 2) {
                $action = 'Réactivation d\'une adresse e-mail';
            }else {
                $action = 'Activation d\'une adresse e-mail';
            }

            Historique::create([
                'action' => $action,
                'type' => '8',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('newsletters.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }

    public function delete($id)
    {
        try{
            Newsletter::where('id', $id)->update([
                'statut_id' => 2,
                'deleted_at' => now(),
                'id_deleted_at' => Auth::user()->id,
                'id_updated_at' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Suppression d\'un message e-mail',
                'type' => '8',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('newsletters.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }
}
