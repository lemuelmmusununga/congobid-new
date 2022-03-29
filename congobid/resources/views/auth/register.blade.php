<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, at.</p>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                        <div class="card card-form">
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            @if(Session::has('success'))


                                 <ul>
                                   <li class="text-danger">{{ Session::get('success') }}</li>
                                </ul>


                            @endif
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name -->
                                <div class="form-group row g-3">
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre nom" id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus />
                                    </div>
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre pseudonyme" id="pseudo" class="block mt-1 w-full form-control" type="text" name="pseudo" :value="old('username')" required autofocus />
                                    </div>
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre numero de telephone" id="telephone" class="block mt-1 w-full form-control" type="number" name="telephone" required autofocus />
                                    </div>
                                    <!-- Email Address -->
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre adresse e-mail" id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')"/>
                                    </div>
                                    <!-- Password -->
                                    <div class="col-12">
                                        {{-- <div class="show-password">
                                            <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden"></span>
                                            <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show"></span>
                                        </div>
                                        <x-input placeholder="Mot de passe" id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" /> --}}
                                        <div class="mt-3 col-password">
                                            <div class="show-password">
                                                <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden"></span>
                                                <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show"></span>
                                            </div>
                                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="col-12">
                                        <x-input placeholder='Confirmer le mot de passe' id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required />
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="CheckCondition" required>
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
                                                Je souhaite recevoir des e-mails concernant les offres GRATUITES et autres promotions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <x-button class="ml-4 btn w-100">
                                            {{ __("S'inscrire") }}
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="block-login-network">
                            <div class="text-center mt-4" style="font-size: 1.3em">
                                <p class="link">Vous avez un compte? <a href="{{ route('login') }}">Connectez-vous</a></p>
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
