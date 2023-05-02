@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Demande des bids</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-5">
                <form action="{{ route('demande.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="smallInput">Username du Client</label>
                                        <input type="text" name="user" class="form-control " id="smallInput"
                                            placeholder="Entrez son username" required>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="smallInput">Numero de telephone du Client</label>
                                        <input type="telephone" name="telephone" class="form-control "
                                            id="smallInput" placeholder="Telephone" required>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">

                                    <div class="form-group">
                                        <label for="smallInput">Nombre</label>
                                        <input type="telephone" name="nombre" class="form-control "
                                            id="smallInput" placeholder="Entrez le nombre des bids " required>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="smallSelect">Moyen de Payement</label>
                                        <select class="form-control " id="smallSelect" name="paie" required>

                                            <option value="MPSA">MPSA</option>
                                            <option value="LIQUIDE">EN LIQUIDE</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-12 col-lg-12">

                                <div class="form-group">
                                    <label for="comment">Description</label>
                                    <textarea class="form-control" name="description" id="comment" rows="5"
                                        required></textarea>
                                </div>
                            </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button class="text-white btn btn-congo float-right px-5 mb-3" style="border-radius: 20px;">Enregistrer</button>

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
