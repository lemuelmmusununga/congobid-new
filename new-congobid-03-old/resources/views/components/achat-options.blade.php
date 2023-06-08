@if (Auth::user() && Auth::user()->role_id == 5 && $pivot != null)
    {{-- achat bouclier && $first_treve > $enchere->munite --}}
    <div wire:ignore.self class="modal fade" id="achat_bouclier" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Pour acheter , il vous faut {{ $bouclier->bid_prix }} bids pour cette enchere Voulez-vous
                            Acheter ?</h5>
                        @if (Auth::user() &&
                                $enchere->munite * 60 + $enchere->seconde > 0 &&
                                Auth::user()->bideurs->first()->balance >= $bouclier->bid_prix)
                            <a type="button"
                                href="{{ route('bouclier', ['enchere' => $pivot->enchere_id, 'paquet' => $bouclier->bid_prix, 'name' => Auth::user()->nom]) }}"
                                class="btn btn-ok w-50 ">Acheter</a>
                        @else
                            <a type="button"
                                href="{{ route('achat.bid.enchere', ['enchere_id' => $enchere->id, 'enchere_titre' => $enchere->article->titre]) }}"
                                class="btn btn-ok w-50 ">Acheter</a>
                        @endif
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                        aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>
    {{-- achat foudre --}}
    <div wire:ignore.self class="modal fade" id="achat_foudre" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Pour acheter , il vous faut {{ $foudre->bid_prix }} bids pour cette enchere Voulez-vous
                            Acheter ?</h5>
                        @if (Auth::user() &&
                                $enchere->munite * 60 + $enchere->seconde > 0 &&
                                Auth::user()->bideurs->first()->balance >= $foudre->bid_prix)
                            <a type="button"
                                href="{{ route('foudre', ['enchere' => $pivot->enchere_id, 'paquet' => $foudre->bid_prix, 'name' => Auth::user()->nom]) }}"
                                class="btn btn-ok w-50 ">Acheter</a>
                        @else
                            <a type="button"
                                href="{{ route('achat.bid.enchere', ['enchere_id' => $enchere->id, 'enchere_titre' => $enchere->article->titre]) }}"
                                class="btn btn-ok w-50 ">Acheter</a>
                        @endif
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                        aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    {{-- use bouclier --}}
    <div wire:ignore.self class="modal fade" id="use_bouclier" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Voulez - vous activer le bouclier pour vous proteger ?</h5>
                        <a href="{{ route('Active.bouclier', ['name' => Auth::user()->nom, 'enchere' => $enchere->id]) }}"
                            type="button" class="btn btn-ok w-50 my-2 ">Activer</a>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                            aria-label="close">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- noenchere --}}
    <div wire:ignore.self class="modal fade" id="nonenchr" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        @if (Auth::user() && $enchere->munite * 60 + $enchere->seconde > 0 && Auth::user() && $pivot == null)
                            <h5> Vous ne faite pas parti de cette enchere voulez vous participer en payant
                                {{ $paquet_enchere->prix }} bids ?</h5>
                            <a type="button"
                                href="{{ route('detail.article', ['id' => $article, 'name' => $article_titre]) }}"
                                class="btn btn-ok">Participer</a>
                        @else
                            <h5 class="text-danger"> L'enchere est fini!</h5>
                        @endif

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                        aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>
    {{-- debloque user --}}
    {{-- click achat_use --}}

    {{-- modal --}}

    {{-- click achat_use --}}
    <div wire:ignore.self class="modal fade" id="achat_click" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    @php
                        $prix_click = App\Models\Click_auto::where('paquet_id', $article_paquet)->first()->bid_prix;
                    @endphp

                    <div class="text-center">

                        <h5>Pour acheter il vous faut {{ $prix_click }} bids pour cette enchere Voulez-vous Acheter ?
                        </h5>
                        @if ($pivot != null)
                            @if (Auth::user()->bideurs->first()->balance >= $prix_click)
                                {{-- <a type="button" href="{{route('click',['enchere'=>$article_enchere,'paquet'=>$prix_click,'name'=>Auth::user()->nom])}}" wire:click.prevent ="achatRoi({{ $article_enchere }} , {{ $prix_click }})" class="btn btn-ok w-50">Acheter</a> wire:click.prevent ="achatRoi({{ $article_enchere }} , {{ $prix_click }})" --}}
                                <a type="button"
                                    href="{{ route('Achat.click.Auto', ['name' => Auth::user()->username, 'enchere' => $enchere->id, 'prix' => $prix_click]) }}"
                                    class="btn btn-ok w-50">Acheter</a>
                            @else
                                <a type="button"
                                    href="{{ route('achat.bid.enchere', ['enchere_id' => $enchere->id, 'enchere_titre' => $enchere->article->titre]) }}"
                                    class="btn btn-ok w-50 ">Acheter</a>
                            @endif
                        @else
                            <a type="button" href="#" data-bs-dismiss="modal" data-bs-toggle="modal"
                                aria-label="close" data-bs-target="#modalEnchere_{{ $article->id }}"
                                class="btn btn-ok w-50 ">Participer a l'enchere</a>
                        @endif
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                        aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    {{-- achat clique --}}
    <div wire:ignore.self class="modal fade" id="achat_click_new" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="POST" class="mb-5">
                        @csrf
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Achat des cliques</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="">Nombre des cliques</label>
                                <input type="number" class="form-control" placeholder="Nombre de clicks" wire:model="nombreClick">
                            </div>
                            <div class="col-12 text-center">
                                <span class="text-center">Vous devez payer {{$montantClick}} bids</span>
                                {{-- <input type="text" class="form-control" name="montant" wire:model="montantClick"> --}}
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                @if (Auth::user()->bideurs->first()->balance >= $montantClick)
                                    {{-- <a type="button" href="{{route('click',['enchere'=>$article_enchere,'paquet'=>$prix_click,'name'=>Auth::user()->nom])}}" wire:click.prevent ="achatRoi({{ $article_enchere }} , {{ $prix_click }})" class="btn btn-ok w-50">Acheter</a> wire:click.prevent ="achatRoi({{ $article_enchere }} , {{ $prix_click }})" --}}
                                    <button class="btn-3d-rounded-sm" data-bs-dismiss="modal" wire:click.prevent ="Buyclick({{$nombreClick}})">Valider</button>
                                @else
                                    <a type="button"
                                        href="{{ route('achat.bid.enchere', ['enchere_id' => $enchere->id, 'enchere_titre' => $enchere->article->titre]) }}"
                                        class="btn btn-ok w-50 ">Acheter</a>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- click achat_use --}}
    <div wire:ignore.self class="modal fade" id="use_click" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    @php
                        $prix_click = App\Models\Click_auto::where('paquet_id', $article_paquet)->first()->bid_prix;
                    @endphp

                    <div class="text-center">

                        <h5>Voulez-vous activer le mode bid-automatique ?</h5>


                        {{-- <a type="button" href="{{route('click',['enchere'=>$article_enchere,'paquet'=>$prix_click,'name'=>Auth::user()->nom])}}" wire:click.prevent ="achatRoi({{ $article_enchere }} , {{ $prix_click }})" class="btn btn-ok w-50">Acheter</a>  --}}
                        <a type="button"
                            href="{{ route('Active.click', ['name' => Auth::user()->nom, 'enchere' => $enchere->id]) }}"
                            class="btn btn-ok w-50">Activer</a>

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                        aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>
    {{-- achat roi --}}
    <div wire:ignore.self class="modal fade" id="achat_roi" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">
                        <h5>Pour acheter l'option roi , il vous faut {{ $roi->bid_prix }} bids pour cette enchere
                            Voulez-vous Acheter ?</h5>
                        @if (Auth::user() &&
                                $enchere->munite * 60 + $enchere->seconde > 0 &&
                                Auth::user()->bideurs->first()->balance >= $roi->bid_prix)
                            <a type="button"
                                href="{{ route('roi', ['enchere' => $pivot->enchere_id, 'paquet' => $roi->bid_prix, 'name' => Auth::user()->nom]) }}"
                                class="btn btn-ok w-50 ">Acheter</a>
                        @else
                            <a type="button"
                                href="{{ route('achat.bid.enchere', ['enchere_id' => $enchere->id, 'enchere_titre' => $enchere->article->titre]) }}"
                                class="btn btn-ok w-50 ">Acheter</a>
                        @endif
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                        aria-label="close">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal bloque --}}
    <div wire:ignore.self class="modal fade" id="roi_bloque" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user() && $pivot != null && $enchere->munite * 60 + $enchere->seconde > 0 && Auth::user() && $pivot != null)
                            <h5> Vous allez bloquer l'enchere pandant {{ $roi->temps_blocage }} munites</h5>
                            @if (Auth::user() &&
                                    $enchere->munite * 60 + $enchere->seconde > 0 &&
                                    Auth::user()->pivotbideurenchere->where('enchere_id', $article_enchere)->first()->roi > 0)
                                <a type="button"
                                    href="{{ route('roi.block', ['enchere' => $pivot->enchere_id, 'paquet' => $pivot->enchere->paquet_id, 'duree' => $roi->temps_blocage, 'achat' => 0]) }}"
                                    class="btn btn-ok">Bloquer</a>
                            @elseif (Auth::user()->bideurs->first()->balance >= $roi->bid_prix)
                                <a type="button"
                                    href="{{ route('roi.block', ['enchere' => $pivot->enchere_id, 'paquet' => $pivot->enchere->paquet_id, 'duree' => $roi->temps_blocage, 'achat' => $roi->bid_prix]) }}"
                                    class="btn btn-ok">Bloquer</a>
                            @endif
                        @endif
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center align-items-center">
                    {{-- <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button> --}}
                    <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>

                </div>
            </div>
        </div>
        {{-- end --}}
    @else
        @if (Auth::user() && $enchere->munite * 60 + $enchere->seconde > 0 && Auth::user() && Auth::user()->role_id == 5)
            <div class="row block-power  justify-content-between align-items-center">
                <div class="col-6">
                    <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                        <img src="{{ asset('images/couronne.png') }}" alt="couronne">
                        <span> 0</span>

                    </a>
                </div>
                <div class="col-6">

                    <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                        <img src="{{ asset('images/foudre.png') }}" alt="foudre">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-6">

                    <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                        <img src="{{ asset('images/click.png') }}" alt="click">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-6">

                    <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                        <img src="{{ asset('images/bouclier.png') }}" alt="bouclier">
                        <span> 0</span>
                    </a>
                </div>
            </div>
        @else
            <div class="row block-power  justify-content-between align-items-center">
                <div class="col-6">

                    <a href="/login">
                        <img src="{{ asset('images/couronne.png') }}" alt="couronne">
                        <span> 0</span>

                    </a>
                </div>
                <div class="col-6">

                    <a href="/login">
                        <img src="{{ asset('images/foudre.png') }}" alt="foudre">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-6">

                    <a href="/login">
                        <img src="{{ asset('images/click.png') }}" alt="click">
                        <span> 0</span>
                    </a>
                </div>
                <div class="col-6">

                    <a href="/login">
                        <img src="{{ asset('images/bouclier.png') }}" alt="bouclier">
                        <span> 0 </span>
                    </a>
                </div>
            </div>
        @endif
@endif
