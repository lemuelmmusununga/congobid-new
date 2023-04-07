<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CounteMumberSalon extends Component
{
    public $articles ,$getcount='',$count = 0 ,$prix;
    public function mount($articles){
        $this->articles = $articles;
    }

    public function render()
    {
        $this->count += (10 *$this->prix );
        $this->getcount;
        return view('livewire.counte-mumber-salon');
    }
}
