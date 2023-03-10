<?php

namespace App\Http\Controllers;

use App\Models\Sanction;
use App\Models\Statut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;

class SanctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanctions = Sanction::orderBy('duree', 'asc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.sanctions', compact('sanctions', 'chats'));
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

        return view('admin.layouts.partials.body.sanctions.create', compact('statuts', 'chats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sanction::create([
            'libelle' => $request->libelle,
            'duree' => $request->duree,
            'duree' => $request->duree,
            'statut_id' => $request->statut_id,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('sanctions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sanction  $sanction
     * @return \Illuminate\Http\Response
     */
    public function show(Sanction $sanction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sanction  $sanction
     * @return \Illuminate\Http\Response
     */
    public function edit(Sanction $sanction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sanction  $sanction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sanction $sanction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sanction  $sanction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanction $sanction)
    {
        //
    }
}
