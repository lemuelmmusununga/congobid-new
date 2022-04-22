<?php

namespace App\Http\Controllers\Clients;
use App\Models\Bid;
use App\Models\Paquet;
use App\Http\Controllers\Controller;
use App\Models\Bideur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AchatController extends Controller
{
    //
    public function index(){

        $paquets = Paquet::where('statut_id', '3')->get();
        $bids = Bid::where('statut_id', '3')->get();
        $page = 2;
        return view('pages.achat-bid',compact('bids', 'paquets', 'page'));
    }
    public function success($id){
        $achat = Bid::where('id',$id)->first();
        // ajouter des bids chez un user
        $addbids = Bideur::where('user_id',Auth::user()->id)->first();
        $somme = $achat->quantite + $addbids->balance;
        $addbids->update([
            'balance'=>$somme,
        ]);
        $paquets = Paquet::where('statut_id', '3')->get();
        $bids = Bid::where('statut_id', '3')->get();
        $page = 2;
        $success = "Achat effectué avec succes";
        return view('pages.achat-bid',compact('bids', 'paquets', 'page','success'));
    }
}
