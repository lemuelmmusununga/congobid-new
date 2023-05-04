@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter une Catégorie</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('categories.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallInput">Nom</label>
                                    <input type="hidden" name="categorie_id" class="form-control form-control-sm" id="smallInput" required value="{{ $categorie->id }}">
                                    <input type="text" name="libelle" class="form-control form-control-sm" id="smallInput" placeholder="Entrez le nom de la catégorie" required value="{{ $categorie->libelle }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallSelect">Statut</label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="statut_id">
                                        @foreach ($statuts as $statut)
                                            <option value="{{ $statut->id }}" {{ $categorie->statut_id == $statut->id ? 'selected' : '' }}>{{ $statut->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-sm btn-success">Enregistrer</button>
                        <a href="{{  url()->previous() }}" class="btn btn-sm btn-danger">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
@endsection
