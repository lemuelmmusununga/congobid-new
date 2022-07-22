<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Bideur;
use App\Models\Paquet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function index(){
        $solde = Bideur::where('user_id',Auth::user()->id)->first();
        $paquets = Paquet::where('statut_id', '3')->get();
        $page = 4;

        return view('pages.profil', compact('paquets', 'page','solde'));
    }

    public function update($name,$id){
        $user = User::where('id',Auth::user()->id)->first();
        return view('pages.update-profil', compact('user'));
    }
    
    public function updateProfile(Request $request){
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
                    // return redirect()->back()->with('success', 'Mise à jour effectué !');

                }else{
                    return redirect()->back()->with('danger', 'Veillez bien verifier vos champs !');
                }
            }else{
                return redirect()->back()->with('danger', 'Veillez bien verifier vos champs  !');

            }
        }

        if ($request->hasfile('profil')) {
            $file = $request->file('profil');
            $name = $file->getClientOriginalName();

            $file->move('images/users/', $name);
            $user_profil =$file->getClientOriginalName();

            $user->update([

                'avatar' =>$user_profil,
                'premom' => $request->prenom,
                'username' => $request->pseudo,
                'email' => $request->email,
                'telephone'=>$request->get('telephone'),


            ]);
            return redirect()->back()->with('success', 'Mise à jour effectué !');

        }else{
            $user->update([

                'nom' => $request->name,

                'premom' => $request->prenom,
                'username' => $request->pseudo,
                'email' => $request->email,
                'telephone'=>$request->get('telephone'),


            ]);
        }
        return redirect()->back()->with('success', 'Mise à jour effectué !');


    }
}
