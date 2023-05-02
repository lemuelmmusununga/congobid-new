<?php

namespace App\Http\Livewire\Admin\Enchere;

use App\Models\Article;
use App\Models\Statut;
use Livewire\Component;

class AddEnchereForm extends Component
{
    public $articles, $article, $statuts, $marque, $prix, $prix_marche, $categorie;


    public function mount()
    {
        $this->statuts = Statut::orderBy('id', 'desc')->get();
        $this->articles = Article::orderBy('titre', 'asc')->get();
    }
    public function updatedArticle()
    {
        $article = Article::find($this->article);
        $this->prix = $article->prix;
        $this->prix_marche = $article->prix_marche;
        $this->categorie = $article->categorie->libelle;
        $this->marque = $article->marque;
    }

    public function render()
    {
        return view('livewire.admin.enchere.add-enchere-form');
    }
}
