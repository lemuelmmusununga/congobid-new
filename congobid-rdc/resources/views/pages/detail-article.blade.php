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
                    <div class="col-lg-8">
                        <div class="detail-pro">
                            <div class="row g-lg-5 g-5">
                                <div class="col-lg-6">
                                    <div id="carouselExampleIndicators" class="carousel slide carousel-article" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('images/img-6.png')}}" alt="" class="w-50 me-auto ms-auto d-block">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('images/img-6.png')}}" alt="" class="w-50 me-auto ms-auto d-block">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('images/img-6.png')}}" alt="" class="w-50 me-auto ms-auto d-block">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4>Play station</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ipsa explicabo fuga rem sequi sint repellendus quidem enim suscipit, facere odit voluptatem, in maxime pariatur quasi consectetur placeat cupiditate non.</p>
                                    <div class="row">
                                        <div class="col-6 col-lg-4">
                                            <h5 class="price">Prix CongoBid</h5>
                                            <span class="ammount">20000</span>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <h5 class="price">Prix Kinshasa</h5>
                                            <span class="ammount"><strike>20000</strike></span>
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
