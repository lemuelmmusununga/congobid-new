@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Editer un agent de Congo Bid</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <form action="{{ route('agents.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <input type="hidden" name="user_id" class="form-control " id="smallInput" value="{{ $agent->user->id }}" required>
                                    <div class="form-group">
                                        <label for="smallInput">Nom<span class="text-danger">*</span></label>
                                        <input type="text" name="nom" class="form-control " id="smallInput" placeholder="Entrez son nom" value="{{ $agent->user->nom }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Prénom<span class="text-danger">*</span></label>
                                        <input type="text" name="prenom" class="form-control " id="smallInput" placeholder="Entrez son nom" value="{{ $agent->user->prenom }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Sexe</label>
                                        <select class="form-control " id="smallSelect" name="sexe">
                                            <option value="Féminin" {{ $agent->user->sexe == "Féminin" ? 'selected' : '' }}>Féminin</option>
                                            <option value="Masculin" {{  $agent->user->sexe == "Masculin" ? 'selected' : ''  }}>Masculin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Date de naissance</label>
                                        <input type="date" name="date_naissance" class="form-control " id="smallInput" value="{{ $agent->user->date_naissance ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Priviliège</label>
                                        <select class="form-control " id="smallSelect" name="role_id">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" {{ $agent->user->role_id == $role->id ? 'selected' : '' }} >{{ $role->display_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Pseudonyme<span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control "
                                            id="smallInput" placeholder="Entrez son pseudonyme" value="{{ $agent->user->username }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Téléphone<span class="text-danger">*</span></label>
                                        <input type="text" name="telephone" class="form-control "
                                            id="smallInput" placeholder="Entrez son téléphone commençant par 243" value="{{ $agent->user->telephone }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Type d'agent</label>
                                        <select class="form-control " id="smallSelect" name="interne">
                                            <option value="1" {{ $agent->interne == '1' ? 'selected' : '' }}>Interne</option>
                                            <option value="0" {{ $agent->interne == '0' ? 'selected' : '' }}>Externe</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Photo de profil</label>
                                        <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1" value="{{ $agent->user->avatar }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">E-mail</label>
                                        <input type="mail" name="email" class="form-control "
                                            id="smallInput" placeholder="Entrez son adresse e-mail" value="{{ $agent->user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Poste <span class="text-danger">*</span></label>
                                        <input type="text" name="poste" class="form-control "
                                            id="smallInput" placeholder="Entrez son poste" value="{{ $agent->poste }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Mot de passe <span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="form-control"
                                            id="smallInput" placeholder="Entrez son poste" value="{{ $agent->user->password }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallInput">Numéro de l'identification fiscale<span class="text-danger">*</span></label>
                                        <input type="text" name="identification_fiscale" class="form-control "
                                            id="smallInput" placeholder="Entrez le nom de l'identification fiscale" value="{{ $agent->identification_fiscale }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Statut</label>
                                        <select class="form-control " id="smallSelect" name="statut_id">
                                            @foreach ($statuts as $statut)
                                                <option value="{{ $statut->id }}" {{ $agent->statut_id == $statut->id ? 'selected' : '' }}>{{ $statut->libelle }}</option>
                                            @endforeach
                                        </select>
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
