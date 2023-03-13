<div wire:ignore>
    <div class="banner-home">
        <div class="content-banner">
            <div class="container">
                <div class="row g-1">
                    <div class="col-12 mb-3">
                        <input type="text" class="form-control" placeholder="Recherche...">
                    </div>

                    <div class="col-4">
                        <div class="card card-carousel">


                            <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner">
                                    @foreach ($promotions as $key => $promotion)
                                        <div class="carousel-item active">
                                            <div class="row g-1">
                                                <div class="col-6 col-bg">
                                                    <p>Prix CongoBid</p>
                                                    <h6>500$</h6>
                                                </div>
                                                <div class="col-6 col-bg">
                                                    <p>Prix marché</p>
                                                    <h6>500$ </h6>
                                                </div>
                                            </div>
                                            <div class="block-content-img">
                                                <img src="{{ asset('images/articles/' . ($promotion->images->first()->lien ?? '')) }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselBanner"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselBanner"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselBanner"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-8">
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="block-circle-video">
                                    <h6>Vidéos des gagnants</h6>
                                    <div class="circle">
                                        <a href="{{ route('clients.gagnants.index') }}"> <i
                                                class="fi fi-sr-play"></i>
                                            <img src="images/bg7.jpg" alt="image video gagnants">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="block-circle-video">
                                    <h6>Commment ça marche</h6>
                                    <div class="circle">
                                        <a href="{{ route('clients.instructions.index') }}">
                                            <i class="fi fi-sr-play"></i>
                                            <img src="images/bg7.jpg" alt="image video gagnants">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <a href="/articles" class="btn btn-3d-rounded-sm">
                                    Nos articles
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bundel">
            <h5>Bienvenu chez CongoBid !</h5>
        </div>
        <div class="block-btns">
            <div class="container">
                <div class="row g-3">
                    <div class="col-6">
                        <a href="/register" class="btn btn-3d-rounded-lg">S'inscrire</a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('clients.achat.bid') }}" class="btn btn-3d-rounded-lg">Achetez
                            des bids</a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('clients.instructions.index') }}"
                            class="btn btn-3d-rounded-lg">Vidéos explicatives</a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('profil') }}" class="btn btn-3d-rounded-lg">Mon compte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-all-enchere">
        <div class="block-enchere-in-progress">
            <div class="bundel text-center">
                <h4>Enchères en cours</h4>
            </div>
            <div class="container">
                <div id="slider-produit" class="owl-carousel carousel-car">
                    <div class="item">
                        <div class="card card-product">
                            <div class="container-fluid px-0">
                                <div class="row g-2 justify-content-center align-items-center">
                                    <div class="col-6 d-flex">
                                        <div class="item-badge">
                                            Lot n°32
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <div class="item-badge">
                                            Toute les villes
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <div class="time-block text-center">
                                            <h6 class="title mb-0"><i class="fi fi-rr-alarm-clock"></i> Enchère en cours</h6>
                                            <div class="time">
                                                00:09:12
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="block-cat">
                                            <p>Catégorie :</p>
                                            <h5 class="mb-0">
                                                Simba</h5>
                                        </div>
                                        <div class="block-cat">
                                            <p>Prix CongoBid :</p>
                                            <h5>200$</h5>
                                            <p>Prix du Marché :</p>
                                            <h5 class="text-hidden mb-0">
                                                300$ </h5>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-img">
                                            <img src="images/6.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <h2>Weston</h2>
                                        <p>...
                                        </p>
                                        <a href="#"
                                            class="link">Voir plus</a>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="#" class="btn btn-3d-rounded-sm">
                                            <i class="fi fi-rr-plus"></i> Participer à
                                            l'enchère
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-enchere-in-progress">
            <div class="bundel text-center">
                <h4>Enchères futures</h4>
            </div>
            <div class="container">
                <div id="slider-produit-2" class="owl-carousel carousel-car">
                    <div class="item">
                        <div class="card card-product">
                            <div class="container-fluid px-0">
                                <div class="row g-2 justify-content-center align-items-center">
                                    <div class="col-6 d-flex">
                                        <div class="item-badge">
                                            Lot n°32
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <div class="item-badge">
                                            Toute les villes
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <div class="time-block text-center">
                                            <h6 class="title mb-0"><i class="fi fi-rr-alarm-clock"></i> Enchère en cours</h6>
                                            <div class="time">
                                                00:09:12
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="block-cat">
                                            <p>Catégorie :</p>
                                            <h5 class="mb-0">Simba</h5>
                                        </div>
                                        <div class="block-cat">
                                            <p>Prix CongoBid :</p>
                                            <h5>200$</h5>
                                            <p>Prix du Marché :</p>
                                            <h5 class="text-hidden mb-0">400$</h5>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-img">
                                            <img src="images/6.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <h2>Weston</h2>
                                        <p>Loremipsum dolor...</p>
                                        <a href="#" class="link">Voir plus</a>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="#" class="btn btn-3d-rounded-sm">
                                            <i class="fi fi-rr-plus"></i> Ajouter aux favories
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-enchere-in-progress">
            <div class="bundel text-center">
                <h4>Salons</h4>
            </div>
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <div class="card card-product card-salon">
                            <div class="container-fluid px-0">
                                <div class="row g-2 justify-content-center align-items-center">
                                    <div class="col-4 d-flex">
                                        <div class="item-badge">
                                            Lot n°32
                                        </div>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <div class="item-badge">
                                            Privé
                                        </div>
                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <div class="item-badge">
                                            Toute les villes
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card-img card-sm">
                                            <div class="num">1</div>
                                            <img src="images/6.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="article-title">
                                                    Weston
                                                </h4>
                                                <div class="part d-flex">
                                                    <div class="num-all-part">
                                                        200 /
                                                    </div>
                                                    <div class="num-part">
                                                        <span>500</span>
                                                        <span>Participants</span>
                                                    </div>
                                                </div>
                                                <div class="detail">
                                                    L'enchère de cette article débutera dans
                                                    <div class="time-block d-inline-flex">
                                                        <div class="time">03:08:04</div>
                                                    </div>
                                                    à condition que le quota 500 Participants soit
                                                    atteint.
                                                </div>
                                                <a href="#" class="btn btn-3d-rounded-sm">
                                                    <i class="fi fi-rr-plus"></i> Demander l'accès au
                                                    salon
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card card-product card-salon">
                            <div class="container-fluid px-0">
                                <div class="row g-2 justify-content-center align-items-center">
                                    <div class="col-4 d-flex">
                                        <div class="item-badge">
                                            Lot n°32
                                        </div>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <div class="item-badge">
                                            Privé
                                        </div>
                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <div class="item-badge">
                                            Toute les villes
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card-img card-sm">
                                            <div class="num">1</div>
                                            <img src="images/6.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="article-title">
                                                    Weston
                                                </h4>
                                                <div class="part d-flex">
                                                    <div class="num-all-part">
                                                        200 /
                                                    </div>
                                                    <div class="num-part">
                                                        <span>500</span>
                                                        <span>Participants</span>
                                                    </div>
                                                </div>
                                                <div class="detail">
                                                    L'enchère de cette article débutera dans
                                                    <div class="time-block d-inline-flex">
                                                        <div class="time">03:08:04</div>
                                                    </div>
                                                    à condition que le quota 500 Participants soit
                                                    atteint.
                                                </div>
                                                <a href="#" class="btn btn-3d-rounded-sm">
                                                    <i class="fi fi-rr-plus"></i> Demander l'accès au
                                                    salon
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card card-product card-salon">
                            <div class="container-fluid px-0">
                                <div class="row g-2 justify-content-center align-items-center">
                                    <div class="col-4 d-flex">
                                        <div class="item-badge">
                                            Lot n°32
                                        </div>
                                    </div>
                                    <div class="col-3 d-flex justify-content-center">
                                        <div class="item-badge">
                                            Privé
                                        </div>
                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <div class="item-badge">
                                            Toute les villes
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card-img card-sm">
                                            <div class="num">1</div>
                                            <img src="images/6.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="article-title">
                                                    Weston
                                                </h4>
                                                <div class="part d-flex">
                                                    <div class="num-all-part">
                                                        200 /
                                                    </div>
                                                    <div class="num-part">
                                                        <span>500</span>
                                                        <span>Participants</span>
                                                    </div>
                                                </div>
                                                <div class="detail">
                                                    L'enchère de cette article débutera dans
                                                    <div class="time-block d-inline-flex">
                                                        <div class="time">03:08:04</div>
                                                    </div>
                                                    à condition que le quota 500 Participants soit
                                                    atteint.
                                                </div>
                                                <a href="#" class="btn btn-3d-rounded-sm">
                                                    <i class="fi fi-rr-plus"></i> Demander l'accès au
                                                    salon
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-all-bids">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <a href="#">
                        <div class="card">
                            <div class="container-fluid px-2">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card-piece">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                            <img src="{{asset('images/piece.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h4>Obtenez gratuitement des bids</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


        {{-- <script src="js/app.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/scriptcarousel.js"></script> --}}
</div>

