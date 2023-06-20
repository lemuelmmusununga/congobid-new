

    @if (Auth::user() && Auth::user()->role_id == 5  )
        @if (Auth::user())
        <div class="d-flex btns align-items-center flex-wrap">
            @if (myFunction($enchere->munite * 60 + $enchere->seconde,$four_treve ,$tree_geurre,$tree_treve,$second_geurre,$second_treve,$first_geurre))
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#nonenchere">
                    <img src="{{ asset('images/crown.png') }}" alt="">
                    <span>{{ $paquet?->roi }}</span>
                </button>
            @elseif($paquet?->roi > 0)
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#roi_bloque">
                    <img src="{{ asset('images/crown.png') }}" alt="">
                    <span>{{ $paquet?->roi }}</span>
                </button>
            @else
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_roi">
                    <img src="{{ asset('images/crown.png') }}" alt="">
                    <span>{{ $paquet?->roi }}</span>
                </button>
            @endif
            @if (myFunction($enchere->munite * 60 + $enchere->seconde,$four_treve ,$tree_geurre,$tree_treve,$second_geurre,$second_treve,$first_geurre))
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#nonenchere">
                    <img src="{{ asset('images/tunder.png') }}" alt="">
                    <span>{{ $paquet?->foudre }}</span>
                </button>
            @elseif ($paquet?->foudre > 0)
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#modalliste">
                    <img src="{{ asset('images/tunder.png') }}" alt="">
                    <span>{{ $paquet?->foudre }}</span>
                </button>
            @else
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_foudre">
                    <img src="{{ asset('images/tunder.png') }}" alt="">
                    <span>{{ $paquet?->foudre }}</span>
                </button>
            @endif
            @if (myFunction($enchere->munite * 60 + $enchere->seconde,$four_treve ,$tree_geurre,$tree_treve,$second_geurre,$second_treve,$first_geurre))
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#nonenchere">
                    <img src="{{ asset('images/save.png') }}" alt="">
                    <span>{{ $paquet?->bouclier }}</span>
                </button>
            @elseif ($paquet?->bouclier > 0)
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#use_bouclier">
                    <img src="{{ asset('images/save.png') }}" alt="">
                    <span>{{ $paquet?->bouclier }}</span>
                </button>
            @else
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_bouclier">
                    <img src="{{ asset('images/save.png') }}" alt="">
                    <span>{{ $paquet?->bouclier }}</span>
                </button>
            @endif
            @if ($paquet?->click > 0)
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#use_click">
                    <img src="{{ asset('images/click.png') }}" alt="">
                    <span>{{ $paquet?->click }}</span>
                </button>
            @else
                <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_click">
                    <img src="{{ asset('images/click.png') }}" alt="">
                    <span>{{ $paquet?->click }}</span>
                </button>
            @endif

            <button class="btn btn-achat" data-bs-toggle="modal" data-bs-target="#achat_click_new">
                Acheter de clics
            </button>
        </div>
        @else
            {{-- <div class="row block-power  justify-content-between align-items-center">
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
            </div> --}}
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
