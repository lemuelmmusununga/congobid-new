
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
                                <h2>Inscription</h2>
                            </div>
                            <div class="text-center w-100">
                                <h6 class="text-center w-100" style="margin: 0">Vous avez déjà un compte ?</h6>
                                <a href="{{ route('login') }}" class="btn btn-3d-rounded-sm btn-article mt-3">Connectez-vous</a>
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
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" style="color:red;" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- Name -->
                                    <div class="form-group row g-4 g-lg-3">
                                        @if ( Session::has('prenom') || Session::has('nom') )
                                            <div class="col-12">
                                                <input value ="{{ Session::pull('prenom') }}" class="block mt-1 w-full form-control" type="text" name="prenom"  required />
                                            </div>
                                            <div class="col-12">
                                                <input value ="{{ Session::pull('nom') }}"  id="name" class="block mt-1 w-full form-control" type="text" name="name"  required />
                                            </div>
                                        @else

                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input placeholder="Entrez votre prénom" class="block mt-1 w-full form-control" type="text" name="prenom"  required autofocus />
                                                    <label for="floatingInput" class="d-flex align-items-center">Votre prénom</label>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input placeholder="Entrez votre nom"  id="name" class="block mt-1 w-full form-control" type="text" name="name"  required autofocus />
                                                    <label for="floatingInput" class="d-flex align-items-center">Votre nom</label>
                                                </div>

                                            </div>
                                        @endif

                                        <div class="col-12">
                                            @if(Session::has('pseudo') )
                                                <div class="input-group  rounded-pill col-12">
                                                    <input value="{{ Session::pull('ps') }}" id="pseudo" class="block mt-1 w-full rounded-pill form-control" type="text" name="pseudo"  required  style="border:1px solid red;" /> <br>
                                                </div>
                                                <span>
                                                    <p class="text-danger">{{ Session::pull('pseudo') }}</p>
                                                </span>
                                            @elseif (Session::has('ps'))
                                                <div class="input-group  rounded-pill col-12">
                                                    <input value="{{ Session::pull('ps') }}" id="pseudo" class="block mt-1 w-full rounded-pill form-control" type="text" name="pseudo"  required  /> <br>
                                                </div>
                                            @else
                                            <div class="form-floating">
                                                <x-input placeholder="Entrez votre pseudonyme" id="pseudo" class="block mt-1 w-full form-control" type="text" name="pseudo"  required autofocus />
                                                <label for="floatingInput" class="d-flex align-items-center">Votre pseudonyme</label>
                                            </div>

                                            @endif
                                        </div>
                                            @if(Session::has('telephone'))
                                                <div class="input-group  rounded-pill col-12 border-danger">
                                                    <input id="phone" value="{{ Session::pull('tel') }}"  name="telephone" class="form-control" maxlength="14" type="tel" required style="width: 100%;outline:none;border:1px solid red;" />
                                                </div>
                                                <span>
                                                    <p class="text-danger">{{ Session::pull('telephone') }} </p>
                                                </span>
                                            @elseif (Session::has('tel'))
                                                <div class="input-group  rounded-pill col-12 border-danger">
                                                    <input id="phone" value="{{ Session::pull('tel') }}"  name="telephone" class="form-control" maxlength="14" type="tel" required />
                                                </div>
                                            @else
                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="select w-25">
                                                        <select class="form-select form-control input-group-text text-center" aria-label="Default select example" style="border-radius: 50px 0px 0px 50px">
                                                            <option selected>+243</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-floating w-75">
                                                        <input id="phone"  class="form-control" name="telephone" placeholder="Numéro de téléphone" maxlength="14" type="tel" required style="width: 100%;border-radius: 0 50px 50px 0" />
                                                        <label for="floatingInput" class="d-flex align-items-center">Numéro de téléphone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <!-- Email Address -->
                                            {{-- <div class="col-12">
                                                <x-input placeholder="Entrez votre adresse e-mail" id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')"/>
                                            </div> --}}
                                            <!-- Password -->
                                            @if(Session::has('password'))
                                                <div class="col-password col-12">
                                                    <div class="form-floating">
                                                        <input id="password" class="block mt-1 w-full border-danger" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" class="form-control" style="border:1px solid red;" />
                                                        <label for="floatingInput" class="d-flex align-items-center">Mot de passe</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-password">
                                                    <div class="form-floating">
                                                        <input  type="password" name="password_confirmation" placeholder='Confirmer le mot de passe' id="password_confirmation" required autocomplete="new-password" class="form-control block mt-1 w-full border-danger" style="border:1px solid red;"/>
                                                        <label for="floatingInput" class="d-flex align-items-center">Confirmer le mot de passe</label>
                                                    </div>

                                                </div>
                                                <span>
                                                    <p class="text-danger">{{ Session::pull('password') }}</p>
                                                </span>
                                            @else
                                                <div class="col-password col-12">
                                                    <div class="form-floating">
                                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" class="form-control" />
                                                        <label for="floatingInput" class="d-flex align-items-center">Mot de passe</label>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-password">
                                                    <div class="form-floating">
                                                        <x-input  type="password" name="password_confirmation" placeholder='Confirmer le mot de passe' id="password_confirmation" required autocomplete="new-password" class="form-control block mt-1 w-full" />
                                                        <label for="floatingInput" class="d-flex align-items-center">Confirmer le mot de passe</label>
                                                    </div>

                                                </div>
                                            @endif
                                        <!-- Confirm Password -->

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input outline-danger" type="checkbox" id="CheckCondition" required>
                                                <label class="form-check-label" for="CheckCondition" style="font-size: 14px; font-weight:500">
                                                    J'ai lu et j'accepte les conditions générales et la politique de confidentialité de
                                                    <a href="/politique-de-confidentialite" style="color: var(--orangeBtn)">congobid.com</a>
                                                </label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="newsletter" id="CheckMail">
                                                <label class="form-check-label" for="CheckMail">
                                                    Je souhaite recevoir des notifications concernant les offres GRATUITES et autres
                                                </label>
                                            </div>
                                        </div> --}}
                                        <div class="col-12 justify-content-center d-flex">
                                            <button class="btn btn-3d-rounded-sm w-75">
                                                {{ __("S'inscrire") }}
                                            </button>
                                            {{-- <x-button class="btn ">

                                            </x-button> --}}
                                        </div>
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
</div>
@endsection


