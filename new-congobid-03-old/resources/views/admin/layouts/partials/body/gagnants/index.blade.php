@section('body')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des Gagnants</h2>
                </div>
                {{-- <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('gagnants.create') }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une
                        des gagnant</a>
                </div> --}}
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
                                        <th>Gagnant</th>
                                        <th>Enchère</th>
                                        <th>Date</th>
                                        <th>Code de livraison</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gagnants as $key => $gagnant)

                                        <tr>
                                            <td> #{{ $key + 1 }} </td>
                                            <td>{{'@'.$gagnant->user->username ?? ''  }}</td>
                                            <td>{{ $gagnant->enchere->article->titre ?? '' }}</td>
                                            <td>{{ $gagnant->enchere->date_debut ?? ''  }}</td>
                                            <td>{{ $gagnant->code }}</td>
                                            @if ($gagnant->state == 0)
                                                <td class="text-warning">En Attente</td>
                                            @else
                                                <td class="text-success">Livré</td>
                                            @endif
                                            <td>
                                                @if ($gagnant->state == 0)
                                                    <a href="{{ route('gagnants.edit', [$gagnant->id]) }}" class="btn btn-sm btn-success">Payer</a> 
                                                @else
                                                    <a href="{{ route('gagnants.show', [$gagnant->id]) }}" class="btn btn-sm btn-warning">Voir</a> 
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
