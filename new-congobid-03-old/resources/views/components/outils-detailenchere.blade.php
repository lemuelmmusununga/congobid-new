<div>
    <div class="block-actions-bids mb-4">
        <div class="row align-items-center g-4">
            <div class="col-7 pe-0">
                <div class="block-options-bid">
                    <div class="text-center">
                        <h5>Options</h5>
                    </div>
                    <div class="d-flex btns align-items-center flex-wrap">

                        @if ($paquet?->roi > 0)
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
                        @if ($paquet?->foudre > 0)
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
                        @if ($paquet?->bouclier > 0)
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
                </div>
            </div>

            @if ($pivot != null)
                @if ($sanction == null)
                    <div class="col-5">
                        <button class="btn btn-bid" @click="counter++" wire:click.prevent="update()">
                            <i class="fi fi-rr-fingerprint"></i>
                        </button>
                    </div>
                @else
                    <div class="col-5">
                        <button class="btn btn-bid disabled" data-bs-toggle="modal"
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
                        <i class="fi fi-rr-fingerprint"></i>
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
@if ($sanction != null)
    <div wire:ignore.self class="modal fade" id="debloque_user_{{ $sanction->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                        @if ($sanction->santance == 'foudre')
                            <h5> Vous pouvez vous débloquer en payant {{ $foudre->bid_deblocage }} bids </h5>
                            @if (Auth::user()->bideurs->first()->balance >= $foudre->bid_deblocage)
                                <a type="button"
                                    href="{{ route('debloquer', ['id' => $sanction->id, 'enchere' => $pivot->enchere_id, 'sanction' => 'foudre', 'name' => Auth::user()->nom, 'bid_cut' => $foudre->bid_deblocage]) }}"
                                    class="btn btn-ok w-50 ">Débloquer</a>
                            @else
                                <a type="button"
                                    href="{{ route('achat.bid.enchere', ['enchere_id' => $enchere->id, 'enchere_titre' => $enchere->article->titre]) }}"
                                    class="btn btn-ok w-50 ">Débloquer</a>
                            @endif
                        @elseif ($sanction->santance == 'roi')
                            <h5> Vous pouvez vous débloquer en payant {{ $roi->bid_deblocage }} bids </h5>
                            @if (Auth::user()->bideurs->first()->balance >= $roi->bid_deblocage)
                                <a type="button"
                                    href="{{ route('debloquer', ['id' => $sanction->id, 'enchere' => $pivot->enchere_id, 'sanction' => 'roi', 'name' => Auth::user()->nom, 'bid_cut' => $roi->bid_deblocage]) }}"
                                    class="btn btn-ok w-50 ">Débloquer</a>
                            @else
                                <a type="button"
                                    href="{{ route('achat.bid.enchere', ['enchere_id' => $enchere->id, 'enchere_titre' => $enchere->article->titre]) }}"
                                    class="btn btn-ok w-50 ">Débloquer</a>
                            @endif
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
@endif
{{-- liste bloque --}}
<div wire:ignore class="offcanvas offcanvas-start" tabindex="-1" id="bloque" aria-labelledby="bloqueLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="bloqueLabel">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists,
            etc.
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</div>
{{-- CHAT --}}
<div wire:ignore.self class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasmessage"
    aria-labelledby="offcanvasExampleLabel" style="width: 270px;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Chatbox</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="chat-block mt-3" style="height: 100vh; overflow-y:auto;">
            <div class="container-fluid">
                <div class="chatbox">
                    <div class="w-100">
                        <div class="block-content-chat w-100">
                            @foreach ($messages as $message)
                                @if ($message->created_at->format('d-m-Y') >= Auth::user()->created_at->format('d-m-Y'))
                                    @if (Auth::user() && $message->user_id == Auth::user()->id)
                                        <div class="msg-row msg-row2 w-100">
                                            <div class="msg-text">
                                                <h3 class="name-user">{{ $message->user->username ?? '' }}</h3>
                                                <p>{{ $message->libelle }}</p>
                                                <div class="date text-end">
                                                    <span>
                                                        {{ $message->created_at->diffForHumans() ?? '' }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="avatar-block">
                                                <div class="avatar">
                                                    <img src="{{ asset('images/users/' . (Auth::user()->avatar ? Auth::user()->avatar : 'default.png')) }} "
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="msg-row">
                                            <div class="avatar-block">
                                                <div class="avatar">
                                                    <img src="{{ asset('images/users/' . ($message->user->avatar ? $message->user->avatar : 'default.png')) }} "
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="msg-text">
                                                <h3 class="name-user">{{ $message->user->username ?? '' }}</h3>
                                                <p>{{ $message->libelle }}</p>
                                                <div class="date text-end">
                                                    <span>
                                                        {{ $message->created_at->diffForHumans() ?? '' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach

                            @livewire('btnbidchat')
                        </div>

                    </div>
                </div>
            </div>
            <div class="nav-chat mt-0" style="position:sticky;">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-10" class="message">
                            <textarea name="message" wire:model="message" id="text" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="col-2 d-flex justify-content-end ps-0">
                            @if (Auth::user())
                                <button class="btn" wire:click.prevent="send()" id="send">
                                    <span class="iconify" data-icon="fluent:send-16-regular"></span>
                                </button>
                            @else
                                <a class="btn" href="/login">
                                    <span class="iconify" data-icon="fluent:send-16-regular"></span>
                                </a>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('components.achat-options')

{{-- @if (Auth::user() && $enchere->munite * 60 + $enchere->seconde > 0 && $pivot != null) --}}
{{-- @if (Auth::user() && $enchere->munite * 60 + $enchere->seconde > 0 && date('d-m-Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d-m-Y ') && $pivot->where('user_id', Auth::user()->id)->first() != null && date('H:i:s', strtotime($this->enchere->heure_debut)) <= now('africa/kinshasa')->format('H:i:s')) --}}

{{-- @endif --}}

{{-- <div wire:ignore.self class="modal fade" id="achat_roi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>
                        <div class="text-center">
                            <h5>Pour acheter , il vous faut {{$roi->bid_prix}} bids pour cette enchere Voulez-vous Acheter ?</h5>
                            @if (Auth::user()->bideurs->first()->balance >= $roi->bid_prix)
                                <a type="button" href="{{route('roi',['enchere'=>$pivot->enchere_id,'paquet'=>$roi->bid_prix,'name'=>Auth::user()->nom])}}" class="btn btn-ok w-50 ">Acheter</a>
                            @else
                                <a type="button" href="{{route('clients.achat.bid')}}" class="btn btn-ok w-50 ">Acheter</a>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                    </div>
                </div>
            </div>
        </div> --}}
{{-- @endif --}}
@if ($first_treve < $enchere->munite)
    <div wire:ignore.self class="modal fade" id="nonenchere" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        @if (Auth::user() && $pivot == null)
                            <h5> Vous ne faite pas parti de cette enchere voulez vous participer en payant
                                {{ $paquet_enchere->prix }} bids ?</h5>
                            <a type="button"
                                href="{{ route('detail.article', ['id' => $article, 'name' => $article_titre]) }}"
                                class="btn btn-ok">Participer</a>
                        @else
                            <h5> Veillez pentientez c'est le moment de paix !</h5>
                        @endif

                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center align-items-center">
                    {{-- <button type="button" class="btn btn-no" data-bs-dismiss="modal"></button> --}}
                    <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>

                </div>
            </div>
        </div>
    @else
        <div wire:ignore.self class="modal fade" id="nonenchere" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="icon">
                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                        </div>
                        <div class="text-center">

                            @if (Auth::user() && $pivot == null)
                                <h5> Vous ne faite pas parti de cette enchere voulez vous participer en payant
                                    {{ $paquet_enchere->prix }} bids ?</h5>
                                <a type="button"
                                    href="{{ route('detail.article', ['id' => $article, 'name' => $article_titre]) }}"
                                    class="btn btn-ok">Participer</a>
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
@endif
</div>
</div>
</div>
<div wire:ignore.self class="modal fade" id="achat_cliks" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon">
                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                </div>
                <div class="text-center">
                    @if ($click_paye)
                        <h5> il faudrait payé {{ $click_paye->prix_bid }} bids ?</h5>
                        @if ($sanction == null && Auth::user()->bideurs->first()->balance >= $click_paye->prix_bid)
                            <a type="button"
                                href="{{ route('achat.click', ['id' => $click_paye->id, 'name' => Auth::user()->nom, 'enchere_id' => $enchere->id]) }}"
                                class="btn btn-ok">Acheter</a>
                        @else
                            <a type="button"
                                href="{{ route('achat.bid.enchere', ['enchere_id' => $enchere->id, 'enchere_titre' => $enchere->article->titre]) }}"
                                class="btn btn-ok">Acheter</a>
                        @endif
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
</div>
</div>

@if ($pivot != null && Auth::user())
    <div wire:ignore.self class="modal fade" id="modalliste" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="text-center">
                        {{-- <div class='row justify-content-end'>
                                <input type="text" wire:model="search" class="form-control rounded-pill w-50" placeholder="Rechereche...">
                            </div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pseudo</th>
                                    <th></th>
                                    <th>Nbr. click</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($listes_sentance as $liste)
                                    {{-- lister les bideurs de l'enchere --}}
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        {{-- <td><a href="" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#modalEnchere_{{ $liste->user->id }}">{{$liste->user->nom ??''}}</a></td> --}}
                                        @if (Auth::user()->pivotbideurenchere->where('enchere_id', $liste->enchere->id)->first()->foudre == 0)
                                            <td><a
                                                    href="{{ route('sanction', ['id' => $liste->user->id, 'enchere' => $pivot->enchere_id, 'sanction' => 'foudre', 'name' => $liste->user->nom, 'bid_cut' => $foudre->bid_prix]) }}">
                                                    {{ $liste->user->username ?? '' }}</a></td>
                                        @elseif (Auth::user()->pivotbideurenchere->where('enchere_id', $liste->enchere->id)->first()->foudre >= 1)
                                            <td><a
                                                    href="{{ route('sanction', ['id' => $liste->user->id, 'enchere' => $pivot->enchere_id, 'sanction' => 'foudre', 'name' => $liste->user->nom, 'bid_cut' => 0]) }}">
                                                    {{ $liste->user->username ?? '' }}</a></td>
                                        @endif
                                        <td>
                                            {{-- <span>
                                                        <span class="iconify" data-icon="clarity:crown-solid"></span>
                                                    </span>
                                                    <span>
                                                        <span class="iconify" data-icon="pepicons:electricity"></span>
                                                    </span> --}}
                                        </td>
                                        <td>
                                            <span class="badge bg-primary count-bib">{{ $liste->valeur ?? '' }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <button type="button" class="btn btn-ok" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
</div>
