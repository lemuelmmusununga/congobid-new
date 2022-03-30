@section('body')
<div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Historiques</h2>
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
                                <th>Action</th>
                                <th>Auteur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($historiques as $key => $historique)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td> {{ $historique->action }} :
                                        {{-- @if ($historique->type <= 2)
                                            <a href="#"> {{ $users->where('id', $historique->destination_id)->first()->id }} </a>
                                        @elseif ($historique->type == 3)
                                            <a href="#"> {{ $paquets->where('id', $historique->destination_id)->first()->libelle }} </a>
                                        @elseif ($historique->type == 4)
                                            <a href="#"> {{ $categories->where('id', $historique->destination_id)->first()->libelle }} </a>
                                        @elseif ($historique->type == 5)
                                            <a href="#"> {{ $articles->where('id', $historique->destination_id)->first()->titre }} </a>
                                        @elseif ($historique->type == 6)
                                            <a href="#"> {{ $bids->where('id', $historique->destination_id)->first()->quantite }} </a>
                                        @elseif ($historique->type == 7)
                                            <a href="#"> {{ $gagnants->where('id', $historique->destination_id)->first()->libelle }} </a>
                                        @elseif ($historique->type == 8)
                                            <a href="#"> {{ $newsletters->where('id', $historique->destination_id)->first()->email }} </a>
                                        @elseif ($historique->type == 10)
                                            <a href="#"> {{ $faqs->where('id', $historique->destination_id)->first()->titre }} </a>
                                        @endif --}}
                                    </td>
                                    <td>{{ $historique->user->nom }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
