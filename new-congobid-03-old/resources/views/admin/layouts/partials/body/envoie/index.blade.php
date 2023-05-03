@section('body')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-2">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste d'Envoie de Bids</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('envoie.create') ?? '' }}" class="btn btn-white btn-border btn-round mr-2">Envoyer
                        bids</a>
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
                                        <th>Date</th>
                                        <th>Type de bid</th>
                                        <th>Nombre</th>
                                        <th>User</th>
                                        <th>Admin</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($envoies as $key => $envoie)
                                        <tr>
                                            <td>
                                                #{{ $key + 1 ?? '' }} </a> </td>
                                            <td>
                                                {{ $envoie->created_at ?? '' }}
                                            </td>
                                            <td>{{ $envoie->bidtype->libelle }}</td>
                                            <td>{{ $envoie->number ?? '' }}</td>
                                            <td>{{ $envoie->user->username ?? '' }} </td>
                                            <td>{{ $envoie->admin->prenom ?? '' }}
                                                {{ $envoie->admin->nom ?? '' }}</td>

                                            {{-- @if ($envoie->statut_id == '3')
                                                <td class="text-success">{{ $envoie->statut->libelle ?? '' }}</td>
                                            @elseif ($envoie->statut_id == '2')
                                                <td class="text-danger">{{ $envoie->statut->libelle ?? '' }}</td>
                                            @else
                                                <td class="text-warning">{{ $envoie->statut->libelle ?? '' }}</td>
                                            @endif --}}
                                            <td>
                                                <a href="{{ route('envoie.edit', [$envoie->id]) ?? '' }}"
                                                    class="btn btn-sm btn-success">Editer</a> |
                                                    <a href="{{ route('envoie.destroy', $envoie->id) ?? '' }}"
                                                        class="btn btn-sm btn-danger">Supprimer</a>
                                                
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
