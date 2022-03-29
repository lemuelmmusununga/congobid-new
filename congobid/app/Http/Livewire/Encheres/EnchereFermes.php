<?php

namespace App\Http\Livewire\Encheres;

use Livewire\Component;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Salon;
use App\Models\Statut;
use App\Models\Paquet;
use App\Models\Communique;
use App\Models\Enchere;
use Livewire\WithPagination;
use App\Models\PivotClientsSalon;

class EnchereFermes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
        public $search ='';
        public $article = '';
        public $participer ='';
        public $iids;
        public $artis='';
        public $getEnchere=[];

        public function mount(){
            $this->article = Article::all();
            $this->getEnchere = Enchere::all();
        }
        public function edit($id){
            // envoyer id vers le modal
            $idmodal = Article::where('id',$id)->first();
            $this->participer = $idmodal->id;
           }
    public function render()
    {
        $this->v = $this->iids;
        $communique = Communique::where('statut_id', '3')->get()->first();
        // $communique == null ? null : $communique->message;
        $promotions = Article::where('statut_id', '3')->where('promouvoir', '1')->get();
        $articles = Article::where('marque','like',"%{$this->search}%")->paginate(30);
        $paquets = Paquet::where('statut_id', '3')->get();
        $communique = $communique->message ?? null;

        $Categories = Article::where('titre','like',"%{$this->search}%")->orwhere('marque',"%{$this->search}%")->get();
        return view('livewire.encheres.enchere-fermes',compact('promotions', 'articles', 'paquets', 'communique', 'Categories'));
    }
}
