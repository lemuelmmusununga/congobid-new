<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Countdown extends Component
{
    public $count = 1;
    public $table = [5,5,10];
 

   public function fetchData(){

        for ($i=0; $i < 10 ; $i++) {
            $this->count +=1;
        }

   }

    public function render()
    {
        return view('livewire.countdown');
    }
}
