@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="row">
        <div class="col">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header" style="background-image: url('{{ asset('images/articles/'.$article->images->first()->lien) }}')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('images/articles/'.$article->images->first()->lien) }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                            <div class="row mt-2 align-items-center">
                                @foreach ($article->images as $img)
                                    <div class="avatar m-2">
                                        <img src="{{ asset('images/articles/'.$img->lien) }}" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $article->titre }} </span></span></div>
                            <div class="job"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Marque : {{ $article->marque }} </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Prix : {{ $article->prix }} $ </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Prix marché : {{ $article->prix_marche }} $</span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Catégorie : {{ $article->categorie->libelle }}</span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Paquet : {{ $article->paquet->libelle }}</span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Ajouté par : <a href="{{ route('agents.show', $article->user->id) }}"> {{ $article->user->prenom }} {{ $article->user->nom }} </a> </span></span></div>
                        <div class="view-profile d-flex justify-content-center px-5">
                            <a href="{{ route('articles.edit', [$article->id]) }}" class="btn btn-primary  px-5 mx-3 rounded-3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Editer</span></span></a>
                            @if ($article->statut->id == 1)
                                <a href="{{ route('articles.destroy', [$article->id, 1]) }}" class="btn btn-success  px-5"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Activer</span></span></a>
                            @elseif ($article->statut->id == 2)
                                <a href="{{ route('articles.destroy', [$article->id, 2]) }}" class="btn btn-success  px-5"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Réactiver</span></span></a>
                            @elseif ($article->statut->id == 3)
                                <a href="{{ route('articles.destroy', [$article->id, 3]) }}" class="btn btn-danger  px-5"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Supprimer</span></span></a>
                            @endif
                        </div>
                        <div class="view-profile d-flex justify-content-center px-5">
                            <p>{{ $article->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row user-stats text-center">
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> O </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Nombre enchères</span></span></div>
                        </div>
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> 0 </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Nombre salons</span></span></div>
                        </div>
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $article->code_produit }} </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Code produit</span></span></div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>


@endsection

@section('javascript')
@endsection

