@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter une condition d'utilisation</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('politiques.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="comment">Titre</label>
                                    <input type="text" name="titre" class="form-control form-control-sm" id="smallInput" required>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Contenu</label>
                                    <textarea class="form-control" name="content" id="comment" rows="5"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Statut</label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="statut_id">
                                        @foreach ($statuts as $statut)
                                            <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
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
                </div>
            </form>
        </div>
    </div>
    </div>


    @include('admin.layouts.partials.footer.footer')

@endsection

@section('javascript')
@endsection
