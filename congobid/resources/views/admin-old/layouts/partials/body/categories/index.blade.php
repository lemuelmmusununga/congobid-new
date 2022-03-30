@section('body')
<div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des sous-catégories</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('categories.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une
                        sous-catégorie</a>
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
                                <th>Nom</th>
                                <th>Nombre d'articles</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $categorie)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ $categorie->libelle }}</td>
                                    <td>{{ $categorie->articles->count() }}</td>
                                    <td>{{ $categorie->statut->libelle }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', [$categorie->id]) }}">Editer</a> |
                                        @if ($categorie->statut->id == 1)
                                            <a href="{{ route('categories.destroy', [$categorie->id, 1]) }}">Activer</a>
                                        @elseif ($categorie->statut->id == 2)
                                            <a href="{{ route('categories.destroy', [$categorie->id, 2]) }}">Réactiver</a>
                                        @elseif ($categorie->statut->id == 3)
                                            <a href="{{ route('categories.destroy', [$categorie->id, 3]) }}">Supprimer</a>
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
