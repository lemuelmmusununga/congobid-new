<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Historique;
use App\Models\Politique;
use App\Models\Statut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PolitiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $politiques = Politique::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.politiques', compact('politiques', 'chats'));
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

        return view('admin.layouts.partials.body.politiques.create', compact('chats', 'statuts'));
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
            $politique = Politique::create([
                'titre' => $request->titre,
                'content' => $request->content,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Création d\'une condition d\'utilisation',
                'type' => '11',
                'destination_id' => $politique->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('politiques.index');
        } catch (\Exception $e) {
            return back()->with('');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Politique  $politique
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $politique = Politique::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.politiques.show', compact('politique', 'chats', 'statuts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Politique  $politique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $politique = Politique::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.politiques.edit', compact('politique', 'chats', 'statuts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Politique  $politique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Politique $politique)
    {
        try {
            // dd($request->libelle);
            Politique::where('id', $request->politique_id)->update([
                'titre' => $request->titre,
                'content' => $request->content,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Modification d\'une condition d\'utilisation',
                'type' => '11',
                'destination_id' => $request->politique_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('politiques.index');
        } catch (\Throwable $e) {
            return back()->with('');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Politique  $politique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $state)
    {
        // try{
        Politique::where('id', $id)->update([
            'statut_id' => $state == '3' ? 2 : 3,
            'deleted_at' => $state == '3' ? now() : NULL,
            'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
            'id_updated_at' => Auth::user()->id,
        ]);

        if ($state == 3) {
            $action = 'Suppression d\'une condition d\'utilisation';
        } else if ($state == 2) {
            $action = 'Réactivation d\'une condition d\'utilisation';
        } else {
            $action = 'Activation d\'une condition d\'utilisation';
        }

        Historique::create([
            'action' => $action,
            'type' => '11',
            'destination_id' => $id,
            'statut_id' => '3',
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('politiques.index');
        // } catch(\Exception $e){
        //     return back()->with('');
        // }
    }
}