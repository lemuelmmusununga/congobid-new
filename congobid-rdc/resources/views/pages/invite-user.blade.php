@extends('layouts.app')
@section('content')
@include('components.header-index')
    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Gagnez des bids gratuits</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container">
                <div class="row g-3 g-lg-5 justify-content-center">
                    <div class="col-lg-6">
                        <h4 class="text-center" style="font-size: 17px; font-weight:700; color: var(--blackColor)">En invitant un ami à souscrire sur CongoBid, vous avez la possibilité de gagner 10% sur son premier achat de Bids.</h4>
                        <form action="" class="mb-5">
                            <label for="" class="text-center d-block mt-4 mb-3">Inserez le numéro de ton ami</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">+243</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="height: 45px">
                            </div>
                        </form>
                        <h5 class="text-center mb-4">Message d'invitatiion</h5>
                        <div class="card card-message">
                            <p>
                                Je t'invite à rejoindre ce nouveau site d'enchère où tous les articles commencent à 0$. <br> Tu feras plus 90% d'économie en bidant sur des articles de qualité. <br>
                                CongoBid est une révolution de la vente en ligne et  des enchères. <br>
                                Vas y ! et n'oublie pas de t'inscrire et souscrire: <br> <a href="#">https://congobid.com/user/register/</a>
                            </p>
                        </div>
                        <button class="btn btn-invite">Inviter Maitenant</button>
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

