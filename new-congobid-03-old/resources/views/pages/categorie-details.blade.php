@extends('layouts.detail-profil')
@section('content')

<div class="content-block">

    <div class="content-articles">
        <div class="container-fluid">

            <div class="row g-3 justify-content-center">
                <div class="col-lg-6">
                    <h2 class="text-center mb-4">Sous-Catégories</h2>
                    <div class="block-link-category">
                        <ul>
                            @foreach ($categories as $categorie)
                                <li>
                                    <a href="{{route('all.articles',['id'=>$categorie->id])}}">
                                        {{$categorie->libelle}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                {{-- @foreach ($articles as $article)
                    <div class="col-lg-3 col-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span class="type">{{$article->categorie->libelle}}</span>
                                <a href="#" class="like">
                                    <span class="iconify" data-icon="ant-design:heart-filled"></span>
                                </a>
                            </div>
                            <div class="content-img">
                                <img src="{{asset('images/articles/'.$article->images[0]->lien)}}" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h6>{{$article->titre}}</h6>
                                <p>Prix congobid</p>
                                <h4>{{$article->prix}}</h4>
                                <button class="btn">Demarrer l'enchère</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="block-pagination">
                        {{$articles->links()}}
                    </div> --}}

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
