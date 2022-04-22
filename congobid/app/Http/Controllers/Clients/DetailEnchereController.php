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


        $temps_restant_heure = (now()->format('H') - date('H', strtotime($article->enchere->heure_debut))) ;
        $temps_restant_minute = (now()->format('i') - date('i', strtotime($article->enchere->heure_debut)));

        $temps_restant_heure_minute = ($temps_restant_heure * 60) + $temps_restant_minute;

        $temps_restant_total = $article->paquet->duree - $temps_restant_heure_minute ;

        // $enchere_fini = ($temps_restant_total <= 0) ? 'true' : 'false';

        if (($temps_restant_total >= 0) && ($temps_restant_total <= $article->paquet->duree)) {
            Enchere::where('id', $article->enchere->id)->update([
                'state' => '1',
            ]);
        } else {
            Enchere::where('id', $article->enchere->id)->update([
                'state' => '0',
            ]);
        }

        // couper les nombres de bids
        if (Auth::user()) {
        $pivots = PivotBideurEnchere::where('user_id', Auth::user()->id)->where('enchere_id', $article->enchere->id)->first();

            // verification du balance
            if (Auth::user()->bideurs->first()->balance >= $article->paquet->nombre_enchere) {
               $cutebid= Bideur::where('user_id', Auth::user()->id)->first();

               if ($pivots == null) {
                   $cutebid->update([
                        'balance' => Auth::user()->bideurs->first()->balance - $article->paquet->prix,
                    ]);

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
    public function sanction($id,$enchere,$sanctance,$name,$bid_cut){
        $bideur = PivotBideurEnchere::where('user_id',$id)->first();
        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();
        $sanction = Sanction::where('user_id', $id)->where('enchere_id',$enchere)->where('deleted_at',null)->first();
        if ($sanction == null) {
            if ($bideur->enchere->pivotbideurenchere->first()->bouclier == 0) {

                $insert = Sanction::create([
                    'enchere_id' => $enchere,
                    'paquet_id' => $bideur->enchere->paquet->id,
                    'duree' =>$bideur->enchere->paquet->roi,
                    'statut' => 1 ,
                    'suspendu_by' => Auth::user()->id,
                    'user_id'=>$id,
                    'santance'=>$sanctance
                ]);
                $total_bid_user = Auth::user()->bideurs->first()->balance - $bid_cut;
                $bid_soustraction->update([
                    'balance'=>$total_bid_user
                ]);
                return redirect()->back()->with('success','le bideur est bloqué');

            }else{
                $total_bid_user = Auth::user()->bideurs->first()->balance - $bid_cut;
                $bid_soustraction->update([
                    'balance'=>$total_bid_user
                ]);
                $bideur->enchere->pivotbideurenchere->first()->update([
                    'bouclier' => $bideur->enchere->pivotbideurenchere->first()->bouclier -1
                ]);
                return redirect()->back()->with('danger','le bideur est protegé veillez reessayer');
            }


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
                'santance'=>$sanctance
            ]);
            return redirect()->back()->with('success','le bideur est sanctionner');
            // session()->flash('success','le bideur est sanctionner');
        }

    }
    public function bouclier($enchere,$paquet,$name){
        $bideur = PivotBideurEnchere::where('user_id',Auth::user()->id)->first();
        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();

        $bideur->update([
            'bouclier' => $bideur->bouclier+1
        ]);

        Auth::user()->bideurs->first()->update([
            'balance'=>Auth::user()->bideurs->first()->balance -$paquet
        ]);
        return redirect()->back()->with('success','Achat effectué avec success');
    }
}
