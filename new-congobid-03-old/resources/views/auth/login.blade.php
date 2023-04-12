@extends('layouts.app-page', ['contentNavbar' => false])
@section('content')
<div class="block-page">
    <div class="block-form">
        <div class="banner-login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content-form">
                            <a href="/" class="back">
                                <span>
                                    <span class="iconify" data-icon="la:angle-left"></span>
                                </span>
                                Accueil
                            </a>
                            <div class="text-center">
                                <img src="{{asset('images/logo.png')}}" class="mb-4 logo-app" alt="logo du site" >
                                <h2>Connexion</h2>
                            </div>
                            <div class="text-center w-100">
                                <h6 class="text-center w-100" style="margin: 0">Vous n'avez pas de compte ?</h6>
                                <a href="{{ route('register') }}" class="btn btn-3d-rounded-sm btn-article mt-3">Inscrivez-vous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="block-content-card">
                        <div class="card card-form">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row g-4 g-lg-4">
                                    <!-- Email Address -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input id="phone floatingInput" name="telephone"  class="block mt-1 form-control w-100" placeholder="numéro téléphone"  type="tel" required style="width: 100%; outline:none" />
                                        <label for="floatingInput" class="d-flex align-items-center">Numéro téléphone</label>
                                    </div>
                                </div>


                             <!-- Password -->
                             <div class="col-password col-12">
                                {{-- <div class="show-password" id="show-password">
                                    <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden"></span>
                                    <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show"></span>
                                </div> --}}
                                <div class="form-floating">
                                    <x-input id="password floatingInput" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" class="form-control" />
                                    <label for="floatingInput" class="d-flex align-items-center">Mot de passe</label>
                                </div>

                            </div>

                            <!-- Remember Me -->
                            <div class="col-12 d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="newsletter" id="remember_me">
                                    <label class="form-check-label" for="remember_me" style="font-size: 14px;font-weight:500;">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex aling-items-center justify-content-center">
                                    @if (Route::has('password.request'))
                                        <a class="resert-password" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 justify-content-center d-flex">
                                <button class="btn btn-3d-rounded-sm w-75">
                                    {{ __('Connexion') }}
                               </button>
                            </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
