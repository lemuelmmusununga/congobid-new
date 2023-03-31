@foreach ($priceSimbas  as $key => $simba)
    <div class="modal fade" id="modalTransBid_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('send.bid') }}" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                        <h4 class="title-form mb-0">Achat {{$simba->libe}}</h4>
                                   
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
@endforeach  