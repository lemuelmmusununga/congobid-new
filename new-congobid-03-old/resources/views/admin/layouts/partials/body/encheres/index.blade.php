@section('body')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-2">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des Encheres</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('encheres.create') ?? '' }}" class="btn btn-white btn-border btn-round mr-2">Ajouter une
                        enchere</a>
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
                                        <th>Etat</th>
                                        <th>Participants</th>
                                        <th>Date debut</th>
                                        <th>Click</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($encheres as $key => $enchere)
                                        <tr>
                                            <td> <a href="{{ route('encheres.show', [$enchere->id]) ?? '' }}">
                                                    #{{ $key + 1 ?? '' }} </a> </td>
                                            <td>
                                                <a href="{{ route('encheres.show', [$enchere->id]) ?? '' }}">

                                                    {{ $enchere->article->titre ?? '' }}
                                                </a>
                                            </td>
                                            <td>{{ $enchere->state == 0 ? 'En cours' : 'Terminé' }}</td>
                                            <td>{{ $enchere->participant ?? '' }}</td>
                                            <td>{{ $enchere->date_debut ?? '' }} </td>
                                            <td>{{ $enchere->click ?? '' }} </td>


                                            @if ($enchere->statut_id == '3')
                                                <td class="text-success">{{ $enchere->statut->libelle ?? '' }}</td>
                                            @elseif ($enchere->statut_id == '2')
                                                <td class="text-danger">{{ $enchere->statut->libelle ?? '' }}</td>
                                            @else
                                                <td class="text-warning">{{ $enchere->statut->libelle ?? '' }}</td>
                                            @endif
                                            <td>
                                                <a href="{{ route('encheres.edit', [$enchere->id]) ?? '' }}"
                                                    class="btn btn-sm btn-success">Editer</a> |
                                                @if ($enchere->statut->id == 1)
                                                    <a href="{{ route('encheres.destroy', [$enchere->id, 1]) ?? '' }}"
                                                        class="btn btn-sm btn-warning">Activer</a>
                                                @elseif ($enchere->statut->id == 2)
                                                    <a
                                                        href="{{ route('encheres.destroy', [$enchere->id, 2]) ?? '' }}"class="btn btn-sm btn-secondary">Réactiver</a>
                                                @elseif ($enchere->statut->id == 3)
                                                    <a
                                                        href="{{ route('encheres.destroy', [$enchere->id, 3]) ?? '' }}"class="btn btn-sm btn-danger">Supprimer</a>
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
