@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-2">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Envoyer de bids</h2>
                </div>

            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <form action="{{ route('envoie.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="type">Envoyé à </label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="user">Un utilisateur</option>
                                            <option value="group">Un groupe d'utilisateurs</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="user-div" class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="user_id">Sélectionnez l'utilisateur </label>
                                        <select name="user_id" id="user_id" class="form-control">
                                            <option value="">Selectionnez un utilisateur</option>
                                            @foreach ($users as $user)
                                                <option value="{{$user->id}}"> {{"@".$user->username}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div id="group-div" style="display: none;" class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="destination">Sélectionnez un groupe :</label>
                                        <select name="destination" id="destination" class="form-control">
                                            <option value="1">Tous les utilisateurs</option>
                                            <option value="2">Les utilisateurs connectés aujourd'hui</option>
                                            <option value="3">Les utilisateurs connectés ce mois</option>
                                            <option value="4">Les utilisateurs inactifs</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="smallInput">Type de Bid</label>
                                        <select name="bid_statut_id" id="bid_statut_id" class="form-control">
                                            @foreach ($bidstatuts as $statut)
                                                <option value="{{ $statut->id }}">
                                                    {{ $statut->libelle }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">

                                    <div class="form-group">
                                        <label for="smallInput">Nombre de Bids</label>
                                        <input type="number " name="number" class="form-control " id="smallInput"
                                            placeholder="Entrez le nombre des bids " required>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="card-action">
                            <button class="text-white btn btn-congo float-right px-5 mb-3"
                                style="border-radius: 20px;">Envoyer</button>

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
    <script>
        document.getElementById('type').addEventListener('change', function() {
            var userDiv = document.getElementById('user-div');
            var groupDiv = document.getElementById('group-div');

            if (this.value === 'user') {
                userDiv.style.display = 'block';
                groupDiv.style.display = 'none';
                groupDiv.style.display = 'none';
            } else if (this.value === 'group') {
                userDiv.style.display = 'none';
                groupDiv.style.display = 'block';
            }
        });
    </script>

@endsection