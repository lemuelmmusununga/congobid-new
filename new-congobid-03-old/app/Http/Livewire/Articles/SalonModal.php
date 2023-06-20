<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class SalonModal extends Component
{
    public $salon_id ,$salon,$prix=0,$nombre = 1,$tempsalon= 1 ;
    public function render()
    {
        $this->salon = Article::where('id',$this->salon_id)->first();
        if ($this->salon->prix > 0 && $this->nombre > 0) {
            # code...
            $div =$this->salon->prix / $this->nombre;
            $this->prix = $div * 2;
            dump( $this->prix );
        } else {
            # code...
            $div = 1;
            $this->prix = $this->salon->prix *2 ;
            dump( $this->prix );
        }
        return view('livewire.articles.salon-modal');
    }
}
