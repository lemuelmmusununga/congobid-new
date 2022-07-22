<div>
    <div>

        <div class="wrapper">

            <div class="block-bid-home">
                <div class="text-center">
                    <h2>{{__('content.title-index')}}</h2>
                </div>
                <div class="container">
                    <div class="row g-4 mb-4">
                        @foreach ($articles as $article)

                            @php
                                if( Auth::user() && $articles != null){
                                    $pivot =$article->enchere->pivotbideurenchere->where('enchere_id',$article->enchere->id?? '')->where('user_id',Auth::user()->id)->first() ?? '';
                                }

                                $prix_roi="";
                                // dd(date('d-m-Y', strtotime($article->enchere->date_debut)),now()->format('d-m-Y'),($article->enchere->state),$article->titre);
                            @endphp
                            @if ($article->enchere->munite*60+$article->enchere->seconde > 0 && (date('d-m-Y', strtotime($article->enchere->date_debut)) == now()->format('d-m-Y')) && $article->enchere->state == 1 && (date('H:i', strtotime($article->enchere->heure_debut)) <= now()->format('H:i') )  )
                            <div class="col-12 col-lg-4" id="{{$article->titre}} ">
                                    <div class="card" id="">
                                        <div class="timeUpdate">
                                            <div class="text-center">
                                                <h6>Date du début </h6>
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

                                        <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                        <h6 class="text-center">{{ $article->marque }}</h6>
                                        <span class="text-center">{{ Str::substr($article->description, 0, 80) }}...</span>
                                        <a href="{{route('show.detail.article',['id'=>$article->id,'name'=>$article->titre])}}" class="text-center d-block mb-3">Voir plus</a>
                                        @include('components.outils')
                                        @include('components.favoris')
                                        <div class="text-center mb-3">
                                            <p class="mb-0">
                                                Si vous aimez, cliquez sur le coeur pour que cet article passe à la prochaine enchère.
                                            </p>
                                                <?php

                                                    $favori_enchere = App\Models\Favoris::where('enchere_id',$article->enchere->id)->first() ?? '';
                                                ?>

                                                @if ( Auth::user() )
                                                    {{-- @if ($favori_enchere ?? '' != null && $favori_enchere->user_id ?? '' == Auth::user()->id && $favori_enchere->enchere_id ?? '' == $article->enchere->pivotbideurenchere->first()->enchere_id) --}}
                                                        @if ($favori_enchere != null && $favori_enchere->favoris >= 1)
                                                            @if (Auth::user())
                                                                <a href="#"  class="like" wire:click.prevent="like({{Auth::user()->id}}, 0,{{$article->enchere->id}})">
                                                                    <span class="iconify" style="color:red;" data-icon="ant-design:heart-fill"></span>
                                                                </a>
                                                            @else
                                                                <a href="/login"  class="like" >
                                                                    <span class="iconify" style="color:red;" data-icon="ant-design:heart-fill"></span>
                                                                </a>
                                                            @endif

                                                        @else
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

                                                <span>{{$article->enchere->favoris}} {{ $article->enchere->favoris < 2 ? 'vote' : 'votes' }}</span>
                                            </div>

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

            </div>
        </div>
    </div>

</div>
