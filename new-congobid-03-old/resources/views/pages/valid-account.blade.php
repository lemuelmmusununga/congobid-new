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
                            <h2>Valider le compte</h2>
                            <p class="mb-0">Veuillez saisir le code d’activation à 4 chiffres envoyé au numéro <span class="text-white">+2430000000</span></p>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                        <div class="card card-form">
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="">
                                @csrf
                                <!-- Name -->
                                <div class="form-group row g-3">
                                    <div class="col-3">
                                        <input type="text" class="form-control form-valid" placeholder="-" maxlength="1" onkeypress="isInputNumber(event)">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control form-valid" placeholder="-" maxlength="1" onkeypress="isInputNumber(event)">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control form-valid" placeholder="-" maxlength="1" onkeypress="isInputNumber(event)">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control form-valid" placeholder="-" maxlength="1" onkeypress="isInputNumber(event)">
                                    </div>
                                    <div class="col-12">
                                        <x-button class="ml-4 btn w-100">
                                            {{ __("Valider") }}
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="block-login-network">
                            <div class="text-center mt-4">
                                <p class="link">Vous avez un compte? <a href="{{ route('login') }}">Connectez-vous</a></p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var condition = document.getElementById('#CheckCondition');
        var mail = document.getElementById('#CheckCondition');
        </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
