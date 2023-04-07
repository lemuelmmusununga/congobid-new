<div wire:ignore>


    <div class="wrapper">
        <div class="block-content-pageHome">
            <div class="block-videos container">
                <div class="row g-1">
                    <div class="col-lg-4 col-4">
                        <div class="block-banner-sm">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($promotions as $key => $promotion)
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $key }}"
                                            class="{{ $key == 0 ? 'active' : '' }}" aria-current="true"
                                            aria-label="Slide {{ $key }}"></button>
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
                                                                <a href="{{ asset('images/articles/' . ($promotion->images->first()->lien ?? '')) }}"
                                                                    data-gallery="">
                                                                    <img src="{{ asset('images/articles/' . ($promotion->images->first()->lien ?? '')) }}"
                                                                        alt="{{ $promotion->titre }}"
                                                                        class="w-100">
                                                                    {{-- <img src="{{asset('images/img-6.png')}}" alt=""> --}}
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="price-congobid mt-3">
                                                                <p>Prix Congobid</p>
                                                                <h6>{{ $promotion->prix }} $</h6>
                                                                <br>
                                                                <p>Prix marché</p>
                                                                <h6><strike>{{ $promotion->prix_marche }}
                                                                        $</strike></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Précédent</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
                    <div class="col-lg-5 col-md-5 col-sm-5 ms-auto">
                        <div class="text-star">
                            <a href="/articles" class="btn">Nos articles</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-marquee">
                <div class="content">
                    <div class="title">
                        {{ $communique ?? 'Bienvenue chez CongoBid !' }}
                    </div>
                </div>
            </div>
            <div class="block-items">
                <div class="container" >
                    <div class="row justify-content-center align-items-center g-lg-5 g-3">
                        <div class="col-lg-3 col-6 col-md-3">
                            <div class="card">
                                <a href="/register">
                                    <div class="content d-flex justify-content-center align-items-center">
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
                        <div class="col-lg-3 col-6 col-md-3">
                            <div class="card">
                                <a href="{{ route('clients.achat.bid') }}">
                                    <div class="content d-flex justify-content-center align-items-center">
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
                        <div class="col-lg-3 col-6 col-md-3">
                            <div class="card">
                                <a href="{{ route('clients.instructions.index') }}">
                                    <div class="content d-flex justify-content-center align-items-center">
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
                        <div class="col-lg-3 col-6 col-md-3">
                            <div class="card">
                                <a href="{{ route('profil') }}">
                                    <div class="content d-flex justify-content-center align-items-center">
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
                {{-- <h2>{{ __('content.title-index') }} </h2> --}}
                <h2 class="text-black">Enchère en cours  </h2>
            </div>
            <div class="container">
                <div class="row g-2 mb-1">
                    @foreach ($articles as $article)
                        @php
                            if (Auth::user() && $articles != null) {
                               $pivot =($article->enchere->pivotbideurenchere->where('enchere_id', $article->enchere->id)->where('user_id', Auth::user()->id)->first() ) ?? '';
                                //$pivot =(App\Models\PivotBideurEnchere::where('enchere_id',$article->enchere->id)->where('user_id',Auth::user()->id)->first());
                            }
                            $prix_roi="";

                            // dd($article->enchere->pivotbideurenchere->where('enchere_id',$article->enchere->id)->first(),$pivot,$article->enchere->id);
                            // dd(date('d-m-Y', strtotime($article->enchere->date_debut)),now()->format('d-m-Y'),($article->enchere->state),$article->titre);
                        @endphp

                        {{-- @dump(($article->enchere->munite == null ? 0 :*60+$article->enchere->seconde >= 0) && (date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y')) && (date('H:i:s',strtotime($article->enchere->date_debut)) <= now(' Africa/kinshasa')->format('H:i') )); --}}
                        @if ($article->enchere->munite* 60 + $article->enchere->seconde > 0 && $article->enchere->state == 0 &&
                            date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y') &&
                            date('d-m-Y H:i',strtotime($article->enchere->date_debut)) <= now(' Africa/kinshasa')->format('d-m-Y H:i'))
                            <div class="col-12 col-lg-4 col-md-6 col-sm-6 mx-md-2 " id="{{ $article->titre }} ">
                                <div wire:ignore.self class="card  p-3 shadow-lg " id="" >
                                    <div class="timeUpdate">
                                        <div class="text-center">
                                            <h6 class="text-black "><i class="bi bi-stopwatch-fill text-success mx-1"></i>Enchère en cours</h6>
                                            </h6>
                                            <div class="text-center">
                                                @livewire('decrematation', ['getart'=>$article->enchere->id])
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container-fluid px-0 mt-2 ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="block-price">
                                                    <h6>Catégorie :
                                                        <span>{{ $article->paquet->libelle ?? '' }}</span></h6>
                                                </div>
                                                <div class="block-price">
                                                    <h6>Prix CongoBid : <span>{{ $article->prix }}$</span></h6>
                                                    <h6> Prix marché : <span> <strike style="color: black;">
                                                                {{ $article->prix_marche }}$ </strike> </span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                {{-- <img src="{{ asset('images/articles/'.($article->images == null ? null : $article->images[0]->lien) ) }}" alt="{{ $article->titre }}"> --}}
                                                <img src="{{ asset('images/articles/' . ($article->images->first()->lien == null ? '' : $article->images->first()->lien) ) }}"
                                                    alt="img" class="w-100">
                                            </div>
                                        </div>
                                    </div>
                                        @if (Auth::user())
                                            <div
                                                class="block-statut {{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first() != null ? 'active' : 'unactive' }} on">
                                                <div class="statut">
                                                    <span class="blink"></span>
                                                </div>
                                            </div>
                                        @endif
                                        <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                        {{-- <h6 class="text-center mt-1 marque">{{ $article->marque }}</h6> --}}
                                        <span class="text-center " style="font-size: 11px;">{{ Str::substr($article->description, 0, 80) }}...</span>
                                        <a style="font-size: 12px;"  href="{{ route('show.detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                            class="text-center d-block ">Voir plus</a>
                                        @if (Auth::user())
                                            @include('components.outils')
                                        @endif
                                        {{-- @include('components.favoris-encours') --}}

                                        @include('components.boutons')
                                </div>
                            </div>
                        @endif
                    @endforeach
                    {{-- <div class="block-pagination">
                        {{ $articles->links() }}
                    </div> --}}
                </div>
            </div>
            <div class="text-center">
                <h2>Enchères futures</h2>
            </div>
            <div class="container">
                <div class="row g-2 mb-1">
                    @foreach ($articles as $article)
                        @php
                            $test = (($article->enchere->date_debut) > (now('Africa/Kinshasa')->format('Y-m-d H:i:s')));
                        @endphp
                        @if ($test && $article->enchere->state == 0 )
                            <div class="col-12 col-lg-4 col-md-6 col-sm-6" id="{{ Str::slug(Str::lower($article->titre)) }}">
                                <div class="card p-3 shadow-lg mt-2" id="">
                                    <div class="timeUpdate">
                                        <div class="text-center text-success">
                                            <h6 class="text-black">L'enchère en cours</h6>
                                            <h6 class="text-success">{{ (date('d-m-Y', strtotime($article->enchere->date_debut))) == now('Africa/Kinshasa')->format('d-m-Y') ? 'Aujourd\'hui' : 'Date du début' }}</h6>
                                            <h5 class="text-success">{{ date('d-m-Y', strtotime($article->enchere->date_debut)) . ' à ' . date('H:i:s',strtotime($article->enchere->date_debut)) }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="container-fluid px-0">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="block-price">
                                                    <h6>Catégorie :
                                                        <span>{{ $article->paquet->libelle ?? '' }}</span></h6>
                                                </div>
                                                <div class="block-price">
                                                    <h6>Prix CongoBid : <span>{{ $article->prix }}$</span></h6>
                                                    <h6> Prix marché : <span> <strike style="color: black;">
                                                                {{ $article->prix_marche }}$ </strike> </span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-7">

                                                {{-- <img src="{{ asset('images/articles/'.($article->images == null ? null : $article->images[0]->lien) ) }}" alt="{{ $article->titre }}"> --}}
                                                <img src="{{ asset('images/articles/' . ($article->images->first()->lien)) }}"
                                                    alt="img" class="w-100">
                                            </div>
                                        </div>
                                    </div>
                                    @if (Auth::user())
                                        <div
                                            class="block-statut unactive ">
                                            <div class="statut">
                                                <span class="blink"></span>
                                            </div>
                                        </div>
                                    @endif
                                    <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                    <h6 class="text-center">{{ $article->marque }}</h6>
                                    <span class="text-center " style="font-size: 11px;">{{ Str::substr($article->description, 0, 80) }}...</span>
                                        <a style="font-size: 12px;"  href="{{ route('show.detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                            class="text-center d-block ">Voir plus</a>

                                    @if (Auth::user())
                                        @include('components.outils')
                                    @endif
                                    @include('components.favoris')

                                    @include('components.boutons')
                                </div>
                            </div>
                            {{-- @endif --}}
                        @endif
                        {{-- achat roi --}}
                        <div wire:ignore.self class="modal fade" id="achat_roi_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        @if (Auth::user())
                                            <div class="text-center">
                                                <h1>{{ $article->paquet->libelle }} </h1>
                                                @php
                                                    $prix_roi = App\Models\Roi::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                                @endphp

                                                <h5>Pour acheter l'option roi , il vous faut {{ $prix_roi }}
                                                    bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                @if (Auth::user()->bideurs->first()->balance >= $prix_roi)
                                                    @if ($pivot != null && Auth::user()->pivotbideurenchere->first() != null)
                                                        <a type="button"
                                                            href="{{ route('roi', ['enchere' => $article->enchere->id, 'paquet' => $prix_roi, 'name' => Auth::user()->nom]) }}"
                                                            class="btn btn-ok w-50 ">Acheter</a>
                                                    @else
                                                        <a type="button" href="#" data-bs-dismiss="modal"
                                                            data-bs-toggle="modal" aria-label="close"
                                                            data-bs-target="#modalEnchere_{{ $article->id }}"
                                                            class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                    @endif
                                                @else
                                                    <a type="button" href="{{ route('clients.achat.bid') }}"
                                                        class="btn btn-ok w-50 ">Acheter</a>
                                                @endif
                                            </div>
                                        @else
                                            <div class="text-center">
                                                <h5>Pour acheter l'option roi , il vous faut {{ $prix_roi }}
                                                    bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                <a type="button" href="/login"
                                                    class="btn btn-ok w-50 ">Connecter vous</a>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- bouclier --}}
                        <div wire:ignore.self class="modal fade" id="achat_bouclier_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        @php
                                            $prix_bouclier = App\Models\Bouclier::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                        @endphp
                                        {{ $article->paquet->id }}
                                        <div class="text-center">
                                            <h5>Pour acheter il vous faut {{ $prix_bouclier }} bids pour cette
                                                enchere Voulez-vous Acheter ?</h5>
                                            @if ($pivot != null)
                                                @if (Auth::user()->bideurs->first()->balance >= $prix_bouclier)
                                                    <a type="button"
                                                        href="{{ route('bouclier', ['enchere' => $article->enchere->id, 'paquet' => $prix_bouclier, 'name' => Auth::user()->nom]) }}"
                                                        class="btn btn-ok w-50">Acheter</a>
                                                @else
                                                    <a type="button" href="{{ route('clients.achat.bid') }}"
                                                        class="btn btn-ok w-50 ">Acheter</a>
                                                @endif
                                            @else
                                                <a type="button" href="#" data-bs-dismiss="modal"
                                                    data-bs-toggle="modal" aria-label="close"
                                                    data-bs-target="#modalEnchere_{{ $article->id }}"
                                                    class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- foudre --}}
                        <div wire:ignore.self class="modal fade" id="achat_foudre_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        @php
                                            $prix_foudre = App\Models\Foudre::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                        @endphp

                                        <div class="text-center">
                                            <h5>Pour acheter il vous faut {{ $prix_foudre }} bids pour cette
                                                enchere Voulez-vous Acheter ?</h5>
                                            @if ($pivot != null)
                                                @if (Auth::user()->bideurs->first()->balance > $prix_foudre)
                                                    <a type="button"
                                                        href="{{ route('foudre', ['enchere' => $article->enchere->id, 'paquet' => $prix_foudre, 'name' => Auth::user()->nom]) }}"
                                                        class="btn btn-ok w-50">Acheter</a>
                                                @else
                                                    <a type="button" href="{{ route('clients.achat.bid') }}"
                                                        class="btn btn-ok w-50 ">Acheter</a>
                                                @endif
                                            @else
                                                <a type="button" href="#" data-bs-dismiss="modal"
                                                    data-bs-toggle="modal" aria-label="close"
                                                    data-bs-target="#modalEnchere_{{ $article->id }}"
                                                    class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- click --}}
                        <div wire:ignore.self class="modal fade" id="achat_click_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        @php
                                            $prix_click = App\Models\Click_auto::where('paquet_id', $article->paquet->id)->first()->bid_prix;
                                        @endphp
                                        {{ $article->paquet->id }}
                                        <div class="text-center">
                                            <h5>Pour acheter il vous faut {{ $prix_click }} bids pour cette
                                                enchere Voulez-vous Acheter ?</h5>
                                            @if ($pivot != null)
                                                @if (Auth::user()->bideurs->first()->balance >= $prix_click)
                                                    <a type="button"
                                                        href="{{ route('click', ['enchere' => $article->enchere->id, 'paquet' => $prix_click, 'name' => Auth::user()->nom]) }}"
                                                        class="btn btn-ok w-50">Acheter</a>
                                                @else
                                                    <a type="button" href="{{ route('clients.achat.bid') }}"
                                                        class="btn btn-ok w-50 ">Acheter</a>
                                                @endif
                                            @else
                                                <a type="button" href="#" data-bs-dismiss="modal"
                                                    data-bs-toggle="modal" aria-label="close"
                                                    data-bs-target="#modalEnchere_{{ $article->id }}"
                                                    class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modal participer --}}
                        <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        <div class="text-center">

                                            <h5>Voulez-vous participer à cette enchère ?</h5>
                                            {{-- @if (Auth::user()) --}}
                                            <p> Pour y participer, veuillez souscrire à la catégorie
                                                "{{ $article->paquet->libelle }}" en
                                                payent {{ $article->paquet->prix }} bids.</p>
                                            {{-- @endif --}}
                                        </div>
                                    </div>

                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                        @if (Auth::user())
                                            <a type="button"
                                                href="{{ route('detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                                class="btn btn-ok">Accepter</a>
                                        @else
                                            <a type="button" href="/login" class="btn btn-ok">Accepter</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modale --}}
                        <div wire:ignore.self class="modal fade" id="modalEnchereDetail_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        <div class="text-center">
                                            <h5>Enchère en attente</h5>
                                            @if (Auth::user())
                                                <p>Cette enchère va commencer le
                                                    {{ $article->enchere->date_debut . ' à ' . $article->enchere->heure_debut }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-no"
                                            data-bs-dismiss="modal">Annuler</button>
                                        <a type="button"
                                            href="{{ route('detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                            class="btn btn-ok">Accepter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modal like --}}
                        <div class="modal fade" id="modalArticle" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <button type="button" class="btn btn-no"
                                            data-bs-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-ok"><span class="iconify"
                                                data-icon="ant-design:heart-filled"></span> J'aime</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}
                    @endforeach
                </div>
                {{-- <div class="block-pagination">
                    {{ $articles->links() }}
                </div> --}}
            </div>

            <div class="text-center">
                <h2>Salons</h2>
            </div>
            <div class="container">
                <div class="row g-2 mb-1">
                    @foreach ($salons as $salon)
                        {{-- @if ($salon->pivotclientsalon->created->format('d-m-Y H:i:s') ) --}}
                            <div class="col-12 col-lg-4 col-md-6 col-sm-6" id="{{ Str::slug(Str::lower($article->titre)) }}">
                                <div class="card p-3 shadow-lg" id="">
                                    <div class="timeUpdate">
                                        <div class="text-center text-success">
                                            <h6 class="text-success">Nombre de participant</h6>
                                            <h6 class="text-success"></h6>
                                            @if ($salon->pivotclientsalon->count() < $salon->limite)
                                                <h5 class="fw-bold d-block text-center">{{ ($salon->pivotclientsalon->count(). ' /' . $salon->limite) }}</h5>
                                            @else
                                                <h5 class="fw-bold d-block text-center">{{ date('d/ m /Y',strtotime($salon->enchere->date_debut ?? '')) ?? '' }} à  {{ date('H : i ',strtotime($salon->enchere->dat_debut ?? '')) ?? '' }}</h5>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="container-fluid px-0 mt-2">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="block-price">
                                                    <h6>Catégorie :
                                                        <span>{{ $article->paquet->libelle ?? '' }}</span></h6>
                                                </div>
                                                <div class="block-price">
                                                    <h6>Prix CongoBid : <span>{{ $article->prix }}$</span></h6>
                                                    <h6> Prix marché : <span> <strike style="color: black;">
                                                                {{ $article->prix_marche }}$ </strike> </span>
                                                    </h6>
                                                    <h6>Prix du Salon : <span>{{ $salon->montant ?? '' }} Bids</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <img src="{{ asset('images/articles/' . ($salon->article->images->first()->lien ?? '' )) }}" alt="img" class="w-100">
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-center mt-2">{{ $salon->article->titre ?? '' }}</h5>
                                    {{-- <h6 class="text-center">{{ $salon->article->marque ?? '' }}</h6> --}}
                                    <span class="text-center " style="font-size: 11px;">{{ Str::substr($salon->article->description, 0, 80) }}...</span>
                                        <a style="font-size: 12px;"  href="{{ route('show.detail.article', ['id' => $salon->article->id, 'name' => $salon->article->titre]) }}"
                                            class="text-center d-block ">Voir plus</a>


                                    {{-- @include('components.favoris-salon') --}}

                                    @include('components.boutons-salon')
                                </div>
                            </div>
                            {{-- @endif --}}
                        {{-- @endif --}}
                        {{-- achat roi --}}
                        <div wire:ignore.self class="modal fade" id="achat_roi_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        @if (Auth::user())
                                            <div class="text-center">
                                                <h1>{{ $article->paquet->libelle }} </h1>
                                                @php
                                                    $prix_roi = App\Models\Roi::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                                @endphp

                                                <h5>Pour acheter l'option roi , il vous faut {{ $prix_roi }}
                                                    bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                @if (Auth::user()->bideurs->first()->balance >= $prix_roi)
                                                    @if ($pivot != null && Auth::user()->pivotbideurenchere->first() != null)
                                                        <a type="button"
                                                            href="{{ route('roi', ['enchere' => $article->enchere->id, 'paquet' => $prix_roi, 'name' => Auth::user()->nom]) }}"
                                                            class="btn btn-ok w-50 ">Acheter</a>
                                                    @else
                                                        <a type="button" href="#" data-bs-dismiss="modal"
                                                            data-bs-toggle="modal" aria-label="close"
                                                            data-bs-target="#modalEnchere_{{ $article->id }}"
                                                            class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                    @endif
                                                @else
                                                    <a type="button" href="{{ route('clients.achat.bid') }}"
                                                        class="btn btn-ok w-50 ">Acheter</a>
                                                @endif
                                            </div>
                                        @else
                                            <div class="text-center">
                                                <h5>Pour acheter l'option roi , il vous faut {{ $prix_roi }}
                                                    bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                <a type="button" href="/login"
                                                    class="btn btn-ok w-50 ">Connecter vous</a>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- bouclier --}}
                        <div wire:ignore.self class="modal fade" id="achat_bouclier_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        @php
                                            $prix_bouclier = App\Models\Bouclier::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                        @endphp
                                        {{ $article->paquet->id }}
                                        <div class="text-center">
                                            <h5>Pour acheter il vous faut {{ $prix_bouclier }} bids pour cette
                                                enchere Voulez-vous Acheter ?</h5>
                                            @if ($pivot != null)
                                                @if (Auth::user()->bideurs->first()->balance >= $prix_bouclier)
                                                    <a type="button"
                                                        href="{{ route('bouclier', ['enchere' => $article->enchere->id, 'paquet' => $prix_bouclier, 'name' => Auth::user()->nom]) }}"
                                                        class="btn btn-ok w-50">Acheter</a>
                                                @else
                                                    <a type="button" href="{{ route('clients.achat.bid') }}"
                                                        class="btn btn-ok w-50 ">Acheter</a>
                                                @endif
                                            @else
                                                <a type="button" href="#" data-bs-dismiss="modal"
                                                    data-bs-toggle="modal" aria-label="close"
                                                    data-bs-target="#modalEnchere_{{ $article->id }}"
                                                    class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- foudre --}}
                        <div wire:ignore.self class="modal fade" id="achat_foudre_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        @php
                                            $prix_foudre = App\Models\Foudre::where('paquet_id', $article->paquet->id)->first()->bid_prix;

                                        @endphp

                                        <div class="text-center">
                                            <h5>Pour acheter il vous faut {{ $prix_foudre }} bids pour cette
                                                enchere Voulez-vous Acheter ?</h5>
                                            @if ($pivot != null)
                                                @if (Auth::user()->bideurs->first()->balance > $prix_foudre)
                                                    <a type="button"
                                                        href="{{ route('foudre', ['enchere' => $article->enchere->id, 'paquet' => $prix_foudre, 'name' => Auth::user()->nom]) }}"
                                                        class="btn btn-ok w-50">Acheter</a>
                                                @else
                                                    <a type="button" href="{{ route('clients.achat.bid') }}"
                                                        class="btn btn-ok w-50 ">Acheter</a>
                                                @endif
                                            @else
                                                <a type="button" href="#" data-bs-dismiss="modal"
                                                    data-bs-toggle="modal" aria-label="close"
                                                    data-bs-target="#modalEnchere_{{ $article->id }}"
                                                    class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- click --}}
                        <div wire:ignore.self class="modal fade" id="achat_click_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        @php
                                            $prix_click = App\Models\Click_auto::where('paquet_id', $article->paquet->id)->first()->bid_prix;
                                        @endphp
                                        {{ $article->paquet->id }}
                                        <div class="text-center">
                                            <h5>Pour acheter il vous faut {{ $prix_click }} bids pour cette
                                                enchere Voulez-vous Acheter ?</h5>
                                            @if ($pivot != null)
                                                @if (Auth::user()->bideurs->first()->balance >= $prix_click)
                                                    <a type="button"
                                                        href="{{ route('click', ['enchere' => $article->enchere->id, 'paquet' => $prix_click, 'name' => Auth::user()->nom]) }}"
                                                        class="btn btn-ok w-50">Acheter</a>
                                                @else
                                                    <a type="button" href="{{ route('clients.achat.bid') }}"
                                                        class="btn btn-ok w-50 ">Acheter</a>
                                                @endif
                                            @else
                                                <a type="button" href="#" data-bs-dismiss="modal"
                                                    data-bs-toggle="modal" aria-label="close"
                                                    data-bs-target="#modalEnchere_{{ $article->id }}"
                                                    class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modal participer --}}
                        <div wire:ignore.self class="modal fade" id="modalEnchereSalon_{{ $salon->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        <div class="text-center">
                                            <h5>Voulez-vous participer au Salon ?</h5>
                                            {{-- @if (Auth::user()) --}}
                                            <p> Pour y participer, veuillez souscrire à la catégorie
                                                {{-- "{{ $salon->article->paquet->libelle }}"  --}}
                                                en payent {{$salon->montant }} bids.</p>
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                        @if (Auth::user() && Auth::user()->bideurs->first()->balance >= $salon->montant)
                                            <a type="button"
                                                href="{{ route('detail.article.salon', ['articleid' => $salon->article->id, 'salonid' => $salon->id,'enchereid' => $salon->article->enchere->id ,'paquet'=>$salon->article->paquet->id,'name' => Str::slug($salon->article->titre) ]) }}"
                                                class="btn btn-ok">Accepter</a>
                                        @elseif (Auth::user() && Auth::user()->bideurs->first()->balance < $salon->montant )
                                            <a type="button"
                                            href="{{ route('clients.achat.bid') }}"
                                            class="btn btn-ok">Accepter</a>
                                        @else
                                            <a type="button" href="/login" class="btn btn-ok">Accepter</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                         {{-- modale annuler salon--}}
                        <div wire:ignore.self class="modal fade" id="modalEnchereAnnuler_{{ $salon->id}}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>

                                        <div class="text-center">
                                            <h5>
                                                Voulez vous vraiment annuler votre participation ?
                                            </h5>

                                            <a type="button" href="{{ route('annuler.salon',['articleid'=>$salon->id,'enchereid'=>$salon->article->enchere->id,'salon'=>$salon->montant,'name'=>$salon->article->titre]) }}" class="btn btn-ok w-50 my-3 ">Oui</a>

                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modal participer enchere --}}
                        <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        <div class="text-center">

                                            <h5>Voulez-vous participer à cette enchère ?</h5>
                                            {{-- @if (Auth::user()) --}}
                                            <p> Pour y participer, veuillez souscrire à la catégorie
                                                "{{ $article->paquet->libelle }}" en
                                                payent {{ $article->paquet->prix }} bids.</p>
                                            {{-- @endif --}}
                                        </div>
                                    </div>

                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                                            aria-label="close">Annuler</button>
                                        @if (Auth::user())
                                            <a type="button"
                                                href="{{ route('detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                                class="btn btn-ok">Accepter</a>
                                        @else
                                            <a type="button" href="/login" class="btn btn-ok">Accepter</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modale --}}
                        <div wire:ignore.self class="modal fade" id="modalEnchereDetail_{{ $article->id }}"
                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        <div class="text-center">
                                            <h5>Enchère en attente</h5>
                                            @if (Auth::user())
                                                <p>Cette enchère va commencer le
                                                    {{ $article->enchere->date_debut . ' à ' . $article->enchere->heure_debut }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="modal-footer d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-no"
                                            data-bs-dismiss="modal">Annuler</button>
                                        <a type="button"
                                            href="{{ route('detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                            class="btn btn-ok">Accepter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modal like --}}
                        <div class="modal fade" id="modalArticle" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <button type="button" class="btn btn-no"
                                            data-bs-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-ok"><span class="iconify"
                                                data-icon="ant-design:heart-filled"></span> J'aime</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}
                    @endforeach

                </div>

            </div>

            <div class="text-center my-5">

                <a href="{{ route('parrainage') }}" class="text-center fs-4 fw-bold">

                    VOULEZ VOUS GAGNEZ DE BIDS GRATUITS ?

                </a>
            </div>
        </div>
    </div>
</div>

<div class="block-logo-money" style="padding: 30px 0">
    <div class="container">
        <div class="row justify-content-center align-items-center g-3">
            <div class="col-3 col-lg-1">
                <img src="{{ asset('images/logo-visa.png') }}" alt="logo-visa" class="w-100">
            </div>
            <div class="col-3 col-lg-1">
                <img src="{{ asset('images/MasterCard_Logo.png') }}" alt="MasterCard_Logo" class="w-100">
            </div>
            <div class="col-3 col-lg-1">
                <img src="{{ asset('images/Paypal-logo.png') }}" alt="Paypal-logo" class="w-100">
            </div>
            <div class="col-3 col-lg-1">
                <img src="{{ asset('images/logo-equity.jpg') }}" alt="Paypal-logo" class="w-100">
            </div>
            <div class="col-3 col-lg-1">
                <img src="{{ asset('images/logo-mpesa.jpg') }}" alt="logo-mpesa" class="w-75">
            </div>
            <div class="col-3 col-lg-1">
                <img src="{{ asset('images/logo-airtel.jpg') }}" alt="logo-airtel" class="w-50">
            </div>
            <div class="col-3 col-lg-1">
                <img src="{{ asset('images/logo-orange-money.jpg') }}" alt="logo-orange-money" class="w-50">
            </div>
            <div class="col-3 col-lg-1">
                <img src="{{ asset('images/logo-afrimoney.png') }}" alt="logo-afrimoney" class="w-100">
            </div>
        </div>
    </div>
</div>

</div>
