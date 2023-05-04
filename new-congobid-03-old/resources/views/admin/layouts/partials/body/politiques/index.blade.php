@section('body')
    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des conditions d'tilisation</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('politiques.create',) }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une
                         condition</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 my-5">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Contenu</th>
                                        <th>Ajouté par</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($politiques as $key => $politique)
                                        <tr>
                                            <td> #{{ $key + 1 }} </td>
                                            <td>{{ $politique->titre }}</td>
                                            <td>{{ substr($politique->content, 0, 100) }} {{ strlen($politique->content) >= 100 ? '...' : '' }}</td>
                                            <td>{{ $politique->user->nom ?? '' }}</td>
                                            <td>{{ $politique->statut->libelle }}</td>
                                            <td>
                                                <a href="{{ route('politiques.show', [$politique->id]) }}" class="btn btn-sm btn-warning">Voir</a> |
                                                <a href="{{ route('politiques.edit', [$politique->id]) }}" class="btn btn-sm btn-success">Editer</a> |
                                                @if ($politique->statut->id == 1)
                                                    <a href="{{ route('politiques.destroy', [$politique->user->id ?? '', 1]) }}" class="btn btn-sm btn-warning">Activer</a>
                                                @elseif ($politique->statut->id == 2)
                                                    <a href="{{ route('politiques.destroy', [$politique->user->id ?? '', 2]) }}"class="btn btn-sm btn-secondary">Réactiver</a>
                                                @elseif ($politique->statut->id == 3)
                                                    <a href="{{ route('politiques.destroy', [$politique->user->id ?? '', 3]) }}"class="btn btn-sm btn-danger">Supprimer</a>
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
        </div>
    </div>

@endsection
