<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Bideur;
use App\Models\Paquet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function index(){
        $solde = Bideur::where('user_id',Auth::user()->id)->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $page = 4;

        return view('pages.profil', compact('paquets', 'page','solde'));
    }
}
