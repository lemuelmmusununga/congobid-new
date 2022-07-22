<?php

namespace App\Http\Controllers\Clients;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Paquet;
use App\Http\Controllers\Controller;
use App\Models\Bideur;
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
    public function sendBid(Request $request){
        $bid= $request->get('numero');
        $numero = $request->get('bid');
        $user  = Bideur::where('user_id',Auth::user()->id)->first();
        $verify_num = User::where('telephone',$numero)->first();
        if ($user->balance > $bid) {
            if ($verify_num) {
                $sendBid  = User::where('telephone',$numero)->first();
                $takuser = Bideur::where('user_id',$sendBid->id)->first();
                $takuser->update([
                    'balance'=>$takuser->balance + $bid,
                ]);
                return back()->with('success','Envoie Effectué avec succes ! ');
            } else {

                return back()->with('danger','Veillez bien verifier le numero ! ');

            }

        }else{
            return back()->with('danger','Votre compte est insuffusant pour effectuer cette action! ');
        }
    }
}
