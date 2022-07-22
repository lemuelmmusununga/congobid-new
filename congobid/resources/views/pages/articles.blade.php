@extends('layouts.app')
@section('content')

<div class="content-block">
    <div class="banner-sm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Nos articles</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content-articles">
        <div class="container-fluid">

            <div class="row g-3 justify-content-center">
                <div class="col-lg-6">
                    <h2 class="text-center mb-4">Catégories</h2>
                    <div class="block-link-category">
                        <ul>
                            @foreach ($categories as $categorie)
                                <li>
                                    <a href="{{route('categorie.article',['id'=>$categorie->id])}}">
                                        {{$categorie->libelle}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>


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


@endsection
