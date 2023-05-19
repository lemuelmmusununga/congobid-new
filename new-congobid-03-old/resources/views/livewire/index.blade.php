<div wire:ignore>
    <div class="banner-home">
        <div class="con♠ent-banner">
            <div class="container">
                <div class="row g-1">
                    <div class="col-12 mb-3">
                        <input type="text" class="form-control" placeholder="Recherche...">
                    </div>
                    <div class="col-5">
                        <div class="card card-carousel">
                            <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($promotions as $key => $promotion)
                                        <div class="carousel-item active">
                                            <div class="row g-1">
                                                <div class="col-6 col-bg">
                                                    <p>Prix CongoBid</p>
                                                    <h6>{{ $promotion->prix }}</h6>
                                                </div>
                                                <div class="col-6 col-bg">
                                                    <p>Prix marché</p>
                                                    <h6>{{ $promotion->prix_marche }}</h6>
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
                                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-7">
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="block-circle-video">
                                    <h6>Vidéos des gagnants</h6>
                                    <div class="circle">
                                        <a href="{{ route('clients.gagnants.index') }}"> <i class="fi fi-sr-play"></i>
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
                                <a href="#" class="btn btn-3d-rounded-sm btn-article" data-bs-toggle="modal"
                                    data-bs-target="#modalarticle">
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
        <div class="block-btns pt-1">
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
                        <a href="{{ route('clients.instructions.index') }}" class="btn btn-3d-rounded-lg">Vidéos
                            explicatives</a>
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
                        @foreach ($articles as $key=> $article)
                            @php
                                if (Auth::user() && $articles != null) {
                                    $pivot =
                                        $article->enchere?->pivotbideurenchere
                                            ->where('enchere_id', $article->enchere?->id)
                                            ->where('user_id', Auth::user()->id)
                                            ->first() ?? '';
                                }
                                $prix_roi = '';
                            @endphp
                            
                            @if (
                                $article->enchere?->munite * 60 + $article->enchere?->seconde > 0 &&
                                    $article->enchere?->state == 0 &&
                                    date('d-m-Y', strtotime($article->enchere?->date_debut)) == now()->format('d-m-Y') &&
                                    date('d-m-Y H:i', strtotime($article->enchere?->date_debut)) <= now(' Africa/kinshasa')->format('d-m-Y H:i'))
                                <div class="card card-product">
                                    <div class="container-fluid px-0">
                                        <div class="row g-2 justify-content-center align-items-center">
                                            <div class="col-6 d-flex">
                                                <div class="item-badge">
                                                    Lot n°{{ $article->id }}
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <div class="item-badge">
                                                    Toute les villes
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                <div class="time-block text-center">
                                                    <h6 class="title mb-0"><i class="fi fi-rr-alarm-clock"></i> Enchère
                                                        en cours</h6>
                                                    <div>
                                                        @livewire('countdown' )
                                                    </div>
                                                    <div class="time">
                                                        @livewire('decrematation', ['getart' => $article->id])
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="block-cat">
                                                    <p>Catégorie :</p>
                                                    <h5 class="mb-0">{{ $article->paquet->libelle ?? '' }}</h5>
                                                </div>
                                                <div class="block-cat">
                                                    <p>Prix CongoBid :</p>
                                                    <h5>{{ $article->prix }}$</h5>
                                                    <p>Prix du Marché :</p>
                                                    <h5 class="text-hidden mb-0">
                                                        {{ $article->prix_marche }}$ </h5>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="card-img">
                                                    <img src="{{ asset('images/articles/' . ($article->images->first()->lien == null ? '' : $article->images->first()->lien)) }}"
                                                        alt="{{$article->titre}}">
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <h2>{{ $article->titre }}</h2>
                                                <p>{{ Str::substr($article->description, 0, 80) }}...
                                                </p>
                                                <a href="{{ route('show.detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                                    class="link">Voir plus</a>
                                            </div>
                                            <div class="col-12 text-center">
                                                @if (Auth::user())
                                                    @if (Auth::user()->pivotBideurEnchere->where('enchere_id', $article->enchere->id)->first() == null)
                                                        <a href="#" class="btn btn-3d-rounded-sm" data-toggle="modal" data-target="#exampleModalCenter{{$key}}">
                                                            <i class="fi fi-rr-plus"></i> Participer à l'enchère 
                                                        </a>                                                    
                                                    @else
                                                        <a href="{{ route('show.detail', ['id' => $article->id,'name'=>$article->titre]) }}" class="btn btn-3d-rounded-sm">
                                                            <i class="fi fi-rr-plus"></i> Ouvrir l'enchere
                                                        </a>
                                                    @endif
                                                @else
                                                    <a href="{{ route('register') }}" class="btn btn-3d-rounded-sm">
                                                        <i class="fi fi-rr-plus"></i> Participer à
                                                        l'enchère 
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                        @endforeach
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
                        @foreach ($articles as $article)
                            @php
                                $test = $article->enchere?->date_debut > now('Africa/Kinshasa')->format('Y-m-d H:i:s');
                            @endphp
                            @if ($test && $article->enchere?->state == 0)
                                <div class="card card-product">
                                    <div class="container-fluid px-0">
                                        <div class="row g-2 justify-content-center align-items-center">
                                            <div class="col-6 d-flex">
                                                <div class="item-badge">
                                                    Lot n°{{ $article->id }}
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <div class="item-badge">
                                                    Toute les villes
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                <div class="time-block text-center">
                                                    <h6 class="title mb-0"><i class="fi fi-rr-alarm-clock"></i>
                                                        {{ date('d-m-Y', strtotime($article->enchere?->date_debut)) == now('Africa/Kinshasa')->format('d-m-Y') ? 'Aujourd\'hui' : 'Date du début' }}
                                                    </h6>
                                                    <div class="time">
                                                        <h5 class="text-success">
                                                            {{ date('d-m-Y', strtotime($article->enchere?->date_debut)) . ' à ' . date('H:i:s', strtotime($article->enchere?->date_debut)) }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="block-cat">
                                                    <p>Catégorie :</p>

                                                    <h5 class="mb-0">
                                                        {{ $article->paquet->libelle ?? '' }}</h5>
                                                </div>
                                                <div class="block-cat">
                                                    <div class="bg-pr" style="">
                                                        <img src="{{ asset('images/polygone.png') }}" alt=""
                                                            srcset="">
                                                    </div>
                                                    <p>Prix CongoBid :</p>
                                                    <h5 class="price-bid">{{ $article->prix }}$</h5>
                                                    <h5 style="opacity: 0">{{ $article->prix }}$</h5>
                                                    <p>Prix du Marché :</p>
                                                    <h5 class="text-hidden mb-0">
                                                        {{ $article->prix_marche }}$ </h5>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="card-img">
                                                    <img src="{{ asset('images/articles/' . ($article->images->first()->lien == null ? '' : $article->images->first()->lien)) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <h2>{{ $article->titre }}</h2>
                                                <p>{{ Str::substr($article->description, 0, 80) }}...
                                                </p>
                                                <a href="{{ route('show.detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                                    class="link">Voir plus</a>
                                            </div>
                                            @include('components.boutons-future')
                                            {{-- <div class="col-12 text-center">
                                                <a href="#" class="btn btn-3d-rounded-sm">
                                                    <i class="fi fi-rr-plus"></i> Participer à
                                                    l'enchère
                                                </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
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
                    @foreach ($salons as $key => $salon)
                        {{-- @dd() --}}
                        <div class="col-12 col-md-6">
                            <div
                                class="card card-product {{ Auth::user() ? ($salon->pivotclientsalon->where('user_id', Auth::user()->id)->first() == null ? 'card-salon' : 'card-salon-me') : 'card-salon' }}">
                                <div class="container-fluid px-0">
                                    <div class="row g-2 justify-content-center align-items-center">
                                        <div class="col-4 d-flex">
                                            <div class="item-badge">
                                                Lot n°{{ $salon->article->id }}
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
                                                <div class="num">{{ $loop->index + 1 }}</div>
                                                <img src="{{ asset('images/articles/' . ($salon->article->images->first()->lien ?? '')) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4 class="article-title">
                                                        {{ $salon->article->titre ?? '' }}
                                                    </h4>
                                                    <div class="part d-flex">
                                                        @if ($salon->pivotclientsalon->count() < $salon->limite)
                                                            <div class="num-all-part">
                                                                {{ $salon->pivotclientsalon->count() }} /
                                                            </div>
                                                        @endif
                                                        <div class="num-part">
                                                            <span> {{ $salon->limite }}</span>
                                                            <span>Participants</span>
                                                        </div>
                                                    </div>
                                                    <div class="detail">
                                                        L'enchère de cette article débutera dans
                                                        <div class="time-block d-inline-flex">
                                                            <div class="time">
                                                                {{ date('d/ m /Y', strtotime($salon->enchere->date_debut ?? '')) ?? '' }}
                                                                à
                                                                {{ date('H : i ', strtotime($salon->enchere->dat_debut ?? '')) ?? '' }}
                                                            </div>
                                                        </div>
                                                        à condition que le quota {{ $salon->limite }} Participants soit
                                                        atteint.
                                                    </div>
                                                    @if (Auth::user())
                                                        @if ($salon->pivotclientsalon?->where('user_id', Auth::user()->id)->first() === null)
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalEnchereSalon_{{ $key }}"
                                                                class="btn btn-3d-rounded-sm">
                                                                <i class="fi fi-rr-plus"></i> Demander l'accès au
                                                                salon
                                                            </a>
                                                        @else
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#modalEnchereAnnuler_{{ $key }}"
                                                                class="btn btn-3d-rounded-sm">
                                                                <i class="fi fi-rr-plus"></i> Decliener l'accès au
                                                                salon
                                                            </a>
                                                        @endif
                                                    @else
                                                        <a href="/login" data-bs-toggle="modal"
                                                            class="btn btn-3d-rounded-sm">
                                                            <i class="fi fi-rr-plus"></i> Decliener l'accès au
                                                            salon
                                                        </a>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('components.modal-index')
        
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
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
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

    <div class="modal fade" id="modalarticle" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col justify-content-center ">
                        {{-- <h3> Nos Articles </h3> --}}
                        <div class="row m-2">
                            <a href="{{ route('show.articles') }}" class="btn btn-3d-rounded-sm btn-article">
                                Categories
                            </a>
                        </div>
                        <div class="row m-2">
                            <a href="{{ route('show.enchers') }}" class="btn btn-3d-rounded-sm btn-article">
                                Enchères
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
</div>
