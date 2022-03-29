<?php

namespace App\Http\Controllers\Clients;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Paquet;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Politique;
use App\Models\Condition;

class IndexController extends Controller
{
    public function index(){

        $paquets = Paquet::where('statut_id', '3')->get();
        $articles = Article::where('statut_id', '3')->paginate(1);
        $page = 2;

        return view('pages.index',compact('articles', 'page', 'paquets'));
    }

    public function faq(){
        $faqs = Faq :: all();

        return view('pages.faq',compact('faqs'));

    }
    public function politique(){
        $polis = Politique :: all();

        return view('pages.politique',compact('polis'));

    }
    public function condition(){
        $condis = Condition::all();
        return view('pages.termes',compact('condis'));
    }

    public function contact(){

        return view('pages.contact');
    }
}
