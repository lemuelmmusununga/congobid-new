<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Bideur;
use App\Models\Paquet;
use App\Models\Enchere;
use App\Models\PivotClientsSalon;
use App\Models\PivotBideurEnchere;
use Illuminate\Support\Facades\Auth;


class DetailEnchereController extends Controller
{
    public function index($id){
        $article = Article::where('id', $id)->where('statut_id', '3')->first();
        $paquets = Paquet::where('statut_id', '3')->get();

        // couper les nombres de bids
        if (Auth::user()) {
            // verification du balance
            if (Auth::user()->bideurs->first()->balance >= $article->paquet->nombre_enchere) {
                Bideur::where('id', Auth::user()->id)->update([
                    'balance' => Auth::user()->bideurs->first()->balance - $article->paquet->nombre_enchere,
                ]);

                // PivotBideurEnchere::create([
                //     'valeur' => '0',
                //     'statut_id' => '3',
                //     'user_id' => Auth::user()->id,
                //     'enchere_id' => $article->enchere->id,
                // ]);
                return view('pages.detail-enchere', compact('article', 'paquets'));
            }else{
                return back();
            }
        }else{
            return view('pages.detail-enchere', compact('article', 'paquets'));
        }

        // dd($user,$article->enchere->id,$article->paquet->nombre_enchere,$reste);
        // $page = 2;

        // if (Auth::user()->bideurs->first()->paquet_id != $article->paquet_id) {
        //     if (Auth::user()->bideurs->first()->balance - $article->paquet->prix >= 0) {


        //         $balanceBideur=Bideur::where('id', Auth::user()->bideurs->first()->id)->first();
        //         $balanceBideur->update([
        //             'balance' => Auth::user()->bideurs->first()->balance - $article->paquet->prix,
        //             'paquet_id' => $article->paquet_id,
        //         ]);
        //         $balanceBideur->create([
        //             'bonus' => 0,
        //             'roi' => 0,
        //             'foudre' => 0,
        //             'user_id' => $user->id,
        //             'statut_id' => 3,
        //             'paquet_id' =>1,
        //             'balance' => Auth::user()->bideurs->first()->balance,
        //             'paquet_id' => $article->paquet_id,

        //         ]);

        //         // dd(Auth::user()->pivotbideurenchere->where('article_id', $id)->first() == null );
        //         // verification du user dans la table pivotbideurencher



        //         // dd(Auth::user()->bideurs->first()->balance, Auth::user()->bideurs->first()->balance - $article->paquet->prix, $article->paquet->prix);
        //     } else {
        //         return redirect()->route('clients.achat.bid')->with("Vous n'avez pas suffisament de bid");
        //     }
        // } else {

            // if (Auth::user()->pivotbideurenchere->where('article_id', $id)->first() == null) {
            //     PivotBideurEnchere::create([
            //         'valeur' => '0',
            //         'statut_id' => '3',
            //         'user_id' => Auth::user()->id,
            //         'enchere_id' => $article->enchere->id,
            //     ]);
            // }

        // }



        // // comparer l'id de l'utilisateur connecter avec la table bideur
        // $bideurs =Bideur::where('user_id',Auth::user()->id)->first();
        // $paquets = Paquet::where('statut_id', '3')->get();

        // // recuperation de l'id du bideur dans la table encheur
        // $bideur_id = Enchere::where('bideur_id',$bideurs->id)->first();
        // if ($bideur_id == null) {
        //     // creation du bideur dans la table enchere
        //     $user = Enchere::create([
        //         'click'=> 0,
        //         'statut_id'=>3,
        //         'bideur_id'=>$bideurs->id,
        //         'article_id'=>$id,
        //         'paquet_id'=>1
        //     ]);
        // }else{
        //     // recuperation de l'id du bideur dans la table encheur
        //     $bideur_article = Enchere::where('article_id',$bideur_id->article_id)->first();
        //     // comparaison de la l'article get et bd
        //     if ($bideur_article->article_id == $id) {

        //         $article = Article::find($id);
        //         $encheres = Enchere::where('bideur_id',$bideurs->id)->get();
        //         return view('pages.detail-enchere',compact('page', 'article','encheres', 'paquets'));
        //     }else{
        //         // comparaison de la l'article get n'existe pas
        //         $user = Enchere::create([
        //             'click'=> 0,
        //             'statut_id'=>3,
        //             'bideur_id'=>$bideurs->id,
        //             'article_id'=>$id,
        //             'paquet_id'=>1
        //         ]);
        //         $encheres = Enchere::where('bideur_id',$bideurs->id)->get();
        //         $article = Article::find($id);
        //         return view('pages.detail-enchere',compact('page', 'article','encheres', 'paquets'));
        //     }
        // }
    }

}
