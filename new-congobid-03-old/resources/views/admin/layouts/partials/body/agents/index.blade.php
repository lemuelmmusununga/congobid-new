@section('body')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des agents de Congo Bid</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('agents.create',) }}" class="btn btn-white btn-border btn-round mr-2">Ajouter un
                        agent</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom complet</th>
                                <th>Identification fiscale</th>
                                <th>Pseudo</th>
                                <th>Téléphone</th>
                                {{-- <th>Produits ajoutés</th> --}}
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agents as $key => $agent)
                                <tr>
                                    <td> <a href="{{ route('agents.show', [$agent->id ??  '' ]) }}"> # {{ $key + 1 }} </a> </td>
                                    <td> <a href="{{ route('agents.show', [$agent->id ??  '' ]) }}"> {{ $agent->user->nom ??  ''  }} </a> </td>
                                    <td>{{ $agent->identification_fiscale ??  ''   }}</td>
                                    <td>{{ $agent->user->username ??  ''  }}</td>
                                    <td>{{ $agent->user->telephone ??  '' }} </td>
                                    {{-- <td>{{ $agent->user->articles->count() {{  }}}}</td> --}}
                                    <td>{{ $agent->statut->libelle ??  ''  }}</td>
                                    <td>
                                        <a href="{{ route('agents.edit', [$agent->id ??  '' ]) }}">Editer</a> |
                                        @if ($agent->statut->id == 1)
                                            <a href="{{ route('agents.destroy', [$agent->user->id ??  '' , 1]) }}">Activer</a>
                                        @elseif ($agent->statut->id == 2)
                                            <a href="{{ route('agents.destroy', [$agent->user->id ??  '' , 2]) }}">Réactiver</a>
                                        @elseif ($agent->statut->id == 3)
                                            <a href="{{ route('agents.destroy', [$agent->user->id ??  '' , 3]) }}">Supprimer</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
