<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Enchere;
use App\Models\PivotBideurEnchere;
use App\Models\Bideur;
use App\Models\Paquet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Sanction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PivotClientsSalon;
use App\Models\Roi;
use App\Models\Foudre;
use App\Models\Bouclier;
use App\Models\Chat_enchere;
use App\Models\Click_auto;
use App\Models\Clicks;
use App\Models\Message;
use Illuminate\Support\Facades\Session;

class Salonbid extends Component
{
    public $counter = 0,$times=60,$munite,$duree_enchere,$prix_final,$seconde_enchere,$prix_enchere,$incrementation,$click_achat='';
    public $client = '';
    public $user,$article,$messages,$update=[''],$clicks,$first_treve;
    public $click ='';
    public $bid;
    public $ids,$solde_bid,$solde_bonus,$prix,$bonus,$solde_non_tranferable,$enchere,$temps_restant_total;
    public $listes=[];
    public $getSalons=[],$paquet_enchere,$sec =0,$time_bouclier;
    public $detail=[],$addclick,$block = 0,$listes_sentance,$article_titre,$article_paquet,$article_enchere,$roi,$foudre,$bouclier;
    // recuperation de l'article cliquer
    public $getart,$user_id,$etat,$temps_total_heure,$click_paye ;
    // santion
    public $message='',$send_message;
    public function send(){
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
        $duree =$this->enchere->paquet?->duree ;
        $treve =$this->enchere->paquet?->treve ;
        $guerre = $this->enchere->paquet?->guerre;
        $this->duree_enchere = $this->enchere->munite;
        $this->seconde_enchere = $this->enchere->seconde;
        $this->prix_enchere = $this->enchere->article->prix;
        $this->first_treve = $duree - $treve ;
        $this->second_treve = $this->first_treve - $this->enchere->paquet?->guerre;
        $this->tree_treve = $this->second_treve - $this->enchere->paquet?->guerre;
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

    public function update(){

        $this->user = auth()->user()->id;
        $this->update_bonus = Bideur::where('user_id',Auth::user()->id)->first();
        if ($this->counter % 320 == 0) {
            $this->bonus = $this->update_bonus->bonus;
            $this->update_bonus->update([
                'bonus'=>$this->bonus+1
            ]);
        }

        $this->update = PivotBideurEnchere::where('user_id',$this->user)->where('enchere_id',$this->getart)->first();

        $this->counter =$this->update->valeur+1;
        Session::put('counter',$this->counter);
        $this->incrementation = $this->incrementation +  $this->prix_enchere/((5*(count($this->listes))*(($this->duree_enchere*60)+$this->seconde_enchere)) ?  : 1);

        $this->enchere->update([
            'prix_enchere' => $this->prix_final + $this->incrementation
        ]);
        $this->incrementation = 0;
        $this->update->update([
            'valeur'=>$this->counter,
        ]);


    }


    public function addclick($add){

        if ($add > 0  ) {
            # code...
            $this->update = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->getart)->first();

            $this->addclick =$this->update->valeur + ($add) ;

            $this->update->update([
                'valeur'=>$this->addclick,
            ]);
        }else{

        }
        $this->addclick ="";
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
    public function render()
    {
        $this->prix_final = $this->enchere->prix_enchere;
        if (Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first()) {
            # code...
            $echeance = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first()->time_bouclier;
            $this->time_bouclier = now('africa/kinshasa')->format('i')-date('i',strtotime($echeance));
            $duree =date('i',strtotime($this->bouclier->temps_blocage));
            // bid-auto
            $echeance_bid_auto = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first()->time_bid_auto;
           $time_click_auto = now('africa/kinshasa')->format('i')-date('i',strtotime($echeance));
           $this->time_click = $time_click_auto;
            $duree_click =$this->click_auto->temps_bidage;

            if ($this->time_bouclier > $duree) {
                // $bouclier = PivotBideurEnchere::where('enchere_id',$this->article_enchere)->where('user_id',Auth::user()->id)->first();
                $thatall = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first();

                $thatall->update([
                    'time_bouclier'=>null,
                    'bouclier'=>0
                ]);
            }
            if ($duree_click < $this->time_click) {

                # code...
                // $bouclier = PivotBideurEnchere::where('enchere_id',$this->article_enchere)->where('user_id',Auth::user()->id)->first();
                $thatall = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first();
                $thatall->update([
                    'time_bid_auto'=>null,
                    'clicks'=>0
                ]);
            }
        }

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
            $this->listes= PivotBideurEnchere::where('enchere_id', $this->getart)->orderby('valeur','DESC')->get();
            $this->listes_sentance= PivotBideurEnchere::where('user_id','!=',Auth::user()->id)->where('enchere_id', $this->getart)->orderby('valeur','DESC')->get();
            $valeur = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->getart)->first();
            $this->counter = $valeur->valeur ?? '0';
            # code...
            $this->solde_bonus = Bideur::where('user_id',Auth::user()->id)->first();
        }else{
            $this->listes= PivotBideurEnchere::where('enchere_id', $this->getart)->orderby('valeur','DESC')->get();
            $this->listes_sentance= PivotBideurEnchere::where('enchere_id', $this->getart)->orderby('valeur','DESC')->get();
            $valeur = PivotBideurEnchere::where('enchere_id',$this->getart)->first();
            $this->counter = $valeur->valeur ?? '0';
            # code...
            $this->solde_bonus = 0;
        }
        //  dd($this->munite*60+$this->times);
        // calcule du temps
        $this->temps_restant_total=$this->temps_restant_total+1;
        if($this->temps_restant_total == 60){
            $this->temps_restant_total =0;
        }
        $this->clicks = Clicks::all();
        $this->messages = Chat_enchere::where('enchere_id',$this->enchere->id)->orderby('id','ASC')->get();
        // $this->sec =date('s',strtotime($this->temps_total_heure))  ;
        $this->click_achat;
        $this->click_paye = Clicks::where('id',$this->click_achat)->first();
        $this->incrementation ;
        return view('livewire.salonbid');
    }

}
