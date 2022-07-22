<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Paquet;
use App\Models\Faq;
use App\Models\Politique;
use App\Models\Condition;
use App\Models\Contact;
use App\Models\Enchere;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function index(){


        $paquets = Paquet::where('statut_id', '3')->get();
        $articles = Article::where('statut_id', '3')->paginate(1);
        $page = 2;

        foreach ($articles as $article) {
            $temps_restant_heure = (now()->format('H') - date('H', strtotime($article->enchere->heure_debut))) ;
            $temps_restant_minute = (now()->format('i') - date('i', strtotime($article->enchere->heure_debut)));

            $temps_restant_heure_minute = ($temps_restant_heure * 60) + $temps_restant_minute;

            $temps_restant_total = $article->paquet->duree - $temps_restant_heure_minute ;

            if (($temps_restant_total >= 0) && ($temps_restant_total <= $article->paquet->duree)) {
                Enchere::where('id', $article->enchere->id)->update([
                    'state' => '1',
                ]);

                // dd($temps_restant_total >= 0, $temps_restant_total <= $article->paquet->duree);
            } else {
                Enchere::where('id', $article->enchere->id)->update([
                    'state' => '0',
                ]);
            }
        }

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
    public function sendContact( Request $request){
        $user = Contact::create([
            'nom'=>$request->get('nom'),
            'telephone'=>$request->get('telephone'),
            'content'=>$request->get('content'),
            'email'=>$request->get('email'),

        ]);
        return redirect()->back()->with('success','La requette a ete envoyer a vec succes');
    }
}
