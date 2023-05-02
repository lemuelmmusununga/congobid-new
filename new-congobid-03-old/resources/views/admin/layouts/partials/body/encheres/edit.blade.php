@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Editer l'article " {{$article->titre}} "</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <form action="{{ route('articles.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card" >
                        <div class="card-body">
                            <div class="row" x-data="{ open: false }">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="smallInput">Nom</label>
                                        <input type="hidden" value="{{$article->id}}" name="article_id" >
                                        <input type="text" name="titre" class="form-control " id="smallInput"
                                            placeholder="Entrez de l'article" value="{{$article->titre}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Marque</label>
                                        <input type="text" name="marque" class="form-control " id="smallInput"
                                            placeholder="Entrez sa marque" value="{{$article->marque}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Catégorie</label>
                                        <select class="form-control " id="smallSelect" name="categorie_id">
                                            @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}" {{$categorie->id == $article->categorie_id ? 'selected':''}}>{{ $categorie->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="smallInput">Crédit d'enchère automatique</label>
                                        <input type="number" name="credit_enchere_auto" class="form-control "
                                            id="smallInput" placeholder="Entrez son crédit d'enchère automatique" value="0">
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <label for="smallInput">Date du début de l'enchère</label>
                                        <input type="datetime-local" name="debut_enchere" class="form-control "
                                            id="smallInput" >
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Images de l'article</label>
                                        <input type="file" name="image[]" class="form-control-file" id="exampleFormControlFile1" multiple>
                                        <ul>
                                            @foreach ($article->images as $img)
                                                <li> 
                                                    <div class="avatar">
                                                        <img src="{{ asset('images/articles/'.$img->lien) }}" alt="..." class="avatar-img rounded-circle">
                                                    </div>
                                                    {{$img->lien}} 
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Statut</label>
                                        <select class="form-control " id="smallSelect" name="statut_id">
                                            @foreach ($statuts as $statut)
                                                <option value="{{ $statut->id }}" {{$statut->id == $article->statut_id ? 'selected':''}}>{{ $statut->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" rows="5"
                                            required >{{$article->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Prix du marché</label>
                                        <input type="number" name="prix_marche" class="form-control "
                                            id="smallInput" placeholder="Entrez son prix du marché" required value="{{$article->prix_marche}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Quantité</label>
                                        <input type="number" name="quantite" class="form-control "
                                            id="smallInput" placeholder="Entrez sa quantité" required value="{{$article->quantite}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Prix Congo Bid</label>
                                        <input type="number" name="prix" class="form-control " id="smallInput"
                                            placeholder="Entrez son prix Congo Bid" required value="{{$article->prix}}">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="smallInput">Coût de la livraison</label>
                                        <input type="number" name="cout_livraison" class="form-control "
                                            id="smallInput" placeholder="Entrez son coût de livraison" value="0">
                                    </div> --}}
                                </div>


                                <div class="col-md-6 col-lg-4">
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            {{-- <div class="form-group float-left">
                                <input class="form-check-input" type="checkbox" name="promouvoir" id="flexCheckDefault">
                                Voulez-vous promouvoir cet article ?
                            </div> --}}
                            <button class="text-white btn btn-congo px-3 float-right">Enregistrer</button>
                            {{-- <a href="{{ route('admin.index') }}" class="text-white btn btn-congo-2">Annuler</a> --}}
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
