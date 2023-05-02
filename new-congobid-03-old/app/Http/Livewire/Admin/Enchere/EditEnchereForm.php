<?php

namespace App\Http\Livewire\Admin\Enchere;

use App\Models\Article;
use App\Models\Statut;
use Livewire\Component;

class EditEnchereForm extends Component
{
    public $articles, $article, $statuts, $marque, $prix, $prix_marche, $categorie;
    public $enchere;


    public function mount($enchere)
    {
        $this->enchere = $enchere;
        $this->article = $enchere->article_id;
        $this->marque = $enchere->article->marque;
        $this->prix = $enchere->article->prix;
        $this->prix_marche = $enchere->article->prix_marche;
        $this->categorie = $enchere->article->categorie->libelle;
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
        return view('livewire.admin.enchere.edit-enchere-form');
    }
}
