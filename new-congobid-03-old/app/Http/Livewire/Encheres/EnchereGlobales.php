<?php
namespace App\Http\Livewire\Encheres;

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
use App\Models\Foudre;
use App\Models\Bouclier;
use App\Models\SalonLike;
use App\Models\User;

class EnchereGlobales extends Component
{
use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search ='',$getart,$favoris,$mod="bonjour";
    public $article = '';
    public $participer ='',$roi,$foudre,$bouclier,$addbid;
    public $incrementation=0,$v,$cutbid,$iids,$like=0,$counter_like,$munite,$times=0,$favori_enchere,$favori_user,$favori_favori,$pivot,$boucliers;
    public $idmodal,$selectedArticleId;
    public $artis='',$favoris_salon;
    public $getEnchere=[],$salons;
    public $sendId,$showDetailModal;

    protected $listeners = ['showModal' => 'showModal'];

    public function showModal($id)
    {
        $this->sendId = $id;
    }
    public function mount(){
        // dd(Auth::user()->pivotbideurenchere->first()->roi ?? '');
        // $this->article = Article::all();
        $this->salons = Salon::where('created_at','>',now()->addDays(1)->format('d-m-y H:i:s'))->get();
        if (Auth::user()) {
            $this->addbid = User::where('id',Auth::user()->id)->first();
            $bideur = Bideur::where('user_id',Auth::user()->id)->first();
            if ($this->addbid->user_conneted_at == null) {
                $this->addbid->update([
                    $this->addbid->user_conneted_at =now()
                ]);
            }
            $heur_acces = now()->format('H') - date('H',strtotime($this->addbid->user_conneted_at));
            if (now()->format('i') > date('i',strtotime($this->addbid->user_conneted_at))) {
                $munite_acces = now()->format('i') - date('i',strtotime($this->addbid->user_conneted_at));
            } else {
                $munite_acces = date('i',strtotime($this->addbid->user_conneted_at))-now()->format('i');
            }
            if (date('d-m-Y',strtotime($this->addbid->user_conneted_at)) == now()->format('d-m-Y') && $munite_acces==5) {
               $balance = $bideur->balance + 10;
                $bideur->update([
                    'balance' =>$balance
                ]);
            }
        }

        if (Auth::user() && Auth::user()->pivotbideurenchere != null) {
            # code...
            $this->roi = Roi::where('paquet_id',Auth::user()->pivotbideurenchere->first()->roi ?? '')->first();
            $this->bouclier = Bouclier::where('paquet_id',Auth::user()->pivotbideurenchere->first()->bouclier ?? '')->first();
            $this->foudre = Foudre::where('paquet_id',Auth::user()->pivotbideurenchere->first()->foudre ?? '')->first();
        }
        $this->getEnchere = Enchere::all();
    //    $l= $this->getEnchere->pivotbideurenchere->where('user_id',Auth::user()->id)->first();
    }

    public function edit($id){
        // envoyer id vers le modal
        $this->participer =Article::where('id', $id)->first() ;
        $this->idmodal = $id;

    }

    public function likeSalon($id,$rec,$salon)
    {
        //$verify_salon = SalonLike::where('salon_id',$salon)->where('user_id',Auth::user()->id)->first();
        $this->favoris_salon = SalonLike::where('salon_id',$salon)->where('user_id',Auth::user()->id)->first();
        $enchere_favoris_salon = Enchere::where('id',$this->favoris_salon->enchere_id)->first();

       if ($this->favoris_salon != null  ) {
           if ($this->favoris_salon->favoris == 0) {

                $this->favoris_salon->update([
                    'favoris' => 1
                ]);
                $enchere_favoris_salon->update([
                    'favori_salon'=> $enchere_favoris_salon->favori_salon +1
                ]);
           } else {

                $this->favoris_salon->update([
                    'favoris' => 0
                ]);
                $enchere_favoris_salon->update([
                    'favori_salon'=> $enchere_favoris_salon->favori_salon -1
                ]);
           }


       } else {
            $favoris = SalonLike::create([
                'favoris' => 1,
                'user_id'=>Auth::user()->id,
                'salon_id'=>$salon,
                'enchere_id' =>$enchere_favoris_salon->id
            ]);
            $enchere_favoris_salon->update([
                'favori_salon'=> $enchere_favoris_salon->favori_salon +1
            ]);
       }


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
    public function paquet($paquet){
        $this->boucliers = Bouclier::where('paquet',$paquet)->first() ;
    }
    public function render()
    {
        $this->v = $this->iids;
        $this->sendId ;
        $communique = Communique::where('statut_id', '3')->get()->first();
        // $communique == null ? null : $communique->message;
        $promotions = Article::where('statut_id', '3')->where('promouvoir', '1')->get();
        $articles = Article::where('marque','like',"%{$this->search}%")->get();
        // $this->salons = Article::all();
        if (Auth::user()) {
            # code...
            // $this->favoris = Favoris::where('user_id',Auth::user()->id)->first();
            $this->addbid->update([
                'connected_at'=> 1
            ]);
        }
        $enchere= Enchere::where('date_debut',now()->format('Y-m-d'))->where('heure_debut','<=',now()->format('H:i'))->first();
        if ($enchere != null) {
            $enchere->update([
                'state'=>1
            ]);
        }
        $paquets = Paquet::where('statut_id', '3')->get();
        $communique = $communique->message ?? null;
        $user = Pivotbideurenchere::all();
        $this->article =  Article::where('id', $this->idmodal)->first();
        if ($this->article) {
            $this->pivot =$this->article->enchere?->pivotbideurenchere->where('enchere_id', $this->article->enchere?->id)->where('user_id', Auth::user()->id)->first() ?? '';
        }
        $this->showDetailModal = Article::where('id', $this->sendId)->first();
        $this->sendId;
        $Categories = Article::where('titre','like',"%{$this->search}%")->orwhere('marque',"%{$this->search}%")->get();
        return view('livewire.encheres.enchere-globales', compact('promotions', 'articles', 'paquets', 'communique', 'Categories','user'));
    }
}
