@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter un taux de conversion</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('bids.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallInput">Quantité de bid</label>
                                    <input type="text" name="quantite" class="form-control form-control-sm" id="smallInput" placeholder="Entrez le nombre de bid" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="smallInput">Valeur en $</label>
                                    <input type="text" name="valeur" class="form-control form-control-sm" id="smallInput" placeholder="Entrez son équivalence en $" required>
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
