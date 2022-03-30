<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Statut;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::orderBy('quantite', 'asc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.bids', compact('bids', 'chats'));
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

        return view('admin.layouts.partials.body.bids.create', compact('statuts', 'chats'));
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
            $bid = Bid::create([
                'quantite' => $request->quantite,
                'valeur' => $request->valeur,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Enregistrement d\'un taux de conversion',
                'type' => '6',
                'destination_id' => $bid->id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('bids.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bid = Bid::find($id);
        $statuts = Statut::orderBy('id', 'desc')->get();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();

        return view('admin.layouts.partials.body.bids.edit', compact('bid', 'statuts', 'chats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        try{
            $bid = Bid::where('id', $request->bid_id)->update([
                'quantite' => $request->quantite,
                'valeur' => $request->valeur,
                'statut_id' => $request->statut_id,
                'user_id' => Auth::user()->id,
            ]);

            Historique::create([
                'action' => 'Modification d\'un taux de conversion',
                'type' => '6',
                'destination_id' => $request->bid_id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('bids.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $state)
    {
        try{
            Bid::where('id', $id)->update([
                'statut_id' => $state == '3' ? 2 : 3,
                'deleted_at' => $state == '3' ? now() : NULL,
                'id_deleted_at' => $state == '3' ? Auth::user()->id : NULL,
                'id_updated_at' => Auth::user()->id,
            ]);

            if ($state == 3) {
                $action = 'Suppression d\'un taux de conversion';
            } else if($state == 2) {
                $action = 'Réactivation d\'un taux de conversion';
            }else {
                $action = 'Activation d\'un taux de conversion';
            }

            Historique::create([
                'action' => $action,
                'type' => '6',
                'destination_id' => $id,
                'statut_id' => '3',
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('bids.index');
        } catch(\Exception $e){
            return back()->with('');
        }
    }
}
