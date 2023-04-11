<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CounteMumberSalon extends Component
{
    public $articles ,$getcount=1,$count = 0;
    public $prises;
    public function mount($articles){
        $this->articles = $articles;
    }

    public function render()
    {   
        dump($this->prises);
        $this->count += round((10*(($this->prises >1 ? $this->prix : 1 )/($this->getcount >=1 ? $this->getcount : 1 )))) ;
       
        return view('livewire.counte-mumber-salon');
    }
}
