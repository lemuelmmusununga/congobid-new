@section('body')
    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des faqs</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('faqs.create',) }}" class="btn btn-white btn-border btn-round mr-2">Ajouter un
                        une question</a>
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
                                <th>Questions</th>
                                <th>Répnse</th>
                                <th>Ajouté par</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $key => $faq)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ substr($faq->questions, 0, 100) }} {{ strlen($faq->questions) >= 100 ? '...' : '' }}</td>
                                    <td>{{ substr($faq->reponses, 0, 100) }} {{ strlen($faq->reponses) >= 100 ? '...' : '' }}</td>
                                    <td>{{ $faq->user->nom }}</td>
                                    <td>{{ $faq->statut->libelle }}</td>
                                    <td>
                                        <a href="{{ route('faqs.edit', [$faq->id]) }}">Editer</a> |
                                        @if ($faq->statut->id == 1)
                                            <a href="{{ route('faqs.destroy', [$faq->user->id, 1]) }}">Activer</a>
                                        @elseif ($faq->statut->id == 2)
                                            <a href="{{ route('faqs.destroy', [$faq->user->id, 2]) }}">Réactiver</a>
                                        @elseif ($faq->statut->id == 3)
                                            <a href="{{ route('faqs.destroy', [$faq->user->id, 3]) }}">Supprimer</a>
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
