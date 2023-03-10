<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CongoBid | HomePage</title>
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@300;400&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">

</head><body>
    <div class="block-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="content-form">
                        <a href="/" class="back">
                            <span>
                                <span class="iconify" data-icon="la:angle-left"></span>
                            </span>
                            Accueil
                        </a>
                        <div class="text-center">
                            <img src="{{asset('images\logo\logo.png')}}" class="mb-4" alt="" srcset="">
                            <h2>Inscription</h2>
                        </div>
                        <div class="text-center w-100">
                            <div class="text-white center  mt-4" style="font-size: 1.3em">
                                <h6 class="text-center w-100" style="margin: 0">Je suis déjà inscrit ! <a href="{{ route('login') }}" style="color: var(--primaryColor)">Connectez-vous</a></h6>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-6">
                        <div class="block-content-card">
                            <div class="card card-form" style="padding-top: 40px; padding-bottom: 40px">
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" style="color:red;" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- Name -->
                                    <div class="form-group row g-3 g-lg-3">
                                        @if ( Session::has('prenom') || Session::has('nom') )
                                            <div class="col-12">
                                                <input value ="{{ Session::pull('prenom') }}" class="block mt-1 w-full form-control" type="text" name="prenom"  required />
                                            </div>
                                            <div class="col-12">
                                                <input value ="{{ Session::pull('nom') }}"  id="name" class="block mt-1 w-full form-control" type="text" name="name"  required />
                                            </div>
                                        @else
                                            <div class="col-12">
                                                <input placeholder="Entrez votre prénom" class="block mt-1 w-full form-control" type="text" name="prenom"  required autofocus />
                                            </div>
                                            <div class="col-12">
                                                <input placeholder="Entrez votre nom"  id="name" class="block mt-1 w-full form-control" type="text" name="name"  required autofocus />
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
                                                <x-input placeholder="Entrez votre pseudonyme" id="pseudo" class="block mt-1 w-full form-control" type="text" name="pseudo"  required autofocus />
                                            @endif
                                        </div>
                                            @if(Session::has('telephone'))
                                                <div class="input-group  rounded-pill col-12 border-danger">
                                                    <input id="phone" value="{{ Session::pull('tel') }}"  name="telephone" class="block mt-1  w-100" maxlength="14" type="tel" required style="width: 100%;outline:none;border:1px solid red;" />
                                                </div>
                                                <span>
                                                    <p class="text-danger">{{ Session::pull('telephone') }} </p>
                                                </span>
                                            @elseif (Session::has('tel'))
                                                <div class="input-group  rounded-pill col-12 border-danger">
                                                    <input id="phone" value="{{ Session::pull('tel') }}"  name="telephone" class="block mt-1  w-100" maxlength="14" type="tel" required />
                                                </div>
                                            @else
                                                <div class="input-group  rounded-pill col-12">
                                                    <input id="phone"  class="block mt-1  w-100" name="telephone" maxlength="14" type="tel" required style="width: 100%;outline:none" />
                                                </div>
                                            @endif
                                            <!-- Email Address -->
                                            {{-- <div class="col-12">
                                                <x-input placeholder="Entrez votre adresse e-mail" id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')"/>
                                            </div> --}}
                                            <!-- Password -->
                                            @if(Session::has('password'))
                                                <div class="col-password col-12">
                                                    <div class="show-password" id="show-password">
                                                        <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden"></span>
                                                        <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show"></span>
                                                    </div>
                                                    <input id="password" class="block mt-1 w-full border-danger" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" class="form-control" style="border:1px solid red;" />
                                                </div>
                                                <div class="col-12 col-password">
                                                    <div class="show-password show-password-1" id="show-password_two">
                                                        <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden_two"></span>
                                                        <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show_two"></span>
                                                    </div>
                                                    <input  type="password" name="password_confirmation" placeholder='Confirmer le mot de passe' id="password_confirmation" required autocomplete="new-password" class="form-control block mt-1 w-full border-danger" style="border:1px solid red;"/>
                                                </div>
                                                <span>
                                                    <p class="text-danger">{{ Session::pull('password') }}</p>
                                                </span>
                                            @else
                                                <div class="col-password col-12">
                                                    <div class="show-password" id="show-password">
                                                        <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden"></span>
                                                        <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show"></span>
                                                    </div>
                                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" class="form-control" />
                                                </div>
                                                <div class="col-12 col-password">
                                                    <div class="show-password show-password-1" id="show-password_two">
                                                        <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden_two"></span>
                                                        <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show_two"></span>
                                                    </div>
                                                    <x-input  type="password" name="password_confirmation" placeholder='Confirmer le mot de passe' id="password_confirmation" required autocomplete="new-password" class="form-control block mt-1 w-full" />
                                                </div>
                                            @endif
                                        <!-- Confirm Password -->

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input outline-danger" type="checkbox" id="CheckCondition" required>
                                                <label class="form-check-label" for="CheckCondition">
                                                    J'ai lu et j'accepte les conditions générales et la politique de confidentialité de
                                                    <a href="/politique-de-confidentialite">congobid.com</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="newsletter" id="CheckMail">
                                                <label class="form-check-label" for="CheckMail">
                                                    Je souhaite recevoir des notifications concernant les offres GRATUITES et autres
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <x-button class="ml-4 btn w-100">
                                                {{ __("S'inscrire") }}
                                            </x-button>
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
    <script src="{{asset('js/intlTelInput.js')}}"></script>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {

          utilsScript: "js/utils.js",
        });
    </script>
    <script>
        var condition = document.getElementById('#CheckCondition');
        var mail = document.getElementById('#CheckCondition');    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
