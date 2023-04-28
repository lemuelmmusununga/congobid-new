@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="row justify-content-center">
        <div class="col-sm-3 col-md-4 mt-5">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header" style="background-image: url('{{ asset('images/profil/'.$bideur->avatar) }}')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('images/users/'.$bideur->user->avatar) }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $bideur->user->nom }} </span></span></div>
                            <div class="job"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ '@'.$bideur->user->username }} </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $bideur->user->telephone }} {{ $bideur->user->email == null ? '' : '/ '.$bideur->user->email }} </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $bideur->user->date_naissance }} /  {{ $bideur->user->sexe }} </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Ajouté par : <a href="{{ route('agents.show', $bideur->admin_id) }}"> {{ $bideur->admin->nom }} </a> </span></span></div>
                        <div class="view-profile d-flex justify-content-center px-5">
                            <a href="{{ route('bideurs.edit', [$bideur->id]) }}" class="btn btn-primary  px-5 mx-3 rounded-3"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Editer</span></span></a>
                            @if ($bideur->statut->id == 1)
                                <a href="{{ route('bideurs.destroy', [$bideur->user->id, 1]) }}" class="btn btn-success  px-5"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Activer</span></span></a>
                            @elseif ($bideur->statut->id == 2)
                                <a href="{{ route('bideurs.destroy', [$bideur->user->id, 2]) }}" class="btn btn-success  px-5"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Réactiver</span></span></a>
                            @elseif ($bideur->statut->id == 3)
                                <a href="{{ route('bideurs.destroy', [$bideur->user->id, 3]) }}" class="btn btn-danger  px-5"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Supprimer</span></span></a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row user-stats text-center">
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $bideur->balance }} </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Balance</span></span></div>
                        </div>
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $bideur->bonus }} </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Bonus</span></span></div>
                        </div>
                        <div class="col">
                            <div class="number"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $bideur->nontransferable }} </span></span></div>
                            <div class="title"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Non transferable</span></span></div>
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

