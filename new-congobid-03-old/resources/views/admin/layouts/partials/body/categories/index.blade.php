@section('body')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-2">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des catégories</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('categories.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une
                        catégorie</a>
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
                                            @if ($categorie->statut_id == '3')
                                                <td class="text-success">{{ $categorie->statut->libelle ?? '' }}</td>
                                            @elseif ($categorie->statut_id == '2')
                                                <td class="text-danger">{{ $categorie->statut->libelle ?? '' }}</td>
                                            @else
                                                <td class="text-warning">{{ $categorie->statut->libelle ?? '' }}</td>
                                            @endif
                                            <td>
                                                <a href="{{ route('categories.edit', [$categorie->id]) ?? '' }}"
                                                    class="btn btn-sm btn-success">Editer</a> |
                                                @if ($categorie->statut->id == 1)
                                                    <a href="{{ route('categories.destroy', [$categorie->id, 1]) ?? '' }}"
                                                        class="btn btn-sm btn-warning">Activer</a>
                                                @elseif ($categorie->statut->id == 2)
                                                    <a
                                                        href="{{ route('categories.destroy', [$categorie->id, 2]) ?? '' }}"class="btn btn-sm btn-secondary">Réactiver</a>
                                                @elseif ($categorie->statut->id == 3)
                                                    <a
                                                        href="{{ route('categories.destroy', [$categorie->id, 3]) ?? '' }}"class="btn btn-sm btn-danger">Supprimer</a>
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
