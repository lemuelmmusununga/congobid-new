<div>
    <form action="{{ route('encheres.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row" x-data="{ open: false }">
                    <div class="col-md-6">
                        <input type="hidden" name="enchere_id" id="enchere_id" value="{{ $enchere->id }}">
                        <div class="form-group">
                            <label for="smallInput">Article</label>
                            <select name="article_id" id="article" wire:model="article">
                                <option value="">Sélectionnez un article</option>
                                @foreach ($articles as $article)
                                    <option value="{{ $article->id }}"
                                        {{ $article->id == $enchere->article_id ? 'selected' : '' }}>
                                        {{ $article->titre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="smallInput">Marque</label>
                            <input type="text" name="marque" wire:model="marque" class="form-control "
                                id="marque" placeholder="Entrez sa marque" required>
                        </div>
                        <div class="form-group">
                            <label for="smallSelect">Catégorie</label>
                            <input type="text" name="categorie" wire:model="categorie" class="form-control "
                                id="categorie" placeholder="Entrez sa categorie" required>
                        </div>
                        <div class="form-group">
                            <label for="smallInput">Prix du marché</label>
                            <input type="number" name="prix_marche" wire:model="prix_marche" class="form-control "
                                id="prix_marche" placeholder="Entrez son prix du marché" required>
                        </div>
                        <div class="form-group">
                            <label for="smallInput">Prix Congo Bid</label>
                            <input type="number" name="prix" class="form-control " wire:model="prix" id="prix"
                                placeholder="Entrez son prix Congo Bid" required>
                        </div>
                        <div class="form-group">
                            <label for="smallInput">Coût de la livraison</label>
                            <input type="number" name="cout_livraison" class="form-control " id="smallInput"
                                placeholder="Entrez son coût de livraison"
                                value="{{ $enchere->article->cout_livraison }}>
                        </div>

                        {{-- <div class="form-group">
                            <label for="exampleFormControlFile1">Images de l'article</label>
                            <input type="file" name="image[]" class="form-control-file" id="exampleFormControlFile1" multiple required>
                        </div> --}}



                    </div>
                    <div class="col-md-6">
                            {{-- <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="5"
                                required></textarea>
                        </div> --}}

                            <div class="form-group">
                                <label for="smallInput">Participants</label>
                                <input type="number" name="participant" class="form-control " id="smallInput"
                                    placeholder="Entrez le nombre de participant" value="{{ $enchere->participant }}"
                                    required>
                            </div>
                            {{-- <div class="form-group">
                            <label for="smallInput">Crédit d'enchère automatique</label>
                            <input type="number" name="credit_enchere_auto" class="form-control " id="smallInput"
                                placeholder="Entrez son crédit d'enchère automatique" value="{{$enchere->article->}}">
                        </div> --}}
                            <div class="form-group">
                                <label for="smallInput">Date du début de l'enchère</label>
                                <input type="datetime-local" name="debut_enchere" class="form-control " id="smallInput"
                                    value="{{ $enchere->date_debut }}">
                            </div>

                            <div class="form-group">
                                <label for="smallSelect">Statut</label>
                                <select class="form-control " id="smallSelect" name="statut_id">
                                    @foreach ($statuts as $statut)
                                        <option value="{{ $statut->id }}"
                                            {{ $statut->id == $enchere->statut_id ? 'selected' : '' }}>
                                            {{ $statut->libelle }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
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
