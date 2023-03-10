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
use App\Models\Notification;
use App\Models\Salon;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function index(){
        $publics = Notification::where('public',1)->get();

        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }else{
            $notifications = '';
        }
        $paquets = Paquet::where('statut_id', '3')->get();
        $articles = Article::where('statut_id', '3')->where('salon', 0)->get();
        $salons = Salon::where('state',0)->get();
        // $verifyDateSalon = Salon::where('created_at','>',now()->subDays(3))->get();
        $page = 2;
        return view('pages.index',compact('articles', 'notifications','publics','page', 'paquets','salons'));
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
