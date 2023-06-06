<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Enchere;
use App\Models\PivotBideurEnchere;
use App\Models\Bideur;
use App\Models\Paquet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Sanction;
use App\Models\User;
use App\Models\Bid;
use App\Models\Bloque;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PivotClientsSalon;
use App\Models\Roi;
use App\Models\Foudre;
use App\Models\Bouclier;
use App\Models\Chat_enchere;
use App\Models\Click_auto;
use App\Models\Clicks;
use App\Models\Message;
use App\Models\Option;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\TryCatch;

class Counterbid extends Component
{
    public $counter = 0,$times=60,$second_treve,$update_bonus,$temps,$pc,$click_auto,$four_treve,$tree_treve,$munite,$duree_enchere,$prix_final,$seconde_enchere,$prix_enchere,$incrementation=0,$click_achat='';
    public $client = '';
    public $user,$article,$autobid=0,$update=[''],$time_click,$liste_count,$clicks,$first_treve,$listes_one;
    public $click ='';
    public $bid,$first ,$all;
    public $ids,$solde_bid,$guerre_four,$guerre_tree,$montantClick,$nombreClick,$guerre_second,$guerre,$liste_one,$i,$solde_bonus,$search='',$bids, $listes_auth,$prix,$bonus,$solde_non_tranferable,$enchere,$temps_restant_total;
    // public $listes=[];
    public $getSalons=[],$paquet_enchere,$sec =0,$sommeClick,$time_bouclier;
    public $detail=[],$addclick,$block = 0,$article_titre,$tackClicks,$article_paquet,$article_enchere,$roi,$foudre,$bouclier;
    // recuperation de l'article cliquer
    public $getart,$user_id,$isSet = true,$etat,$temps_total_heure,$click_paye,$save=[] ;
    // santion
    public $message='',$send_message,$myself_num,$sentanceBloques,$pourcentage_foudre, $pourcentage_bouclier,$paquet;
    public function new(){
        dd($this->message);
    }
    public function send(){
        dd($this->message);
        $this->user = auth()->user()->id;
        if (Str::length($this->message) > 0) {
            # code...
            $this->send_message= Chat_enchere::create([
                'user_id' => $this->user,
                'libelle'=>$this->message,
                'enchere_id'=>$this->enchere->id,
            ]);
            $this->message ='';
        }
    }
    public function mount($article,$article_paquet,$article_titre,$article_enchere,$temps_total_heure){
        $this->bids = Bid::where('statut_id', '3')->get();
        $this->article_paquet = $article_paquet;
        $this->article_titre = $article_titre;
        $this->getart = $article;
        $this->article_enchere =$article_enchere;
        $this->enchere = Enchere::where('article_id',$this->getart)->first();
        $this->roi = Roi::where('paquet_id',$article_paquet)->first();
        $this->bouclier = Bouclier::where('paquet_id',$article_paquet)->first();
        $this->click_auto = Click_auto::where('paquet_id',$article_paquet)->first();
        $this->foudre = Foudre::where('paquet_id',$article_paquet)->first();
        $this->paquet_enchere = Paquet::where('id',$article_paquet)->first();
        $this->temps_total_heure = $temps_total_heure;
        $this->prix = $this->enchere->article->prix . ' $';
        $duree =($this->enchere->munite * 60 ) + $this->enchere->seconde ;
        $treve =$this->enchere->paquet->treve ;

        // $first_treve = (($duree -  )- $treve);
        if (Auth::user()) {
            # code...
            $soldebid = Bideur::where('user_id',Auth::user()->id)->first();
            $this->solde_bonus = $soldebid->bonus;
            $this->solde_bid=$soldebid->balance;
            $this->solde_non_tranferable = $soldebid->nontransferable;
        }else{
            $soldebid = null;
            $this->solde_bonus = 0;
            $this->solde_bid=0;
            $this->solde_non_tranferable = 0;
        }
    }
    // temps bid auto
    public function bidAuto(){
        // dd('ac');
       $auto =  Auth::user()->pivotbideurenchere->where('enchere_id',$this->enchere->id)->first();
       $auto -> update([
            'temps_bid_auto'=>60,
            'automatique'=>1,
       ]);
    }
    public function update(){
         try {
            $this->user = auth()->user()->id;
            $this->update_bonus = Bideur::where('user_id',Auth::user()->id)->first();
            if ($this->counter % 320 == 0) {
                $this->bonus = $this->update_bonus->bonus;
                $this->update_bonus->update([
                    'bonus'=>$this->bonus+1
                ]);
            }
            $this->update = PivotBideurEnchere::where('user_id',$this->user)->where('enchere_id',$this->article_enchere)->first();

            $this->counter =$this->update->valeur + 1;
            Session::put('counter', $this->counter);
            $this->update->update([
                'valeur'=>$this->counter,
                'click_seconde' => $this->update->click_seconde + 1
            ]);
         } catch (\Throwable $th) {
             return back();
         }

    }
    public function addclick($add){
        if ($add > 0  ) {
            # code...
            $this->update = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->article_enchere)->first();
            $this->addclick =$this->update->valeur + ($add);
            $this->update->update([
                'valeur'=>$this->addclick,
            ]);
        }else{

        }
        $this->addclick ="";
    }
    public function Buyclick($add){
        if ($add > 0  ) {
            # code...
            $this->update = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->article_enchere)->first();
            $this->addclick =$this->update->valeur + ($add);
            $bideur = Bideur::where('user_id', Auth::user()->id)->first();
            $bideur->update([
                'balance' => Auth::user()->bideurs->first()->balance - intval($this->montantClick),
            ]);
            $this->update->update([
                'valeur'=>$this->addclick,
            ]);
        }
    }
    // update les options a revoir
    public function option($option){
        $add = PivotBideurEnchere::where('user_id',auth()->user()->id)->first();
        $add->update([
            'foudre'=>$option,
            'roi'=>$option,
            'bouclier'=>$option
        ]);
    }
    public function achatRoi($enchere_id,$prix_enchere){
       $achat =  Auth::user()->pivotbideurenchere->where('enchere_id',$enchere_id)->first();
        $achat->update([
            'clicks'=>$achat->clicks + 1
        ]);
    }

    public function render()
    {
        $this->prix_final = $this->enchere->prix_enchere;
        if (Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first()) {
            # code... bouclier temps
            $this->paquet = Option::where('user_id',Auth::user()->id)->where('paquet_id',$this->enchere?->paquet->id)->first();
            $echeance = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first()->time_bouclier;
            // $this->time_bouclier = now('africa/kinshasa')->format('i')-date('i',strtotime($echeance));
            $duree =date('i',strtotime($this->bouclier->temps_blocage));
            // if ($this->time_bouclier > $duree) {
            //     $bouclier = PivotBideurEnchere::where('enchere_id',$this->article_enchere)->where('user_id',Auth::user()->id)->first();
            //     $thatall = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first();
            //     $thatall->update([
            //         'time_bouclier'=>null,
            //         'bouclier'=>0
            //     ]);
            // }
            // bid-auto
            $echeance_bid_auto = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first()->time_bid_auto;
            $time_click_auto = now('africa/kinshasa')->format('i')-date('i',strtotime($echeance));
            $this->time_click = $time_click_auto;
            $duree_click =$this->click_auto->temps_bidage;

            if ($duree_click < $this->time_click) {
                // $bouclier = PivotBideurEnchere::where('enchere_id',$this->article_enchere)->where('user_id',Auth::user()->id)->first();
                $thatall = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first();
            }
        }
        $this->listes_auth = PivotBideurEnchere::where('enchere_id', $this->article_enchere)->where('user_id','=', Auth::user()->id)->first();
        if($this->listes_auth != null){
            $this->pourcentage_foudre =  ($this->listes_auth->time_foudre / 180 )*100;
            $this->pourcentage_bouclier =  ($this->listes_auth->time_bouclier / 180 )*100;
        }
        // dd($this->listes_auth);
        // $this->listes_seconds = PivotBideurEnchere::where('enchere_id', $this->article_enchere)->where('valeur','<=',$this->listes_auth->valeur)->get();
        // $this->listes_sups = PivotBideurEnchere::where('enchere_id', $this->article_enchere)->where('valeur','>=',$this->listes_auth->valeur)->get();


        // ajout des lors nous somme connecter
        // if (Auth::user()) {
        //     $this->addbid = User::where('id',Auth::user()->id)->first();
        //     $bideur = Bideur::where('user_id',Auth::user()->id)->first();
        //     if ($this->addbid->user_conneted_at == null) {
        //         $this->addbid->update([
        //             $this->addbid->user_conneted_at =now()
        //         ]);
        //     }
        //     $heur_acces = now('africa/kinshasa')->format('H') - date('H',strtotime($this->addbid->user_conneted_at));
        //     if (now('africa/kinshasa')->format('i') > date('i',strtotime($this->addbid->user_conneted_at))) {
        //         $munite_acces = now('africa/kinshasa')->format('i') - date('i',strtotime($this->addbid->user_conneted_at));
        //     } else {
        //         $munite_acces = date('i',strtotime($this->addbid->user_conneted_at))-now('africa/kinshasa')->format('i');
        //     }
        //     if (date('d-m-Y',strtotime($this->addbid->user_conneted_at)) == now('africa/kinshasa')->format('d-m-Y') && $munite_acces > 5) {
        //        $balance = $bideur->balance + 10;
        //         $bideur->update([
        //             'balance' =>$balance
        //         ]);
        //         $this->addbid->update([
        //             $this->addbid->user_conneted_at ="2022-05-24 06:40:28"
        //         ]);
        //     }
        // }

        // end

        // lister les bideurs de l'article

        // recuperation de la valeur
        if (Auth::user()) {
            $this->liste_one= PivotBideurEnchere::where('enchere_id', $this->article_enchere)->orderby('valeur','DESC')->first();
            // if (!($this->liste_one == null)) {
            //     # code...
            //     $this->listes= PivotBideurEnchere::where('enchere_id', $this->article_enchere)->where('valeur','<=', $this->liste_one->valeur)->where('user_id','!=', $this->liste_one->user_id)->orderby('valeur','DESC')->paginate(3);
            // }
            $valeur = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->article_enchere)->first();
            $this->counter = $valeur->valeur ?? '';
            # code...
            $this->solde_bonus = Bideur::where('user_id',Auth::user()->id)->first();
        }else{
            // $this->listes= PivotBideurEnchere::where('enchere_id', $this->article_enchere)->orderby('valeur','DESC')->get();
            // $this->listes_sentance= PivotBideurEnchere::where('enchere_id', $this->article_enchere)->orderby('valeur','DESC')->get();
            $valeur = PivotBideurEnchere::where('enchere_id',$this->article_enchere)->first();
            $this->counter = $valeur->valeur ?? '';
            # code...
            $this->solde_bonus = 0;
        }

        //  dd($this->munite*60+$this->times);
        // calcule du temps
        // $this->temps_restant_total+=1;
        // if($this->temps_restant_total == 60){
        //     $this->temps_restant_total =0;
        // }
        $this->clicks = Clicks::all();
        // $this->messages = Chat_enchere::where('enchere_id',$this->enchere->id)->orderby('id','DESC')->get();
        // $this->sec =date('s',strtotime($this->temps_total_heure))  ;
        $this->click_achat;
        $this->click_paye = Clicks::where('id',$this->click_achat)->first();
        $this->sentanceBloques=Bloque::where('user_blocked',Auth::user()->id)->where('enchere_id', $this->article_enchere)->orderby('id','DESC')->get();
        $this->montantClick= intval($this->nombreClick ?? 0 )*6;
        $this->incrementation;

        $listes = PivotBideurEnchere::where('enchere_id', $this->article_enchere)->where('valeur','<=', $this->liste_one->valeur ?? 0)->where('user_id','!=', $this->liste_one->user_id ?? '')->orderby('valeur','DESC')->get();
        foreach ($listes as $key => $liste)
        {
            if ($liste->user_id == Auth::user()->id){
                $this->myself_num = $key + 2;
            }
        }
        return view('livewire.counterbid',[
            'listes' => $listes,
            'listes_trois'=> PivotBideurEnchere::where('enchere_id', $this->article_enchere)->where('valeur','<', $this->liste_one->valeur)->orderby('valeur','DESC')->get(),
            // 'listes_deux'=> PivotBideurEnchere::where('enchere_id', $this->article_enchere)->where('valeur','<', $this->liste_one->valeur)->orderby('valeur','DESC')->paginate(2),
            'listes_sentance'=>PivotBideurEnchere::where('user_id','!=',Auth::user()->id)->where('enchere_id', $this->article_enchere)->orderby('valeur','DESC')->get(),
            'messages'=>Chat_enchere::where('enchere_id',$this->enchere->id)->orderby('id','DESC')->paginate(3),
        ]);
    }
}
//search alpinjs
