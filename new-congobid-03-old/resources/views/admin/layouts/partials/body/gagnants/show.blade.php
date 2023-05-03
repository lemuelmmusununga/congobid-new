@extends('admin.layouts.master')

@section('css')
@endsection
@section('body')
    <div class="row">
        <div class="col">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header">
                        <p>
                            <h6>Gagnant : </h6>
                            <h3> {{$gagnant->user->prenom}} {{$gagnant->user->nom}} </h3>
                            <small> {{$gagnant->user->username}} </small>
                        </p>
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('images/articles/'.$gagnant->enchere->article->images->first()->lien) }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">

                            <div class="name"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $gagnant->enchere->article->titre }} </span></span></div>
                            <div class="job"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Marque : {{ $gagnant->enchere->article->marque }} </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Catégorie : {{ $gagnant->enchere->article->categorie->libelle }}</span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Paquet : {{ $gagnant->enchere->article->paquet->libelle }}</span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Prix : {{ $gagnant->enchere->prix_enchere }} $ </span></span></div>
                        <div class="view-profile d-flex justify-content-center px-5">
                            @if ($gagnant->state == 0)
                                <a href="{{ route('gagnants.edit', [$gagnant->id]) }}" class="btn btn-sm btn-success">Payer</a> 
                            @endif
                        </div>
                        <div class="view-profile d-flex justify-content-center px-5">
                            <p>{{ $gagnant->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row user-stats text-center">
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{$gagnant->created_at}} </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Date de victoire</span></span></div>
                        </div>
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Match : #{{$gagnant->enchere->id}} </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Enchere </span></span></div>
                        </div>
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $gagnant->code }} </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Code Livraison</span></span></div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
    </div>


@endsection
