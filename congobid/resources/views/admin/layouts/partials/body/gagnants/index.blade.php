@section('body')
<div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des vidéos de gagnants</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('gagnants.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une
                        vidéo du gagnant</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Enchère</th>
                                <th>Gagnant</th>
                                <th>Ajouté par</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gagnants as $key => $gagnant)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ $gagnant->enchere->article->titre }}</td>
                                    <td>{{ $gagnant->user->nom }}</td>
                                    <td>{{ $gagnant->administrateur->user->nom }}</td>
                                    <td>{{ $gagnant->statut->libelle }}</td>
                                    <td>
                                        <a href="{{ route('gagnants.edit', [$gagnant->id]) }}">Editer</a> |
                                        @if ($gagnant->statut->id == 1)
                                            <a href="{{ route('gagnants.destroy', [$gagnant->id, 1]) }}">Activer</a>
                                        @elseif ($gagnant->statut->id == 2)
                                            <a href="{{ route('gagnants.destroy', [$gagnant->id, 2]) }}">Réactiver</a>
                                        @elseif ($gagnant->statut->id == 3)
                                            <a href="{{ route('gagnants.destroy', [$gagnant->id, 3]) }}">Supprimer</a>
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
