<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CongoBid | HomePage</title>
    <link rel="shortcut icon" href="{{ asset('images/logocongobid.ico') }}" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@300;400&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/blueimp-gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="{{ asset('js/slowNumber.js') }}"></script> --}}
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/flaticon_rr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon_rs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
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
    {{-- @include('components.side-menu') --}}
    {{-- @include('components.side-filter') --}}
    @include('components.navbar-home')
    <div class="overplay"></div>
    {{-- @include('components.header-index') --}}
    <div class="global-div">
        <div class="wrapper">
            <div class="bg-linear">
                @yield('content')
                @include('components.footer-home')
            </div>
        </div>

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
    @include('components.menu-sm')
    <div class="back-drop-menu"></div>
    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
    </div>
    {{-- @include('components.footer-page') --}}
    {{-- @include('components.menu-chat-select') --}}
    {{-- @stack('modals') --}}
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/scriptcarousel.js') }}"></script>
    <script>
        $('#page-load').addClass('d-none');
    </script>
    <script>
        $(document).ready(function() {

            $('.btn-menu').click(function(e) {
                e.preventDefault();
                $('.menu-sm').addClass('show');
                $('.back-drop-menu').addClass('show');
            })
            $('.back-drop-menu').click(function() {
                $(this).removeClass('show');
                $('.menu-sm').removeClass('show');
            })
            $('.btn-close-menu').click(function() {
                $('.back-drop-menu').removeClass('show');
                $('.menu-sm').removeClass('show');
            })
        })
        // var video= document.querySelector(".video")

        //     $(".modal .btn-close").click(function(){
        //         video.pause();
        //         video.currentTime = 0;
        //     })


        //     $(document).ready(function(){
        //     @if (session()->has('success'))
        //         $('.modal-success').addClass('show')
        //     @endif

        //     $('.close-modal-sm').click(function(){
        //         $('.modal-success').removeClass('show')
        //     })
        // });
    </script>
</body>

</html>
