<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
class ModalIndex extends Component
{
    public $idmodal,$article,$pivot,$show = false,$articleId;

    public function mount(){
        dump($this->articleId);
        
    }
    public function getId($articleId){
        
    }
    public function render()
    {
        $this->idmodal;
        $this->articleId;
        $this->article =  Article::where('id', $this->idmodal)->first();
        if ($this->article) {
            $this->pivot =$this->article->enchere?->pivotbideurenchere->where('enchere_id', $this->article->enchere?->id)->where('user_id', Auth::user()->id)->first() ?? '';                                    
        }
        return view('livewire.modal-index');
    }
}
