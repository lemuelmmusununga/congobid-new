<?php

namespace App\Http\Controllers;

use App\Models\Gagnant;
use App\Models\Chat;
use App\Models\Statut;
use Illuminate\Http\Request;

class GagnantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gagnants = Gagnant::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.gagnants', compact('gagnants', 'chats'));
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

        return view('admin.layouts.partials.body.gagnants.create', compact('chats', 'statuts'));
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
     * @param  \App\Models\Gagnant  $gagnant
     * @return \Illuminate\Http\Response
     */
    public function show(Gagnant $gagnant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gagnant  $gagnant
     * @return \Illuminate\Http\Response
     */
    public function edit(Gagnant $gagnant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gagnant  $gagnant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gagnant $gagnant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gagnant  $gagnant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gagnant $gagnant)
    {
        //
    }
}
