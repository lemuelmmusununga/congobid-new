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
use App\Models\Sanction;


class DetailEnchereController extends Controller
{
    public function index($id){
        $article = Article::where('id', $id)->where('statut_id', '3')->first();
        $paquets = Paquet::where('statut_id', '3')->get();

        // couper les nombres de bids
        if (Auth::user()) {
        $pivots = PivotBideurEnchere::where('user_id', Auth::user()->id)->where('enchere_id', $article->enchere->id)->first();

            // verification du balance
            if (Auth::user()->bideurs->first()->balance >= $article->paquet->nombre_enchere) {
               $cutebid= Bideur::where('user_id', Auth::user()->id)->first();

               $cutebid->update([
                    'balance' => Auth::user()->bideurs->first()->balance - $article->paquet->nombre_enchere,
                ]);
                if ($pivots == null) {

                    PivotBideurEnchere::create([
                        'valeur' => '0',
                        'statut_id' => '3',
                        'user_id' => Auth::user()->id,
                        'enchere_id' => $article->enchere->id,
                    ]);

                }
                $block = 0;
                return view('pages.detail-enchere', compact('article', 'paquets','block'));
            }else{
                return back()->with('danger','Votre compte est insuffisant');
            }
        }else{
            $block = 0;
            return view('pages.detail-enchere', compact('article', 'paquets','block'));
        }

    }
    public function openEnchere($id){
        $article = Article::where('id', $id)->where('statut_id', '3')->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $block = 0;
        if (Auth::user()) {
            # code...
            $pivots = PivotBideurEnchere::where('user_id', Auth::user()->id)->where('enchere_id', $article->enchere->id)->first();
        }else{
            $pivots =null;
        }
        if ($pivots != null) {

            $block = 0;
            return view('pages.detail-enchere', compact('article', 'paquets','block'));
        }else{

            $block =1 ;
            return view('pages.detail-enchere', compact('article', 'paquets' ,'block'));
        }
    }
    public function sanction($id,$enchere,$sanction){
        $bideur = PivotBideurEnchere::where('user_id',$id)->first();

        $sanction = Sanction::where('user_id', $id)->where('enchere_id',$enchere)->where('deleted_at',null)->first();

        if ($sanction == null) {
            $insert = Sanction::create([
                'enchere_id' => $enchere,
                'paquet_id' => $bideur->enchere->paquet->id,
                'duree' =>$bideur->enchere->paquet->roi,
                'statut' => 1 ,
                'suspendu_by' => Auth::user()->id,
                'user_id'=>$id,
                'santance'=>$sanction
            ]);
            return redirect()->back()->with('success','le bideur est sanctionner');
        }
        elseif ($sanction->enchere_id == $enchere && $sanction->statut == 1) {
            return redirect()->back()->with('danger','le bideur est deja sous sanction');
        }elseif($sanction->enchere_id == $enchere && $sanction->statut == 0){
            $sanction->update([
                'duree' =>$bideur->enchere->paquet->roi,
                'statut' => 1 ,
                'suspendu_by' => Auth::user()->id,
            ]);
            return redirect()->back()->with('success','le bideur est sanctionner');
            // session()->flash('success','le bideur est sanctionner');
        }else{
            $insert = Sanction::create([
                'enchere_id' => $enchere,
                'paquet_id' => $bideur->enchere->paquet->id,
                'duree' =>$bideur->enchere->paquet->roi,
                'statut' => 1 ,
                'suspendu_by' => Auth::user()->id,
                'user_id'=>$id,
                'santance'=>$sanction
            ]);
            return redirect()->back()->with('success','le bideur est sanctionner');
            // session()->flash('success','le bideur est sanctionner');
        }

    }

}
