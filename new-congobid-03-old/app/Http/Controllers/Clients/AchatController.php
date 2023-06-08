<?php

namespace App\Http\Controllers\Clients;
use App\Models\Bid;
use App\Models\Paquet;
use App\Http\Controllers\Controller;
use App\Models\Bideur;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
class AchatController extends Controller
{
    //
    public function index(){
        $publics = Notification::where('public',1)->get();
        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }else{
            $notifications = '';
        }
        $paquets = Paquet::where('statut_id', '3')->get();
        $bids = Bid::where('statut_id', '3')->get();
        $page = 2;

        return view('pages.achat-bid',compact('bids', 'paquets', 'page'));
    }
    public function achatBidEnchere($enchere_id,$enchere_titre){
        $publics = Notification::where('public',1)->get();
        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }else{
            $notifications = '';
        }
        $paquets = Paquet::where('statut_id', '3')->get();
        $bids = Bid::where('statut_id', '3')->get();
        $page = 2;
        $id_enchere = $enchere_id;
        $name_enchere = $enchere_titre;
        return view('pages.achat-bid-enchere',compact('bids', 'paquets', 'page','id_enchere','name_enchere'));
    }
    public function achatBid($id,$valeur){
        $bideur = Bideur::where('user_id',Auth::user()->id)->first();
        $bideur->update([
            'balance'=>Auth::user()->bideurs->first()->balance + $valeur,
        ]);
        return redirect()->back()->with('success','Achat effectué avec success');


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

        return view('pages.achat-bid',compact('bids', 'paquets', 'page'))->with('success','Achat éffectué avec success !');
    }
}
