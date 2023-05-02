@section('body')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Liste des salons</h2>
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
                                <th>Article</th>
                                <th>Prix marché ($)</th>
                                <th>Prix Congo Bid ($)</th>
                                <th>Quantité</th>
                                <th>Catégorie</th>
                                <th>Début de l'enchère</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($salons as $key => $salon)
                                <tr>
                                    <td> #{{ $key + 1 }} </td>
                                    <td>{{ $salon->article->titre }}</td>
                                    <td>{{ $salon->article->prix_marche }}</td>
                                    <td>{{ $salon->article->prix }}</td>
                                    <td>{{ $salon->article->quantite }}</td>
                                    <td>{{ $salon->article->categorie->libelle }}</td>
                                    <td>{{ $salon->debut_enchere }}</td>
                                    <td>{{ $salon->statut->libelle }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
