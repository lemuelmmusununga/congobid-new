@if (Auth::user() && Auth::user()->role_id == 5 && $pivot != null && $first_treve > $enchere->munite)

    @if (Auth::user() && $enchere->munite * 60 + $enchere->seconde > 0 && Auth::user() && Auth::user()->role_id == 5)
        <div class="block-actions-bids mb-4">
            <div class="row align-items-center g-4">
                <div class="col-7 pe-0">
                    <div class="block-options-bid">
                        <div class="text-center">
                            <h5>Options</h5>
                        </div>
                        <div class="d-flex btns align-items-center flex-wrap">

                            <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_roi">
                                <img src="{{ asset('images/crown.png') }}" alt="">
                                <span>{{ $paquet?->roi }}</span>
                            </button>


                            <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_foudre">
                                <img src="{{ asset('images/tunder.png') }}" alt="">
                                <span>{{ $paquet?->foudre }}</span>
                            </button>


                            <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_bouclier">
                                <img src="{{ asset('images/save.png') }}" alt="">
                                <span>{{ $paquet?->bouclier }}</span>
                            </button>


                            <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_click">
                                <img src="{{ asset('images/click.png') }}" alt="">
                                <span>{{ $paquet?->click }}</span>
                            </button>


                            <button class="btn btn-achat">
                                Acheter de clics
                            </button>
                        </div>
                    </div>
                </div>

                @if ($pivot != null)
                    @if ($sanction == null)
                        <div class="col-5">
                            <button class="btn btn-bid" data-bs-toggle="modal" data-bs-target="#nonenchere">
                                <i class="fi fi-rr-fingerprint"></i>
                            </button>
                        </div>
                    @else
                        <div class="col-5">
                            <button class="btn btn-bid" data-bs-toggle="modal"
                                data-bs-target="#debloque_user_{{ $sanction->id }}">
                                <span>
                                    Vous avez été bloqué par {{ '@ ' . $sanction->sanction?->username }}
                                </span>

                            </button>
                        </div>
                    @endif
                @else
                    <div class="col-5">
                        <button class="btn btn-bid" data-bs-toggle="modal"
                            data-bs-target="#debloque_user_{{ $sanction->id }}">
                            <i class="fi fi-rr-fingerprint"></i>3
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="block-progress d-flex align-items-center justify-content-cente">
            <div class="content-progress">
                <div class="content-flag d-flex align-items-center">
                    <i class="fi fi-sr-flag-alt"></i>
                    <i class="fi fi-sr-flag-alt"></i>
                    <i class="fi fi-sr-flag-alt"></i>
                    <i class="fi fi-sr-flag-alt"></i>
                    <i class="fi fi-sr-flag-alt"></i>
                    <i class="fi fi-sr-flag-alt"></i>
                    <i class="fi fi-sr-flag-alt"></i>
                    <i class="fi fi-sr-flag-alt"></i>
                </div>
                <div class="content-char d-flex align-items-center">
                    <img src="{{ asset('images/tank.png') }}" alt="">
                    <img src="{{ asset('images/tank.png') }}" alt="">
                    <img src="{{ asset('images/tank.png') }}" alt="">
                </div>
                <div class="move"></div>
            </div>
        </div>
        </div>
        </div>
        <div class="block-bid-info fixed-bottom">
            <div class="content-bid-info d-flex align-items-center justify-content-between">
                <div class="item d-flex flex-column align-items-center justify-content-center">
                    <div class="num">{{ $solde_non_tranferable }}</div>
                    <div class="info">
                        Bids non-transférable
                    </div>
                </div>
                <div class="item d-flex flex-column align-items-center justify-content-center">
                    <div class="num">{{ $solde_bid }}</div>
                    <div class="info">
                        Bids
                    </div>
                </div>
                <div class="item d-flex flex-column align-items-center justify-content-center">
                    <div class="num">{{ $solde_bonus->bonus }}</div>
                    <div class="info">
                        Bids bonus
                    </div>
                </div>
            </div>
        </div>
        <div wire:ignore.self class="modal fade" id="nonenchere" tabindex="12" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
        @include('components.achat-options')
    @else
        <div class="row block-power  justify-content-between align-items-center">
            <div class="col-md-6 my-3">

                <a href="/login">
                    <img src="{{ asset('images/couronne.png') }}" alt="couronne">
                    <span>X 0</span>

                </a>
            </div>
            <div class="col-md-6 my-3">

                <a href="/login">
                    <img src="{{ asset('images/foudre.png') }}" alt="foudre">
                    <span>X 0</span>
                </a>
            </div>
            <div class="col-md-6 my-3">

                <a href="/login">
                    <img src="{{ asset('images/click.png') }}" alt="click">
                    <span>X 0</span>
                </a>
            </div>
            <div class="col-md-6 my-3">

                <a href="/login">
                    <img src="{{ asset('images/bouclier.png') }}" alt="bouclier">
                    <span>X 0</span>
                </a>
            </div>
        </div>
    @endif

@endif
