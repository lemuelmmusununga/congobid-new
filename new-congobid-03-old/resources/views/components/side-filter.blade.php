<div class="side-menu-filter">
    <div class="close-side-menu">
        <span></span>
        <span></span>
    </div>
    <div class="content-filter">
        <h4>Catégories</h4>
        <ul>
            @foreach ($paquets as $paquet)
                <li>
                <span class="title"> {{ $paquet->libelle }} </span>
                    <span class="echelle"> {{ $paquet->min }}$ -  {{ $paquet->max == null ? 'plus' : $paquet->max }}{{ $paquet->max == null ? '' : '$' }}</span>
                    <span class="iconify" data-icon="icons8:angle-right"></span>
                </li>
            @endforeach
        </ul>
        {{-- <div class="block-pub">
            <div id="carouselExampleIndicator" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    @foreach ($
                        <div class="carousel-item active">
                            <div class="lightBoxGallery">
                                <div class="container-fluid">
                                    <div class="row g-0">
                                        <div class="col-6">
                                            <div class="content-img">
                                                <a href="{{asset('images/img-6.png')}}" data-gallery="">
                                                    <img src="{{asset('images/img-6.png')}}" alt="img-congobid" class="w-100">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="price-congobid mt-3">
                                                <p>Prix Congobid</p>
                                                <h6>200$</h6>
                                                <p>Prix marché</p>
                                                <h6>600$</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="carousel-item">
                            <div class="lightBoxGallery">
                                <div class="container-fluid">
                                    <div class="row g-0">
                                        <div class="col-6">
                                            <div class="content-img">
                                                <a href="{{asset('images/img-6.png')}}" data-gallery="">
                                                    <img src="{{asset('images/img-6.png')}}" alt="img-congobid" class="w-100">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="price-congobid mt-3">
                                                <p>Prix Congobid</p>
                                                <h6>200$</h6>
                                                <p>Prix marché</p>
                                                <h6>600$</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Précédent</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                        </button>
                </div>
            </div>
        </div> --}}
    </div>
</div>
