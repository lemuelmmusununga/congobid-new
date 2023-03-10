<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

use App\Models\Bideur;
use App\Models\Categorie;
use App\Models\Salon;
use App\Models\Statut;
use App\Models\Paquet;
use App\Models\Communique;
use App\Models\Enchere;
use App\Models\Favoris;
use App\Models\PivotBideurEnchere;
use Livewire\WithPagination;
use App\Models\PivotClientsSalon;
use App\Models\Roi;
use Illuminate\Support\Facades\Auth;
use App\Models\Foudre;
use App\Models\Bouclier;

class AllArticles extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $search ='',$getart,$favoris;
    public $article = '';
    public $participer ='',$roi,$foudre,$bouclier,$idss;
    public $iids,$like=0,$counter_like,$favori_enchere,$favori_user,$favori_favori,$pivot,$boucliers;

    public function mount($ids){
        $this->idss=$ids;
    }

    public function render()
    {
        $communique = Communique::where('statut_id', '3')->get()->first();
        // $communique == null ? null : $communique->message;
        $promotions = Article::where('statut_id', '3')->where('promouvoir', '1')->get();
        $articles = Article::where('marque','like',"%{$this->search}%")->where('categorie_id',$this->idss)->paginate(30);
        dd($articles,$this->ids);
        if (Auth::user()) {
            # code...
            $this->favoris = Favoris::where('user_id',Auth::user()->id)->first();
        }

        $paquets = Paquet::where('statut_id', '3')->get();
        $communique = $communique->message ?? null;
        $user = Pivotbideurenchere::all();

        $Categories = Article::where('titre','like',"%{$this->search}%")->orwhere('marque',"%{$this->search}%")->get();

        return view('livewire.articles.all-articles',compact('promotions', 'articles', 'paquets', 'communique', 'Categories','user'));
    }
}
