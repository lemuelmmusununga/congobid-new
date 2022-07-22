@extends('layouts.app')
@section('content')

    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Envoyez des bids</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container">
                <div class="row g-3 g-lg-5 justify-content-center">
                    <div class="col-lg-6">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                <span>{{ Session::get('success') }}</span>
                            </div>
                        @endif
                        @if (Session::has('danger'))
                            <div class="alert alert-danger">
                                <span>{{ Session::get('danger') }}</span>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('send.bid') }}" class="mb-5">
                            @csrf
                            <label for="" class="text-center d-block mt-4 mb-3">Inserez le numéro de ton ami</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">+243</span>
                                <input type="text" maxlenght="15" class="form-control" name="bid" placeholder="XXXXXXXXXXXXXXX" style="height: 45px">
                            </div>
                            <label for="" class="text-center d-block mt-4 mb-3">Inserez le montant a envoyé</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Montant" name="numero" style="height: 45px">
                            </div>
                            <button class="btn btn-invite" type="submit">Envoyer Maitenant</button>
                        </form>
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

