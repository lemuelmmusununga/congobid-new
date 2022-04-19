@extends('layouts.app')
@section('content')
@include('components.header-index')
    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Detail article</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="detail-pro">
                            <div class="row">

                                    <div class="col-lg-6">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="col-lg-8 d-flex justify-content-center">
                                                            <img src="{{asset('images/articles/'.$article->images->first()->lien)}}" alt="" class="w-100">
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        
                                                        <div class="col-lg-8 d-flex justify-content-center align-items-center">
                                                            <img src="{{asset('images/articles/'.$article->images->first()->lien)}}" alt="" class="w-100 d-block">
                                                        </div>
                                                    </div>
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
                                    <div class="col-lg-6">
                                        <h4>{{$article->titre ?? ''}}</h4>
                                        <p>{{$article->description ?? ''}}</p>
                                        <div class="row">
                                            <div class="col-6 col-lg-4">
                                                <h5 class="price">Prix CongoBid</h5>
                                                <span class="ammount">{{$article->prix ?? ''}}</span>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <h5 class="price">Prix Kinshasa</h5>
                                                <span class="ammount"><strike style="color: black;">{{$article->prix_marche ?? ''}}</strike></span>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
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
