@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-12">
                <h4 class="text-center title">Article  {{$article->titre}} </h4>
            </div>
            <div class="col-12">
                <div class="col-12">
                    <img src="{{ asset('images/articles/' . ($article->images->first()?->lien == null ? '' : $article->images->first()->lien) ) }}" alt="">
                </div>
                <div class="col-8 text-center">
                    <h2 class="text-center"> Details de l'article</h2>
                    <h3> Categorie : <strong>{{$article->paquet?->libelle}}</strong>  </h3>
                    <h4> N° Lot : <strong> {{$article->id}} </strong> </h4>
                    <h4> Localisation : Toutes les villes</h4>
                    <h4>Prix CongoBid : {{$article->prix}} $</h4>
                    <h4>Prix du Marché : {{$article->prix_marche}} $</h4>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
