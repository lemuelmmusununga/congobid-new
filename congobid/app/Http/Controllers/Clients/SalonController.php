<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salon;
use App\Models\Paquet;
use App\Models\Article;
use App\Models\Bideur;
use App\Models\Enchere;
use App\Models\PivotClientsSalon;
use Illuminate\Support\Facades\Auth;
use App\Models\Sanction;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salons = Salon::where('statut_id', '3')->get();
        $paquets = Paquet::where('statut_id', '3')->get();
        $page = 0;

        return view('pages.salon', compact('salons', 'paquets', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
