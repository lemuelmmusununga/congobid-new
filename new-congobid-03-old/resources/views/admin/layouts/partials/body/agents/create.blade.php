@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter un agent de Congo Bid</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <form action="{{ route('agents.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Prénom<span class="text-danger">*</span></label>
                                        <input type="text" name="prenom" class="form-control "
                                            id="smallInput" placeholder="Entrez son prénom" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Nom<span class="text-danger">*</span></label>
                                        <input type="text" name="nom" class="form-control "
                                            id="smallInput" placeholder="Entrez son nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Sexe <span class="text-danger">*</span></label>
                                        <select class="form-control " id="smallSelect" name="sexe" required>
                                            <option value="Féminin">Féminin</option>
                                            <option value="Masculin">Masculin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Date de naissance</label>
                                        <input type="date" name="date_naissance" class="form-control "
                                            id="smallInput">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallSelect">Priviliège<span class="text-danger">*</span></label>
                                        <select class="form-control " id="smallSelect" name="role_id" required>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Pseudonyme<span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control "
                                            id="smallInput" placeholder="Entrez son pseudonyme" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Téléphone<span class="text-danger">*</span></label>
                                        <input type="text" name="telephone" class="form-control "
                                            id="smallInput" placeholder="Entrez son téléphone commençant par +243" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Mot de passe<span class="text-danger">*</span></label>
                                        <input type="text" name="password" class="form-control "
                                            id="smallInput" placeholder="Entrez son Mot de passe" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallSelect">Type d'agent<span class="text-danger">*</span></label>
                                        <select class="form-control " id="smallSelect" name="interne" required>
                                            <option value="1">Interne</option>
                                            <option value="0">Externe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Photo de profil</label>
                                        <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">E-mail</label>
                                        <input type="mail" name="email" class="form-control "
                                            id="smallInput" placeholder="Entrez son adresse e-mail" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Poste<span class="text-danger">*</span></label>
                                        <input type="text" name="poste" class="form-control "
                                            id="smallInput" placeholder="Entrez son poste" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Numéro de l'identification fiscale<span class="text-danger">*</span></label>
                                        <input type="text" name="identification_fiscale" class="form-control "
                                            id="smallInput" placeholder="Entrez le nom de l'identification fiscale" required>
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
