
@extends('layouts.app-page')
@section('content')

<div class="content-block">

    <div class="wrapper">

        <div class="banner-sm ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">

                        <h1>Enchères Fermées</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-bid-home">
            <div class="container">
                <div class="row g-4 mb-4">
                    @if ($encheres == null)
                    <div class="text-center mt-5">
                        <h2 class="mt-5">Pas d' encheres </h2>
                    </div>
                    @else

                    @foreach ($encheres as $enchere)
                        @if (times($enchere->munite, $enchere->seconde) < 1 )

                            <div class="col-12 col-lg-4 col-md-6 col-sm-6" id="{{ $enchere->article->titre }} ">
                                <div class="card p-3 shadow-lg" id="">
                                    <div class="timeUpdate">
                                        <div class="text-center">
                                            <h5 class="text-success">{{ date('d-m-Y', strtotime($enchere->date_debut)) . ' à ' . date('H:i',strtotime($enchere->article->enchere->article->date_debut)) }}
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="container-fluid px-0">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="block-price">
                                                    <h6>Catégorie :
                                                        <span>{{ $enchere->article->paquet->libelle ?? '' }}</span></h6>
                                                </div>
                                                <div class="block-price">
                                                    <h6>Prix CongoBid : <span>{{ $enchere->article->prix }}$</span></h6>
                                                    <h6> Prix marché : <span> <strike style="color: black;">
                                                                {{ $enchere->article->prix_marche }}$ </strike> </span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-7 mt-2">

                                                {{-- <img src="{{ asset('images/encheres/'.($enchere->article->images == null ? null : $enchere->article->images[0]->lien) ) }}" alt="{{ $enchere->article->titre }}"> --}}
                                                <img src="{{ asset('images/articles/' . $enchere->article->images->first()->lien ?? '') }}"
                                                    alt="img" class="w-100">
                                            </div>
                                        </div>
                                        <div class="mb-3" style="margin-top: -180px;z-index:111;">
                                            <img src="{{ asset('images/vendu.png') }}"alt="img" class="w-100">
                                        </div>
                                    </div>

                                        <h5 class="text-center mt-2">{{ $enchere->article->titre }}</h5>
                                        <h6 class="text-center mt-1 marque">{{ $enchere->article->marque }}</h6>
                                        <span class="text-center">{{ Str::substr($enchere->article->description, 0, 80) }}...</span>


                                        {{-- @include('components.favoris-encours') --}}

                                        <div class="card-footer">
                                            <div class="text-center ">
                                                <a href="{{ route('show.detail.article',['id'=>$enchere->article->id,'name'=>$enchere->article->titre]) }}" class="btn-participer"
                                                ><span class="iconify"
                                                    data-icon="akar-icons:plus"></span>voir plus</a>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                            </div>
                        @endif



                    @endforeach

                    @endif
                    {{-- <div class="block-pagination">
                        {{$encheres->links()}}
                    </div> --}}
                </div>
            </div>

        </div>

    </div>
</div>




@endsection
