@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter un bideur</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row ">
            <div class="col-md-12 my-5">
                <form action="{{ route('bideurs.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Nom <span class="text-danger">*</span></label>
                                        <input type="text" name="nom" class="form-control "
                                            id="smallInput" placeholder="Entrez son nom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Prénom<span class="text-danger">*</span></label>
                                        <input type="text" name="prenom" class="form-control "
                                            id="smallInput" placeholder="Entrez son prenom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Sexe<span class="text-danger">*</span></label>
                                        <select class="form-control " id="smallSelect" name="sexe">
                                            <option value="Féminin">Féminin</option>
                                            <option value="Masculin">Masculin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Photo de profil</label>
                                        <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Pseudonyme<span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control "
                                            id="smallInput" placeholder="Entrez son pseudonyme" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Téléphone<span class="text-danger">*</span></label>
                                        <input type="text" name="telephone" class="form-control "
                                            id="smallInput" placeholder="+243XXXXXXXX" required>
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
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">E-mail</label>
                                        <input type="mail" name="email" class="form-control "
                                            id="smallInput" placeholder="Entrez son adresse e-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Date de naissance</label>
                                        <input type="date" name="date_naissance" class="form-control "
                                            id="smallInput">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Mot de Passe<span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="form-control " >
                                    </div>
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
