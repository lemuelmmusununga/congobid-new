<div>
    <div wire:ignore.self class="modal fade" id="salon_{{ $salon_id}}"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>

                    <div >
                        <h5 class="text-center">
                             Pour ouvrir le salon vous devez {{ Str::before($prix, '.') }} Bids
                        </h5>
                        <form  method="post">
                            <div class="row justify-content-center">
                                <input type="hidden" value="{{ Str::before($prix, '.') }}" name="prix">
                                <div class="col-8 ">
                                    <span>Nombre de participant</span>
                                    <input wire:model="nombre" min="1" class="block mt-1  form-control rounded-pill" type="number" name="nombre" value="1" required autocomplete="new-password" class="form-control" />
                                </div>
                                <div class="col-8 ">
                                    <span>Temps de l'enchere</span>
                                    <input min="1" class="block mt-1  form-control rounded-pill" type="number" wire:model="tempsalon" name="tempsalon" value="1" required  class="form-control" />
                                </div>
                                @if (Auth::user() && Auth::user()->bideurs->first()->balance >= $prix)
                                    <a type="button" href="{{ route('create.salon',['articleid'=>$salon_id,'nombre'=>Str::before($prix, '.'),'participant'=>$nombre,'enchereid'=>$salon->enchere->id,'name'=>$salon->titre,'munite'=>$temp ]) }}" class="btn btn-ok w-50 my-3 ">Participer</a>
                                @elseif (Auth::user() && Auth::user()->bideurs->first()->balance < $prix)
                                    <a type="button" href="{{ route('clients.achat.bid') }}" class="btn btn-ok w-50 my-3 ">Participer</a>
                                @else
                                    <a type="button" href="{{ route('register') }}" class="btn btn-ok w-50 my-3 ">Participer</a>

                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                        aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>

</div>
