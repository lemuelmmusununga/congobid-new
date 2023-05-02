<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Enchere;
use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Statut;

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
        return view('admin.encheres', compact('encheres','chats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuts = Statut::orderBy('id', 'desc')->get();
        $articles = Article::orderBy('titre','asc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.encheres.create', compact('statuts', 'chats','articles'));
    
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
    public function edit(Enchere $enchere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enchere  $enchere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enchere $enchere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enchere  $enchere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enchere $enchere)
    {
        //
    }
}
