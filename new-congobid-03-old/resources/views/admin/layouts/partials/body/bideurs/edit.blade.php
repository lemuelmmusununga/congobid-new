@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Editer un bideur</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <form action="{{ route('bideurs.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Nom<span class="text-danger">*</span></label>
                                        <input type="hidden" name="user_id" class="form-control " id="smallInput" required value="{{ $bideur->user->id }}">
                                        <input type="text" name="nom" class="form-control " id="smallInput" placeholder="Entrez son nom" required value="{{ $bideur->user->nom }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Prénom<span class="text-danger">*</span></label>
                                        <input type="text" name="prenom" class="form-control " id="smallInput" placeholder="Entrez son prénom" required value="{{ $bideur->user->prenom }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Sexe</label>
                                        <select class="form-control " id="smallSelect" name="sexe">
                                            <option value="Féminin" {{ $bideur->user->sexe == "Féminin" ? 'selected' : '' }}>Féminin</option>
                                            <option value="Masculin" {{ $bideur->user->sexe == "Masculin" ? 'selected' : '' }}>Masculin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Photo de profil</label>
                                        <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Pseudonyme</label>
                                        <input type="text" name="username" class="form-control " id="smallInput" placeholder="Entrez son pseudonyme" required value="{{ $bideur->user->username }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Téléphone</label>
                                        <input type="text" name="telephone" class="form-control " id="smallInput" placeholder="Entrez son téléphone commençant par 243" required value="{{ $bideur->user->telephone }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Statut</label>
                                        <select class="form-control " id="smallSelect" name="statut_id">
                                            @foreach ($statuts as $statut)
                                            <option value="{{ $statut->id }}" {{ $bideur->statut_id == $statut->id ? 'selected' : '' }}>{{ $statut->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">E-mail</label>
                                        <input type="mail" name="email" class="form-control " id="smallInput" placeholder="Entrez son adresse e-mail" value="{{ $bideur->user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Date de naissance</label>
                                        <input type="date" name="date_naissance" class="form-control " id="smallInput" value="{{ $bideur->user->date_naissance }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Mot de passe</label>
                                        <input type="password" name="password" class="form-control " id="smallInput" placeholder="Mot de passe par défaut" required value="{{ $bideur->user->password }}">
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

    @include('admin.layouts.partials.footer.footer')

@endsection

@section('javascript')
@endsection
