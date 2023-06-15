
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
</head>
<body>
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
                            <h2>Connexion</h2>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="block-content-card">
                        <div class="card card-form">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row g-3 g-lg-4">
                                    <!-- Email Address -->
                                <div class="col-12">


                                    <input id="phone" name="telephone"  class="block mt-1  w-100" type="tel" required style="width: 100%; outline:none" />

                                </div>


                             <!-- Password -->
                             <div class="col-password col-12">
                                <div class="show-password" id="show-password">
                                    <span class="iconify icon-hidden" data-icon="akar-icons:eye-slashed" id="icon_hidden"></span>
                                    <span class="iconify icon-show" data-icon="akar-icons:eye-open" id="icon_show"></span>
                                </div>
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" class="form-control" />
                            </div>

                            <!-- Remember Me -->
                            <div class="col-12 d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="newsletter" id="remember_me">
                                    <label class="form-check-label" for="remember_me">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                                <div class="d-flex items-center justify-content-end">
                                    @if (Route::has('password.request'))
                                        <a class="resert-password" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>


                            <div class="col-12">
                                <x-button class="ml-3 btn w-100">
                                    {{ __('Connexion') }}
                                </x-button>
                            </div>
                                </div>
                            </form>
                            <div class="block-login-network">
                                {{-- <div class="text-center mt-4">
                                    <p class="separator">Ou</p>
                                </div> --}}
                                {{-- <div class="row justify-content-center">
                                    <div class="col-5">
                                        <a href="{{ route('login.google') }}" class="icon">
                                            <span class="iconify" data-icon="flat-color-icons:google"></span>
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <a href="{{route('login.facebook')}}" class="icon">
                                            <span class="iconify" data-icon="logos:facebook"></span>
                                        </a>
                                    </div>
                                </div> --}}
                                <div class="text-center mt-5" style="font-size: 1.3em">
                                    <p class="link mb-0">Pas de compte ? <a href="/register">Inscrivez-vous</a></p>
                                </div>
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





