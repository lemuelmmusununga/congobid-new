@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Modification d'un gagnant</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <div class="card">
                    <form action="{{ route('gagnants.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="smallSelect">Articles</label>
                                        <select class="form-control " id="smallSelect" name="enchere_id">
                                            @foreach ($encheres as $enchere)
                                                <option value="{{ $enchere->id }}" {{ $enchere->enchere->id == $myenchere->id ? 'Selected' : '' }}>{{ $enchere->enchere->article->titre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="smallSelect">Bideurs</label>
                                        <select class="form-control " id="smallSelect" name="user_id">
                                            @foreach ($encheres->groupBy('user_id') as $enchere)
                                                <option value="{{ $enchere->first()->user->id }}" {{ $enchere->first()->user->id == $myenchere->user->id ? 'Selected' : '' }}>{{ $enchere->first()->user->nom }}</option>
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
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Vidéos du gagnant</label>
                                        <input type="file" name="videos" class="form-control-file" id="exampleFormControlFile1" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action mx-2">
                            <button class="btn btn-primary float-right px-5 mx-3" style="border-radius: 20px;">Enregistrer</button>
                            {{-- <a href="History.back()" class="btn btn-info float-right px-5" style="border-radius: 20px;">Annuler</a> --}}
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
@endsection
