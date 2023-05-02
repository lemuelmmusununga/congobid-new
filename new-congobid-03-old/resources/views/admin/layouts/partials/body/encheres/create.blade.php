@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter une enchère</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                @livewire('admin.enchere.add-enchere-form')
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
