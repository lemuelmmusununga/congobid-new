<?php

namespace App\Http\Controllers;

use App\Models\Bideur;
use App\Models\BidStatut;
use App\Models\Chat;
use App\Models\Envoie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnvoieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $envoies = Envoie::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();


        return view('admin.envoie', compact('chats', 'envoies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $users = User::where('role_id', '>', '3')->orderBy('username', 'asc')->get();
        $bidstatuts = BidStatut::all();

        return view('admin.layouts.partials.body.envoie.create', compact('chats', 'users', 'bidstatuts'));

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
            //code...
            if ($request->type == "user") {
                # code...
                Envoie::create([
                    'number' => $request->number,
                    'bid_statut_id' => $request->bid_statut_id,
                    'admin_id' => Auth::user()->id,
                    'user_id' => $request->user_id
                ]);
            } else {
                # code...
                switch ($request->destination) {
                    case '1':
                        $users = User::where('role_id', '>', '3')->get();
                        foreach ($users as $user) {
                            $bideur = Bideur::where('user_id', $user->id)->first();
                            if ($bideur != null) {
                                # code...
                                Envoie::create([
                                    'number' => $request->number,
                                    'bid_statut_id' => $request->bid_statut_id,
                                    'admin_id' => Auth::user()->id,
                                    'user_id' => $user->id
                                ]);
                            }
                        }
                        break;
                    case '2':
                        $users = User::where('last_seen', '>=', now()->startOfDay())->get();
                        foreach ($users as $user) {
                            $bideur = Bideur::where('user_id', $user->id)->first();
                            if ($bideur != null) {
                                # code...
                                Envoie::create([
                                    'number' => $request->number,
                                    'bid_statut_id' => $request->bid_statut_id,
                                    'admin_id' => Auth::user()->id,
                                    'user_id' => $user->id
                                ]);
                            }
                        }
                        break;
                    case '3':
                        $users = User::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->get();
                        foreach ($users as $user) {
                            $bideur = Bideur::where('user_id', $user->id)->first();
                            if ($bideur != null) {
                                # code...
                                Envoie::create([
                                    'number' => $request->number,
                                    'bid_statut_id' => $request->bid_statut_id,
                                    'admin_id' => Auth::user()->id,
                                    'user_id' => $user->id
                                ]);
                            }
                        }
                        break;
                    case '4':
                        $users = User::where('last_seen', '<', now()->subMonth())->get();
                        foreach ($users as $user) {
                            $bideur = Bideur::where('user_id', $user->id)->first();
                            if ($bideur != null) {
                                # code...
                                Envoie::create([
                                    'number' => $request->number,
                                    'bid_statut_id' => $request->bid_statut_id,
                                    'admin_id' => Auth::user()->id,
                                    'user_id' => $user->id
                                ]);
                            }
                        }
                        break;
                    default:
                        return
                            back()->with('Erreur', 'Aucun Utilisateur trouvé');
                        # code...
                        break;
                }
            }


            return redirect()->route('envoie.index')->with('success', 'Bids envoyé');

        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Une erreur est survenue');
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
        $envoie = Envoie::find($id);
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $users = User::where('role_id', '>', '3')->orderBy('username', 'asc')->get();
        $bidstatuts = BidStatut::all();

        return view('admin.layouts.partials.body.envoie.edit', compact('chats', 'users', 'bidstatuts', 'envoie'));

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
        try {
            //code...
            $envoie = Envoie::find($request->envoie_id);
            $envoie->update([
                'number' => $request->number,
                'bid_statut_id' => $request->bid_statut_id,
                'admin_id' => Auth::user()->id,
                'user_id' => $request->user_id
            ]);

            return redirect()->route('envoie.index')->with('success', 'Bids envoyé');

        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return back()->with('error', 'Une erreur est survenue');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $envoie = Envoie::find($id);

        if (Auth::user()->id == $envoie->admin_id || Auth::user()->role_id == 1) {
            # code...
            $envoie->delete();
            return back()->with('success', 'Suppression réussie');
        }
        return back()->with('error', 'Operation non permise');

    }
}