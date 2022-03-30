<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gagnant;
use App\Models\Chat;
use App\Models\Enchere;
use App\Models\Historique;
use App\Models\PivotBideurEnchere;
use App\Models\Statut;
use Illuminate\Http\Request;
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
        $encheres = PivotBideurEnchere::all();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.gagnants.create', compact('chats', 'encheres', 'statuts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->user_id);
        // try{
            $gagnant = Gagnant::create([
                'lien' => $request->enchere_id,
                'enchere_id' => $request->enchere_id,
                'statut_id' => $request->statut_id,
                'user_id' => $request->user_id,
                'administrateur_id' => Auth::user()->id,
            ]);

            $request->file('videos')->move(public_path('videos/gagnants/'), $request->id. '.mp4');

            Historique::create([
                'action' => 'Enregistrement d\'une vidéo du gagnant',
                'type' => '12',
                'destination_id' => $gagnant->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('gagnants.index');
        // } catch(\Exception $e){
        //     return back()->with('');
        // }
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
        $myenchere = Gagnant::where('id', $id)->first();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $encheres = PivotBideurEnchere::all();
        $statuts = Statut::orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.gagnants.edit', compact('chats', 'encheres', 'myenchere', 'statuts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // try{

            if ($request->videos != null) {
                Gagnant::where('id', $request->gagnant_id)->update([
                    'titre' => $request->titre,
                    'description' => $request->description,
                    'lien' => $request->gagnant_id,
                    'statut_id' => $request->statut_id,
                    'user_id' => Auth::user()->id,
                ]);
                $request->file('videos')->move(public_path('videos/gagnants/'), $request->id. '.mp4');
            } else {
                Gagnant::where('id', $request->gagnant_id)->update([
                    'titre' => $request->titre,
                    'description' => $request->description,
                    'statut_id' => $request->statut_id,
                    'user_id' => Auth::user()->id,
                ]);
            }

            Historique::create([
                'action' => 'Modificaion d\'une vidéo du gagnant',
                'type' => '12',
                'destination_id' => $request->gagnant_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('gagnants.index');
        // } catch(\Exception $e){
        //     return back()->with('');
        // }
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
            Gagnant::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'une nstruction';
            } else if($state == 2) {
                $action = 'Réactivation d\'une nstruction';
            }else {
                $action = 'Activation d\'une nstruction';
            }

            Historique::create([
                'action' => $action,
                'type' => '12',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('gagnants.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }
}
