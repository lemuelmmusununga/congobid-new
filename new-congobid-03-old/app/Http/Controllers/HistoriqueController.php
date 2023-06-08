<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use App\Models\Chat;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Paquet;
use App\Models\Gagnant;
use App\Models\Article;
use App\Models\Bid;
use App\Models\Faq;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historiques = Historique::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        $users = User::all();
        $categories = Categorie::all();
        $paquets = Paquet::all();
        $bids = Bid::all();
        $articles = Article::all();
        $gagnants = Gagnant::all();
        $newsletters = Newsletter::all();
        $faqs = Faq::all();

        return view('admin.historiques', compact('historiques', 'chats', 'users', 'categories', 'paquets', 'bids', 'articles', 'gagnants', 'newsletters', 'faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historique  $historique
     * @return \Illuminate\Http\Response
     */
    public function show(Historique $historique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historique  $historique
     * @return \Illuminate\Http\Response
     */
    public function edit(Historique $historique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historique  $historique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historique $historique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historique  $historique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historique $historique)
    {
        //
    }
}
