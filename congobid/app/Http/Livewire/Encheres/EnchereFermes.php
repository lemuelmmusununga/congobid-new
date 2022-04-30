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
use App\Models\PivotBideurEnchere;
use App\Models\Favoris;
use Illuminate\Support\Facades\Auth;

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
    public function like($id,$rec,$enchere)
    {
        $verify = PivotBideurEnchere::where('enchere_id',$enchere)->where('user_id',Auth::user()->id)->first();
        $favoris = Favoris::where('enchere_id',$enchere)->where('user_id',Auth::user()->id)->first();
        $enchere_favoris = Enchere::where('id',$enchere)->first();
        if ($favoris != null  ) {
            if ($favoris->favoris < 1) {
                $favoris->update([
                    'favoris' => 1
                ]);
                $enchere_favoris->update([
                    'favoris'=> $enchere_favoris->favoris +1
                ]);
            } else {
                $favoris->update([
                    'favoris' => 0
                ]);
                $enchere_favoris->update([
                    'favoris'=> $enchere_favoris->favoris -1
                ]);
            }


        } else {
            $favoris = Favoris::create([
                'favoris' => 1,
                'user_id'=>Auth::user()->id,
                'enchere_id'=>$enchere,
            ]);
            $enchere_favoris->update([
                'favoris'=> $enchere_favoris->favoris +1
            ]);
        }

        if ($verify != null  ) {
            if ($verify->favoris < 1) {
                $verify->update([
                    'favoris' => 1
                ]);
            } else {
                $verify->update([
                    'favoris' => 0
                ]);
            }
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
        return view('livewire.encheres.enchere-fermes',compact('promotions', 'articles', 'paquets', 'communique', 'Categories'));
    }
}
