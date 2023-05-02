@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Editer un article</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <form action="{{ route('articles.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Nom</label>
                                        <input type="hidden" name="article_id" class="form-control " id="smallInput" required value="{{ $article->id }}">
                                        <input type="text" name="titre" class="form-control " id="smallInput" placeholder="Entrez son nom" required value="{{ $article->titre }}">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="smallInput">Code du produit</label>
                                        <input type="text" name="code_produit" class="form-control " id="smallInput" placeholder="Entrez son code produit" required value="{{ $article->id }}">
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="smallInput">Prix du marché</label>
                                        <input type="number" name="prix_marche" class="form-control " id="smallInput" placeholder="Entrez son prix du marché" required value="{{ $article->prix_marche }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Crédit d'enchère automatique</label>
                                        <input type="number" name="credit_enchere_auto" class="form-control " id="smallInput" placeholder="Entrez son crédit d'enchère automatique" value="0" value="{{ $article->credit_enchere_auto }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Date du début de l'enchère</label>
                                        <input type="date" name="debut_enchere" class="form-control " id="smallInput" required value="{{ $article->enchere->date_debut }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Description</label>
                                        <textarea class="form-control" name="description" id="comment" rows="5" required>{{ $article->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Statut</label>
                                        <select class="form-control " id="smallSelect" name="statut_id">
                                            @foreach ($statuts as $statut)
                                                <option value="{{ $statut->id }}" {{ $article->statut_id == $statut->id ? 'selected' : '' }}>{{ $statut->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Marque</label>
                                        <input type="text" name="marque" class="form-control " id="smallInput" placeholder="Entrez sa marque" required value="{{ $article->marque }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Coût de la livraison</label>
                                        <input type="number" name="cout_livraison" class="form-control " id="smallInput" placeholder="Entrez son coût de livraison" value="0" value="{{ $article->cout_livraison }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Prix Congo Bid</label>
                                        <input type="number" name="prix" class="form-control " id="smallInput" placeholder="Entrez son prix Congo Bid" required value="{{ $article->prix }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Limite d'enchère automatique</label>
                                        <input type="number" name="limite_enchere_auto" class="form-control " id="smallInput" placeholder="Entrez sa limite d'enchère automatique" value="0" value="{{ $article->limite_enchere_auto }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Heure du début de l'enchère</label>
                                        <input type="time" name="fin_enchere" class="form-control " id="smallInput" required value="{{ $article->enchere->heure_debut }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Images de l'article</label>
                                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Quantité</label>
                                        <input type="number" name="quantite" class="form-control " id="smallInput" placeholder="Entrez sa quantité" required value="{{ $article->quantite }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Informations sur la livraison</label>
                                        <textarea class="form-control" name="infos_livraison" id="comment" rows="4">{{ $article->infos_livraison }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Catégorie</label>
                                        <select class="form-control " id="smallSelect" name="categorie_id">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}" {{ $article->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Clés de Meta données</label>
                                        <input type="text" name="meta_keywords" class="form-control " id="smallInput" placeholder="Entrez les clés pour les metas données" value="{{ $article->meta_keywords }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Description de Meta données</label>
                                        <textarea class="form-control" name="meta_description" id="comment" rows="5">{{ $article->meta_keywords }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-check-input" type="checkbox" name="promouvoir" id="flexCheckDefault"  {{ $article->promouvoir == 1 ? 'checked' : '' }}>
                                        Voulez-vous promouvoir cet article ?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action mx-2">
                            <button class="btn btn-primary float-right px-5 mx-3" style="border-radius: 20px;">Enregistrer</button>
                            {{-- <a href="javascript.history.go(-1)" class="btn btn-info float-right px-5" style="border-radius: 20px;">Annuler</a> --}}
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    @include('admin.layouts.partials.footer.footer')

@endsection

@section('javascript')
@endsection
