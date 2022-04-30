<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PivotBideurEnchere;
use App\Models\Bideur;
use App\Models\Enchere;
use Illuminate\Support\Facades\Auth;
class Decrematation extends Component
{
    public $munite,$times=0,$getart,$enchere,$somme_temps_passer,$incrementation=0,$listes;
    // public function mount($getart){
    //     $this->enchere = Enchere::where('id',$this->getart)->first();

    //     $this->$getart = $getart;
    // }
    public function mount(){
        $this->enchere = Enchere::where('id',$this->getart)->first();
        $this->times = $this->enchere->seconde;
        $this->munite = $this->enchere->munite;
        $this->listes= PivotBideurEnchere::where('enchere_id', $this->getart)->orderby('valeur','DESC')->get();
    }
    public function render()
    {
        $this->enchere = Enchere::where('id',$this->getart)->first();

        $valeur = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->getart)->first();

        $this->munites = $this->enchere->munite;
        // $this->times = $this->enchere->seconde;
        $heur = now()->format('H') - date('H',strtotime($this->enchere->heure_debut));
        $munites =now()->format('i') - date('i',strtotime($this->enchere->heure_debut)) ;
        $secondes = now()->format('s') - date('s',strtotime($this->enchere->heure_debut));
        $this->somme_temps_passer = $this->times +$this->munites*60;

        if ($this->somme_temps_passer >=1  ) {
            # code...
            // mis a jour du temps restant
            if($this->times == 0){
                $this->times =60;
                $this->munite =$this->enchere->munite - 1;
                $this->enchere->update([
                    'munite' =>$this->munite,
                    'seconde'=>$this->times,
                ]);
            }else{
                $this->times =$this->times-1;
                $this->enchere->update([

                    'seconde'=>$this->times,
                ]);
            }
        }else{
            $this->enchere->update([
                'state' =>0,

            ]);
        }
        $this->incrementation =$this->enchere->article->prix;

        // $this->counter = $valeur->valeur ?? '0';
        $this->solde_bonus = Bideur::where('user_id',Auth::user()->id)->first();
        if ($this->somme_temps_passer >0  ) {
            $this->incrementation = ($this->incrementation)/(5*(count($this->listes))*(($this->munite*60)+$this->times) ?  : 1);
            // $valeur->update([
            //     'valeur'=>$valeur->valeur +1
            // ]);
            # code...
            // if(now()->format('i')-date('i',strtotime($valeur->time_bid_auto)) <= 8){
            //     $valeur->update([
            //         'valeur'=>$valeur->valeur +1
            //     ]);
            // }else{
            //     $valeur->update([
            //         'time_bid_auto'=>null
            //     ]);
            // }

        }



        return view('livewire.decrematation');
    }
}
