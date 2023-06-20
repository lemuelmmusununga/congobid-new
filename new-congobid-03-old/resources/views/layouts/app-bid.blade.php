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
    {{-- @include('components.side-menu') --}}
    {{-- @include('components.side-filter') --}}
    {{-- @include('components.navbar-bid') --}}
    <div class="overplay"></div>
    {{-- @include('components.header-index') --}}
    <div class="global-div no-linear" style="z-index: 1;">
        <div class="wrapper">
            @yield('content')
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
    <script>

    </script>

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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/slowNumber.js') }}"></script>
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
            // Crée un tableau de confettis
            // const confetti = [];

            // // Défini le nombre de confettis à utiliser
            // const numberOfConfetti = 100;

            // // Récupère le conteneur
            // const container1 = document.getElementById('confetti-container');

            // // Crée des confettis et les ajoute au tableau
            // for (let i = 0; i < numberOfConfetti; i++) {
            //   const c = document.createElement('div');
            //   c.className = 'confetti';
            //   confetti.push(c);
            //   container1.appendChild(c);
            // }

            // // Anime les confettis
            // function animateConfetti() {
            //   confetti.forEach(c => {
            //     c.style.transform = `translate(${c.translationX}px, ${c.translationY}px) rotate(${c.rotation}deg)`;
            //     c.translationY += c.speed;
            //     c.rotation += c.rotationSpeed;
            //     if (c.translationY >= window.innerHeight) {
            //       c.translationX = Math.random() * window.innerWidth;
            //       c.translationY = -10 - Math.random() * 100;
            //     }
            //   });
            //   requestAnimationFrame(animateConfetti);
            // }

            // // Initialise les propriétés de chaque confetti
            // confetti.forEach(c => {
            //   c.translationX = Math.random() * window.innerWidth;
            //   c.translationY = Math.random() * window.innerHeight;
            //   c.speed = Math.random() * 5 + 5;
            //   c.rotation = Math.random() * 360;
            //   c.rotationSpeed = Math.random() * 5;
            // });

            // // Lance l'animation
            // animateConfetti();
            var buttons = document.querySelectorAll('.btn-mobile');
            var container = document.querySelector('body');
            var startX, startY, lastX, lastY, deltaX, deltaY, newLeft, newTop;
            var isClicking = false;
            let fromClick = true;

            buttons.forEach(function(btn_mobile) {
                btn_mobile.addEventListener('touchstart', function(event) {
                    event.preventDefault();
                    startX = event.touches[0].pageX;
                    startY = event.touches[0].pageY;
                    lastX = startX;
                    lastY = startY;
                    isClicking = true; // Marque le début d'un clic
                    event.stopPropagation();

                });

                btn_mobile.addEventListener('touchmove', function(event) {
                    event.preventDefault();
                    deltaX = event.touches[0].pageX - lastX;
                    deltaY = event.touches[0].pageY - lastY;
                    lastX = event.touches[0].pageX;
                    lastY = event.touches[0].pageY;
                    var oldLeft = btn_mobile.offsetLeft;
                    var oldTop = btn_mobile.offsetTop;
                    newLeft = btn_mobile.offsetLeft + deltaX;
                    newTop = btn_mobile.offsetTop + deltaY;
                    if (newLeft > 0 && newLeft + btn_mobile.offsetWidth < container.offsetWidth) {
                        btn_mobile.style.left = newLeft + 'px';
                    }
                    if (newTop > 0 && newTop + btn_mobile.offsetHeight < container.offsetHeight) {
                        btn_mobile.style.top = newTop + 'px';
                    }
                    if (newTop + btn_mobile.offsetHeight > container.offsetHeight) {
                        btn_mobile.style.top = (container.offsetHeight - btn_mobile.offsetHeight) +
                            'px';
                    }
                    if (oldLeft != newLeft || oldTop != newTop) {
                        fromClick = false;
                    }
                });

                btn_mobile.addEventListener('touchend', function(event) {
                    event.preventDefault();
                    event.stopPropagation();

                    if (fromClick) {
                        // Empêche la propagation de l'événement
                        handleClick(this); // Appelle la fonction de gestion du clic
                    }
                    isClicking = false; // Réinitialise l'état du clic
                    fromClick = true; // Réinitialise l'état du clic
                });

                // btn_mobile.addEventListener('click', function(event) {
                //     event.preventDefault();
                //     alert('click');
                //     // if (isClicking) {
                //         handleClick(); // Appelle la fonction de gestion du clic
                //     // }
                // });
            });

            const myModal = new bootstrap.Modal('#bloqueliste', {
                keyboard: false
            });

            function handleClick(element) {
                if ($(element).hasClass('btn-message')) {
                    // Ajoute ton code ici pour gérer le clic
                    $('.writing-block-chat').toggleClass('hidden');
                } else {
                    myModal.show()

                }
            }

            var btnCloseModal = document.querySelector('.btn-ok[data-dismiss="modal"]')

            btnCloseModal.addEventListener('touchend', function(event) {
                event.preventDefault();
                event.stopPropagation();
                myModal.hide()
            })


            // const fullscreenBtn = document.getElementById('fullscreen-btn');

            // fullscreenBtn.addEventListener('click', () => {
            //     const element = document.documentElement; // Sélectionne l'élément racine de la page
            //     if (element.requestFullscreen) {
            //         element.requestFullscreen();
            //     } else if (element.webkitRequestFullscreen) {
            //         // Pour Safari/Chrome sur les anciennes versions
            //         element.webkitRequestFullscreen();
            //     }
            // });
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
    @yield('livewire-script')
    @yield('javascript')
</body>

</html>
