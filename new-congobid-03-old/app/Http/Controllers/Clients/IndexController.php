<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Bideur;
use App\Models\Paquet;
use App\Models\Faq;
use App\Models\Politique;
use App\Models\Condition;
use App\Models\Contact;
use App\Models\Enchere;
use App\Models\Notification;
use App\Models\PivotClientsSalon;
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
        $salons = Salon::whereDay('created_at','<=',now()->subDays(1)->format('d-m-y h:i:s'))->get();
        $verifyDateSalons = Salon::where('created_at','>',now()->subDays(1)->format('d-m-y h:i:s'))->get();
        if ($verifyDateSalons->count() > 0 ) {
            foreach ($verifyDateSalons as $key => $salon) {
            $checkPivots=PivotClientsSalon::where('salon_id',$salon->id)->get();
                foreach ($checkPivots as $key => $checkPivot) {
                    $getBideur = Bideur::where('user_id',$checkPivot->user_id)->first();
                    $getmoney = PivotClientsSalon::where('id',$checkPivot->id)->first();
                    $getBideur->update([
                        'balance'=>$getmoney->montant + $getBideur->balance
                    ]);
                    $notification  = Notification::where('notification_id',$checkPivot->user_id)->first();
                    $notification->create([
                        'public'=>0,
                        'user_id'=>$checkPivot->user_id,
                        'message'=>'Vous etiez participant a l\'enchere du lot '.$salon->id.' de '.$salon->article->titre.' Malheuresement le quota de '.$salon->limite.' personnes n\'a pas éte atteint la retenu de '.$salon->montant.' bibs a été retourné sur votre compte.' ,
                    ]);
                    $getmoney->delete();
                }
                $salon->delete();
            }
        }

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
