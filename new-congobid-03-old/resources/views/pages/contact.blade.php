{{-- @extends('layouts.app')
@section('content')
 --}}


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
 </head>
 <body>
    @include('layouts.app-profil')
     <div class="block-form">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-6 px-0">
                     <div class="content-form">
                        
                         <div class="text-center">
                             <img src="{{asset('images\logo\logo.png')}}" class="mb-4" alt="" srcset="">
                             <h2>Contactez-nous</h2>

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

                             <form method="POST" action="{{ route('contact.requette') }}">
                                @csrf
                                <!-- Name -->
                                <div class="form-group row g-3">
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre nom" id="nom" class="block mt-1 w-full form-control" type="text" name="nom" required autofocus />
                                    </div>
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre numero de telephone"  class="block mt-1 w-full form-control" type="telephone" name="telephone"  required autofocus />
                                    </div>

                                    <div class="col-12">
                                        <x-input placeholder="Email" id="mail" class="block mt-1 w-full form-control" type="email" name="email" required autofocus />
                                    </div>
                                    <div class="col-12">
                                        <textarea placeholder="Ecriver votre message" name="content" id="" cols="40" class="form-control" rows="30" aria-placeholder="messages" style="height: 120px; border-radius:16px; padding:20px;"></textarea>
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class=" form-control btn btn-primary" style="">Envoyer</button>
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
                                 {{-- <div class="text-center mt-5" style="font-size: 1.3em">
                                     <p class="link mb-0">Pas de compte ? <a href="/register">Inscrivez-vous</a></p>
                                 </div> --}}
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="global-div">
        @yield('content')
        @if (Session::has('success'))
            <div class="modal-success show">
                <div class="over">

                </div>
                <div class="content-modal" >
                    <div class="close-modal-sm" data-mbd-dismiss="modal" aria-label="Close">

                    </div>
                    <div class="header">
                        <div class="icon">
                            <div class="content-icon">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="text-center">
                            <h6>CongoBid</h6>
                            <p>{{ Session::pull('success') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @elseif (Session::has('danger'))
            <div class="modal-success show">
                <div class="over">

                </div>
                <div class="content-modal">
                    <div class="close-modal-sm">

                    </div>
                    <div class="header" style="background: red;">
                        <div class="icon">
                            <div class="content-icon">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="text-center">
                            <h6>CongoBid</h6>
                            <p>{{ Session::pull('danger') }}</p>

                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
     <script src="{{asset('js/main.js')}}"></script>
 </body>
 </html>


{{--
    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Nous Contacter</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container">
                <div class="row g-3 g-lg-5">
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <div class="card card-form">
                            @if (Session::has('danger'))
                                <div class="alert alert-danger">
                                    <span>{{Session::get('danger')}}</span>
                                </div>
                            @elseif(Session::has('success'))
                                <div class="alert alert-success">
                                    <span>{{Session::get('success')}}</span>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('contact.requette') }}">
                                @csrf
                                <!-- Name -->
                                <div class="form-group row g-3">
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre nom" id="nom" class="block mt-1 w-full form-control" type="text" name="nom" required autofocus />
                                    </div>
                                    <div class="col-12">
                                        <x-input placeholder="Entrez votre numero de telephone"  class="block mt-1 w-full form-control" type="telephone" name="telephone"  required autofocus />
                                    </div>

                                    <div class="col-12">
                                        <x-input placeholder="Email" id="mail" class="block mt-1 w-full form-control" type="email" name="email" required autofocus />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="content" id="" cols="30" class="form-control" rows="10" aria-placeholder="messages"></textarea>
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-logo-money" style="padding: 30px 0">
        <div class="container">
            <h5>Adresse : Colonel modjiba
                <br>+243 90 0090005
            </h5>

        </div>
    </div> --}}
{{-- @endsection --}}

