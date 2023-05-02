@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter une instruction</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('commentcamarche.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallInput">Titre</label>
                                    <input type="hidden" name="instruction_id" class="form-control form-control-sm" id="smallInput"
                                        placeholder="Entrez le titre de l'instruction" required value="{{ $instruction->id }}">
                                    <input type="text" name="titre" class="form-control form-control-sm" id="smallInput"
                                        placeholder="Entrez le titre de l'instruction" required value="{{ $instruction->titre }}">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Description</label>
                                    <textarea class="form-control" name="description" id="comment" rows="5"
                                        required>{{ $instruction->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Vidéos de l'instrction</label>
                                    <input type="file" name="videos" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Statut</label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="statut_id">
                                        @foreach ($statuts as $statut)
                                            <option value="{{ $statut->id }}" {{ $instruction->statut_id == $statut->id ? 'selected' : '' }}>{{ $statut->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Enregistrer</button>
                        <a href="{{ route('admin.index') }}" class="btn btn-danger">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
@endsection
