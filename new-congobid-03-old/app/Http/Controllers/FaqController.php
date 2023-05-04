<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Chat;
use App\Models\Historique;
use App\Models\Statut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.faqs', compact('faqs', 'chats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.faqs.create', compact('chats', 'statuts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // dd($request->libelle);
            $faq = Faq::create([
                'questions' => $request->questions,
                'reponses' => $request->reponses,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Création d\'une question et réponse',
                'type' => '10',
                'destination_id' => $faq->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('faqs.index');
        } catch (\Exception $e) {
            dd($e);
            return back()->with('');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = Faq::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.faqs.show', compact('faq', 'chats', 'statuts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.faqs.edit', compact('faq', 'chats', 'statuts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        try {
            // dd($request);
            Faq::where('id', $request->faq_id)->update([
                'questions' => $request->questions,
                'reponses' => $request->reponses,
                'statut_id' => $request->statut_id,
                // 'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Modification d\'une question et réponse',
                'type' => '10',
                'destination_id' => $request->faq_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('faqs.index');
        } catch (\Exception $e) {
            dd($e);
            return back()->with('');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $state)
    {
        try {
            Faq::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'une question et réponse';
            } else if ($state == 2) {
                $action = 'Réactivation d\'une question et réponse';
            } else {
                $action = 'Activation d\'une question et réponse';
            }

            Historique::create([
                'action' => $action,
                'type' => '10',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('faqs.index');
        } catch (\Exception $e) {
            return back()->with('');
        }
    }
}
