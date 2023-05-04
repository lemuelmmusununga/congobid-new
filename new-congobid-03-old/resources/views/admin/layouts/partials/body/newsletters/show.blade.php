@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="row justify-content-center">
        <div class="col">
            <div class="page-inner">
                <div class="card card-profile">
                    <div class="card-header" >
                        <h3>newsletter #{{$newsletter->id}}  </h3>
                    </div>
                    <div class="card-body pt-5">
                        <div class="user-profile text-center">
                            <div class="name"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {{ $newsletter->subject }} </span></span></div>
                            <div class="job"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> {!! $newsletter->message !!} </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Ajouté par : {{ $newsletter->user->nom}}  </span></span></div>
                            <div class="desc"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> Statut : {{ $newsletter->statut->libelle }} {{ $newsletter->user->email == null ? '' : '/ '.$newsletter->user->email }} </span></span></div>
                        <div class="view-profile d-flex justify-content-center">
                            <a href="{{ route('newsletters.edit', [$newsletter->id]) }}" class="btn btn-primary rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Editer</span></span></a>
                            @if ($newsletter->statut->id == 1)
                                <a href="{{ route('newsletters.destroy', [$newsletter->user->id, 1]) }}" class="btn btn-sm btn-success rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Activer</span></span></a>
                            @elseif ($newsletter->statut->id == 2)
                                <a href="{{ route('newsletters.destroy', [$newsletter->user->id, 2]) }}" class="btn btn-sm btn-success rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Réactiver</span></span></a>
                            @elseif ($newsletter->statut->id == 3)
                                <a href="{{ route('newsletters.destroy', [$newsletter->user->id, 3]) }}" class="btn btn-sm btn-danger rounded-3 mx-2"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Supprimer</span></span></a>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('newsletters.send') }}" method="POST">
                            @csrf
                            <div class="card">
                                <input type="hidden" name="newsletter_id" value="{{$newsletter->id}}">
                                <div class="card-body">
                                    <h3>Envoie de NewsLetters</h3>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="type">Envoyé à </label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="user">Un utilisateur</option>
                                                    <option value="group">Un groupe d'utilisateurs</option>
                                                </select>
                                            </div>
                                            <div id="user-div">
                                                <label for="user_id">Sélectionnez l'utilisateur :</label>
                                                <select name="user_id" id="user_id" class="form-control">
                                                    <option value="">Selectionnez un utilisateur</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{$user->id}}"> {{"@".$user->username}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div id="group-div" style="display: none;">
                                                <label for="destination">Sélectionnez un groupe :</label>
                                                <select name="destination" id="destination" class="form-control">
                                                    <option value="1">Tous les utilisateurs</option>
                                                    <option value="2">Les utilisateurs connectés aujourd'hui</option>
                                                    <option value="3">Les utilisateurs connectés ce mois</option>
                                                    <option value="4">Les utilisateurs inactifs</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-sm btn-success">Enregistrer</button>
                                    <a href="{{  url()->previous() }}" class="btn btn-sm btn-danger">Retour</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('javascript')
    <script>
        document.getElementById('type').addEventListener('change', function() {
            var userDiv = document.getElementById('user-div');
            var groupDiv = document.getElementById('group-div');

            if (this.value === 'user') {
                userDiv.style.display = 'block';
                groupDiv.style.display = 'none';
                groupDiv.style.display = 'none';
            } else if (this.value === 'group') {
                userDiv.style.display = 'none';
                groupDiv.style.display = 'block';
            }
        });
    </script>

@endsection
