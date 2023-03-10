<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Bideur;
use App\Models\Enchere;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Demande;
use App\Models\Encheregagner;
use App\Models\Statut;
use App\Models\User;
use App\Models\PivotBideurEnchere;
use App\Models\Gagnant;
use App\Models\Historique;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encheres = Enchere::all();
        $chats = Chat::where('statut_id', '3')->orderBy('id', 'desc')->get();
        $statuts = Statut::orderBy('id', 'desc')->get();
        $categories = Categorie::all();
        $users = User::all();
        $publics = Notification::where('public',1)->get();
        $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        $onlines = User::select("*")
                        ->whereNotNull('last_seen')
                        ->orderBy('last_seen', 'DESC')
                        ->get();
        $articles = Article::all();

        $encheres = Enchere::all();
        $contacts = Contact::all();
        $gagnants = Encheregagner::orderby('id','DESC')->get();
        $demandes = Demande::orderby('id','DESC')->get();
        return view('admin.index', compact('encheres', 'demandes','notifications','publics','chats','statuts','categories','onlines','users','articles','encheres','contacts','gagnants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroyProfil(){

        $sup = User::where('id',Auth::user()->id)->first();
        $sup -> update([
            'avatar'  => 'default.png  '
        ]);
        return redirect()->back()->with('success','Votre de profil a été supprimé avec success');

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function envoie($numero,$valeur){

            $find = User::where('telephone',$numero)->first();
            $demande = Demande::where('telephone',$numero)->first();

            if ($find) {
                $bideur = Bideur::where('user_id',$find->id)->first();

                $bideur->update([
                    'balance'=>$bideur->balance + $valeur
                ]);
                $demande->update([
                    'state'=>1
                ]);
                Notification::create([
                    'message'=>Auth::user()->username . 'vous a envoyé'. $valeur .'bids',
                    'user_id' =>Auth::user()->id,
                    'nofication_id' => $find->id
                ]);
                return redirect()->back()->with('success','Envoie effectué  avec success');
            }else{
                return redirect()->back()->with('danger','Le numero est incorrecte');
            }
    }

    public function retrait($numero,$valeur){

        $find = User::where('telephone',$numero)->first();
        $demande = Demande::where('telephone',$numero)->first();

        if ($find) {
            $bideur = Bideur::where('user_id',$find->id)->first();

            $bideur->update([
                'balance'=>$bideur->balance - $valeur
            ]);
            $demande->update([
                'state'=>0
            ]);
            Notification::create([
                'message'=>Auth::user()->username . 'a retiré'. $valeur .'bids',
                'user_id' =>Auth::user()->id,
                'nofication_id' => $find->id
            ]);
            return redirect()->back()->with('success','Retrait effectué  avec success');
        }else{
            return redirect()->back()->with('danger','Le numero est incorrecte');
        }
    }

    public function delete($numero,$valeur){

        $find = User::where('telephone',$numero)->first();
        $demande = Demande::where('telephone',$numero)->first();
        Historique::create([
            'action' => 'Suppression d\'un demandeur de bid ,montant demandé est de ' . $demande->nombre .'bids',
            'type' => '5',
            'destination_id' => $find->id,
            'statut_id' => '3',
            'user_id' => Auth::user()->id,
        ]);
        $demande->delete();
        return redirect()->back()->with('success','Suppression effectué  avec success');

    }
    public function payer($id){
        $find = Encheregagner::where('id',$id)->first();

        if ($find) {
            if ($find->state == 0) {
                $find->update([
                    'state'=>1,
                    'payed_by'=>Auth::user()->id
                ]);
                Historique::create([
                    'action' => 'Payement du gagnant ' . $find->user->nom .' , enchere: '.$find->enchere->article->titre .' id: '.$find->user->id,
                    'type' => '5',
                    'destination_id' =>Auth::user()->id ,
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                ]);
                return redirect()->back()->with('success','Payement effectué  avec success');

            } else {
                Historique::create([
                    'action' => 'Payement du gagnant ' . $find->user->nom .' , enchere: '.$find->enchere->article->titre .' id: '.$find->user->id .'declaré non payé',
                    'type' => '5',
                    'destination_id' =>Auth::user()->id ,
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                ]);
                $find->update([
                    'state'=>0,
                    'payed_by'=>Auth::user()->id
                ]);
                return redirect()->back()->with('success','Retrait effectué  avec success');

            }

        }else{
            return redirect()->back()->with('danger','Veillez reessayer svp !');
        }

    }

    public function Deletepayer($id){
        $find = Encheregagner::where('id',$id)->first();
        Historique::create([
            'action' => 'Suppression du gagnant ' . $find->user->nom .' id : '. $find->user->id,
            'type' => '5',
            'destination_id' =>Auth::user()->id ,
            'statut_id' => '3',
            'user_id' => Auth::user()->id,
        ]);
       $find->delete();
       return redirect()->back()->with('success','Suppression effectué  avec success');


    }

    public function deleteContact($id){
        $demande = Contact::where('id',$id)->first();
        Historique::create([
            'action' => 'Suppression de la requette ' . $demande->nom .' : '.$demande->content .' : '.$demande->telephone,
            'type' => '5',
            'destination_id' =>Auth::user()->id ,
            'statut_id' => '3',
            'user_id' => Auth::user()->id,
        ]);
        $demande->delete();
        return redirect()->back()->with('success','Suppression effectué  avec success');

    }
}
