@extends('layouts.detail-profil')
@section('content')

        <div class="wrapper">

            <div class="banner-sm ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="text-white">Sous Catégories</span>
                            <h1>{{ $nom }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-bid-home">
                <div class="container">
                    <div class="row g-4 mb-4">
                        @if ($articles == null)
                        <div class="text-center mt-5">
                            <h2 class="mt-5">Pas d' articles </h2>
                        </div>
                        @else

                        @foreach ($articles as $article)

                            @php
                                if( Auth::user() && $articles != null){
                                    $pivot =$article->enchere->pivotbideurenchere->where('enchere_id',$article->enchere->id?? '')->where('user_id',Auth::user()->id)->first() ?? '';
                                }

                                $prix_roi="";
                                // dd(date('d-m-Y', strtotime($article->enchere->date_debut)),now()->format('d-m-Y'),($article->enchere->state),$article->titre);
                            @endphp

                             <div class="col-12 col-lg-4 col-md-6 col-sm-6" id="{{ $article->titre }} ">
                                 <div class="card p-3 shadow-lg" id="">
                                     {{-- <div class="timeUpdate">
                                         <div class="text-center">
                                             <h5 class="text-success">{{ date('d-m-Y', strtotime($article->enchere->date_debut)) . ' à ' . date('H:i',strtotime($article->enchere->date_debut)) }}
                                             </h5>
                                         </div>
                                     </div> --}}

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
                                                 <img src="{{ asset('images/articles/' . $article->images->first()->lien ?? '') }}"
                                                     alt="img" class="w-100">
                                             </div>
                                         </div>
                                     </div>

                                         <h5 class="text-center mt-2">{{ $article->titre }}</h5>
                                         <h6 class="text-center mt-1 marque">{{ $article->marque }}</h6>
                                         <span class="text-center">{{ Str::substr($article->description, 0, 80) }}...</span>
                                         <a href="{{ route('show.detail.article', ['id' => $article->id, 'name' => $article->titre]) }}"
                                             class="text-center d-block mb-3">Voir plus</a>

                                         {{-- @include('components.favoris-encours') --}}

                                        <div class="card-footer">
                                            <div class="text-center ">
                                                <a href="#" class="btn-participer" data-bs-dismiss="modal"
                                                data-bs-toggle="modal" aria-label="close"
                                                data-bs-target="#salon_{{ $article->id }}"><span class="iconify"
                                                    data-icon="akar-icons:plus"></span>Ouvrir un salon</a>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    @livewire('articles.salon-modal',['salon_id'=>$article->id])
                             </div>


                        @endforeach

                        @endif
                        {{-- <div class="block-pagination">
                            {{$articles->links()}}
                        </div> --}}
                    </div>
                </div>

            </div>

        </div>


@endsection
