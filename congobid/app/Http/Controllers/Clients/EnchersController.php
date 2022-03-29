<?php

namespace App\Http\Controllers\Clients;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Paquet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnchersController extends Controller
{
    //

    public function index(){
        return view('pages.encheres');
    }
    public function future(){
        return view('pages.encheres-future');
    }

    public function gagne(){
        return view('pages.encheres-gagne');
    }
}
