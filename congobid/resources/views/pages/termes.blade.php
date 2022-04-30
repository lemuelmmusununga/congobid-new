@extends('layouts.app')
@section('content')

    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Termes & Conditions</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container">
                <div class="row g-3 g-lg-5">

                    @foreach ($condis as $key => $cond)
                        <div class="col-12">
                            <div class="card {{ $key == 0 ? 'card' : '' }} contenair-fluide">
                                <div class="row g-2 g-lg-5">

                                    <div class="col-12 justify-content-center">
                                        <div class="detail-video">

                                            <span class=" fw-bold">{{$loop->index+1}} . {{$cond->text}} </span>

                                        </div>
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

