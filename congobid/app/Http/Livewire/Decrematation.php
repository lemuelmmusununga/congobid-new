<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PivotBideurEnchere;
use App\Models\Bideur;
use App\Models\Enchere;
use Illuminate\Support\Facades\Auth;
class Decrematation extends Component
{
    public $munite,$times = 60,$getart;
    // public function mount($munite,$times,$getart){
    //     $this->munites = $munite;
    //     $this->times = $times;
    //     $this->$getart = $getart;
    // }
    public function render()
    {
        $valeur = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->getart)->first();
        $this->counter = $valeur->valeur ?? '0';
        $this->solde_bonus = Bideur::where('user_id',Auth::user()->id)->first();
        // dd($valeur->enchere->paquet->duree);
        // calcule du temps
        $temps_restant = Enchere::where('id',$valeur->enchere->id)->first();

        $this->munite = $temps_restant->temps_restant;
        $this->times +=- 1;
        // $this->munite-1;
        // mis a jour du temps restant
        if($this->times == 0){
            $this->times =59;
            $this->munite =$temps_restant->temps_restant-1;
            $temps_restant->update([
                'temps_restant' =>$this->munite
            ]);
        }
        return view('livewire.decrematation');
    }
}
