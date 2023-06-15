@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="row justify-content-center">
        <div class="col-sm-3 col-md-4 my-5">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header" style="background-image: url('{{ asset('images/profil/'.$agent->avatar) }}')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('images/users/'.$agent->user->avatar) }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $agent->user->nom }} </span></span></div>
                            <div class="job"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ '@'.$agent->user->username }} </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Poste : {{ $agent->poste }}  </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $agent->user->telephone }} {{ $agent->user->email == null ? '' : '/ '.$agent->user->email }} </span></span></div>
                        <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Identification fiscale : {{ $agent->identification_fiscale }} </span></span></div>
                        <div class="view-profile d-flex justify-content-center">
                            <a href="{{ route('agents.edit', [$agent->id]) }}" class="btn btn-primary rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Editer</span></span></a>
                            @if ($agent->statut->id == 1)
                                <a href="{{ route('agents.destroy', [$agent->user->id, 1]) }}" class="btn btn-success rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Activer</span></span></a>
                            @elseif ($agent->statut->id == 2)
                                <a href="{{ route('agents.destroy', [$agent->user->id, 2]) }}" class="btn btn-success rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Réactiver</span></span></a>
                            @elseif ($agent->statut->id == 3)
                                <a href="{{ route('agents.destroy', [$agent->user->id, 3]) }}" class="btn btn-danger rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Supprimer</span></span></a>
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

