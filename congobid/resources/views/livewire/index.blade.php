<div>
        @include('components.header-index')

            <div class="wrapper">
                <div class="block-content-pageHome">
                    <div class="block-videos container">
                        <div class="row g-1">
                            <div class="col-lg-4 col-4">
                                <div class="block-banner-sm">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            @foreach ($promotions as $key => $promotion)
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key }}"></button>
                                            @endforeach

                                            {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> --}}
                                        </div>
                                        <div class="carousel-inner">
                                            @foreach ($promotions as $key => $promotion)
                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                    <div class="lightBoxGallery">
                                                        <div class="container-fluid">
                                                            <div class="row align-items-center">
                                                                <div class="col-6">
                                                                    <div class="content-img">
                                                                        <a href="{{ asset('images/articles/'.$promotion->images->first()->lien) }}" data-gallery="">
                                                                            {{-- <img src="{{ asset('images/articles/'.$promotion->images->first()->lien) }}" alt="{{ $promotion->titre }}" class="w-100"> --}}
                                                                            <img src="{{asset('images/img-6.png')}}" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="price-congobid mt-3">
                                                                        <p>Prix Congobid</p>
                                                                        <h6>{{ $promotion->prix }} $</h6>
                                                                        <br>
                                                                        <p>Prix marché</p>
                                                                        <h6><strike>{{ $promotion->prix_marche }} $</strike></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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

                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Précédent</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Suivant</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="block-video-winner block-video">
                                    <div class="title">
                                       Vidéos des gagnants
                                    </div>
                                    <a href="{{ route('clients.gagnants.index') }}">
                                        <div class="play-video">
                                            <div class="overplay-sm"></div>
                                            <span class="iconify" data-icon="clarity:play-solid"></span>
                                            <img src="images/img-3.jpg" alt="img-congobid">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="block-video-fonction block-video">
                                    <div class="title">
                                        Comment ça marche
                                    </div>
                                    <a href="{{ route('clients.instructions.index') }}">
                                        <div class="play-video">
                                            <div class="overplay-sm"></div>
                                            <img src="images/img-2.jpg" alt="img-congobid">
                                            <span class="iconify" data-icon="clarity:play-solid"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 ms-auto">
                                <div class="text-star">
                                    <a href="/articles" class="btn">Nos articles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-marquee">
                        <div class="content">
                            <div class="title">
                                {{ $communique ?? "Bienvenue dans CongoBid !" }}
                            </div>
                        </div>
                    </div>
                    <div class="block-items">
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-lg-5 g-3">
                                <div class="col-lg-3 col-6">
                                    <div class="card">
                                        <a href="/register">
                                            <div class="content d-flex justify-content-between align-items-center">
                                                <div class="block-icon">
                                                    <span class="iconify" data-icon="bi:pencil-square"></span>
                                                </div>
                                                <div class="title">
                                                    S'inscrire
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="card">
                                        <a href="{{ route('clients.achat.bid') }}">
                                            <div class="content d-flex justify-content-between align-items-center">
                                                <div class="block-icon">
                                                    <span class="iconify" data-icon="fa6-solid:hand-holding-dollar"></span>
                                                </div>
                                                <div class="title">
                                                   Acheter des bids
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="card">
                                        <a href="{{route('clients.instructions.index')}}">
                                            <div class="content d-flex justify-content-between align-items-center">
                                                <div class="block-icon">
                                                    <span class="iconify" data-icon="el:play"></span>
                                                </div>
                                                <div class="title">
                                                   Vidéos explicatives
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="card">
                                        <a href="{{route('profil')}}">
                                            <div class="content d-flex justify-content-between align-items-center">
                                                <div class="block-icon">
                                                    <span class="iconify" data-icon="fa:user"></span>
                                                </div>
                                                <div class="title">
                                                    Mon compte
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-bid-home">
                    <div class="text-center">
                        <h2>{{__('content.title-index')}}</h2>
                    </div>
                    <div class="container">
                        <div class="row g-4 mb-4">
                            @foreach ($articles as $article)
                                @if ((date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y')) && $article->enchere->state == 1)
                                    <div class="col-12 col-lg-4" id="{{$article->titre}}">
                                        <div class="card" id="">
                                            <div class="timeUpdate">
                                                <div class="text-center">
                                                    <h6>Date du début</h6>
                                                    <h6>{{ date('d-m-Y', strtotime($article->enchere->date_debut)).' à '.date('H:m', strtotime($article->enchere->heure_debut)) }}</h6>

                                                </div>
                                            </div>
                                            <div class="container-fluid px-0">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="block-price">
                                                            <h6>Catégorie : <span>{{ $article->paquet->libelle ??'' }}</span></h6>
                                                            <h6>Prix CongoBid : <span>{{ $article->prix }}$</span></h6>
                                                            <h6> Prix Kinshasa : <span> <strike style="color: black;"> {{ $article->prix_marche }}$ </strike> </span> </h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        {{-- <img src="{{ asset('images/articles/'.($article->images == null ? null : $article->images[0]->lien) ) }}" alt="{{ $article->titre }}"> --}}
                                                        <img src="{{ asset('images/img-6.png' ) }}" alt="img" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            @if (Auth::user())
                                                <div class="block-statut {{ $article->paquet_id == Auth::user()->bideurs->first()->paquet_id ? 'active' : 'unactive' }} {{ $article->enchere->state == '1' ? 'on' : 'off' }}">
                                                    <div class="statut">
                                                        <span class="blink"></span>
                                                    </div>
                                                @else
                                                    <div class="block-statut">
                                                @endif
                                            </div>
                                            <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                            <h6 class="text-center">{{ $article->marque }}</h6>
                                            <span class="text-center">{{ Str::substr($article->description, 0, 80) }}...</span>
                                            <a href="/detail-article" class="text-center d-block mb-3">Voir plus</a>
                                            @include('components.outils')
                                            @include('components.favoris')
                                            @include('components.boutons')
                                @endif
                            @endforeach
                        </div>
                        <div class="block-pagination">
                            {{$articles->links()}}
                        </div>
                    </div>

                    <div class="text-center">
                        <h2>Enchères futures</h2>
                    </div>
                    <div class="container">
                        <div class="row g-4 mb-4">
                            @foreach ($articles as $article)

                                @if (date('d-m-Y', strtotime($article->enchere->date_debut)) > now()->format('d-m-Y') && $article->enchere->state == 0)
                                    @include('components.counterdown')
                                    <div class="col-12 col-lg-4" id="{{$article->titre}}">
                                        <div class="card" id="">
                                            <div class="timeUpdate">
                                                <div class="text-center">
                                                    <h6>Date du début</h6>
                                                    <h6>{{ date('d-m-Y', strtotime($article->enchere->date_debut)).' à '.date('H:m', strtotime($article->enchere->heure_debut)) }}</h6>

                                                </div>
                                            </div>
                                            <div class="container-fluid px-0">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="block-price">
                                                            <h6>Catégorie : <span>{{ $article->paquet->libelle ??'' }}</span></h6>
                                                            <h6>Prix CongoBid : <span>{{ $article->prix }}$</span></h6>
                                                            <h6> Prix Kinshasa : <span> <strike style="color: black;"> {{ $article->prix_marche }}$ </strike> </span> </h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        {{-- <img src="{{ asset('images/articles/'.($article->images == null ? null : $article->images[0]->lien) ) }}" alt="{{ $article->titre }}"> --}}
                                                        <img src="{{ asset('images/img-6.png' ) }}" alt="img" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            @if (Auth::user())
                                                <div class="block-statut {{ $article->paquet_id == Auth::user()->bideurs->first()->paquet_id ? 'active' : 'unactive' }} {{ $article->enchere->state == '1' ? 'on' : 'off' }}">
                                                    <div class="statut">
                                                        <span class="blink"></span>
                                                    </div>
                                                @else
                                                    <div class="block-statut">
                                                @endif
                                            </div>
                                            <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                            <h6 class="text-center">{{ $article->marque }}</h6>
                                            <span class="text-center">{{ Str::substr($article->description, 0, 80) }}...</span>
                                            <a href="/detail-article" class="text-center d-block mb-3">Voir plus</a>
                                            @include('components.outils')
                                            @livewire('encheres.favoris',['article'=>$article])
                                            @include('components.boutons')
                                        
                                @endif

                            @endforeach
                        </div>
                        <div class="block-pagination">
                            {{$articles->links()}}
                        </div>
                    </div>
                    <a href="{{ route('parrainage') }}">
                        <div class="text-center">
                            <h2>GAGNEZ DE BIDS GRATUITS</h2>
                        </div>
                    </a>
                </div>
            </div>

            <div class="block-logo-money" style="padding: 30px 0">
                <div class="container">
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-3 col-lg-1">
                            <img src="{{asset('images/logo-visa.png')}}" alt="logo-visa" class="w-100">
                        </div>
                        <div class="col-3 col-lg-1">
                            <img src="{{asset('images/MasterCard_Logo.png')}}" alt="MasterCard_Logo" class="w-100">
                        </div>
                        <div class="col-3 col-lg-1">
                            <img src="{{asset('images/Paypal-logo.png')}}" alt="Paypal-logo" class="w-100">
                        </div>
                        <div class="col-3 col-lg-1">
                            <img src="{{asset('images/logo-equity.jpg')}}" alt="Paypal-logo" class="w-100">
                        </div>
                        <div class="col-3 col-lg-1">
                            <img src="{{asset('images/logo-mpesa.jpg')}}" alt="logo-mpesa" class="w-75">
                        </div>
                        <div class="col-3 col-lg-1">
                            <img src="{{asset('images/logo-airtel.jpg')}}" alt="logo-airtel" class="w-50">
                        </div>
                        <div class="col-3 col-lg-1">
                            <img src="{{asset('images/logo-orange-money.jpg')}}" alt="logo-orange-money" class="w-50">
                        </div>
                        <div class="col-3 col-lg-1">
                            <img src="{{asset('images/logo-afrimoney.png')}}" alt="logo-afrimoney" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                      </div>
                      <div class="text-center">
                          <input type="text" wire:model="participer">
                          <h5>Voulez-vous aimer cet article ?</h5>
                          <p> Si vous aimez cet article, il passe à la prochaine
                            enchère.</p>
                      </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between align-items-center">
                      <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                      <button type="button" class="btn btn-ok"><span class="iconify" data-icon="ant-design:heart-filled"></span> J'aime</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>

      {{-- document.getElementById("days").innerHTML = ((days < 10 && days > 0) ? '0' + days : days) + "J" ;
      document.getElementById("hours").innerHTML =((hours < 10 && hours > 0) ? '0' + hours : hours) + ":";
      document.getElementById("minutes").innerHTML =((minutes < 10 && minutes > 0) ? '0' + minutes : minutes) + ":";
      document.getElementById("seconds").innerHTML =((seconds < 10 && seconds > 0) ? '0' + seconds : seconds); --}}
