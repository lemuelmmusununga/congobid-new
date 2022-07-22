@extends('layouts.app')
@section('content')

    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Comment ça marche</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container">
                <div class="row g-3 g-lg-5">
                    @foreach ($instructions as $key => $instruction)
                        <div class="col-12">
                            <div class="card {{ $key == 0 ? 'card' : '' }}">
                                <div class="row g-2 g-lg-5">
                                    <div class="col-4">
                                        <div class="img-video" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="iconify" data-icon="clarity:play-solid"></span>
                                            <img src="{{('images/img-s1.jpg')}}" alt="img-video">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="detail-video">
                                            <h3>{{$loop->index+1}}. {{ $instruction->titre }} </h3>
                                            <p> {{ substr($instruction->description, 0, 255) }}... </p>
                                            <span>Posté {{ $instruction->created_at->diffForHumans() }} </span>
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
    <div class="modal fade modal-video" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="content-video">
                        <video src="{{asset('videos/gagnants/enchere_1.mp4')}}" controls class="video" preload="auto" playsinline></video>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

