<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\Pays;
use App\Models\Role;
use App\Models\Statut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        $roles = Role::orderBy('id', 'desc')->get();
        $allpays = Pays::where('statut_id', '3')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.utilisateurs.create', compact('roles', 'allpays', 'statuts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telephone = $request->pays_index . $request->telephone;
        dd($request->agent);
        if ($request->agent == 1){
            $request->file('avatar')->move(public_path('admins/img/profil'), $telephone . '.webp');
        } else {
            $request->file('avatar')->move(public_path('images/users/'), $telephone . '.webp');
        }

        $user = User::create([
            'role_id' => 4,
            'nom' => $request->nom,
            'username' => $request->username,
            'telephone' => $telephone,
            'sexe' => $request->sexe,
            'email' => $request->email,
            'avatar' => $telephone . '.webp',
            'date_naissance' => $request->date_naissance,
            'password' => Hash::make($telephone),
            'statut_id' => $request->statut_id,
        ]);

        Administrateur::create([
            'identification_fiscale' => $request->identification_fiscale,
            'poste' => $request->poste,
            'statut_id' => $request->statut_id,
            'user_id' => $user->id,
            'admin_id' => Auth::user()->id,
        ]);

        return redirect()->route('utilisateurs.index');
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
        $agent = Administrateur::find($id);
        $roles = Role::orderBy('id', 'desc')->get();
        $allpays = Pays::where('statut_id', '3')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.utilisateurs.edit', compact('agent', 'roles', 'allpays', 'statuts'));
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
