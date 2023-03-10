@section('body')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
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
                                    <td> <a href="{{ route('bideurs.show', [$bideur->id ?? '']) }}"> {{ $bideur->user->nom ?? '' }} {{ $bideur->user->prenom ?? '' }} </a> </td>
                                    <td>{{ $bideur->user->username ?? '' }}</td>
                                    <td>{{ $bideur->balance ?? '' }}</td>


                                    <td>{{ $bideur->statut->libelle ?? '' }}</td>
                                    <td>
                                        <a href="{{ route('bideurs.edit', [$bideur->id]) }}">Editer</a> |
                                        @if ($bideur->statut->id == 1)
                                            <a href="{{ route('bideurs.destroy', [$bideur->user->id ?? '', 1]) }}">Activer</a>
                                        @elseif ($bideur->statut->id == 2)
                                            <a href="{{ route('bideurs.destroy', [$bideur->user->id ?? '' , 2]) }}">Réactiver</a>
                                        @elseif ($bideur->statut->id == 3)
                                            <a href="{{ route('bideurs.destroy', [$bideur->user->id ?? '', 3]) }}">Supprimer</a>
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
