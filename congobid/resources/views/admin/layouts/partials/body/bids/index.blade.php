@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste de taux de conversion</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('bids.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter un taux de conversion</a>
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
                                <th>Nombre de Bid</th>
                                <th>Valeur en $</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bids as $key => $bid)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ $bid->quantite }}</td>
                                    <td>{{ $bid->valeur }}</td>
                                    <td>{{ $bid->statut->libelle }}</td>
                                    <td>
                                        <a href="{{ route('bids.edit', [$bid->id]) }}">Editer</a> |
                                        @if ($bid->statut->id == 1)
                                            <a href="{{ route('bids.destroy', [$bid->id, 1]) }}">Activer</a>
                                        @elseif ($bid->statut->id == 2)
                                            <a href="{{ route('bids.destroy', [$bid->id, 2]) }}">Réactiver</a>
                                        @elseif ($bid->statut->id == 3)
                                            <a href="{{ route('bids.destroy', [$bid->id, 3]) }}">Supprimer</a>
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
