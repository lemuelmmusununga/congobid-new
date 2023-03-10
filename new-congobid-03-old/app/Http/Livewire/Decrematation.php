<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PivotBideurEnchere;
use App\Models\Bideur;
use App\Models\Enchere;
use App\Models\Encheregagner;
use Illuminate\Support\Facades\Auth;
use App\Models\Click_auto;
class Decrematation extends Component
{
    public $munite,$times=0,$progresse,$getart,$click_live,$incrementation_prix,$enchere,$temps_auto,$date_enchere,$heures_enchere ,$somme_temps_passer,$incrementation=0,$listes,$add;
    // public function mount($getart){
    //     $this->enchere = Enchere::where('id',$this->getart)->first();

    //     $this->$getart = $getart;
    // }
    public function mount(){

        if ($this->somme_temps_passer == 0  ) {
            $bideur =PivotBideurEnchere::where('enchere_id', $this->getart)->orderby('valeur','DESC')->first();
            $gagnant = Encheregagner::where('enchere_id', $this->getart)->first();
            if ($gagnant == null) {
                # code...
                Encheregagner::create([
                    'user_id'=>$bideur->user_id ?? '0',
                    'enchere_id'=>$bideur->enchere_id ?? '0',
                    'valeur_click'=>$bideur->valeur ?? '0',
                    'code'=> $bideur->enchere->article->code_produit ?? ''
                ]);
            }else{
                $gagnant->update([
                    'user_id'=>$bideur->user_id ?? '0',
                    'enchere_id'=>$bideur->enchere_id ?? '0',
                    'valeur_click'=>$bideur->valeur ?? '0',
                    'code'=>$bideur-> $bideur->enchere->article->code_produit ?? ''
                ]);
            }
        }
        $this->enchere = Enchere::where('id',$this->getart)->first();

        $this->times = $this->enchere->seconde ?? '';
        $this->munite = $this->enchere->munite ?? '';
        $this->listes= PivotBideurEnchere::where('enchere_id', $this->getart)->orderby('valeur','DESC')->get();
        $this->click_auto = Click_auto::where('paquet_id',$this->enchere->paquet->id)->first();
    }
    public function render()
    {
        $this->enchere = Enchere::where('id',$this->getart)->first();
        $this->date_enchere = $this->enchere->date_debut ;
        $this->heure_enchere = $this->enchere->heure_debut  ;

        if (Auth::user() ) {
            $this->click_live = PivotBideurEnchere::where('user_id',auth()->user()->id)->where('enchere_id',$this->getart)->first();

        }
        $this->munites = $this->enchere->munite;
        // $this->times = $this->enchere->seconde;
        $heur = now()->format('H') - date('H',strtotime($this->enchere->heure_debut));
        $munites =now()->format('i') - date('i',strtotime($this->enchere->heure_debut)) ;
        $secondes = now()->format('s') - date('s',strtotime($this->enchere->heure_debut));
        $this->somme_temps_passer = $this->times +$this->munites*60;
        $option = [];
        if ($this->somme_temps_passer >=1  ) {
            # code...
            // mis a jour du temps restant
            if($this->times == 0){
                $this->times =59;
                $this->munite =$this->enchere->munite - 1;
                    $this->enchere->update([
                    'munite' =>$this->enchere->munite - 1,
                    'seconde'=>$this->times,
                ]);
            }else{
                $this->times =$this->times-1;
                $this->enchere->update([
                    'seconde'=>$this->times,
                ]);

                if ($this->click_live != null) {
                    # code...
                    $this->click_live ->update([
                        'click_seconde'=>0
                    ]);
                }
                if(Auth::user()){
                $pivot = Pivotbideurenchere::where('enchere_id',$this->enchere->id)->where('user_id',Auth::user()->id)->get();
                $option = Auth::user()->pivotbideurenchere->where('enchere_id',$this->enchere->id)->first() ;
                }

                if ($option != null && Auth::user() && $option->time_foudre  > 0 &&  $option->foudre == 1 ) {
                    $decremention = $option->time_foudre - 1 ;
                    $option->update([
                        'time_foudre' => $decremention
                    ]);
                }elseif($option != null && Auth::user() && $option->time_foudre == 0 &&  $option->foudre == 1 ){
                    $option->update([
                        'foudre' =>$option->foudre - 1
                    ]);
                }
                if ($option != null && Auth::user() && $option->time_bouclier > 0 ) {
                    $decremention = $option->time_bouclier - 1 ;
                    $option->update([
                        'time_bouclier' => $decremention
                    ]);

                }
                if (Auth::user() && $pivot->count() > 0 && Auth::user()->pivotbideurenchere->where('enchere_id',$this->enchere->id)->first()->temps_bid_auto >= 1 && Auth::user()->pivotbideurenchere->where('enchere_id',$this->enchere->id)->first()->automatique == 1) {

                    $auto = Auth::user()->pivotbideurenchere->where('enchere_id',$this->enchere->id)->first();
                        $this->val =  $auto->valeur + 5;
                        $auto->update([
                            'valeur'=> $this->val,
                            'temps_bid_auto' => $auto->temps_bid_auto - 1,
                        ]);
                        // je dois revenir ici pour le rendre dynamique
                    $this->temps_auto = $this->temps_auto - 1;
                    $this->enchere->update([
                        'munite' =>$this->munite,
                        'seconde'=>$this->times,
                    ]);
                }
            }
        $this->progresse = (($this->enchere->munite * 60 + ($this->enchere->seconde )) /($this->enchere->paquet->duree * 60) ) *100  ;
        }else{
            $this->enchere->update([
                'state' =>0,
            ]);

        }
        // $this->counter = $valeur->valeur ?? '0';
        if (Auth::user()) {
           $this->incrementation =$this->enchere->article->prix;
        # code...
        $this->solde_bonus = Bideur::where('user_id',Auth::user()->id)->first();
        $echeance_bid_auto = Auth::user()->pivotbideurenchere->where('enchere_id',$this->getart)->first()->time_bid_auto ?? '';
       }
        return view('livewire.decrematation');
    }
}
