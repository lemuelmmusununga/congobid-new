@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold">Ajouter une catégorie</h2>
                            {{-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> --}}
                        </div>
                        {{-- <div class="ml-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-white btn-border btn-round mr-2">Ajouter une enchère</a>
                            <a href="#" class="btn btn-sm btn-secondary btn-round">Ajouter un produit</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('categories.update') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="smallInput">Nom de la catégorie</label>
                                            <input type="text" name="libelle" class="form-control form-control-sm" id="smallInput"
                                                placeholder="Entrez le nom de la catégorie" value="{{ $categorie->libelle }}" required>
                                            <input type="hidden" name="id" class="form-control form-control-sm" id="smallInput"
                                                placeholder="Entrez le numéro id de la catégorie" value="{{ $categorie->id }}" required>
                                        </div>
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
                                <a href="{{ route('admin.index') }}" class="btn btn-sm btn-danger">Annuler</a>
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
