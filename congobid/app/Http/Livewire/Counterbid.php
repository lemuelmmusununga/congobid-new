<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Enchere;
use App\Models\PivotBideurEnchere;
use App\Models\Bideur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Sanction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PivotClientsSalon;
class Counterbid extends Component
{

    public $counter = 0,$times=60,$munite = 0 ;
    public $client = '';
    public $user,$article,$update=[''];
    public $click ='';
    public $bid;
    public $ids,$solde_bid,$solde_bonus,$bonus,$solde_non_tranferable;
    public $listes=[];
    public $getSalons=[];
    public $detail=[],$addclick;
    // recuperation de l'article cliquer
    public $getart,$user_id,$etat;
    // santion

    public function mount($article){

        $this->getart = $article;
        $soldebid = Bideur::where('user_id',Auth::user()->id)->first();
        $this->solde_bonus = $soldebid->bonus;
        $this->solde_bid=$soldebid->balance;
        $this->solde_non_tranferable = $soldebid->nontransferable;
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

        $this->update->update([
            'valeur'=>$this->counter
        ]);


    }
    public function sanction($id,$enchere){

        // afficher tout les biddeurs sanctionner


    }
    public function addclick($add){

        $this->update = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->getart)->first();

        $this->addclick =$this->update->valeur + $add ;

        $this->update->update([
            'valeur'=>$this->addclick
        ]);
    }
    // update les options a revoir
    public function option($option){
        $add = PivotBideurEnchere::where('user_id',auth()->user()->id)->first();
        $add->update([
            'foudre'=>$option,
            'roi'=>$option
        ]);
    }
    public function render()
    {

        // lister les bideurs de l'article
        $this->listes= PivotBideurEnchere::where('enchere_id', $this->getart)->orderby('valeur','DESC')->get();
        // recuperation de la valeur
        $valeur = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->getart)->first();
        $this->counter = $valeur->valeur ?? '0';
        $this->solde_bonus = Bideur::where('user_id',Auth::user()->id)->first();
        // dd($valeur->enchere->paquet->duree);
        // calcule du temps
        $this->munite = $valeur->enchere->paquet->duree;
        $this->times =$this->times-1;
        // $this->munite-1;

        if($this->times == 0){
            $this->times =59;
            $this->munite =$valeur->enchere->paquet->duree-1;
        }

        return view('livewire.counterbid',[

        ]);
    }
}
