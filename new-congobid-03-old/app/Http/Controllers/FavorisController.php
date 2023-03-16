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
    public function addfavoris($enchere,$user){
        $enchere = $enchere;
        $user = $user;
        $find = Favoris::where('user_id',auth()->user()->id)->where('enchere_id',$enchere)->first();
        if ($find == null) {
            $create = Favoris::create([
                'user_id' =>$user,
                'enchere_id'=>$enchere,
                'etat'=>1
            ]);
        }else if($find->etat == 1){
            $find->update([

                'etat'=>0
            ]);
        }else{
            $find->update([

                'etat'=>1
            ]);
        }
    }
    public function delete($id,$name){
        $favoris=Favoris::where('enchere_id',$id)->where('user_id',Auth::user()->id)->first();
        $favoris->update([
            'favoris'=>0
        ]);
        return redirect()->back()->with('success','Favori supprimer avec succes');
    }
}
