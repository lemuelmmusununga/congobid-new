<?php

namespace App\Http\Controllers\Clients;
use App\Models\Article;
use App\Models\Categorie;
use App\Http\Controllers\Controller;
use App\Models\Paquet;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class ArticlesController extends Controller
{
    //
    public function index(){

        $articles = Article::OrderBy('id','DESC')->get();
        $publics = Notification::where('public',1)->get();
        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }else{
            $notifications = '';
        }
        return view('pages.index',compact('articles','publics','notifications'));
    }

    public function articles(){
        $categories = Categorie::all();
        $paquets = Paquet::all();
        $articles= Article::OrderBy('id','DESC')->paginate(1);
        return view('pages.articles',compact('articles','categories','paquets'));
    }

    public function ArticlesCategorie($id){
        $id_paquet = $id;
        //$categories = Categorie::where('categorieid',$id)->first();
        $categories = Categorie::where('categorie_id',$id)->get();
        // $categories = Categorie::where('categorie_id',$id)->get();
        return view('pages.categorie-details',compact('categories','id_paquet','id'));
    }
    public function sup($id)
    {
        $delete = Notification::where('id',$id)->first();

        $delete->delete();

        return back()->with('success', 'Notication supprimé avec succes !');
    }
    // l'id provient de la page detail categorie
    public function ArticlesAll($id,$id_paquet){
        // $articles  = Article::where('salon',1)->get();
        $nom ='bonjour';
        $articles  = Article::where('categorie_id',$id)->where('salon',1)->orderby('id','DESC')->get();
        return view('pages.detail',compact('articles','nom'));
    }
    //detail article0
    public function detailArticle($id,$name){
        // $article = Article::where('id',$id)->first();
        $article = Article::where('id',$id)->first();
        return view('pages.detail-article',compact('article'));
    }
    public function detailArticleSalon($id,$name){
        $publics = Notification::where('public',1)->get();

        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }else{
            $notifications = '';
        }
        $article = Article::where('id',$id)->first();

        return view('pages.detail-article',compact('article', 'notifications','publics'));
    }
}
