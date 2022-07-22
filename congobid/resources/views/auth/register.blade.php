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

                            <p>Acheter a un prix hors toute concurrence</p>
                        </div>
                        <div class="text-center w-100">
                            <div class="text-white center  mt-4" style="font-size: 1.3em">
                                <p class="text-center w-100" style="margin: 0">Vous avez un compte? <a href="{{ route('login') }}" style="color: var(--primaryColor)">Connectez-vous</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                        <div class="block-content-card">
                            <div class="card card-form" style="padding-top: 40px; padding-bottom: 40px">
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- Name -->
                                    <div class="form-group row g-3 g-lg-3">
                                        <div class="col-12">
                                            <x-input placeholder="Entrez votre nom" id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus />
                                        </div>
                                        <div class="col-12">
                                            <x-input placeholder="Entrez votre prenom" class="block mt-1 w-full form-control" type="text" name="prenom" :value="old('username')" required autofocus />
                                        </div>
                                        <div class="col-12">
                                            @if(Session::has('pseudo'))
                                                <div class="input-group  rounded-pill col-12">
                                                    <x-input placeholder="Entrez votre pseudonyme border-danger" id="pseudo" class="block mt-1 w-full form-control" type="text" name="pseudo" :value="old('username')" required autofocus /> <br>
                                                </div>
                                                <span>
                                                    <p class="text-danger">{{ Session::get('pseudo') }}</p>
                                                </span>
                                            @else
                                                <x-input placeholder="Entrez votre pseudonyme" id="pseudo" class="block mt-1 w-full form-control" type="text" name="pseudo" :value="old('username')" required autofocus />
                                            @endif
                                        </div>

                                            @if(Session::has('telephone'))
                                                <div class="input-group  rounded-pill col-12">
                                                    <span class="input-group-text " id="basic-addon1">+243</span>
                                                    <input type="text" maxlength="14" class="form-control " name="telephone" placeholder="Entrez votre numero de telephone" style="border:1px solid red;">
                                                </div>
                                                <span>
                                                    <p class="text-danger">{{ Session::get('telephone') }}</p>
                                                </span>
                                            @else
                                                <div class="input-group  rounded-pill col-12">
                                                    <span class="input-group-text " id="basic-addon1">+243</span>
                                                    <input type="text" maxlength="14" class="form-control" name="telephone" placeholder="Entrez votre numero de telephone" >
                                                </div>
                                            @endif

                                            <!-- Email Address -->
                                        {{-- <div class="col-12">
                                            <x-input placeholder="Entrez votre adresse e-mail" id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')"/>
                                        </div> --}}
                                        <!-- Password -->
                                        <div class="col-password col-12">
                                            <div class="show-password" id="show-password">
                                                <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden"></span>
                                                <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show"></span>
                                            </div>
                                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" class="form-control" />
                                        </div>
                                        <div class="col-12 col-password">
                                            <div class="show-password " id="show-password_two">
                                                <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden_two"></span>
                                                <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show_two"></span>
                                            </div>
                                            <x-input  type="password" name="password_confirmation" placeholder='Confirmer le mot de passe' id="password_confirmation" required autocomplete="new-password" class="form-control block mt-1 w-full" />
                                        </div>
                                        <!-- Confirm Password -->

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="CheckCondition" required>
                                                <label class="form-check-label" for="CheckCondition">
                                                    J'ai lu et j'accepte les conditions générales et la politique de confidentialité de
                                                    <a href="/politique-de-confidentialite">congobid.com</a>
                                                </label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="newsletter" id="CheckMail">
                                                <label class="form-check-label" for="CheckMail">
                                                    Je souhaite recevoir des e-mails concernant les offres GRATUITES et autres promotions
                                                </label>
                                            </div>
                                        </div> --}}
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
    <script>
        var condition = document.getElementById('#CheckCondition');
        var mail = document.getElementById('#CheckCondition');    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
