<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Bideur;
use App\Models\Newsletter;
use App\Models\Option;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $nom = $request->name ;
        $prenom = $request->prenom ;
        $ps = $request->pseudo;
        $tel = $request->telephone ;
        $check_tel = User::where('telephone',$request->telephone)->first();
        $check_speudo = User::where('username',$request->pseudo)->first();

            if ($check_tel != null & $request->password != $request->password_confirmation & $check_speudo != null ) {
                session()->put('telephone','le numero existe déja ');
                session()->put('password','les mots de passe ne sont pas identiques');
                session()->put('pseudo','le le pseudo existe déja');

                return redirect()->back();
            } elseif (Str::length($request->telephone) < 9) {
                session()->put('telephone','le numero de telephone n\'est pas valide  ');
                session()->put('tel',$tel);
                session()->put('nom',$nom);
                session()->put('prenom',$prenom);
                session()->put('ps',$ps);

                return redirect()->back();
            }
            elseif  ($check_tel != null & $request->password != $request->password_confirmation ) {
                session()->put('telephone','le numero existe déja ');
                session()->put('password','les mots de passe ne sont pas identiques');
                session()->put('tel',$tel);
                session()->put('nom',$nom);
                session()->put('prenom',$prenom);
                session()->put('ps',$ps);
                return redirect()->back();
            }elseif($check_tel != null  & $check_speudo != null ) {
                session()->put('password','les mots de passe ne sont pas identiques');
                session()->put('pseudo','le le pseudo existe déja');
                session()->put('tel',$tel);
                session()->put('nom',$nom);
                session()->put('prenom',$prenom);
                session()->put('ps',$ps);
                return redirect()->back();
            }elseif($request->password != $request->password_confirmation & $check_speudo != null ) {
                session()->put('password','les mots de passe ne sont pas identiques');
                session()->put('pseudo','le le pseudo existe déja');
                session()->put('tel',$tel);
                session()->put('nom',$nom);
                session()->put('prenom',$prenom);
                session()->put('ps',$ps);
                return redirect()->back();
            }elseif($check_tel != null  ) {
                session()->put('telephone','le numero existe déja ');
                session()->put('tel',$tel);
                session()->put('nom',$nom);
                session()->put('prenom',$prenom);
                session()->put('ps',$ps);
                return redirect()->back();
            }elseif ($request->password != $request->password_confirmation ) {
                session()->put('tel',$tel);
                session()->put('nom',$nom);
                session()->put('prenom',$prenom);
                session()->put('ps',$ps);
                session()->put('password','les mots de passe ne sont pas identiques');

                return redirect()->back();
            }elseif( $check_speudo != null ) {
                session()->put('tel',$tel);
                session()->put('nom',$nom);
                session()->put('prenom',$prenom);
                session()->put('ps',$ps);
                session()->put('pseudo','le pseudo existe déja');

                return redirect()->back();
            }
            elseif ($request->password == $request->password_confirmation) {
                // dd($request->newsletter == "on");
                $request->validate([
                    'pseudo' => ['required', 'string', 'max:255'],
                    'telephone' => ['required', 'string', 'max:14'],
                    // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
                ]);

                $user = User::create([
                    'nom' => $request->name,
                    'premom' => $request->prenom,
                    'username' => $request->pseudo,
                    'email' => $request->email,
                    'role_id' => 5,
                    'telephone' => $request->telephone,
                    'sexe' => $request->sexe??'',
                    'avatar' => $request->avatar ??'',
                    'password' => Hash::make($request->password),
                    'statut_id' => 3,
                ]);

                Bideur::create([
                    'balance' =>40,
                    'bonus' => 0,
                    'roi' => 0,
                    'foudre' => 0,
                    'user_id' => $user->id,
                    'statut_id' => 3,
                    'paquet_id' =>null
                ]);
                for ($i=1; $i < 7 ; $i++) { 
                    # creation des option pour le nouveau enregistré
                    Option::create([
                        'click' => 0,
                        'bouclier' => 0,
                        'roi' => 0,
                        'foudre' => 0,
                        'user_id' => $user->id,
                        'paquet_id' =>$i
                    ]);
                }

                if ($request->newsletter == "on"){
                    Newsletter::create([
                        'email' => $request->email,
                        'statut_id' => 3,
                        'user_id' => $user->id,
                    ]);
                }

                event(new Registered($user));

                Auth::login($user);

                Session::flash('success' ,'Bienvenu(e) chez CongoBid');

                return redirect(RouteServiceProvider::HOME);
            }

    }
}
