@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des communiqués</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('newsletters.create') }}" class="btn btn-white btn-border btn-round mr-2">Envoyer une nouvelle</a>
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
    </div>

    <div class="col-md-12">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Liste des abonnés</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>E-mail</th>
                                <th>Souscription</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletters as $key => $newsletter)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ $newsletter->email }}</td>
                                    <td>{{ $newsletter->created_at->diffForHumans() }}</td>
                                    <td>{{ $newsletter->statut->libelle }}</td>
                                    <td>
                                        @if ($newsletter->statut->id == 1)
                                            <a href="{{ route('newsletters.destroy', [$newsletter->id, 1]) }}">Activer</a>
                                        @elseif ($newsletter->statut->id == 2)
                                            <a href="{{ route('newsletters.destroy', [$newsletter->id, 2]) }}">Réactiver</a>
                                        @elseif ($newsletter->statut->id == 3)
                                            <a href="{{ route('newsletters.destroy', [$newsletter->id, 3]) }}">Supprimer</a>
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
