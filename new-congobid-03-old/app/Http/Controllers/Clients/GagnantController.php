<?php

namespace App\Http\Controllers\Clients;

use App\Models\Gagnant;
use App\Models\Paquet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class GagnantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publics = Notification::where('public',1)->get();
        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }else{
            $notifications = '';
        }
        $paquets = Paquet::where('statut_id', '3')->get();
        $gagnants = Gagnant::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $page = 2;
        $publics = Notification::where('public',1)->get();
        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }
        return view('pages.gagnants', compact('gagnants', 'publics', 'notifications', 'paquets', 'page'));
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
        return response()->json('true', 200);
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
    public function destroy($id)
    {
        //
    }
}
