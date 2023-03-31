<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salon;
use App\Models\Paquet;
use App\Models\Article;
use App\Models\Bideur;
use App\Models\Enchere;
use App\Models\PivotBideurEnchere;
use App\Models\PivotClientsSalon;
use Illuminate\Support\Facades\Auth;
use App\Models\Sanction;
use App\Models\Notification;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('pages.salon',compact('articles', 'notifications','publics','page', 'paquets','salons'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id , $salon , $name)
    {
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salonDelete ($articleid,$enchereid,$salon,$name)
    {
        // $creator = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->first();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->first();
        $users = PivotClientsSalon::where('enchere_id', $enchereid)->get();
        $pivotsEnchere = PivotBideurEnchere::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->first();
        // dd(Auth::user()->bideurs->first() ,Auth::user()->bideurs->first()->balance +  $pivots->first()->montant);

            Auth::user()->bideurs->first()->update([
                'balance'=> Auth::user()->bideurs->first()->balance +  $salon
            ]);
            try {
                //code...
                $pivots->delete();
            } catch (\Throwable $th) {
                return back()->with('danger','Veillez actualiser la page puis reessayer');
            }
            try {
                $pivotsEnchere->delete();
            } catch (\Throwable $th) {
                return back()->with('danger','Veillez actualiser la page puis reessayer');

            }

            // if ($pivots->creator == null) {

            // } else {
            //     if (count($users) > 0 ) {
            //         $pivots->delete();
            //         $pivotsEnchere->delete();
            //     } else {
            //         $pivots->update([
            //             ''
            //         ]);
            //         $pivotsEnchere->delete();
            //     }
            // }


            return back()->with('success','Suppression effectué avec succès');

            // return back()->with('Danger','un problème est survenue veillez contacter le service client');
    }
    public function salonCreat($articleid,$nombre,$enchereid,$participant,$name){
        dd($articleid,$name,$nombre,$enchereid,$participant);
        // $bideur = PivotClientsSalon::where('user_id',Auth::user()->id)->where('enchere_id',$id)->first();
        // $article = Article::where('id', $articleid)->where('statut_id', '3')->first();
        // $paquets = Paquet::where('id',$paquet)->where('statut_id', '3')->get();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->first();

        // dd($pivots );
        // verification du balance
        if ($pivots == null){
            if(Auth::user()->bideurs->first()->balance >= $nombre){
                Auth::user()->bideurs->first()->update([
                    'balance' => Auth::user()->bideurs->first()->balance - $nombre,
                ]);
                Salon::create([
                    'libelle' => 'Salon #'.$articleid,
                    'statut_id' => '3',
                    'article_id' => $articleid,
                    'state'=>1,
                    'limite' => $participant,
                    'montant'=>$nombre,
                ]);
                $salon = Salon::all()->last();

                PivotClientsSalon::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'salon_id' => $salon->id,
                    'enchere_id'=>$enchereid,
                    'valeur'=>0,
                    'montant'=>$nombre,
                    'creator'=> 1
                ]);
                PivotBideurEnchere::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'enchere_id' => $enchereid,
                ]);

                $conte = PivotClientsSalon::where('enchere_id', $enchereid)->get();
                $salon = Salon::where('article_id', $articleid)->first();
                $enchere = Enchere::where('article_id', $articleid)->first();
                $getdate = now('Africa/kinshasa')->format('Y-m');
                $gethours = now('Africa/kinshasa')->format('d') + 1;
                $getmunite = now('Africa/kinshasa')->format('15:30:00');
                $enchere->update([
                    'participant' =>$participant
                ]);
                Notification::create([
                    'message'=>Auth::user()->username.' Participation  au salon '.$name .' effectuer',
                    'user_id'=>null,
                    'notification_id'=>Auth::user()->id,
                ]);
                // if ($conte->count() == $salon->limite) {
                //     $salon->update([
                //         'state'=>1
                //     ]);52
                //     $enchere->update([
                //         'date_debut' => $getdate.'-'.$gethours.' '.$getmunite
                //     ]);
                // }
                return back()->with('success','Création effectué avec succès');
            }else{
                return back()->with('danger','Votre compte est insuffisant');
            }
        }else{

            return back()->with('danger','Vous avez déja souscrit a ce salon');

        }
    }
    public function store(Request $request,$articleid,$salonid,$enchereid,$paquet,$name)
    {
        $salon =Salon::where('id',$salonid)->first();
        $bideur = PivotClientsSalon::where('user_id',Auth::user()->id)->where('salon_id',$salonid)->first();
        $article = Article::where('id', $articleid)->where('statut_id', '3')->first();
        $paquets = Paquet::where('id',$paquet)->where('statut_id', '3')->get();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->where('salon_id',$salonid)->first();

        // verification du balance
        if ($pivots == null){

            if(Auth::user()->bideurs->first()->balance >=  $salon->montant){
                Auth::user()->bideurs->first()->update([
                    'balance' => Auth::user()->bideurs->first()->balance -  $salon->montant,
                ]);

                PivotClientsSalon::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'salon_id' => $salonid,
                    'enchere_id'=>$enchereid,
                    'valeur'=>0,
                    'montant'=>$salon->montant
                ]);
                PivotBideurEnchere::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'enchere_id' => $enchereid,
                ]);
            $conte = PivotClientsSalon::where('enchere_id', $enchereid)->get();
            $salon = Salon::where('article_id', $articleid)->first();
            $enchere = Enchere::where('article_id', $articleid)->first();
            $getdate = now('Africa/kinshasa')->format('Y-m');
            $gethours = now('Africa/kinshasa')->format('d') + 1;
            $getmunite = now('Africa/kinshasa')->format('m');
            Notification::create([
                'message'=>Auth::user()->username.' Participation  au salon '.$name .' effectuer',
                'user_id'=>null,
                'notification_id'=>Auth::user()->id,
            ]);
            if ($conte->count() == $salon->limite) {
                try {
                    //code...
                    $salon->update([
                        'state'=>1
                    ]);
                    $enchere->update([
                        'date_debut' => $getdate.'-'.$gethours.' '.$getmunite
                    ]);
                } catch (\Throwable $th) {
                    return back()->with('danger','Veillez actualiser la page puis reessayer');
                }
            }
                return back()->with('success','Enregistrement effectué avec succès');
            }else{
                return back()->with('danger','Votre compte est insuffisant');
            }
        }else{
            return back()->with('danger','Vous faite deja parti de cet salon');
        }
    }

    public function insert($id){
        $article = Article::where('id', $id)->where('statut_id', '3')->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->first();

        // couper les nombres de bids
        if (Auth::user()) {
            // verification du balance
            if (Auth::user()->bideurs->first()->balance >= $article->paquet->nombre_enchere) {
                Bideur::where('id', Auth::user()->id)->update([
                    'balance' => Auth::user()->bideurs->first()->balance - $article->paquet->nombre_enchere,
                ]);

                if ($pivots == null) {

                    PivotClientsSalon::create([
                        'user_id' => Auth::user()->id,
                        'salon_id' => $article->enchere->id,
                    ]);

                    PivotBideurEnchere::create([
                        'valeur' => '0',
                        'statut_id' => '3',
                        'user_id' => Auth::user()->id,
                        'enchere_id' => $article->enchere->id,
                    ]);
                }
                return view('pages.detail-enchere', compact('article', 'paquets'));
            }else{
                return back();
            }
        }else{
            return view('pages.detail-enchere', compact('article', 'paquets'));
        }


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
}
