@foreach ($priceSimbas  as $key => $simba)
    <div class="modal fade" id="modalTransBid_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('send.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$simba->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone" name="bid" minlenght="10"  placeholder="Numéro de téléphone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAchat_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('achat.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$simba->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-4">
                                <div class="img-option">
                                    <img src="{{ asset('images/crown.png') }}" class="img-fluid" alt="">
                                </div>                            
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach  

@foreach ($pricebendas as $key => $benda)
    <div class="modal fade" id="modalTransBidbendas _{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('send.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$benda->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone" name="bid" minlenght="10"  placeholder="Numéro de téléphone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAchatbendas_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('achat.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$benda->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-4">
                                <div class="img-option">
                                    <img src="{{ asset('images/crown.png') }}" class="img-fluid" alt="">
                                </div>                            
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach  


@foreach ($priceturbos as $key => $turbo)
    <div class="modal fade" id="modalTransBidturbos_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('send.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$turbo->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone" name="bid" minlenght="10"  placeholder="Numéro de téléphone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAchatturbos_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('achat.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$turbo->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-4">
                                <div class="img-option">
                                    <img src="{{ asset('images/crown.png') }}" class="img-fluid" alt="">
                                </div>                            
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach  


@foreach ($pricesukisas as $key => $sukisa)
    <div class="modal fade" id="modalTransBidsukisas_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('send.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$sukisa->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone" name="bid" minlenght="10"  placeholder="Numéro de téléphone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAchatsukisas_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('achat.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$sukisa->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-4">
                                <div class="img-option">
                                    <img src="{{ asset('images/crown.png') }}" class="img-fluid" alt="">
                                </div>                            
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach  


@foreach ($pricebulldozers as $key => $bulldozer)
    <div class="modal fade" id="modalTransBidbulldozers_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('send.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$bulldozer->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="phone" name="bid" minlenght="10"  placeholder="Numéro de téléphone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAchatbulldozers_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('achat.option') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat {{$bulldozer->libelle}}</h4>
                                </div>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-4">
                                <div class="img-option">
                                    <img src="{{ asset('images/crown.png') }}" class="img-fluid" alt="">
                                </div>                            
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="numero"  placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm" type="submit">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach  