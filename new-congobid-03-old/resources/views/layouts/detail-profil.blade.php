<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CongoBid | HomePage</title>
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@300;400&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @livewireStyles
        <script src="{{ asset('js/slowNumber.js') }}"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div id="page-load">
            <div class="backdrop fade"></div>
            <div class="parent-modal">
                <div class="dialog dialog-centered">
                    <div class="content-modal">
                        <div class="body">
                            <div class="d-flex align-items-center">
                                <div class="load-spiner">
                                </div>
                                <div class="text-star">
                                    <h6 class="mb-0" style="color:var(--colorTitre)!important;">
                                        Veuillez patienter Svp ...
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('components.header-detail')
        @include('components.menu-sm')
        <div class="global-div">
            @yield('content')
            <div class="overplay"></div>
            @if (Session::has('success'))
                <div class="modal-success show">
                    <div class="over">

                    </div>
                    <div class="content-modal">
                        <div class="close-modal-sm">

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

        {{-- @include('components.footer') --}}
        {{-- @include('components.menu-chat-select')

        @stack('modals') --}}


        @stack('modals')
        <script>
            $('#page-load').addClass('d-none');
        </script>
        <script>
            var video= document.querySelector(".video")

                $(".modal .btn-close").click(function(){
                    video.pause();
                    video.currentTime = 0;
                })

                $(document).ready(function(){
                    @if (session()->has('success'))
                        $('.modal-success').addClass('show')
                    @endif

                    $('.close-modal-sm').click(function(){
                        $('.modal-success').removeClass('show')
                    })
                });
        </script>

        <!-- Scripts -->
        <script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="{{asset('js/jquery.countdown.min.js')}}"></script> <!-- The Final Countdown plugin for jQuery -->
        <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
        <script src="{{asset('js/jquery.blueimp-gallery.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

        {{-- <script src="{{asset('js/counterdown.js')}}"></script> --}}
        <script>
            $('.btn-chat-float').click(function(){
                $(this).toggleClass('close')
                $('.chat-box').toggleClass('show')
            })
            $('.btn-close-chat-box').click(function(){
                $('.chat-box').removeClass('show')
                $('.btn-chat-float').removeClass('close')
            })
            var video= document.querySelector(".video")

                $(".modal .btn-close").click(function(){
                    video.pause();
                    video.currentTime = 0;
                })


                 $(document).ready(function(){
                    @if (session()->has('success'))
                        $('.modal-success').addClass('show')
                    @endif

                    $('.close-modal-sm').click(function(){
                        $('.modal-success').removeClass('show')
                    })
                });
        </script>

        <script>
            const nvFichier = document.getElementById('img-file');

            const imgDw = document.querySelector('.modal-body .avatar-profil img');

            nvFichier.addEventListener('change', function () {


                const fichier = this.files[0];

                if (fichier) {

                    const analyseur = new FileReader();

                    // imgDw1.style.display = "block";

                    analyseur.readAsDataURL(fichier);

                    analyseur.addEventListener('load', function () {

                        imgDw.setAttribute('src', this.result);

                    })

                }

            })
        </script>
        @yield('javascript')
    </body>
</html>
