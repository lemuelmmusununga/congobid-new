<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\Pays;
use App\Models\Role;
use App\Models\Statut;
use App\Models\Chat;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Gagnant;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Administrateur::where('user_id', '!=', Auth::user()->id)->orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();
        $categories = Categorie::all();
        $gagnants = Gagnant::all();
        return view('admin.agents', compact('agents', 'chats', 'statuts', 'categories', 'gagnants'));
    }

    public function indexfilter($id)
    {
        $agents = Administrateur::where('administrateur_id', $id)->orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.agents', compact('agents', 'chats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('id', '<', 5)->where('id', '>', 1)->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.agents.create', compact('roles', 'chats', 'statuts'));
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
                'role_id' => $request->role_id,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'username' => $request->username,
                'telephone' => $request->telephone,
                'sexe' => $request->sexe,
                'email' => $request->email,
                'date_naissance' => $request->date_naissance,
                'password' => Hash::make($request->password),
                'statut_id' => '3',
            ]);
            if ($request->hasFile('avatar')) {
                # code...
                $request->file('avatar')->move(public_path('images/users/'), $user->id . '.webp');
                $user->update([
                    'avatar' => $user->id . '.webp'
                ]);
            }
            // dd($last->id,$request);
            Administrateur::create([
                'identification_fiscale' => $request->identification_fiscale,
                'poste' => $request->poste,
                'interne' => $request->interne,
                'statut_id' => '3',
                'user_id' => $user->id,
                'administrateur_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Création du compte agent',
                'type' => '1',
                'destination_id' => $user->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('agents.index')->with('success', 'Agent créé avec succès');
        } catch (\Exception $e) {
            return back()->with('Erreur survenue lors de la création du compte d\'agent.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $agent = Administrateur::find($id);
        $users = User::all();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.agents.show', compact('agent', 'users', 'chats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Administrateur::find($id);
        $roles = Role::where('id', '<', 5)->where('id', '>', 1)->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.agents.edit', compact('roles', 'agent', 'chats', 'statuts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrateur $administrateur)
    {
        // dd($request->user_id);
        try {
            if ($request->avatar != null) {
                $request->file('avatar')->move(public_path('images/users/'), $request->user_id . '.webp', true);
            }
            User::where('id', $request->user_id)->update([
                'role_id' => $request->role_id,
                'nom' => $request->nom,
                'username' => $request->username,
                'telephone' => $request->telephone,
                'sexe' => $request->sexe,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'date_naissance' => $request->date_naissance,
                'statut_id' => $request->statut_id,
                'avatar' => $request->user->id . '.webp'
            ]);


            Administrateur::where('user_id', $request->user_id)->update([
                'identification_fiscale' => $request->identification_fiscale,
                'poste' => $request->poste,
                'interne' => $request->interne,
                'statut_id' => $request->statut_id,
                'administrateur_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Modification du compte agent',
                'type' => '1',
                'destination_id' => $request->user_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('agents.index');
        } catch (\Exception $e) {
            return back()->with('');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrateur  $administrateur
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

            Administrateur::where('user_id', $user_id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression du compte agent';
            } else if ($state == 2) {
                $action = 'Réactivation du compte agent';
            } else {
                $action = 'Activation du compte agent';
            }

            Historique::create([
                'action' => $action,
                'type' => '1',
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
