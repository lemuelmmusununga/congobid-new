<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Enchere;
use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Historique;
use App\Models\Statut;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EnchereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encheres = Enchere::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        return view('admin.encheres', compact('encheres', 'chats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.encheres.create', compact('chats'));
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
            //code...
            $article = Article::find($request->article_id);
            Enchere::create([
                'article_id' => $request->article_id,
                'date_debut' => $request->debut_enchere,
                'heure_debut' => Str::substr($request->debut_enchere, 11, 5),
                'favori_salon' => 0,
                'favoris' => 0,
                'state' => 0,
                'statut_id' => $request->statut_id,
                'paquet_id' => $article->paquet_id,
                'participant' => $request->participant,
            ]);
            $article->update([
                'cout_livraison' => $request->cout_livraison,
            ]);
            return redirect()->route('encheres.index')->with('success', 'Enchere ajoutee');
        } catch (\Throwable $th) {
            dd($th);
            return back()->with('error', 'Erreur pendant l\'ajout de l\'enchere');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enchere  $enchere
     * @return \Illuminate\Http\Response
     */
    public function show(Enchere $enchere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enchere  $enchere
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enchere = Enchere::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        return view('admin.layouts.partials.body.encheres.edit', compact('enchere', 'chats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enchere  $enchere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            //code...
            $article = Article::find($request->article_id);
            $enchere = Enchere::find($request->enchere_id);
            $enchere->update([
                'article_id' => $request->article_id,
                'date_debut' => $request->debut_enchere,
                'heure_debut' => Str::substr($request->debut_enchere, 11, 5),
                'favori_salon' => 0,
                'favoris' => 0,
                'state' => 0,
                'statut_id' => $request->statut_id,
                'paquet_id' => $article->paquet_id,
                'participant' => $request->participant,
            ]);
            $article->update([
                'cout_livraison' => $request->cout_livraison,
            ]);
            return redirect()->route('encheres.index')->with('success', 'Enchere modifiee');
        } catch (\Throwable $th) {
            dd($th);
            return back()->with('error', 'Erreur pendant l\'ajout de l\'enchere');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enchere  $enchere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $state)
    {
        try {
            Enchere::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'une enchere';
            } else if ($state == 2) {
                $action = 'Réactivation d\'une enchere';
            } else {
                $action = 'Activation d\'une enchere';
            }

            Historique::create([
                'action' => $action,
                'type' => '4',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('encheres.index');
        } catch (\Exception $e) {
            return back()->with('');
        }
    }
}
