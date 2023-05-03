@section('body')
    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des bideurs</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('bideurs.create',) }}" class="btn btn-white btn-border btn-round mr-2">Ajouter un
                        bideur</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 my-5">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom complet</th>
                                <th>Pseudo</th>
                                <th>Balance</th>

                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bideurs as $key => $bideur)
                                <tr>
                                    <td> <a href="{{ route('bideurs.show', [$bideur->id ?? '']) }}"> #{{ $key + 1 }} </a> </td>
                                    <td>
                                        <a href="{{ route('bideurs.show', [$bideur->id ?? '']) }}">
                                             <div class="avatar">
                                                <img src="{{ asset('images/users/'.$bideur->user?->avatar) }}" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                            {{ $bideur->user->nom ??  ''  }}  {{ $bideur->user->prenom ??  ''  }}
                                        </a>
                                    </td>
                                    <td>{{ $bideur->user->username ?? '' }}</td>
                                    <td>{{ $bideur->balance ?? '' }}</td>

                                    @if ($bideur->statut_id == '3')
                                        <td class="text-success">{{ $bideur->statut->libelle ?? '' }}</td>
                                    @elseif ($bideur->statut_id == '2')
                                        <td class="text-danger">{{ $bideur->statut->libelle ?? '' }}</td>
                                    @else
                                        <td class="text-warning">{{ $bideur->statut->libelle ?? '' }}</td>
                                    @endif
                                    <td>
                                        <a href="{{ route('bideurs.edit', [$bideur->id]) }}" class="btn btn-sm btn-success">Editer</a> |
                                        @if ($bideur->statut->id == 1)
                                            <a href="{{ route('bideurs.destroy', [$bideur->user->id ?? '', 1]) }}" class="btn btn-sm btn-warning">Activer</a>
                                        @elseif ($bideur->statut->id == 2)
                                            <a href="{{ route('bideurs.destroy', [$bideur->user->id ?? '' , 2]) }}" class="btn btn-sm btn-secondary">Réactiver</a>
                                        @elseif ($bideur->statut->id == 3)
                                            <a href="{{ route('bideurs.destroy', [$bideur->user->id ?? '', 3]) }}" class="btn btn-sm btn-danger">Supprimer</a>
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
