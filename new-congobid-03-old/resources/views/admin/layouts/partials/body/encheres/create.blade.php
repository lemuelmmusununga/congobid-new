@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter un article</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card" >
                        <div class="card-body">
                            <div class="row" x-data="{ open: false }">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="smallInput">Nom</label>
                                        <input type="text" name="titre" class="form-control " id="smallInput"
                                            placeholder="Entrez de l'article" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Marque</label>
                                        <input type="text" name="marque" class="form-control " id="smallInput"
                                            placeholder="Entrez sa marque" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Catégorie</label>
                                        <select class="form-control " id="smallSelect" name="categorie_id">
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
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
                                        <input type="file" name="image[]" class="form-control-file" id="exampleFormControlFile1" multiple required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Statut</label>
                                        <select class="form-control " id="smallSelect" name="statut_id">
                                            @foreach ($statuts as $statut)
                                                <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" rows="5"
                                            required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Prix du marché</label>
                                        <input type="number" name="prix_marche" class="form-control "
                                            id="smallInput" placeholder="Entrez son prix du marché" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Quantité</label>
                                        <input type="number" name="quantite" class="form-control "
                                            id="smallInput" placeholder="Entrez sa quantité" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Prix Congo Bid</label>
                                        <input type="number" name="prix" class="form-control " id="smallInput"
                                            placeholder="Entrez son prix Congo Bid" required>
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
                            <div class="form-group float-left">
                                <input class="form-check-input" type="checkbox" name="promouvoir" id="flexCheckDefault">
                                Voulez-vous promouvoir cet article ?
                            </div>
                            <button class="text-white btn btn-congo px-3 float-right">Enregistrer</button>
                            {{-- <a href="{{ route('admin.index') }}" class="text-white btn btn-congo-2">Annuler</a> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        // Récupération de l'élément input
        const input = document.querySelector('input[type="file"]');

        // Ajout d'un écouteur d'événement "change" pour détecter les changements dans l'élément input
        input.addEventListener('change', function() {
        // Récupération des fichiers sélectionnés
        const files = input.files;

        // Récupération de l'élément HTML où afficher les images sélectionnées
        const preview = document.querySelector('#preview');

        // Réinitialisation de l'affichage des images
        preview.innerHTML = '';

        // Parcours de chaque fichier sélectionné
        for (let i = 0; i < files.length; i++) {
            // Création d'un élément HTML pour afficher l'image
            const img = document.createElement('img');
            img.src = URL.createObjectURL(files[i]);
            img.width = 200;

            // Création d'un élément HTML pour afficher le nom du fichier et le bouton de suppression
            const div = document.createElement('div');
            div.innerHTML = files[i].name;
            const btn = document.createElement('button');
            btn.innerHTML = 'Supprimer';
            btn.addEventListener('click', function() {
            // Suppression de l'élément HTML correspondant au fichier sélectionné
            div.remove();
            img.remove();
            });
            div.appendChild(btn);

            // Ajout des éléments HTML créés à l'élément de prévisualisation
            preview.appendChild(div);
            preview.appendChild(img);
        }
        });

    </script>

    @include('admin.layouts.partials.footer.footer')

@endsection

@section('javascript')

@endsection
