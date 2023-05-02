@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter une catégorie d'utilisateur</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <form action="{{ route('paquets.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Nom</label>
                                        <input type="text" name="libelle" class="form-control " id="smallInput"
                                            placeholder="Entrez le nom du paquet" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Nombre d'enchère</label>
                                        <input type="number" name="nombre_enchere" class="form-control "
                                            id="smallInput" placeholder="Entrez le nombre d'enchère" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Durée (en minute)</label>
                                        <input type="number" name="duree" class="form-control " id="smallInput"
                                            placeholder="Entrez sa durée" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Valeur (en bid)</label>
                                        <input type="number" name="prix" class="form-control " id="smallInput"
                                            placeholder="Entrez sa valeur d'achat en bid" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Prix min ($)</label>
                                        <input type="number" name="min" class="form-control " id="smallInput"
                                            placeholder="Entrez son prix d'achat min" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Prix max ($)</label>
                                        <input type="number" name="max" class="form-control " id="smallInput"
                                            placeholder="Entrez son prix d'achat max">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallSelect">Statut</label>
                                        <select class="form-control " id="smallSelect" name="statut_id">
                                            @foreach ($statuts as $statut)
                                                <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="text-white btn btn-congo float-right px-5" style="border-radius: 20px;">Enregistrer</button>

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
