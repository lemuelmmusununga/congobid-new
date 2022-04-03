<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Bideur;
use App\Models\Categorie;
use App\Models\Salon;
use App\Models\Statut;
use App\Models\Paquet;
use App\Models\Communique;
use App\Models\Enchere;
use App\Models\PivotBideurEnchere;
use Livewire\WithPagination;
use App\Models\PivotClientsSalon;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
use WithPagination;
protected $paginationTheme = 'bootstrap';
    public $search ='';
    public $article = '';
    public $participer ='';
    public $iids,$like=0,$counter_like;

    public $artis='';
    public $getEnchere=[];

    public function mount(){
        $this->article = Article::all();
        $this->getEnchere = Enchere::all();
    }
    public function edit($id){
        // envoyer id vers le modal
        $idmodal = Article::where('id', $id)->first();
        $this->participer = $idmodal->id;
       }

    public function like($id, $state){
        $find = PivotBideurEnchere::where('id', $id)->first();
        // dd($state);
        if ($state == 1) {
            if ($find->favoris == 0) {
                $this->like = 1;
                $find->update([
                    'favoris' => $this->like,
                ]);
            } else {
                // dd('hello !');
                $this->like = 0;
                $find->update([
                    'favoris' => $this->like,
                ]);
            }
            $this->counter_like = $find->favoris;
        } else {
            $this->like = 1;
            $find = PivotBideurEnchere::create([
                'favoris' => $this->like,
                'enchere_id' => $id,
                'statut_id' => 3,
                'user_id' => Auth::user()->id,
            ]);
            $this->counter_like = $find->favoris;
        }
    }
    public function cutbid($id){

// cette consiste a couper les bid
        $find = Bideur::where('user_id', auth()->user()->id)->first();
        // dd($find);
        if ($find->paquet_id == 2 && $find->balance > 20) {
            $this->cutbid =$find->favoris - 20;
            $find->update([
                'balance' =>$this->cutbid,
            ]);
            return view('pages.detail-enchere',compact('id'));
        }
        else if ($find->paquet_id == 3 && $find->balance > 30) {
            $this->cutbid =$find->favoris - 30;
            $find->update([
                'balance' =>$this->cutbid,
            ]);
            return view('pages.detail-enchere',compact('id'));
        }
        else if ($find->paquet_id == 1) {
            return view('pages.detail-enchere',compact('id'));
        }




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

        return view('livewire.index', compact('promotions', 'articles', 'paquets', 'communique', 'Categories'));
    }
}
