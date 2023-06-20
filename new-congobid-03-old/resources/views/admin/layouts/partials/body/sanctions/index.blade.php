@section('body')

<div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des sanctions</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('sanctions.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une sanction</a>
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
                                <th>Durée en minute</th>
                                <th>Statut</th>
                                <th>Ajoutée par</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sanctions as $key => $sanction)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ $sanction->libelle }}</td>
                                    <td>{{ $sanction->duree }}</td>
                                    <td>{{ $sanction->statut->libelle }}</td>
                                    <td>{{ $sanction->user->nom }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
