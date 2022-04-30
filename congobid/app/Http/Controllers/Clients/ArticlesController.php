<?php

namespace App\Http\Controllers\Clients;
use App\Models\Article;
use App\Models\Categorie;
use App\Http\Controllers\Controller;
use App\Models\Paquet;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ArticlesController extends Controller
{
    //
    public function index(){

        $articles = Article::OrderBy('id','DESC')->paginate(30);

        return view('pages.index',compact('articles'));
    }

    public function articles(){

        $categories = Paquet::all();
        $articles= Article::OrderBy('id','DESC')->paginate(1);

        return view('pages.articles',compact('articles','categories'));
    }

    public function ArticlesCategorie($id){
        $id_paquet = $id;

        $categories = Categorie::where('id',$id)->first();

        // $articles  = Article::where('categorie_id',$id)->get();
        return view('pages.categorie-details',compact('categories','id_paquet','id'));
    }
// l'id provient de la page detail categorie
    public function ArticlesAll($id,$id_categorie){
        $ids=$id_categorie;

        $articles  = Article::where('categorie_id',$id_categorie)->orderby('id','DESC')->get();

        return view('pages.all-articles',compact('articles','ids','id_categorie'));
    }
    //detail article
    public function detailArticle($id,$name){
        $article = Article::where('id',$id)->first();
        return view('pages.detail-article',compact('article'));
    }
    public function etailArticleSalon($id,$name){
        $article = Article::where('id',$id)->first();

        return view('pages.detail-article',compact('article'));
    }
}
