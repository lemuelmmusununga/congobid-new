<?php

namespace App\Http\Controllers;

use App\Models\Favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    public function favoris(){
        $favoris=Favoris::where('user_id',Auth::user()->id)->where('favoris',1)->orderby('id','DESC')->get();
        return view('pages.favoris',compact('favoris'));
    }
    public function delete($id,$name){
        $favoris=Favoris::where('enchere_id',$id)->where('user_id',Auth::user()->id)->first();
        $favoris->update([
            'favoris'=>0
        ]);
        return redirect()->back()->with('success','Favori supprimer avec succes');
    }
}
