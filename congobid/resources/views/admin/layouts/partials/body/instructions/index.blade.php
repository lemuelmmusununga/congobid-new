@section('body')
<div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des instructions</h2>
                </div>
                {{-- <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('instructions.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une
                        vidéo du instruction</a>
                </div> --}}
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
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Ajouté par</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instructions as $key => $instruction)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ $instruction->titre }}</td>
                                    <td>{{ substr($instruction->description, 0, 150) }}</td>
                                    <td>{{ $instruction->user->nom }}</td>
                                    <td>{{ $instruction->statut->libelle }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
