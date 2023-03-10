<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Salon;
use App\Models\Statut;

class Seach extends Component
{
    public $search ='';

    public function mount(){
       $articles= Article::OrderBy('id','DESC')->paginate(30);
    }

    public function render()
    {
        return view('livewire.seach',[
            'articles' => Article::where('titre','like',"%{$this->search}%")->orwhere('marque',"%{$this->search}%")->get(),
            'Categories' => Categorie::where('libelle','like',"%{$this->search}%")->get()
        ]);
    }
}
