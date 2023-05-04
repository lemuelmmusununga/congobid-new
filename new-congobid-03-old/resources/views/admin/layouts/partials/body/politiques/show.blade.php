@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="row justify-content-center">
        <div class="col">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header" >
                        <h3>Politique #{{$politique->id}}  </h3>
                    </div>
                    <div class="card-body pt-5">
                        <div class="user-profile text-center">
                            <div class="name"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $politique->titre }} </span></span></div>
                            <div class="job"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $politique->content }} </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Ajouté par : {{ $politique->user->nom}}  </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Statut : {{ $politique->statut->libelle }} {{ $politique->user->email == null ? '' : '/ '.$politique->user->email }} </span></span></div>
                        <div class="view-profile d-flex justify-content-center">
                            <a href="{{ route('politiques.edit', [$politique->id]) }}" class="btn btn-primary rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Editer</span></span></a>
                            @if ($politique->statut->id == 1)
                                <a href="{{ route('politiques.destroy', [$politique->user->id, 1]) }}" class="btn btn-sm btn-success rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Activer</span></span></a>
                            @elseif ($politique->statut->id == 2)
                                <a href="{{ route('politiques.destroy', [$politique->user->id, 2]) }}" class="btn btn-sm btn-success rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Réactiver</span></span></a>
                            @elseif ($politique->statut->id == 3)
                                <a href="{{ route('politiques.destroy', [$politique->user->id, 3]) }}" class="btn btn-sm btn-danger rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Supprimer</span></span></a>
                            @endif
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    </div>

@endsection

@section('javascript')
@endsection
