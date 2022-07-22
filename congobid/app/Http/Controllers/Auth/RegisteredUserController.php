<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Bideur;
use App\Models\Newsletter;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
        $check_users = User::all();
        foreach ($check_users as $check_user) {
            if ($check_user->telephone == $request->get('telephone')) {
                return redirect()->back()->with('telephone','le numero existe deja');
            }elseif($check_user->username == $request->get('pseudo')){
                return redirect()->back()->with('pseudo','le pseudo existe deja');
            }
        }
        // dd($request->newsletter == "on");
        $request->validate([
            'pseudo' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:13'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
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
            'email' => $request->email,
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
            'paquet_id' =>1
        ]);

        if ($request->newsletter == "on"){
            Newsletter::create([
                'email' => $request->email,
                'statut_id' => 3,
                'user_id' => $user->id,
            ]);
        }

        event(new Registered($user));

        Auth::login($user);


        return redirect(RouteServiceProvider::HOME);
    }
}
