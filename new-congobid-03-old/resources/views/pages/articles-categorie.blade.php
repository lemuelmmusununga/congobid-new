@extends('layouts.app-profil')
@section('content')

<div class="content-block">
    <div class="banner-sm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Nos articles</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-articles">
        <div class="container-fluid">
            <div class="d-flex justify-content-end mb-4">
                <div class="dropdown">
                    <button class="btn btn-filter dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="iconify me-2" data-icon="bi:filter"></span>
                      Filtrer
                      <span class="iconify ms-2" data-icon="icons8:angle-down"></span>
                    </button>
                    @foreach ($categories as $categorie)
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{route('categorie.article',['id'=>$categorie->id])}}">{{$categorie->libelle}}</a></li>
                        </ul>
                    @endforeach

                  </div>
            </div>
            <div class="row g-3">
                @foreach ($articles as $article)
                    <div class="col-lg-3 col-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span class="type">{{$article->categorie->libelle}}</span>
                                <a href="#" class="like">
                                    <span class="iconify" data-icon="ant-design:heart-filled"></span>
                                </a>
                            </div>
                            <div class="content-img">
                                <img src="images/img-7.jpg" alt="">
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


            </div>
        </div>
    </div>
</div>

@endsection
