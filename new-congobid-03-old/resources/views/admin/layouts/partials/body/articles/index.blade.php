@section('body')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des produits</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="{{ route('articles.create') ?? '' }}" class="btn btn-white btn-border btn-round mr-2">Ajouter un
                        article</a>
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
                                        <th>Prix Congo Bid</th>
                                        <th>Paquet</th>
                                        <th>Catégorie</th>

                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $key => $article)
                                        <tr>
                                            <td> <a href="{{ route('articles.show', [$article->id]) ?? '' }}"> #{{ $key + 1 ?? '' }} </a> </td>
                                            <td>
                                                <a href="{{ route('articles.show', [$article->id]) ?? '' }}">
                                                    <div class="avatar">
                                                        <img src="{{ asset('images/articles/'.$article->images->first()->lien) }}" alt="..." class="avatar-img rounded-circle">
                                                    </div>
                                                    {{ $article->titre ??  ''  }}
                                                </a>
                                            </td>
                                            <td>{{ $article->prix ?? '' }} $</td>
                                            <td>{{ $article->paquet->libelle ?? '' }}</td>
                                            <td>{{ $article->categorie->libelle ?? '' }}</td>


                                            <td>{{ $article->statut->libelle ?? '' }}</td>
                                            <td>
                                                <a href="{{ route('articles.edit', [$article->id]) ?? '' }}" class="btn btn-sm btn-success">Editer</a> |
                                                @if ($article->statut->id == 1)
                                                    <a href="{{ route('articles.destroy', [$article->id, 1]) ?? '' }}" class="btn btn-sm btn-warning">Activer</a>
                                                @elseif ($article->statut->id == 2)
                                                    <a href="{{ route('articles.destroy', [$article->id, 2]) ?? '' }}"class="btn btn-sm btn-secondary">Réactiver</a>
                                                @elseif ($article->statut->id == 3)
                                                    <a href="{{ route('articles.destroy', [$article->id, 3]) ?? '' }}"class="btn btn-sm btn-danger">Supprimer</a>
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
