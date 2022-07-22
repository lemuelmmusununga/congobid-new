<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bideur;
use App\Models\PivotBideurEnchere;
use Illuminate\Support\Facades\Auth;
use App\Models\Sanction;
use App\Models\Enchere;
class Btnbidchat extends Component
{
    public $counter = 0, $enchere;
    public $user,$article,$update=[''],$clicks;
    public $click ='';
    public $bid;
    public $ids,$solde_bid,$solde_bonus,$bonus,$solde_non_tranferable,$temps_restant_total;
    public $listes=[];
    public $getSalons=[],$paquet_enchere,$sec =0,$pivot,$sanction;
    public $detail=[],$addclick,$block = 0,$listes_sentance,$article_titre,$article_paquet,$article_enchere;
    public function mount(){
        $this->enchere = Enchere::where('date_debut',now()->format('Y-m-d'))->where('heure_debut','<=',now()->format('H:i'))->where('state',1)->first();

        if ($this->enchere != null) {
            # code...
            $this->pivot =(PivotBideurEnchere::where('enchere_id',$this->enchere->id)->where('user_id',Auth::user()->id)->first());
            $this->sanction= Sanction::where('enchere_id',$this->enchere->id)->where('user_id',Auth::user()->id)->where('statut',1)->where('deleted_at',null)->first();

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

        $this->update = PivotBideurEnchere::where('user_id',$this->user)->where('enchere_id',$this->enchere->id)->first();

        $this->counter =$this->update->valeur+1;

        $this->update->update([
            'valeur'=>$this->counter
        ]);


    }

    public function render()
    {
        return view('livewire.btnbidchat');
    }
}
