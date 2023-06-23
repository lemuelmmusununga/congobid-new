<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // dd($request);
        $verify_user = User::where('telephone', $request->telephone)->first();

        // $request->logout();
        Auth::login($verify_user);
        // $request->authenticate();
        $request->session()->regenerate();
        DB::table('sessions')->where('id','!=',Session::getId())->where('user_id',Auth::user()->id)->delete();
        Session::flash('success' ,'Bienvenu(e) chez CongoBid');

        return redirect()->intended(RouteServiceProvider::HOME);


    }

   
    public function Destroys(Request $request)
    {
        $addbid = User::where('id',Auth::user()->id)->first();
        if ($addbid->user_conneted_at != null) {
            $addbid->update([
                $addbid->user_conneted_at =null
            ]);
        }

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Session::put('success' ,'Déconnexion réussie !');

        return redirect('/');
    }
}
