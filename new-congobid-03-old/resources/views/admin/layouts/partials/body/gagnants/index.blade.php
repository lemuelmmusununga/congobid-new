@section('body')
<div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des vidéos de gagnants</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('gagnants.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une
                        des gagnant</a>
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
                                        <th>Enchère</th>
                                        <th>Gagnant</th>
                                        <th>Username</th>
                                        <th>Code de livraison</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gagnants as $key => $gagnant)

                                        <tr>
                                            <td> #{{ $key + 1 }} </td>
                                            <td>{{ $gagnant->enchere->article->titre ?? '' }}</td>
                                            <td>{{ $gagnant->user->nom ?? ''  }}</td>
                                            <td>{{ $gagnant->user->username ?? ''  }}</td>
                                            <td>{{ $gagnant->code }}</td>
                                            <td>{{ $gagnant->user->statut->libelle ?? '' }}</td>
                                            <td>
                                                <a href="{{ route('gagnants.edit', [$gagnant->id]) }}">Editer</a> |
                                                @if ($gagnant->state == 0)

                                                    <a href="" class="fs-7 text-muted px-3">
                                                        <i class="bi bi-patch-check"></i><span class="px-2">En entente</span>
                                                    </a>
                                                @else
                                                <a href="" class="fs-7 px-3">
                                                    <i class="bi bi-patch-check-fill"></i><span class="px-2">Payé</span>
                                                </a>

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
