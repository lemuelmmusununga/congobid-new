@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Ajouter une sous-catégorie</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <div class="card">
                    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Nom</label>
                                        <input type="text" name="libelle" class="form-control " id="smallInput"
                                            placeholder="Entrez le nom de la catégorie" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallInput">Categorie</label>
                                        <select name="categorie" id="" class="form-control " required>
                                            @foreach ($paquets as $paquet)
                                                <option value="{{$paquet->id  }}">{{$paquet->libelle  }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallSelect">Statut</label>
                                        <select class="form-control " id="smallSelect" name="statut_id">
                                            @foreach ($statuts as $statut)
                                                <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="text-white btn btn-congo float-right px-5 mb-3" style="border-radius: 20px;">Enregistrer</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
@endsection
