<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Bideur;
use App\Models\Bouclier;
use App\Models\Click;
use App\Models\Click_auto;
use App\Models\Clicks;
use App\Models\Paquet;
use App\Models\Enchere;
use App\Models\Foudre;
use App\Models\PivotClientsSalon;
use App\Models\PivotBideurEnchere;
use App\Models\Roi;
use App\Models\Salon;
use Illuminate\Support\Facades\Auth;
use App\Models\Sanction;
use PhpParser\Node\Stmt\TryCatch;

class DetailEnchereController extends Controller
{

    public function index($id){

        $article = Article::where('id', $id)->where('statut_id', '3')->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $sanction= Sanction::where('enchere_id',$article->enchere->id)->where('user_id',Auth::user()->id)->first();

        $temps_restant_heure = (now('africa/kinshasa')->format('H') - date('H', strtotime($article->enchere->heure_debut))) ;
        $temps_restant_minute = (now('africa/kinshasa')->format('i') - date('i', strtotime($article->enchere->heure_debut)));
        $temps_restant_seconde = (now('africa/kinshasa')->format('s') - date('s', strtotime($article->enchere->heure_debut)));

        $temps_restant_heure_minute = ($temps_restant_heure * 60) + $temps_restant_minute;
        $temps_restant_total = $article->paquet->duree - $temps_restant_heure_minute ;
        $total_heure_restant =  $temps_restant_heure .":". $temps_restant_minute .":". $temps_restant_seconde;

        // $enchere_fini = ($temps_restant_total <= 0) ? 'true' : 'false';

        // couper les nombres de bids
        if (Auth::user()) {
            $pivots = PivotBideurEnchere::where('user_id', Auth::user()->id)->where('enchere_id', $article->enchere->id)->first();

            // verification du balance
            if (Auth::user()->bideurs->first()->balance >= $article->paquet->prix) {
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
                return back()->with('success','Souscription effectué avec succée');
                // return view('pages.detail-enchere', compact('article', 'paquets','block','total_heure_restant','sanction'))->with('danger','Vous participer deje');
            }else{
                return back()->with('danger','Votre compte est insuffisant');

            }
        }else{

            $block = 0;
            return view('pages.detail-enchere', compact('article', 'paquets','block','total_heure_restant','sanction'))->with('danger','Vous participer deje');
        }

    }
    public function openEnchere($id){
        $article = Article::where('id', $id)->where('statut_id', '3')->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $block = 0;
        $sanction= Sanction::where('enchere_id',$article->enchere->id)->where('user_id',Auth::user()->id)->first();

        if (Auth::user()) {
            # code...
            $pivots = PivotBideurEnchere::where('user_id', Auth::user()->id)->where('enchere_id', $article->enchere->id)->first();
        }else{
            $pivots =null;
        }
        if ($pivots != null) {

            $block = 0;
            return view('pages.detail-enchere', compact('article', 'paquets','block','sanction'));
        }else{

            $block =1 ;
            return view('pages.detail-enchere', compact('article', 'paquets' ,'block','sanction'));
        }
    }
    public function achatBid($id,$valeur,$enchere_id,$enchere_name){
        $enchere = Enchere::where('id',$enchere_id)->first();
       
        $bideur = Bideur::where('user_id',Auth::user()->id)->first();
        $bideur->update([
            'balance'=>Auth::user()->bideurs->first()->balance + $valeur,
        ]);
        return redirect()->route('show.detail', ['id' => $enchere->article->id,'name'=>$enchere_name]);
    }
    public function openSalon($id){
        $article = Article::where('id', $id)->where('statut_id', '3')->first();
        $salon = Salon::where('article_id',$article->id)->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $block = 0;
        $sanction= Sanction::where('enchere_id',$article->enchere->id)->where('user_id',Auth::user()->id)->first();
        if (Auth::user()) {
            # code...
            $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->where('salon_id', $salon->id)->first();
        }else{
            $pivots =null;
        }
        if ($pivots != null) {
            $block = 0;
            return view('pages.detail-salon', compact('article', 'paquets','block','sanction'));
        }else{
            $block =1 ;
            return view('pages.detail-salon', compact('article', 'paquets' ,'block','sanction'));
        }
    }
    // active click auto
    public function activationBid($name){
        $cliks = Click_auto::where('id',Auth::user()->id)->first();
       Auth::user()->pivotbideurenchere->first()->update([
           'clicks'=>Auth::user()->pivotbideurenchere->first()->clicks-1,
           'time_bid_auto'=>now('africa/kinshasa')
       ]);

       dd($cliks->time_bid_auto );
       return redirect()->back()->with('success','Bid Auto activé !');
    }
    //push achat click
    public function achatClick($id,$name,$enchere_id){
        $cliks = Clicks::where('id',$id)->first();
        $addclick = PivotBideurEnchere::where('user_id',Auth::user()->id)->where('enchere_id',$enchere_id)->first();
        // dd($cliks->benefice,$id,$enchere_id,$addclick->foudre,Auth::user()->id,$addclick->valeur + $cliks->benefice);
        $addclick->update([
           'valeur'=>$addclick->valeur + $cliks->benefice
        ]) ;
        Auth::user()->bideurs->first()->update([
            'balance'=> Auth::user()->bideurs->first()->balance - $cliks->prix_bid
       ]);
       return redirect()->back()->with('success','Achat des cliques éffectué avec succes');

    }
    public function achatBidAuto($name,$enchere,$prix){
        $auto =  Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first();
        $cutbid = Auth::user()->bideurs->first()->balance - $prix;
        $auto -> update([
            'clicks'=> Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first()->clicks + 1,
        ]);
        $auto->save;
        $cut = Auth::user()->bideurs->first()->update([
            'balance'=> $cutbid
        ]);

        return redirect()->back();
    }
    public function activeBidAuto($name,$enchere){
        $auto =  Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first();
        $auto -> update([
                'temps_bid_auto'=>60,
                'automatique'=>1,
                'clicks'=>$auto->clicks - 1,
        ]);
    return redirect()->back();
    }
    public function activeBouclier($name,$enchere){
        $auto =  Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first();
        $auto -> update([
            'time_bouclier'=>180,
            'bouclier'=>$auto->bouclier - 1,
        ]);
        return redirect()->back();
    }
    public function sanction($id,$enchere,$sanctance,$name,$bid_cut){
        $bideur = PivotBideurEnchere::where('user_id',$id)->where('enchere_id',$enchere)->first();

        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();
        $sanction = Sanction::where('user_id', $id)->where('enchere_id',$enchere)->where('deleted_at',null)->first();
        if ($sanction == null) {

            if ($bideur->time_bouclier == 0) {
                if (Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first()->foudre>=1 && $sanctance == "foudre") {
                    Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first()->update([
                        'foudre' => Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first()->foudre-1
                    ]);
                }
                $insert = Sanction::create([
                    'enchere_id' => $enchere,
                    'paquet_id' => $bideur->enchere->paquet->id,
                    'duree' =>$bideur->enchere->paquet->foudre,
                    'statut' => 1 ,
                    'suspendu_by' => Auth::user()->id,
                    'user_id'=>$id,
                    'santance'=>$sanctance
                ]);


            }else{
                Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first()->update([
                    'foudre' => Auth::user()->pivotbideurenchere->where('enchere_id',$enchere)->first()->foudre-1,
                    'time_bouclier' => 0
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
    public function debloquer($enchere,$sanctance,$name,$bid_cut,$id){
        $bideur = PivotBideurEnchere::where('user_id',$id)->where('enchere_id',$enchere)->first();
        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();

        $sanction = Sanction::where('id', $id)->where('deleted_at',null)->first();

        $total_bid_user = Auth::user()->bideurs->first()->balance - $bid_cut;
        $bid_soustraction->update([
            'balance'=>$total_bid_user
        ]);
        $sanction->update([
            'deleted_at'=>now('africa/kinshasa')
        ]);
        return redirect()->back()->with('success','Vous étes debloqué');

    }
    public function bouclier($enchere,$paquet,$name){
        $bideur = PivotBideurEnchere::where('user_id',Auth::user()->id)->where('enchere_id',$enchere)->first();
        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();
        $bouclier_benefice =Bouclier::where('paquet_id',$bideur->enchere->paquet->id)->first()->benefice;

        $bideur->update([
            'bouclier' => $bideur->bouclier+1,
            'valeur' => $bideur->valeur + $bouclier_benefice,

        ]);

        Auth::user()->bideurs->first()->update([
            'balance'=>Auth::user()->bideurs->first()->balance -$paquet
        ]);
        return redirect()->back()->with('success','Achat du bouclier effectué avec success');
    }
    // achat roi

    public function roi($enchere,$paquet,$name){
        // dd($enchere,$paquet,$name);
        $bideur = PivotBideurEnchere::where('user_id',Auth::user()->id)->where('enchere_id',$enchere)->first();
        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();
        $roi_benefice =Roi::where('paquet_id',$bideur->enchere->paquet->id)->first()->benefice;

        $bideur->update([
            'roi' => $bideur->roi+1,
            'valeur'=>$bideur->valeur +$roi_benefice,
            'time_roi'=>now('africa/kinshasa')
        ]);

        Auth::user()->bideurs->first()->update([
            'balance'=>Auth::user()->bideurs->first()->balance -$paquet,

        ]);
        return redirect()->back()->with('success','Achat du roi effectué avec success');
    }
     // achat clique
     public function AchatClickAuto($enchere,$paquet,$name){
        $bideur = PivotBideurEnchere::where('user_id',Auth::user()->id)->where('enchere_id',$enchere)->first();
        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();
        $click_benefice =Click::where('paquet_id',$bideur->enchere->paquet->id)->first()->benefice;

        $bideur->update([
            'clicks' => $bideur->clicks+1,
            'valeur'=>$bideur->valeur +$click_benefice,

        ]);

        Auth::user()->bideurs->first()->update([
            'balance'=>Auth::user()->bideurs->first()->balance -$paquet,

        ]);
        return redirect()->back()->with('success','Achat du clique effectué avec success');
     }

    // bloquer encher
    public function roiBlock($duree,$enchere,$paquet,$achat){
        $bideurs = PivotBideurEnchere::orderby('id','DESC')->where('user_id','!=',Auth::user()->id)->where('enchere_id',Auth::user()->pivotBideurEnchere->first()->enchere_id)->get();
        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();
        if (Auth::user()->bideurs->first()->balance >= $achat) {
            $bid_soustraction->update([
                'balance'=>$bid_soustraction->balance - $achat
            ]);
            $roi_benefice = Roi::where(
                'paquet_id',$paquet
            )->first();
            foreach ($bideurs as $bideur) {
                $bloquer_enchere = Sanction::create([
                    'paquet_id'=>$paquet,
                    'enchere_id'=>$enchere,
                    'santance' =>'roi',
                    'duree'=>$duree,
                    'suspendu_by'=>Auth::user()->id,
                    'statut'=>1,
                    'user_id'=>$bideur->user_id
                ]);

            }
            $roi= PivotBideurEnchere::where('user_id',Auth::user()->id)->where('enchere_id',$enchere)->first();
            // dd(Auth::user()->pivotBideurEnchere->first()->valeur +$roi_benefice->benefice);
            $roi->update([
                'roi' => Auth::user()->pivotBideurEnchere->first()->roi-1,
                'valeur'=>Auth::user()->pivotBideurEnchere->first()->valeur + $roi_benefice->benefice
            ]);
            return redirect()->back()->with('success','Anchere bloquer avec success');
        } else {
            return redirect()->back()->with('danger','Votre compte est insuffisant veillez acheter des bids');
        }
    }

    // achat foudre
    public function foudre($enchere,$paquet,$name){
        $bideur = PivotBideurEnchere::where('user_id',Auth::user()->id)->where('enchere_id',$enchere)->first();
        $bid_soustraction = Bideur::where('user_id',Auth::user()->id)->first();
        $foudre_benefice =Foudre::where('paquet_id',$bideur->enchere->paquet->id)->first()->benefice;


        Auth::user()->pivotBideurEnchere->first()->update([
            'foudre' => Auth::user()->pivotBideurEnchere->first()->foudre +1,
            'valeur' => Auth::user()->pivotBideurEnchere->first()->valeur + $foudre_benefice,
            'time_foudre'=>Auth::user()->pivotBideurEnchere->first()->time_foudre + 180
        ]);
        Auth::user()->bideurs->first()->update([
            'balance'=>Auth::user()->bideurs->first()->balance -$paquet
        ]);

        return redirect()->back()->with('success','Achat du foudre effectué avec success');


        // return redirect()->back()->with('success','Achat du foudre effectué avec success');
    }

}
