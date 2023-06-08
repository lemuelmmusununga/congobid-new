<?php

namespace App\Http\Controllers\Clients;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Paquet;
use App\Http\Controllers\Controller;
use App\Models\Bideur;
use App\Models\Enchere;
use App\Models\Notification;
use App\Models\Option;
use App\Models\PivotBideurEnchere;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class EnchersController extends Controller
{
    //

    public function index(){
        return view('pages.encheres');
    }
    public function enchere(){
        return view('pages.encheres-globale');
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
    public function sendOption(Request $request){
        // dd($request);

        $bid= $request->get('user');
        $numero = $request->get('telephone');
        $user  = Bideur::where('user_id',Auth::user()->id)->first();
        $verify_num = User::where('telephone',$numero)->first();

            if (Auth::user()->telephone == $numero) {
                return back()->with('success','Envoie Effectué avec succes chez vous meme ! ');
            }
            if ($verify_num) {

                $sendBid  = User::where('telephone',$numero)->first();
                $takusers = Option::where('user_id',$verify_num->id)->get();
                // Auth::user()->options->first()->update([
                //     'balance'=> Auth::user()->bideurs->first()->balance - $bid
                // ]);
                foreach ($takusers as $key => $takuser) {
                    $first = $takuser->where('paquet_id',1)->where('user_id',$verify_num->id)->first();
                    $first->update([
                        'roi'=>$first->roi + $request->get('taperoiSimba'),
                        'foudre'=>$first->foudre + $request->get('tapeFoudreSimba'),
                        'click'=>$first->click + $request->get('tapeClickSimba'),
                        'bouclier'=>$first->bouclier + $request->get('tapeBouclierSimba'),
                    ]);
                    unset($request['taperoiSimba']);
                    unset($request['tapeFoudreSimba']);
                    unset($request['tapeClickSimba']);
                    unset($request['tapeBouclierSimba']);


                    $second = $takuser->where('paquet_id',2)->where('user_id',$verify_num->id)->first();
                    $second->update([
                        'roi'=>$second->roi + $request->get('taperoiBenda'),
                        'foudre'=>$second->foudre + $request->get('tapeFoudreBenda'),
                        'click'=>$second->click + $request->get('tapeClickBenda'),
                        'bouclier'=>$second->bouclier + $request->get('tapeBouclierBenda'),
                    ]);
                    unset($request['taperoiBenda']);
                    unset($request['tapeFoudreBenda']);
                    unset($request['tapeClickBenda']);
                    unset($request['tapeBouclierBenda']);
                    $tree = $takuser->where('paquet_id',3)->where('user_id',$verify_num->id)->first();
                    $tree->update([
                        'roi'=>$tree->roi + $request->get('taperoiTurbo'),
                        'foudre'=>$tree->foudre + $request->get('tapeFoudreTurbo'),
                        'click'=>$tree->click + $request->get('tapeClickTurbo'),
                        'bouclier'=>$tree->bouclier + $request->get('tapeBouclierTurbo'),
                    ]);
                    unset($request['taperoiTurbo']);
                    unset($request['tapeFoudreTurbo']);
                    unset($request['tapeClickTurbo']);
                    unset($request['tapeBouclierTurbo']);

                    // $four = $takuser->where('paquet_id',4)->where('user_id',$verify_num->id)->first();
                    // $four->update([
                    //     'roi'=>$takuser->roi + $request->get('taperoiBeton'),
                    //     'foudre'=>$takuser->foudre + $request->get('tapeFoudreBeton'),
                    //     'click'=>$takuser->click + $request->get('tapeClickBeton'),
                    //     'bouclier'=>$takuser->bouclier + $request->get('tapeBouclierBeton'),
                    // ]);
                    $five = $takuser->where('paquet_id',5)->where('user_id',$verify_num->id)->first();
                    $five->update([
                        'roi'=>$five->roi + $request->get('taperoiBulldozer'),
                        'foudre'=>$five->foudre + $request->get('tapeFoudreBulldozer'),
                        'click'=>$five->click + $request->get('tapeClickBulldozer'),
                        'bouclier'=>$five->bouclier + $request->get('tapeBouclierBulldozer'),
                    ]);
                    unset($request['taperoiBulldozer']);
                    unset($request['tapeFoudreBulldozer']);
                    unset($request['tapeClickBulldozer']);
                    unset($request['tapeBouclierBulldozer']);
                    $six = $takuser->where('paquet_id',6)->where('user_id',$verify_num->id)->first();
                    $six->update([
                        'roi'=>$six->roi + $request->get('taperoiSukisa'),
                        'foudre'=>$six->foudre + $request->get('tapeFoudreSukisa'),
                        'click'=>$six->click + $request->get('tapeClickSukisa'),
                        'bouclier'=>$six->bouclier + $request->get('tapeBouclierSukisa'),
                    ]);
                    unset($request['taperoiSukisa']);
                    unset($request['tapeFoudreSukisa']);
                    unset($request['tapeClickSukisa']);
                    unset($request['tapeBouclierSukisa']);
                }

                Notification::create([
                    'message'=>Auth::user()->username.' vous a envoyé de(s) option() ',
                    'user_id'=>Auth::user()->id,
                    'notification_id'=>$sendBid->id
                ]);
                return back()->with('success','Envoie Effectué avec succes chez @ '.$sendBid->username);
            } else {
                return back()->with('danger','Veillez bien verifier le numero ! ');
            }

    }
    public function trans(Request $request){
       return view('pages.transfertbid');
    }

    public function liste(){

        // $userFoudre  = PivotBideurEnchere::where('user_id',Auth::user()->id)->get()->sum('foudre');
        // $userRoi  = PivotBideurEnchere::where('user_id',Auth::user()->id)->get()->sum('roi');
        // $userClick  = PivotBideurEnchere::where('user_id',Auth::user()->id)->get()->sum('click_seconde');
        // $userBouclier  = PivotBideurEnchere::where('user_id',Auth::user()->id)->get()->sum('bouclier');
        // $update_bideur = Bideur::where('user_id',Auth::user()->id)->first()->update([
        //     'roi'=>$userRoi,
        //     'clicks'=>$userClick,
        //     'bouclier'=>$userBouclier,
        //     'foudre'=>$userFoudre
        // ]);
        $priceSimbas =Paquet::where('id',1)->get();
        $pricebendas = Paquet::where('id',2)->get();
        $pricesukisas = Paquet::where('id',6)->get();
        $pricebulldozers = Paquet::where('id',5)->get();
        $priceturbos = Paquet::where('id',3)->get();
        $pricebetons = Paquet::where('id',4)->get();
        return view('pages.options',compact('priceSimbas','pricebendas','pricebetons','priceturbos','pricebulldozers','pricesukisas',));

    }
}
