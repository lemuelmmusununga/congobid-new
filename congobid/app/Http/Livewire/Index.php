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
use App\Models\Favoris;
use App\Models\PivotBideurEnchere;
use Livewire\WithPagination;
use App\Models\PivotClientsSalon;
use App\Models\Roi;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
use WithPagination;
protected $paginationTheme = 'bootstrap';
    public $search ='',$getart,$favoris;
    public $article = '';
    public $participer ='';
    public $iids,$like=0,$counter_like,$favori_enchere,$favori_user,$favori_favori,$pivot;

    public $artis='';
    public $getEnchere=[];

    public function mount(){

        // $this->article = Article::all();

        $this->getEnchere = Enchere::all();
    //    $l= $this->getEnchere->pivotbideurenchere->where('user_id',Auth::user()->id)->first();


    }
    public function edit($id){
        // envoyer id vers le modal
        $idmodal = Article::where('id', $id)->first();
        $this->participer = $idmodal->id;
       }
    public function participer($user , $enchere){
        dd($user , $enchere);
    }
    public function like($id,$rec,$enchere){
        $verify = PivotBideurEnchere::where('enchere_id',$enchere)->where('user_id',Auth::user()->id)->first();
        $favoris = Favoris::where('enchere_id',$enchere)->where('user_id',Auth::user()->id)->first();

        if ($verify != null) {

            $like = PivotBideurEnchere::where('enchere_id',$enchere)->where('user_id',Auth::user()->id)->first();
            $article_add_like = Enchere::where('id',$like->enchere_id)->first();

            if ($like->favoris == 0) {
                $like->update([
                    'favoris'=> 1
                ]);
                if ($favoris->favoris == 0) {
                    $favoris->update([
                        'favoris'=> 1
                    ]);
                }else{
                    $favoris->update([
                        'favoris'=> 0
                    ]);
                }

                $article_add_like->update([
                    'favoris'=>$article_add_like->favoris + 1
                ]);

                if (Auth::user()->id == $this->favoris->user_id || Auth::user()->id != $this->favoris->user_id && $this->favoris->enchere_id != $enchere) {
                    $user=Favoris::create([
                        'favoris'=> 1,
                        'enchere_id'=>$enchere,
                        'user_id'=>Auth::user()->id,
                    ]);

                }

            } else {
                    $like->update([
                        'favoris'=> 0
                    ]);
                    $article_add_like->update([
                        'favoris'=>$article_add_like->favoris -1
                ]);
                if ($favoris->favoris == 0) {
                    $favoris->update([
                        'favoris'=> 1
                    ]);
                }else{
                    $favoris->update([
                        'favoris'=> 0
                    ]);
                }
            }
        }else{
            $favoris = Favoris::where('enchere_id',$enchere)->where('user_id',Auth::user()->id)->first();
            $article_add_like = Enchere::where('id',$enchere)->first();

            if ($favoris != null) {
                if ($favoris->favoris == 0 ) {
                   $favoris->update([
                        'favoris'=> 1
                    ]);
                    $article_add_like->update([
                        'favoris'=>$article_add_like->favoris + 1
                    ]);
                }
                else {
                    $favoris->update([
                        'favoris'=> 0
                    ]);
                    $article_add_like->update([
                        'favoris'=>$article_add_like->favoris -1
                    ]);
                }
            }else{
                $user=Favoris::create([
                    'favoris'=> 1,
                    'enchere_id'=>$enchere,
                    'user_id'=>Auth::user()->id,
                ]);
                $article_add_like->update([
                    'favoris'=>$article_add_like->favoris + 1
                ]);
            }

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
        if (Auth::user()) {
            # code...
            $this->favoris = Favoris::where('user_id',Auth::user()->id)->first();
        }

        $paquets = Paquet::where('statut_id', '3')->get();
        $communique = $communique->message ?? null;
        $user = Pivotbideurenchere::all();

        $Categories = Article::where('titre','like',"%{$this->search}%")->orwhere('marque',"%{$this->search}%")->get();

        return view('livewire.index', compact('promotions', 'articles', 'paquets', 'communique', 'Categories','user'));
    }
}
