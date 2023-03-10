<?php

namespace App\Http\Controllers;

use App\Models\Favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
class FavorisController extends Controller
{
    public function favoris(){
        $publics = Notification::where('public',1)->get();

        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }else{
            $notifications = '';
        }
        $favoris=Favoris::where('user_id',Auth::user()->id)->where('favoris',1)->orderby('id','DESC')->get();
        return view('pages.favoris',compact('favoris','notifications','publics'));
    }
    public function delete($id,$name){
        $favoris=Favoris::where('enchere_id',$id)->where('user_id',Auth::user()->id)->first();
        $favoris->update([
            'favoris'=>0
        ]);
        return redirect()->back()->with('success','Favori supprimer avec succes');
    }
}
