@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Modification d'un gagnant</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('gagnants.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallSelect">Articles {{ $myenchere->pivotbideurenchere }} </label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="enchere_id">
                                        @foreach ($encheres as $enchere)
                                            <option value="{{ $enchere->id }}" {{ $enchere->id == $enchere->id ? 'selected' : '' }}>{{ $enchere->enchere->article->titre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Bideurs</label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="user_id">
                                        @foreach ($encheres as $enchere)
                                            <option value="{{ $enchere->user->id }}" {{ $enchere->user->statut_id == $enchere->user->id ? 'selected' : '' }}>{{ $enchere->user->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallSelect">Statut</label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="statut_id">
                                        @foreach ($statuts as $statut)
                                            <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Vidéos du gagnant</label>
                                    <input type="file" name="videos" class="form-control-file" id="exampleFormControlFile1" required>
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
