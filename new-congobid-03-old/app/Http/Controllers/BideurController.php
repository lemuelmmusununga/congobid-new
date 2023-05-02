<?php

namespace App\Http\Controllers;

use App\Models\Bideur;
use App\Models\Role;
use App\Models\Statut;
use App\Models\User;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Chat;
use App\Models\Demande;

class BideurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bideurs = Bideur::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.bideurs', compact('bideurs', 'chats'));
    }

    public function indexfilter($id)
    {
        $bideurs = Bideur::where('admin_id', $id)->orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.bideurs', compact('bideurs', 'chats'));
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

        return view('admin.layouts.partials.body.bideurs.create', compact('chats', 'statuts'));
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

            $user = User::create([
                'role_id' => 5,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'username' => $request->username,
                'telephone' => $request->telephone,
                'sexe' => $request->sexe,
                'email' => $request->email,
                'date_naissance' => $request->date_naissance,
                'password' => Hash::make($request->password),
                'statut_id' => $request->statut_id,
            ]);
            $user->update([
                'avatar' => $user->id . '.webp'
            ]);
            if ($request->hasFile('avatar')) {
                # code...
                $request->file('avatar')->move(public_path('images/users/'), $user->id . '.webp');
            }

            Bideur::create([
                'balance' => 40,
                'bonus' => 0,
                'roi' => 0,
                'foudre' => 0,
                'paquet_id' => 1,
                'user_id' => $user->id,
                'statut_id' => $request->statut_id,
                'admin_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Création du compte bideur',
                'type' => '2',
                'destination_id' => $user->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('bideurs.index');
        } catch (\Exception $e) {
            return back()->with('Erreur survenue lors de la création du compte d\'bideur.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bideur  $bideur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bideur = Bideur::find($id);
        $users = User::all();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.bideurs.show', compact('bideur', 'users', 'chats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bideur  $bideur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bideur = Bideur::find($id);
        $statuts = Statut::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.bideurs.edit', compact('bideur', 'chats', 'statuts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bideur  $bideur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bideur $bideur)
    {
        try {
            if ($request->hasFile('avatar')) {
                $request->file('avatar')->move(public_path('images/users/'), $request->user_id . '.webp', true);
            }
            $user = User::where('id', $request->user_id)->update([
                'role_id' => 5,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'username' => $request->username,
                'telephone' => $request->telephone,
                'sexe' => $request->sexe,
                'email' => $request->email,
                'date_naissance' => $request->date_naissance,
                'password' => Hash::make($request->password),
                'statut_id' => $request->statut_id,
                'avatar' => $request->user_id . '.webp'
            ]);

            Bideur::where('user_id', $request->user_id)->update([
                'balance' => 40,
                'bonus' => 0,
                'roi' => 0,
                'foudre' => 0,
                'paquet_id' => 1,
                'user_id' => $request->user_id,
                'statut_id' => $request->statut_id,
                'admin_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Modification du compte bideur',
                'type' => '2',
                'destination_id' => $request->user_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('bideurs.index');
        } catch (\Exception $e) {
            return back()->with('Erreur survenue lors de la création du compte d\'bideur.');
        }
    }
    public function demande()
    {
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $users = User::where('role_id', '>', '3')->orderBy('username', 'asc')->get();

        return view('admin.layouts.partials.body.demande.create', compact('chats', 'users'));
    }
    public function storeDemande(Request $request)
    {
        $demandes = Demande::where('telephone', $request->telephone)->first();
        if ($demandes) {
            $demandes->update([
                'admin' => Auth::user()->id,
                'name' => $request->user,
                'nombre' => $demandes->nombre + $request->nombre,
            ]);
        } else {
            Demande::create([
                'admin' => Auth::user()->id,
                'name' => $request->user_id,
                'telephone' => $request->telephone,
                'nombre' => $request->nombre,
                'payement' => $request->paie,
                'description' => $request->description,

            ]);
        }
        return redirect()->back()->with('success', 'Demande effectué avec success !');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bideur  $bideur
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id, $state)
    {
        try {
            $user = User::where('id', $user_id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            Bideur::where('user_id', $user_id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression du compte bideur';
            } else if ($state == 2) {
                $action = 'Réactivation du compte bideur';
            } else {
                $action = 'Activation du compte bideur';
            }

            Historique::create([
                'action' => $action,
                'type' => '2',
                'destination_id' => $user_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return back();
        } catch (\Exception $e) {
            return back()->with('');
        }
    }
}
