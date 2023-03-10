@extends('layouts.app')
@section('content')

    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                @if (Session::has('danger'))
                <div class="alert alert-danger">
                    <span>{{Session::get('danger')}}</span>
                </div>
                @elseif(Session::has('success'))
                    <div class="alert alert-success">
                        <span>{{Session::get('success')}}</span>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Favoris</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    @foreach ($favoris as $favori)
                    <div class="col-lg-8">
                            <div class="card-favoris">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <img src="{{asset('images/articles/'.$favori->enchere->article->images->first()->lien ?? '')}}" alt="" class="w-50 me-auto ms-auto d-block">
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <h4>{{$favori->enchere->article->titre}}</h4>
                                        <div class="row mt-4 mb-4">
                                            <div class="col-6 col-lg-4">
                                                <h5 class="price">Prix CongoBid</h5>
                                                <span class="ammount">{{$favori->enchere->article->prix}}</span>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <h5 class="price">Prix Kinshasa</h5>
                                                <span class="ammount"><strike style="color: black;">{{$favori->enchere->article->prix_marche}}</strike></span>
                                            </div>
                                        </div>
                                        {{-- <a href="{{ route('show.detail', ['id' => $favori->enchere->article->id,'name'=>$favori->enchere->article->titre]) }}" class="btn-participer"><span class="iconify"
                                            data-icon="akar-icons:plus"></span>Ouvrir l'enchere</a> --}}

                                        <a href="{{route('delete.favoris',['id'=>$favori->enchere->article->id,'name'=>$favori->enchere->article->titre])}}" class="btn btn-sup">Supprimez</a>


                                    </div>

                                </div>
                            </div>

                        </div>
                        @endforeach
                </div>
            </div>
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
@endsection
