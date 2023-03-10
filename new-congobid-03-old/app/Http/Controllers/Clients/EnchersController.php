<?php

namespace App\Http\Controllers\Clients;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Paquet;
use App\Http\Controllers\Controller;
use App\Models\Bideur;
use App\Models\Enchere;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class EnchersController extends Controller
{
    //

    public function index(){
        return view('pages.encheres');
    }
    public function future(){
        return view('pages.encheres-future');
    }

    public function gagne(){
        return view('pages.encheres-gagne');
    }
    public function ferme(){
        $encheres = Enchere::orderby('id','DESC')->get();
        return view('pages.encheres-ferme',compact(
           'encheres'
        ));
    }
    public function sendBid(Request $request){
        $bid= $request->get('numero');
        $numero = $request->get('bid');
        $user  = Bideur::where('user_id',Auth::user()->id)->first();
        $verify_num = User::where('telephone',$numero)->first();
        if ($user->balance > $bid ) {
            if (Auth::user()->telephone == $numero) {
                return back()->with('success','Envoie Effectué avec succes chez vous meme ! ');
            }
            if ($verify_num) {
                $sendBid  = User::where('telephone',$numero)->first();
                $takuser = Bideur::where('user_id',$sendBid->id)->first();

                Auth::user()->bideurs->first()->update([
                    'balance'=> Auth::user()->bideurs->first()->balance - $bid
                ]);

                $takuser->update([
                    'balance'=>$takuser->balance + $bid,
                ]);
                Notification::create([
                    'message'=>Auth::user()->username.' vous a envoyé '.$bid .' bids',
                    'user_id'=>Auth::user()->id,
                    'notification_id'=>$sendBid->id
                ]);
                return back()->with('success','Envoie Effectué avec succes chez @'.$sendBid->username);
            } else {

                return back()->with('danger','Veillez bien verifier le numero ! ');

            }

        }else{
            return back()->with('danger','Votre compte est insuffusant pour effectuer cette action! ');
        }
    }
}
