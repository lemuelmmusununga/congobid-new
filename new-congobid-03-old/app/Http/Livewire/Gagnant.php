<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Enchere;
use App\Models\Encheregagner;

class Gagnant extends Component
{
    public $article,$enchere,$gagnant;
    public function mount(){
      
        $this->enchere = Enchere::where('id',$this->article)->first();

    }
    public function render()
    {
        $this->gagnant = Encheregagner::where('enchere_id',$this->enchere->id)->first();
        return view('livewire.gagnant');
    }
}
