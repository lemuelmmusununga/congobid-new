

    @if (Auth::user() && Auth::user()->role_id == 5  )
        @if (Auth::user())
            <div class="row block-power  justify-content-between align-items-center">
                <div class="col-md-6">
                    <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere"  >
                        <img src="{{asset('images/couronne.png')}}" alt="couronne">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                        <img src="{{asset('images/foudre.png')}}" alt="foudre">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                        <img src="{{asset('images/click.png')}}" alt="click">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                        <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                        <span> 0</span>
                    </a>
                </div>
            </div>
        @else
            <div class="row block-power  justify-content-between align-items-center">
                <div class="col-md-6 my-3">
                    <a href="/login" >
                        <img src="{{asset('images/couronne.png')}}" alt="couronne">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-md-6 my-3">
                    <a href="/login">
                        <img src="{{asset('images/foudre.png')}}" alt="foudre">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-md-6 my-3">

                    <a href="/login">
                        <img src="{{asset('images/click.png')}}" alt="click">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-md-6 my-3">

                    <a href="/login">
                        <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                        <span> 0</span>
                    </a>
                </div>
            </div>
        @endif

    @endif
    <div wire:ignore.self class="modal fade" id="nonenchere" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user() && $pivot != null)

                            <h5> Veillez pentientez l'enchere n'a pas encore commencée !</h5>
                        @else
                        <h5> Veillez pentientez l'enchere n'a pas encore commencée !</h5>

                        @endif

                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center align-items-center">
                    {{-- <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button> --}}
                    <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>

                </div>
            </div>
        </div>
    </div>
