<?php

namespace App\Http\Livewire;

use App\Models\Paquet;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class SendOption extends Component
{
    public $options,$tape=0,$taperoiSimba=0,$taperoiSukisa=0,
    $taperoiBulldozer=0,$taperoiTurbo=0,$taperoiBenda=0;
    public $tapeFoudreSimba=0,$tapeFoudreSukisa=0,
    $tapeFoudreBulldozer=0,$tapeFoudreTurbo=0,$tapeFoudreBenda=0;
    public $tapeBouclierSimba=0,$tapeBouclierSukisa=0,
    $tapeBouclierBulldozer=0,$tapeBouclierTurbo=0,$tapeBouclierBenda=0;
    public $tapeClickSimba=0,$tapeClickSukisa=0,
    $tapeClickBulldozer=0,$tapeClickTurbo=0,$tapeClickBenda=0;
    public function addClick(){
        $this->tape +=1;
    }
    // roi
    public function addClickRoiSimba(){
       try{
            if(Auth::user()->options->where('paquet_id',1)->first()->roi > $this->taperoiSimba){
                $this->taperoiSimba +=1;
            }
        
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickRoiBenda(){
        try {
           
            if(Auth::user()->options->where('paquet_id',2)->first()->roi > $this->taperoiBenda){

                $this->taperoiBenda +=1;
            }
        
        } catch (\Throwable $th) {
            return back();
        }
    }
    public function addClickRoiTurbo(){
       try{
        if(Auth::user()->options->where('paquet_id',3)->first()->roi > $this->taperoiTurbo){

        $this->taperoiTurbo +=1;
       }
    }catch(\Throwable $th){
        return back();
    }
    }
    public function addClickRoiBulldozer(){
       try{
        if(Auth::user()->options->where('paquet_id',4)->first()->roi > $this->taperoiBulldozer ){

        $this->taperoiBulldozer +=1;
       }
    }catch(\Throwable $th){
        return back();
    }
    }
    public function addClickRoiSukisa(){
       try{
        if(Auth::user()->options->where('paquet_id',5)->first()->roi > $this->taperoiSukisa){

        $this->taperoiSukisa +=1;
       }
    }catch(\Throwable $th){
        return back();
    }
    }
    // endROi
    // Foudre
    public function addClickFoudreSimba(){
        try{
            if(Auth::user()->options->where('paquet_id',1)->first()->foudre > $this->tapeFoudreSimba){
                $this->tapeFoudreSimba +=1;
            }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickFoudreBenda(){
        try{
            if(Auth::user()->options->where('paquet_id',2)->first()->foudre > $this->tapeFoudreBenda){
                $this->tapeFoudreBenda +=1;
            }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickFoudreTurbo(){
        try{
            if(Auth::user()->options->where('paquet_id',3)->first()->foudre > $this->tapeFoudreTurbo){
                $this->tapeFoudreTurbo +=1;
            }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickFoudreBulldozer(){
        try{
            if(Auth::user()->options->where('paquet_id',4)->first()->foudre > $this->tapeFoudreBulldozer){
                $this->tapeFoudreBulldozer +=1;
            }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickFoudreSukisa(){
        try{
            if(Auth::user()->options->where('paquet_id',5)->first()->foudre > $this->tapefoudreSukisa){
                $this->tapeFoudreSukisa +=1;
            }
        }catch(\Throwable $th){
            return back();
        }
    }
    // endFoudre
    // Click
    public function addClickClickSimba(){
        try{
            if(Auth::user()->options->where('paquet_id',1)->first()->click > $this->tapeClickSimba){
                $this->tapeClickSimba +=1;
            }
        }catch(\Throwable $th){
            return back();
        }
        
    }
    public function addClickClickBenda(){
        try{
            if(Auth::user()->options->where('paquet_id',2)->first()->click > $this->tapeClickBenda){
        $this->tapeClickBenda +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickClickTurbo(){
        try{
            if(Auth::user()->options->where('paquet_id',3)->first()->click > $this->tapeClickTurbo){
        $this->tapeClickTurbo +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickClickBulldozer(){
        try{
            if(Auth::user()->options->where('paquet_id',4)->first()->click > $this->tapeClickBulldozer){
        $this->tapeClickBulldozer +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickClickSukisa(){
        try{
            if(Auth::user()->options->where('paquet_id',5)->first()->click > $this->tapeClickSukisa){
        $this->tapeClickSukisa +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    // endClick
    // Bouclier
    public function addClickBouclierSimba(){
        try{
            if(Auth::user()->options->where('paquet_id',1)->first()->bouclier > $this->tapeBouclierSimba){
                $this->tapeBouclierSimba +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickBouclierBenda(){
        try{
            if(Auth::user()->options->where('paquet_id',2)->first()->bouclier > $this->tapeBouclierBenda){
        $this->tapeBouclierBenda +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickBouclierTurbo(){
        try{
            if(Auth::user()->options->where('paquet_id',3)->first()->bouclier > $this->tapeBouclierTurbo){
        $this->tapeBouclierTurbo +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickBouclierBulldozer(){
        try{
            if(Auth::user()->options->where('paquet_id',4)->first()->bouclier > $this->tapeBouclierBulldozer){
        $this->tapeBouclierBulldozer +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    public function addClickBouclierSukisa(){
        try{
            if(Auth::user()->options->where('paquet_id',5)->first()->bouclier > $this->tapeBouclierSukisa){
        $this->tapeBouclierSukisa +=1;
           }
        }catch(\Throwable $th){
            return back();
        }
    }
    // endBouclier
    public function render()
    {
        $this->options = Paquet::all();
        return view('livewire.send-option');
    }
}
