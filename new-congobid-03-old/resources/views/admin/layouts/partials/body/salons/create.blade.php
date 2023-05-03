@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter un agent de Congo Bid</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallInput">Nom</label>
                                    <input type="text" name="titre" class="form-control form-control-sm" id="smallInput"
                                        placeholder="Entrez son nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Code du produit</label>
                                    <input type="text" name="code_produit" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez son code produit" required>
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Prix sur le marché</label>
                                    <input type="number" name="prix_marche" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez son prix sur le marché" required>
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Prix minimal</label>
                                    <input type="number" name="prix_min" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez son prix minimal" required>
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Crédit d'enchère automatique</label>
                                    <input type="number" name="credit_enchere_auto" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez son crédit d'enchère automatique">
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Date du début de l'enchère</label>
                                    <input type="date" name="debut_enchere" class="form-control form-control-sm"
                                        id="smallInput" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Images de l'article</label>
                                    <input type="file" name="image1" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Statut</label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="statut_id">
                                        @foreach ($statuts as $statut)
                                            <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Description</label>
                                    <textarea class="form-control" name="description" id="comment" rows="5"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallInput">Marque</label>
                                    <input type="text" name="marque" class="form-control form-control-sm" id="smallInput"
                                        placeholder="Entrez sa marque" required>
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Coût de la livraison</label>
                                    <input type="number" name="cout_livraison" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez son coût de livraison">
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Prix sur Congo Bid</label>
                                    <input type="number" name="prix" class="form-control form-control-sm" id="smallInput"
                                        placeholder="Entrez son prix sur Congo Bid" required>
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Prix maximal</label>
                                    <input type="number" name="prix_max" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez son prix maximal" required>
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Limite d'enchère automatique</label>
                                    <input type="number" name="limite_enchere_auto" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez sa limite d'enchère automatique">
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Date de fin de l'enchère</label>
                                    <input type="date" name="fin_enchere" class="form-control form-control-sm"
                                        id="smallInput" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Images de l'article</label>
                                    <input type="file" name="image2" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Prix fixe</label>
                                    <input type="number" name="prix_fixe" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez son prix fixe" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallInput">Quantité</label>
                                    <input type="number" name="quantite" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez sa quantité" required>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Informations sur la livraison</label>
                                    <textarea class="form-control" name="infos_livraison" id="comment"
                                        rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="smallInput">Clés de Meta données</label>
                                    <input type="text" name="meta_keywords" class="form-control form-control-sm"
                                        id="smallInput" placeholder="Entrez les clés pour les metas données">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Description de Meta données</label>
                                    <textarea class="form-control" name="meta_description" id="comment"
                                        rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Images de l'article</label>
                                    <input type="file" name="image3" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="prix_fixe_status">
                                        <span class="form-check-sign">Enchère à prix fixe - les enchérisseurs <br/>continuent
                                            d'enchérir et le prix augmente, <br/>mais ils ne paient que le prix que vous avez
                                            défini ici.</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-sm btn-success">Enregistrer</button>
                        <a href="{{ route('admin.index') }}" class="btn btn-sm btn-danger">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


    @include('admin.layouts.partials.footer.footer')

@endsection

@section('javascript')
@endsection
