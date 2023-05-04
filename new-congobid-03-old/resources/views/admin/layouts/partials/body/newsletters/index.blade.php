@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des Newsletters</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('newsletters.create') }}" class="btn btn-white btn-border btn-round mr-2">Envoyer une nouvelle</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sujet</th>
                                <th>Message</th>
                                <th>Date d'envoie</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promotions as $key => $promotion)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ $promotion->sujet }}</td>
                                    <td>{{ $promotion->message }}</td>
                                    <td>{{ $promotion->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('newsletters.delete', [$promotion->id]) }}">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row">

            <div class="col-md-12 my-5">

                <div class="card">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Liste des abonnés</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sujet</th>
                                        <th>Message</th>
                                        <th>Utilisateur</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newsletters as $key => $newsletter)
                                        <tr>
                                            <!-- Récupérer le nombre d'identifiants contenus dans la colonne "destination" -->
                                            @php
                                                $destination = json_decode($newsletter->destination);
                                                $count = count($destination);
                                            @endphp
                                            <td> #{{ $key + 1 }} </td>
                                            <td>{{ $newsletter->subject }}</td>
                                            <td>{!!  Str::substr($newsletter->message,0,100) !!} {{ strlen($newsletter->message) >= 100 ? '...' : '' }}</td>
                                            <td>{{ $count }} utilisateurs</td>
                                            <td>{{ $newsletter->created_at->format('d-m-Y') }}</td>
                                            @if ($newsletter->statut_id == '3')
                                                <td class="text-success">{{ $newsletter->statut->libelle ?? '' }}</td>
                                            @elseif ($newsletter->statut_id == '2')
                                                <td class="text-danger">{{ $newsletter->statut->libelle ?? '' }}</td>
                                            @else
                                                <td class="text-warning">{{ $newsletter->statut->libelle ?? '' }}</td>
                                            @endif
                                            <td>
                                                <a href="{{ route('newsletters.show', [$newsletter->id]) }}" class="btn btn-sm btn-warning">Envoyer</a> |
                                                <a href="{{ route('newsletters.edit', [$newsletter->id]) }}" class="btn btn-sm btn-success">Editer</a> |
                                                @if ($newsletter->statut->id == 1)
                                                    <a href="{{ route('newsletters.destroy', [$newsletter->id ?? '', 1]) }}"  class="btn btn-sm btn-warning">Activer</a>
                                                @elseif ($newsletter->statut->id == 2)
                                                    <a href="{{ route('newsletters.destroy', [$newsletter->id ?? '', 2]) }}" class="btn btn-sm btn-secondary">Réactiver</a>
                                                @elseif ($newsletter->statut->id == 3)
                                                    <a href="{{ route('newsletters.destroy', [$newsletter->id ?? '', 3]) }}" class="btn btn-sm btn-danger">Supprimer</a>
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
