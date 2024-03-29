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
use App\Models\Mesalon;
use Illuminate\Support\Str;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publics = Notification::where('public', 1)->get();

        if (Auth::user()) {
            $notifications = Notification::where('notification_id', Auth::user()->id)->get();
        } else {
            $notifications = '';
        }
        $paquets = Paquet::where('statut_id', '3')->get();
        $articles = Article::where('statut_id', '3')->where('salon', 0)->get();
        $salons = Salon::where('created_at', '>', now()->addDays(1)->format('d-m-y H:i:s'))->get();

        $verifyDateSalons = Salon::where('created_at', '<=', now()->addDays(1)->format('d-m-y H:i:s'))->get();
        if ($verifyDateSalons->count() > 0) {
            foreach ($verifyDateSalons as $key => $salon) {
                $checkPivots = PivotClientsSalon::where('salon_id', $salon->id)->get();
                foreach ($checkPivots as $key => $checkPivot) {
                    $getBideur = Bideur::where('user_id', $checkPivot->user_id)->first();
                    $getmoney = PivotClientsSalon::where('id', $checkPivot->id)->first();
                    $getBideur->update([
                        'balance' => $getmoney->montant + $getBideur->balance
                    ]);
                    $notification = Notification::where('notification_id', $checkPivot->user_id)->first();
                    $notification->create([
                        'public' => 0,
                        'user_id' => $checkPivot->user_id,
                        'message' => 'Vous etiez participant a l\'enchere du lot ' . $salon->id . ' de ' . $salon->article->titre . ' Malheuresement le quota de ' . $salon->limite . ' personnes n\'a pas éte atteint la retenu de ' . $salon->montant . ' bibs a été retourné sur votre compte.',
                    ]);
                    $getmoney->delete();
                }
                $salon->delete();
            }
        }
        // $verifyDateSalon = Salon::where('created_at','>',now()->subDays(3))->get();
        $page = 2;
        return view('pages.salon', compact('articles', 'notifications', 'publics', 'page', 'paquets', 'salons'));
    }
    public function mesSalons($id, $name)
    {
        $publics = Notification::where('public', 1)->get();

        if (Auth::user()) {
            $notifications = Notification::where('notification_id', Auth::user()->id)->get();
        } else {
            $notifications = '';
        }
        // $paquets = Paquet::where('statut_id', '3')->get();
        // $articles = Article::where('statut_id', '3')->where('salon', 0)->get();
        $salons = Salon::where('statut_id', 3)->where('user_id', Auth::user()->id)->where('created_at', '>', now()->subDays(1)->format('d-m-y h:i:s'))->get();
        // $verifyDateSalon = Salon::where('created_at','>',now()->subDays(3))->get();
        // dd($salons);
        $page = 2;
        return view('pages.messalons', compact('notifications', 'publics', 'salons'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $salon, $name)
    {
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salonDelete($articleid, $enchereid, $salon, $name)
    {
        // $creator = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->first();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->first();
        $users = PivotClientsSalon::where('enchere_id', $enchereid)->get();
        $pivotsEnchere = PivotBideurEnchere::where('enchere_id', $enchereid)->first();
        // dd(Auth::user()->bideurs->first() ,Auth::user()->bideurs->first()->balance +  $pivots->first()->montant);

        Auth::user()->bideurs->first()->update([
            'balance' => Auth::user()->bideurs->first()->balance + $salon
        ]);
        try {
            //code...
            $pivots->delete();
        } catch (\Throwable $th) {
            return back()->with('danger', 'Veillez actualiser la page puis reessayer');
        }
        try {
            $pivotsEnchere->delete();
        } catch (\Throwable $th) {
            return back()->with('danger', 'Veillez actualiser la page puis reessayer');

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


        return back()->with('success', 'Suppression effectué avec succès');

        // return back()->with('Danger','un problème est survenue veillez contacter le service client');
    }
    public function salonCreat($articleid, $nombre, $enchereid, $participant, $name)
    {
        dd($articleid, $name, $nombre, $enchereid, $participant);
        // $bideur = PivotClientsSalon::where('user_id',Auth::user()->id)->where('enchere_id',$id)->first();
        // $article = Article::where('id', $articleid)->where('statut_id', '3')->first();
        // $paquets = Paquet::where('id',$paquet)->where('statut_id', '3')->get();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->first();

        // dd($pivots );
        // verification du balance
        if ($pivots == null) {
            if (Auth::user()->bideurs->first()->balance >= $nombre) {
                Auth::user()->bideurs->first()->update([
                    'balance' => Auth::user()->bideurs->first()->balance - $nombre,
                ]);
                Salon::create([
                    'libelle' => 'Salon #' . $articleid,
                    'statut_id' => '3',
                    'article_id' => $articleid,
                    'state' => 1,
                    'user_id' => Auth::user()->id,
                    'limite' => $participant,
                    'montant' => $nombre,
                ]);
                $salon = Salon::all()->last();

                PivotClientsSalon::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'salon_id' => $salon->id,
                    'enchere_id' => $enchereid,
                    'valeur' => 0,
                    'montant' => $nombre,
                    'creator' => 1
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
                    'participant' => $participant
                ]);
                Notification::create([
                    'message' => Auth::user()->username . ' Participation  au salon ' . $name . ' effectuer',
                    'user_id' => null,
                    'notification_id' => Auth::user()->id,
                ]);
                // if ($conte->count() == $salon->limite) {
                //     $salon->update([
                //         'state'=>1
                //     ]);52
                //     $enchere->update([
                //         'date_debut' => $getdate.'-'.$gethours.' '.$getmunite
                //     ]);
                // }
                return back()->with('success', 'Création effectué avec succès');
            } else {
                return back()->with('danger', 'Votre compte est insuffisant');
            }
        } else {

            return back()->with('danger', 'Vous avez déja souscrit a ce salon');

        }
    }
    public function salonCreate(Request $request)
    {

        // $bideur = PivotClientsSalon::where('user_id',Auth::user()->id)->where('enchere_id',$id)->first();
        // $article = Article::where('id', $articleid)->where('statut_id', '3')->first();
        // $paquets = Paquet::where('id',$paquet)->where('statut_id', '3')->get();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $request->enchereid)->first();
        // verification du balance
        if ($pivots == null) {
            if (Auth::user()->bideurs->first() && Auth::user()->bideurs->first()->balance >= $request->nombre) {
                Auth::user()->bideurs->first()->update([
                    'balance' => Auth::user()->bideurs->first()->balance - $request->nombre,
                ]);


                Enchere::create([
                    'date_debut' => null,
                    'munite' => $request->munite,
                    'really_time' => $request->munite,
                    'seconde' => 0 ,
                    'state' => 0,
                    'favoris' => 0,
                    'statut_id'=> 0,
                    'article_id' =>$request->articleid,
                    'paquet_id'=>0,
                    'favori_salon'=>0,

                ]);
                $enchere = Enchere::all()->last();
                Salon::create([
                    'libelle' => 'Salon #' . $request->articleid,
                    'statut_id' => '3',
                    'article_id' => $request->articleid,
                    'state' => 1,
                    'debut_enchere'=> $request->date.''.$request->heure,
                    'enchere_id'=> $enchere->id,
                    'user_id' => Auth::user()->id,
                    'limite' => $request->participant,
                    'montant' => $request->nombre,
                ]);
                $salon = Salon::all()->last();

                PivotClientsSalon::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'salon_id' => $salon->id,
                    'enchere_id' => $enchere->id,
                    'valeur' => 0,
                    'montant' => $request->nombre,
                    'creator' => 1
                ]);
                PivotBideurEnchere::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'enchere_id' => $enchere->id,
                ]);

                $conte = PivotClientsSalon::where('enchere_id', $enchere->id)->get();
                // $salon = Salon::where('article_id', $request->articleid)->first();
                // $enchere = Enchere::where('article_id', $request->articleid)->first();
                // $getdate = $request->date;
                // $gethours = $request->heure;
                // $getmunite = $request->munite;
                // $enchere->update([
                //     'participant' => $request->participant,
                //     'date_debut' => $getdate.'-'.$gethours,
                //     'munite'=>$getmunite,
                // ]);
                Notification::create([
                    'message' => Auth::user()->username . ' Participation  au salon ' . $request->name . ' effectuer',
                    'user_id' => null,
                    'notification_id' => Auth::user()->id,
                ]);

                if ($conte->count() == $salon->limite) {
                    $salon->update([
                        'state'=>1
                    ]);
                    $enchere->update([
                        'date_debut' =>$request->date.''.$request->heure,
                    ]);
                }

                return back()->with('success', 'Création effectué avec succès');
            } else {
                return back()->with('danger', 'Votre compte est insuffisant');
            }
        } else {

            return back()->with('danger', 'Vous avez déja souscrit a ce salon');

        }
    }
    public function store(Request $request, $articleid, $salonid, $enchereid, $paquet, $name)
    {
        $salon = Salon::where('id', $salonid)->first();
        $bideur = PivotClientsSalon::where('user_id', Auth::user()->id)->where('salon_id', $salonid)->first();
        $article = Article::where('id', $articleid)->where('statut_id', '3')->first();
        $paquets = Paquet::where('id', $paquet)->where('statut_id', '3')->get();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->where('enchere_id', $enchereid)->where('salon_id', $salonid)->first();
        // verification du balance
        if ($pivots == null && now()->format('y-m-d h:i:s') >= $salon->debut_enchere) {

            if (Auth::user()->bideurs->first()->balance >= $salon->montant) {
                Auth::user()->bideurs->first()->update([
                    'balance' => Auth::user()->bideurs->first()->balance - $salon->montant,
                ]);

                PivotClientsSalon::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'salon_id' => $salonid,
                    'enchere_id' => $enchereid,
                    'valeur' => 0,
                    'montant' => $salon->montant
                ]);
                PivotBideurEnchere::create([
                    'valeur' => '0',
                    'statut_id' => '3',
                    'user_id' => Auth::user()->id,
                    'enchere_id' => $enchereid,
                ]);
                $conte = PivotClientsSalon::where('enchere_id', $enchereid)->get();
                $salon = Salon::where('enchere_id',$enchereid)->first();
                $enchere = Enchere::where('id', $enchereid)->first();
                $getarticle = Article::where('id', $salon->article_id)->first();

                // dd($enchere,$salon->debut_enchere->format('y-m-d h:i:s'),  $salon);
                $getdate = now('Africa/kinshasa')->format('Y-m');
                $gethours = now('Africa/kinshasa')->format('d') ;
                $getmunite = now('Africa/kinshasa')->format('m');
                Notification::create([
                    'message' => Auth::user()->username . ' Participation  au salon ' . $name . ' effectuer',
                    'user_id' => null,
                    'notification_id' => Auth::user()->id,
                ]);
                if ($conte->count() == $salon->limite) {

                    Article::create([
                        'titre' =>  $getarticle->titre,
                        // 'image' => ($image == 'true') ?  $getarticle->titre . '.webp' : null,
                        'marque' =>  $getarticle->marque,
                        'promouvoir' =>  $getarticle->promouvoir == "on" ? 1 : 0,
                        'code_produit' =>  $getarticle->code_produit.''.Str::random(10),
                        'description' =>  $getarticle->description,
                        'prix' =>  $getarticle->prix,
                        'prix_marche' =>  $getarticle->prix_marche,
                        'prix_precedent' =>  $getarticle->prix,
                        'prix_min' =>  $getarticle->prix_marche / 3,
                        'prix_max' =>  $getarticle->prix_marche / 2,
                        'cout_livraison' =>  $getarticle->cout_livraison,
                        'infos_livraison' =>  $getarticle->infos_livraison,
                        'meta_description' =>  $getarticle->meta_description,
                        'meta_keywords' =>  $getarticle->meta_keywords,
                        'limite_enchere_auto' =>  $getarticle->limite_enchere_auto,
                        'credit_enchere_auto' =>  $getarticle->credit_enchere_auto,
                        'quantite' =>  $getarticle->quantite,
                        'categorie_id' =>  $getarticle->categorie_id,
                        // 'categorie_id' =>  $getarticle->categorie_id,
                        'statut_id' =>  $getarticle->statut_id,
                        'user_id' => Auth::user()->id,
                        'paquet_id' => $getarticle->paquet_id,
                        'salon'=> $getarticle->state === 'on' ? 0 :1,
                    ]);
                    $getLastarticle = Article::all()->last();
                    $enchere->update([
                        'date_debut' =>date('y-m-d h:i:s', strtotime($salon->debut_enchere)),
                        'article_id' =>$getLastarticle->id,
                        'prix'=>$getarticle->prix,
                        'paquet_id'=>$getarticle->paquet_id,
                    ]);
                    $salon->update([
                        'state' => 1
                    ]);
                }
                return back()->with('success', 'Enregistrement effectué avec succès');
            } else {
                return back()->with('danger', 'Votre compte est insuffisant');
            }
        } else {
            return back()->with('danger', 'Vous faite deja parti de cet salon');
        }
    }

    public function insert($id)
    {
        $article = Article::where('id', $id)->where('statut_id', '3')->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $pivots = PivotClientsSalon::where('user_id', Auth::user()->id)->first();
        dd(   $article );
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
            } else {
                return back();
            }
        } else {
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
