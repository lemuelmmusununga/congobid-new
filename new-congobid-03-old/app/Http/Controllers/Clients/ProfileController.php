<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Bideur;
use App\Models\Bloque;
use App\Models\Encheregagner;
use App\Models\Paquet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Notification;
class ProfileController extends Controller
{
    public function index(){
        $publics = Notification::where('public',1)->get();
        if(Auth::user()){
            $notifications  = Notification::where('notification_id',Auth::user()->id)->get();
        }
        $solde = Bideur::where('user_id',Auth::user()->id)->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $page = 4;
        $gagners = Encheregagner::where('user_id',Auth::user()->id)->get();
        if(Auth::user()){

            $notifications = Notification::where('user_id',Auth::user()->id)->get();
        }else{
            $notifications = '';
        }
        return view('pages.profil', compact('paquets', 'page','publics', 'notifications','solde','gagners'));
    }
    public function ListeBloked(){
        $users = Bloque::where('user_blocked',Auth::user()->id)->whereMonth('created_at',now())->get();
        return view('pages.historique', compact('users'));
    }

    public function update($name,$id){
        $user = User::where('id',Auth::user()->id)->first();
        return view('pages.update-profil', compact('user'));
    }
    public function updateProfileMot(Request $request){
        $user = User::where('id',Auth::user()->id)->first();
        $password = $request->get('password');
        $old_password_user = $request->get('old-password');
        $new_password_user = $request->get('new-password');

        $new_password = User::where('id',Auth::user()->id)->first();
        if ($request->get('password')) {
            # code...
            if ( $new_password_user == $request->get('password')) {
                if (Hash::check($old_password_user,$new_password->password)) {
                    $new_password->update([
                        'password' =>Hash::make($new_password_user)
                    ]);
                    return redirect()->back()->with('success', 'Mise à jour effectué !');

                }else{
                    return redirect()->back()->with('danger', 'Veillez bien verifier vos champs !');
                }
            }else{
                return redirect()->back()->with('danger', 'Veillez bien verifier vos champs  !');

            }
        }
    }
    public function updateMyProfile(Request $request){
        $user = User::where('id',Auth::user()->id)->first();

        if ($request->hasfile('profil')) {
            $file = $request->file('profil');
            $name = $file->getClientOriginalName();

            $file->move('images/users/', $name);
            $user_profil =$file->getClientOriginalName();

            $user->update([
                'avatar' =>$user_profil,

            ]);
            return redirect()->back()->with('success', 'Mise à jour effectué !');

        }
    }

    public function updateProfile(Request $request){
        $user = User::where('id',Auth::user()->id)->first();

        // dd($request, $user );
        if ($user && $request->get('mot-passe') == $request->get('pass-conf')) {
            $user->update([

                'nom' => $request->name,

                'premom' => $request->prenom,
                'username' => $request->pseudo,
                'email' => $request->email,
                'telephone'=>$request->get('telephone'),
                'adresse'=>$request->get('adresse'),
                'lieu_naissance'=>$request->get('lieu-naiss'),
                'sexe'=>$request->get('sexe'),
                'pointure'=>$request->get('pointure'),
            ]);

            return redirect()->back()->with('success', 'Mise à jour effectué !');
        } else {
            return redirect()->back()->with('danger', 'Veillez verifier votre mot de passe !');

        }
        
            


    }
}
