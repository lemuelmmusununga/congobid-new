<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>CongoBid | HomePage</title>
        <link rel="shortcut icon" href="{{asset('images/logocongobid.ico')}}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@300;400&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/blueimp-gallery.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>


        @include('components.side-menu')
        {{-- @include('components.side-filter') --}}
        <div class="overplay"></div>
        @include('components.header-index')
        <div class="global-div">
            @yield('content')
        </div>
        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
        </div>
        @include('components.footer-page')
        @include('components.menu-chat-select')
        @stack('modals')


        <!-- Scripts -->
        <script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="{{asset('js/jquery.countdown.min.js')}}"></script> <!-- The Final Countdown plugin for jQuery -->
        <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
        <script src="{{asset('js/jquery.blueimp-gallery.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        {{-- <script src="{{asset('js/counterdown.js')}}"></script> --}}
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
    </body>
</html>
