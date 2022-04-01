<?php

namespace App\Http\Controllers;

use App\Models\Paquet;
use App\Models\Statut;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;

class PaquetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquets = Paquet::orderBy('prix', 'asc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.paquets', compact('paquets', 'chats'));
    }

    public function indexfilter($id)
    {
        $paquets = Paquet::where('user_id', $id)->orderBy('prix', 'asc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.paquets', compact('paquets', 'chats'));
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

        return view('admin.layouts.partials.body.paquets.create', compact('statuts', 'chats'));
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
            $paquet = Paquet::create([
                'libelle' => $request->libelle,
                'nombre_enchere' => $request->nombre_enchere,
                'duree' => $request->duree,
                'prix' => $request->prix,
                'min' => $request->min,
                'max' => $request->max,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Création d\'une catégorie',
                'type' => '3',
                'destination_id' => $paquet->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('paquets.index');
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
        $paquet = Paquet::find($id);
        $statuts = Statut::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.paquets.edit', compact('paquet', 'statuts', 'chats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paquet $paquet)
    {
        try{
            $paquet = Paquet::where('id', $request->paquet_id)->update([
                'libelle' => $request->libelle,
                'nombre_enchere' => $request->nombre_enchere,
                'duree' => $request->duree,
                'prix' => $request->prix,
                'min' => $request->min,
                'max' => $request->max,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Modification d\'une catégorie',
                'type' => '3',
                'destination_id' => $request->paquet_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('paquets.index');
        } catch(\Exception $e){
            return back()->with('');
        }
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
            Paquet::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'une catégorie';
            } else if($state == 2) {
                $action = 'Réactivation d\'une catégorie';
            }else {
                $action = 'Activation d\'une catégorie';
            }

            Historique::create([
                'action' => $action,
                'type' => '3',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('paquets.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }
}
