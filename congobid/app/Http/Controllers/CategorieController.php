<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Statut;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::orderBy('libelle', 'asc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.categories', compact('categories', 'chats'));
    }

    public function indexfilter($id)
    {
        $categories = Categorie::where('user_id', $id)->orderBy('libelle', 'asc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.categories', compact('categories', 'chats'));
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

        return view('admin.layouts.partials.body.categories.create', compact('chats', 'statuts'));
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

            // dd($request->libelle);
            $paquet = Categorie::create([
                'libelle' => $request->libelle,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Création d\'une sous-catégorie',
                'type' => '4',
                'destination_id' => $paquet->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('categories.index');
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
        $categorie = Categorie::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.categories.edit', compact('categorie', 'chats', 'statuts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            // dd($request->categorie_id);
            $categorie = Categorie::where('id', $request->categorie_id)->update([
                'libelle' => $request->libelle,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Modification d\'une sous-catégorie',
                'type' => '4',
                'destination_id' => $request->categorie_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('categories.index');
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
            Categorie::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'une sous-catégorie';
            } else if($state == 2) {
                $action = 'Réactivation d\'une sous-catégorie';
            }else {
                $action = 'Activation d\'une sous-catégorie';
            }

            Historique::create([
                'action' => $action,
                'type' => '4',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('categories.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }
}
