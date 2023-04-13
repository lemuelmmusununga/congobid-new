<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CounteMumberSalon extends Component
{
    public $getcount=1,$count ;
    public $prises,$article;
    public function mount($article){
       $this->prises = $article->prix;
    }

    public function render()
    {   
        $this->count = round((10*(($this->prises )/($this->getcount >=1 ? $this->getcount : 1 )))) ;
       
        return view('livewire.counte-mumber-salon');
    }
}
