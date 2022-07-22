    <div>


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
                                                                        <img src="{{ asset('images/articles/'.$promotion->images->first()->lien) }}" alt="{{ $promotion->titre }}" class="w-100">
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
                                                                    <h6><strike>{{ $promotion->prix_marche }} $</strike></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

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
                            {{ $communique ?? "Bienvenue chez CongoBid !" }}
                        </div>
                    </div>
                </div>
                <div class="block-items">
                    <div class="container">
                        <div class="row justify-content-center align-items-center g-lg-5 g-3">
                            <div class="col-lg-3 col-6">
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
                            <div class="col-lg-3 col-6">
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
                            <div class="col-lg-3 col-6">
                                <div class="card">
                                    <a href="{{route('clients.instructions.index')}}">
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
                            <div class="col-lg-3 col-6">
                                <div class="card">
                                    <a href="{{route('profil')}}">
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
                    <h2>{{__('content.title-index')}} {{now(' Africa/kinshasa')->format('H:i') }}</h2>
                </div>
                <div class="container">
                    <div class="row g-4 mb-4">
                        @foreach ($articles as $article)
                            @php
                                if( Auth::user() && $articles != null){
                                    $pivot =$article->enchere->pivotbideurenchere->where('enchere_id',$article->enchere->id)->where('user_id',Auth::user()->id)->first() ?? '';
                                }
                                $prix_roi="";
                                // dd($article->enchere->pivotbideurenchere->where('enchere_id',$article->enchere->id)->first(),$pivot,$article->enchere->id);
                                // dd(date('d-m-Y', strtotime($article->enchere->date_debut)),now()->format('d-m-Y'),($article->enchere->state),$article->titre);
                            @endphp
                            {{-- @dump(($article->enchere->munite*60+$article->enchere->seconde >= 0) && (date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y')) && (date('H:i', strtotime($article->enchere->heure_debut)) <= now(' Africa/kinshasa')->format('H:i') )); --}}
                            @if (($article->enchere->munite*60+$article->enchere->seconde >= 0) && (date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y')) && (date('H:i', strtotime($article->enchere->heure_debut)) <= now(' Africa/kinshasa')->format('H:i') )  )
                                <div class="col-12 col-lg-4" id="{{$article->titre}} ">
                                    <div class="card" id="">
                                        <div class="timeUpdate">
                                            <div class="text-center">
                                                <h6>Date du début  </h6>
                                                <h5>{{ date('d-m-Y', strtotime($article->enchere->date_debut)).' à '.date('H:i', strtotime($article->enchere->heure_debut)) }}</h5>
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
                                                    <div class="block-img-show">
                                                        <img src="{{asset('images/articles/'.$article->images->first()->lien ?? '')}}" alt="img" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if (Auth::user())
                                            <div class="block-statut {{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first() != null ? 'active' : 'unactive' }} on">
                                                <div class="statut">
                                                    <span class="blink"></span>
                                                </div>
                                            </div>
                                        @endif

                                        <h5 class="text-center mt-3">{{ $article->titre }}</h5>
                                        <h6 class="text-center">{{ $article->marque }}</h6>
                                        <span class="text-center">{{ Str::substr($article->description, 0, 80) }}...</span>
                                        <a href="{{route('show.detail.article',['id'=>$article->id,'name'=>$article->titre])}}" class="text-center d-block mb-3">Voir plus</a>
                                        @include('components.outils')
                                        @include('components.favoris')
                                        <div class="text-center mb-3">
                                            {{-- <p class="mb-0">
                                                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
                                            </p> --}}
                                            @if (Auth::user())

                                                <?php
                                                    $favori_enchere = App\Models\Favoris::where('enchere_id',$article->enchere->id)->where('user_id',Auth::user()->id)->first() ?? '';
                                                ?>
                                            @endif

                                                @if ( Auth::user() )
                                                    {{-- @if ($favori_enchere ?? '' != null && $favori_enchere->user_id ?? '' == Auth::user()->id && $favori_enchere->enchere_id ?? '' == $article->enchere->pivotbideurenchere->first()->enchere_id) --}}
                                                        @if ($favori_enchere != null && $favori_enchere->favoris == 1)
                                                            @if (Auth::user() && $favori_enchere != null && $favori_enchere->favoris == 1 && Auth::user()->id == $favori_enchere->user_id )

                                                                <a href="#"  class="like" wire:click.prevent="like({{Auth::user()->id}}, 0,{{$article->enchere->id}})">
                                                                    <span class="iconify" style="color:red;" data-icon="ant-design:heart-fill"></span>
                                                                </a>
                                                            @else

                                                            <a href="#" class="like" data-bs-toggle="modal" data-bs-target="" wire:click.prevent="like({{Auth::user()->id}}, 1,{{$article->enchere->id}})">
                                                                <span class="iconify"  data-icon="ant-design:heart-outlined"></span>
                                                            </a>
                                                            @endif

                                                        @elseif ($favori_enchere != null && $favori_enchere->favoris < 1)
                                                            @if (Auth::user())

                                                                <a href="#" class="like" data-bs-toggle="modal" data-bs-target="" wire:click.prevent="like({{Auth::user()->id}}, 1,{{$article->enchere->id}})">
                                                                    <span class="iconify"  data-icon="ant-design:heart-outlined"></span>
                                                                </a>
                                                            @else
                                                                <a href="/login" class="like">
                                                                    <span class="iconify"  data-icon="ant-design:heart-outlined"></span>
                                                                </a>
                                                            @endif

                                                            <a href="#" class="like" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}" wire:click.prevent="like({{Auth::user()->id}}, 1,{{$article->enchere->id}})">
                                                                <span class="iconify"  data-icon="ant-design:heart-outlined"></span>
                                                            </a>
                                                        @endif

                                                    @else
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}" class="like" >
                                                            <span class="iconify" data-icon="ant-design:heart-outlined"></span>
                                                        </a>
                                                    @endif
                                                    {{-- <span>{{$article->enchere->favoris}} {{ $article->enchere->favoris < 2 ? 'vote' : 'votes' }}</span> --}}
                                            @include('components.boutons')
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="block-pagination">
                            {{$articles->links()}}
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h2>Enchères futures</h2>
                </div>
                <div class="container futur">
                    <div class="row g-4 mb-4">
                        @foreach ($articles as $article)

                            @if (date('d-m-Y', strtotime($article->enchere->date_debut)) >= now()->format('d-m-Y') && $article->enchere->state == 0 && date('H:i', strtotime($article->enchere->heure_debut)) > now(' Africa/kinshasa')->format('H:i'))

                                <div class="col-12 col-lg-4" id="{{$article->titre}}">
                                    <div class="card" id="">
                                        <div class="timeUpdate">
                                            <div class="text-center">
                                                <h6>Date du début</h6>

                                                <h5>{{ date('d-m-Y', strtotime($article->enchere->date_debut)).' à '.date('H:i', strtotime($article->enchere->heure_debut)) }}</h5>
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
                                                    <div class="block-img-show">
                                                        <img src="{{asset('images/articles/'.$article->images->first()->lien)}}" alt="img" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if (Auth::user())
                                            <div class="block-statut {{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first() != null ? 'active' : 'unactive' }} on">
                                                <div class="statut">
                                                    <span class="blink"></span>
                                                </div>
                                            </div>
                                        @endif
                                        <h5 class="text-center mt-3">{{ $article->titre }}</h5>
                                        <h6 class="text-center">{{ $article->marque }}</h6>
                                        <span class="text-center">{{ Str::substr($article->description, 0, 80) }}...</span>
                                        <a href="{{route('show.detail.article',['id'=>$article->id,'name'=>$article->titre])}}" class="text-center d-block mb-3">Voir plus</a>
                                        @include('components.outils')
                                        @include('components.favoris')
                                        <div class="text-center mb-3">
                                            {{-- <p class="mb-0">
                                                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
                                            </p> --}}
                                            @if (Auth::user())

                                                <?php
                                                    $favori_enchere = App\Models\Favoris::where('enchere_id',$article->enchere->id)->where('user_id',Auth::user()->id)->first() ?? '';
                                                ?>
                                            @endif

                                                @if ( Auth::user() )
                                                    {{-- @if ($favori_enchere ?? '' != null && $favori_enchere->user_id ?? '' == Auth::user()->id && $favori_enchere->enchere_id ?? '' == $article->enchere->pivotbideurenchere->first()->enchere_id) --}}
                                                        @if ($favori_enchere != null && $favori_enchere->favoris == 1)
                                                            @if (Auth::user() && $favori_enchere != null && $favori_enchere->favoris == 1 && Auth::user()->id == $favori_enchere->user_id )

                                                                <a href="#"  class="like" wire:click.prevent="like({{Auth::user()->id}}, 0,{{$article->enchere->id}})">
                                                                    <span class="iconify" style="color:red;" data-icon="ant-design:heart-fill"></span>
                                                                </a>
                                                            @else

                                                            <a href="#" class="like" data-bs-toggle="modal" data-bs-target="" wire:click.prevent="like({{Auth::user()->id}}, 1,{{$article->enchere->id}})">
                                                                <span class="iconify"  data-icon="ant-design:heart-outlined"></span>
                                                            </a>
                                                            @endif

                                                        @elseif ($favori_enchere != null && $favori_enchere->favoris < 1)
                                                            @if (Auth::user())

                                                                <a href="#" class="like" data-bs-toggle="modal" data-bs-target="" wire:click.prevent="like({{Auth::user()->id}}, 1,{{$article->enchere->id}})">
                                                                    <span class="iconify"  data-icon="ant-design:heart-outlined"></span>
                                                                </a>
                                                            @else
                                                                <a href="/login" class="like">
                                                                    <span class="iconify"  data-icon="ant-design:heart-outlined"></span>
                                                                </a>
                                                            @endif

                                                            {{-- <a href="#" class="like" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}" wire:click.prevent="like({{Auth::user()->id}}, 1,{{$article->enchere->id}})">
                                                                <span class="iconify"  data-icon="ant-design:heart-outlined"></span>
                                                            </a> --}}
                                                        @endif
                                                    {{-- @else
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}" class="like" wire:click.prevent="like({{Auth::user()->id}}, 1,{{$article->enchere->id}})" >
                                                            <span class="iconify" data-icon="ant-design:heart-outlined"></span>
                                                        </a>
                                                    @endif --}}
                                                @else
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $article->id }}" class="like" >
                                                        <span class="iconify" data-icon="ant-design:heart-outlined"></span>
                                                    </a>
                                                @endif

                                                {{-- <span>{{$article->enchere->favoris}} {{ $article->enchere->favoris < 2 ? 'vote' : 'votes' }}</span> --}}
                                            </div>

                                            @include('components.boutons')
                                        </div>
                                    </div>
                                @endif
                                {{-- achat roi --}}
                                <div wire:ignore.self class="modal fade" id="achat_roi_{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                @if (Auth::user())

                                                    <div class="text-center">
                                                        <h1>{{$article->paquet->libelle}} </h1>
                                                        @php
                                                            $prix_roi = App\Models\Roi::where('paquet_id',$article->paquet->id)->first()->bid_prix ;

                                                        @endphp

                                                        <h5>Pour acheter l'option roi , il vous faut {{$prix_roi}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                        @if (Auth::user()->bideurs->first()->balance >= $prix_roi)

                                                            @if ($pivot != null && Auth::user()->pivotbideurenchere->first() != null)
                                                                <a type="button" href="{{route('roi',['enchere'=>$article->enchere->id,'paquet'=>$prix_roi,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50 ">Acheter</a>


                                                            @else

                                                            <a type="button" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="close" data-bs-target="#modalEnchere_{{ $article->id }}" class="btn btn-ok w-50 ">Participer a l'enchere</a>

                                                            @endif
                                                        @else
                                                            <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>
                                                        @endif
                                                    </div>
                                                @else
                                                    <div class="text-center">
                                                        <h5>Pour acheter l'option roi , il vous faut {{$prix_roi}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                        <a type="button" href="/login" class="btn btn-ok w-50 ">Connecter vous</a>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center align-items-center">
                                                <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- bouclier --}}
                                <div wire:ignore.self class="modal fade" id="achat_bouclier_{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                @php
                                                    $prix_bouclier = App\Models\Bouclier::where('paquet_id',$article->paquet->id)->first()->bid_prix ;

                                                @endphp
                                                {{$article->paquet->id}}
                                                <div class="text-center">
                                                    <h5>Pour acheter il vous faut {{$prix_bouclier}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                    @if ($pivot != null )
                                                        @if ( Auth::user()->bideurs->first()->balance >= $prix_bouclier)
                                                            <a type="button" href="{{route('bouclier',['enchere'=>$article->enchere->id,'paquet'=>$prix_bouclier,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50">Acheter</a>
                                                        @else
                                                            <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>

                                                        @endif
                                                    @else
                                                        <a type="button" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="close" data-bs-target="#modalEnchere_{{ $article->id }}" class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center align-items-center">
                                                <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- foudre --}}
                                <div wire:ignore.self class="modal fade" id="achat_foudre_{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                @php
                                                    $prix_foudre = App\Models\Foudre::where('paquet_id',$article->paquet->id)->first()->bid_prix ;

                                                @endphp

                                                <div class="text-center">
                                                    <h5>Pour acheter il vous faut {{$prix_foudre}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                    @if ($pivot != null )
                                                        @if ( Auth::user()->bideurs->first()->balance > $prix_foudre)
                                                            <a type="button" href="{{route('foudre',['enchere'=>$article->enchere->id,'paquet'=>$prix_foudre,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50">Acheter</a>
                                                        @else
                                                            <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>

                                                        @endif
                                                    @else
                                                        <a type="button" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="close" data-bs-target="#modalEnchere_{{ $article->id }}" class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center align-items-center">
                                                <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- click --}}
                                <div wire:ignore.self class="modal fade" id="achat_click_{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                @php
                                                    $prix_click = App\Models\Click_auto::where('paquet_id',$article->paquet->id)->first()->bid_prix ;
                                                @endphp
                                                {{$article->paquet->id}}
                                                <div class="text-center">
                                                    <h5>Pour acheter il vous faut {{$prix_click}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                                                    @if ($pivot != null )
                                                        @if ( Auth::user()->bideurs->first()->balance >= $prix_click)
                                                            <a type="button" href="{{route('click',['enchere'=>$article->enchere->id,'paquet'=>$prix_click,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50">Acheter</a>
                                                        @else
                                                            <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>

                                                        @endif
                                                    @else
                                                        <a type="button" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" aria-label="close" data-bs-target="#modalEnchere_{{ $article->id }}" class="btn btn-ok w-50 ">Participer a l'enchere</a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center align-items-center">
                                                <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--  modal participer --}}
                                <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $article->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                <div class="text-center">

                                                    <h5>Voulez-vous participer à cette enchère ?</h5>
                                                    {{-- @if (Auth::user()) --}}
                                                        <p> Pour y participer, veuillez souscrire à la catégorie "{{ $article->paquet->libelle }}" en
                                                            payent {{ $article->paquet->prix }} bids.</p>
                                                    {{-- @endif --}}
                                                </div>
                                            </div>

                                            <div class="modal-footer d-flex justify-content-between align-items-center">
                                                <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                                                @if (Auth::user())
                                                    <a type="button" href="{{route('detail.article',['id'=>$article->id,'name'=>$article->titre])}}" class="btn btn-ok">Accepter</a>

                                                @else
                                                    <a type="button" href="/login" class="btn btn-ok">Accepter</a>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- modale  --}}
                                <div wire:ignore.self class="modal fade" id="modalEnchereDetail_{{ $article->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                <div class="text-center">
                                                    <h5>Enchère en attente</h5>
                                                    @if (Auth::user())
                                                        <p>Cette enchère va commencer le {{ $article->enchere->date_debut.' à '.$article->enchere->heure_debut }} </p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="modal-footer d-flex justify-content-between align-items-center">
                                                <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                                                <a type="button" href="{{route('detail.article',['id'=>$article->id,'name'=>$article->titre])}}" class="btn btn-ok">Accepter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- modal like --}}
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
                                {{-- end modal --}}
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
        </div>

        <div class="block-logo-money" style="padding: 30px 0">
            <div class="container">
                <div class="col-img">
                    <img src="{{asset('images/logo-visa.png')}}" alt="logo-visa" class="w-100">
                </div>
                <div class="col-img">
                    <img src="{{asset('images/MasterCard_Logo.png')}}" alt="MasterCard_Logo" class="w-100">
                </div>
                <div class="col-img">
                    <img src="{{asset('images/Paypal-logo.png')}}" alt="Paypal-logo" class="w-100">
                </div>
                <div class="col-img">
                    <img src="{{asset('images/logo-equity.jpg')}}" alt="Paypal-logo" class="w-100">
                </div>
                <div class="col-img">
                    <img src="{{asset('images/logo-mpesa.png')}}" alt="logo-mpesa" class="w-75">
                </div>
                <div class="col-img">
                    <img src="{{asset('images/logo-airtel.png')}}" alt="logo-airtel" class="w-50">
                </div>
                <div class="col-img">
                    <img src="{{asset('images/logo-orange.png')}}" alt="logo-orange-money" class="w-50">
                </div>
                <div class="col-img">
                    <img src="{{asset('images/logo-afrimoney.png')}}" alt="logo-afrimoney" class="w-100">
                </div>
            </div>
        </div>

    </div>

