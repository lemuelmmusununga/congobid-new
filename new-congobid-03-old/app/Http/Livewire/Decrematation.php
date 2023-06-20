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
    public $munite,$munites,$prixInc,$prixMut,$tackClicks,$nouvPrix,$click_live,$incrementation_prix,$times=0,$interval ,$progresse,$click_auto, $val,$heure_enchere,$solde_bonus,$getart,$enchere,$temps_auto,$date_enchere,$heures_enchere ,$somme_temps_passer,$incrementation=0,$listes,$add;
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
        $this->click_auto = Click_auto::where('paquet_id',$this->enchere?->paquet?->id)->first();
    }
    public function render()
    {

        $this->enchere = Enchere::where('article_id',$this->getart)->first();
        $this->date_enchere = $this->enchere->date_debut ?? '' ;
        $this->heure_enchere = $this->enchere->heure_debut  ?? '' ;


        $this->munites = $this->enchere->munite ?? '';
        $this->interval = 1000;
        // intval($this->times) = $this->enchere->seconde;

        $this->somme_temps_passer = intval($this->times) + intval($this->munites) * 60;

        $option = [];

        if ($this->somme_temps_passer >=1  ) {
            # code...
            // mis a jour du temps restant
            if(intval($this->times) == 0){
                $this->times =59;
                $this->munite =$this->enchere->munite - 1;
                    $this->enchere->update([
                    'munite' =>$this->enchere->munite - 1,
                    'seconde'=>intval($this->times),
                ]);
            }else{
                $this->tackClicks = PivotBideurEnchere::where('enchere_id',$this->enchere->id)->sum('click_seconde');
                if($this->tackClicks > 0){
                    $temps = ($this->enchere->munite * 60) + $this->times;
                    if ($this->tackClicks >= 1) {

                        $this->prixInc = $this->enchere?->article?->prix_precedent / ($this->tackClicks * ($temps == 0 ? 1 : $temps));
                        $this->prixMut = $this->prixInc * $this->tackClicks;

                        $this->nouvPrix = $this->enchere->article->prix_precedent - $this->prixMut;
                        $this->enchere->article->update([
                            'prix_precedent' => $this->nouvPrix,
                        ]);
                    }
                    $this->enchere->update([
                        'prix_enchere' => $this->enchere->prix_enchere +  $this->prixMut
                    ]);


                //   dump($this->tackClicks ,$this->times, $this->prixMut,$this->prixInc ,$this->enchere->article->prix_precedent);
                }
                $this->times =intval($this->times)-1;
                $this->enchere->update([
                    'seconde'=>intval($this->times),
                ]);
                if (Auth::user() ) {
                    $this->click_live =
                    Pivotbideurenchere::where('enchere_id', $this->enchere->id ?? '')
                    ->get();
                }
                if ($this->click_live != null) {
                    # code...
                    foreach ($this->click_live as $key => $click) {
                        # code...

                        $click->update([
                            'click_seconde'=>0
                        ]);
                    }
                }
                if(Auth::user()){
                $pivot = Pivotbideurenchere::where('enchere_id',$this->enchere->id)->where('user_id',Auth::user()->id)->get();
                $option = Auth::user()->pivotbideurenchere->where('enchere_id',$this->enchere->id)->first() ;
                }

                if ($option != null && Auth::user() && $option->time_foudre  > 0 &&  $option->foudre == 1 ) {
                    $decremention = intval($option->time_foudre) - 1 ;
                    $option->update([
                        'time_foudre' => $decremention
                    ]);
                }elseif($option != null && Auth::user() && $option->time_foudre == 0 &&  $option->foudre == 1 ){
                    $option->update([
                        'foudre' =>intval($option->foudre) - 1
                    ]);
                }
                if ($option != null && Auth::user() && $option->time_bouclier > 0 ) {
                    $decremention = intval($option->time_bouclier) - 1 ;
                    $option->update([
                        'time_bouclier' => $decremention
                    ]);

                }
                if (Auth::user() && Auth::user()->pivotbideurenchere->count() > 0) {
                    if ( Auth::user()->pivotbideurenchere?->where('enchere_id',$this->enchere->id)->first()->temps_bid_auto  >= 1) {
                        # code...
                        $auto = Auth::user()->pivotbideurenchere->where('enchere_id',$this->enchere->id)->first();
                        // dump($this->val =  $auto->valeur + 5);
                            $this->val =  $auto->valeur + 5;
                            $auto->update([
                                'valeur'=> $this->val,
                                'temps_bid_auto' => intval($auto->temps_bid_auto) - 1,
                            ]);
                            // je dois revenir ici pour le rendre dynamique
                            $this->temps_auto = intval($this->temps_auto) - 1;
                            $this->enchere->update([
                                'munite' =>$this->munite,
                                'seconde'=>intval($this->times),
                            ]);
                    }
                }
            }
            // $this->progresse = (($this->enchere->munite * 60 + ($this->enchere->seconde )) /($this->enchere->paquet?->duree * 60) ) *100  ;

        }else{

            $this->enchere->update([
                'state' =>0,
            ]);

        }
        // $this->counter = $valeur->valeur ?? '0';
        if (Auth::user()) {
           $this->incrementation =$this->enchere?->article?->prix;
        # code...
        $this->solde_bonus = Bideur::where('user_id',Auth::user()->id)->first();
        $echeance_bid_auto = Auth::user()->pivotbideurenchere->where('enchere_id',$this->enchere->id)->first()->time_bid_auto ?? '';
       }

        return view('livewire.decrematation');
    }
}
