<div wire:poll.keep-alive x-data="{ counter: {{ $counter }} }">
    @php
        $pivot = Auth::user()
            ->pivotbideurenchere->where('enchere_id', $article_enchere)
            ->first();
        $verify_sanction = App\Models\Sanction::where('enchere_id', $article_enchere)
            ->where('user_id', Auth::user()->id)
            ->first();
        $sanction = App\Models\Sanction::where('enchere_id', $article_enchere)
            ->where('user_id', Auth::user()->id)
            ->where('statut', 1)
            ->where('deleted_at', null)
            ->first();
        if ($liste_one != null) {
            # code...
            $first = $liste_one->user?->options?->where('paquet_id', $paquet_enchere->id)->first();
        }
        // treve
        // $enchere= App\Models\Enchere::where('id',$article)->first();

        // dump($first_treve , $enchere->munite ,$second_treve,$tree_treve);
    @endphp
    @if (Session::has('success'))
        <span>{{ Session::get('success') }}</span>
    @endif
    @if (Session::has('danger'))
        <span>{{ Session::get('danger') }}</span>
    @endif
    @include('components.achat-bid-enchere')

    <div id="confetti-container"></div>
    <div class="block-bid">
        <div class="btn-mobile btn-message" wire:ignore>
            <i class="fi fi-rr-comment-alt"></i>
        </div>

        <div class="btn-mobile btn-list" data-toggle="modal" data-target="#bloqueliste" wire:ignore>
            <i class="fi fi-rr-list"></i>
        </div>
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bloqueliste">
            Liste de bloqeurs
        </button> --}}

        <div x-data="{ counter: {{ $counter }} }">
            @if ($messages->count() > 0)
                <div class="card card-chatLive mb-2">
                    <div class="all-disc">

                        @foreach ($messages as $message)
                            @if ($message->created_at->format('d-m-Y') <= Auth::user()->created_at->format('d-m-Y'))
                                <div class="user d-flex align-items-start">
                                    <div class="me-1">
                                        {{ $message->user->username ?? '' }} :
                                    </div>
                                    <div>
                                        <p>
                                            {{ $message->libelle }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                <div class="row card-bid mb-2  mx-0 ">
                    <div class="col-12">
                        <div>
                            <span>{{$tackClicks * ($enchere->munite * 60 + $enchere->seconde)}}</span>
                        </div>
                        <span>{{$pc.'/'. ($enchere->munite * 60 + $enchere->seconde) .'*'.$tackClicks .' = '. $i }}</span>
                        <h6>Prix CongoBid: <span>{{ $pc }}</span></h6>
                        <h6>Bonus (Bids): <span>{{ $solde_bonus->bonus }}</span></h6>
                        <h6>Non transferable (Bids): <span>{{ $solde_non_tranferable }}</span></h6>
                    </div>
                    <div class="col-12 ">
                        <h6><strong>Solde (Bids): </strong> <br>
                        <span style="font-size: 45px;word-break: break-all;">{{ $solde_bid }}</span> </h6>
                    </div>

                </div>
                @if ($this->liste_one != null)
                    <div class="card card-part mb-1">
                        <div class="block-content-user ">
                            <div
                                class="block-user-info d-flex justify-content-between align-items-center first  {{ Auth::user()->id == $liste_one->user->id ? 'me' : '' }}">
                                <div class="block-left d-flex align-items-center ">

                                    <div class="num first">1</div>
                                    <div class="name">
                                        <div class="avatar-user">
                                            <img src="{{ asset('images/users/' . ($liste_one->user->avatar == null ? 'default.png' : $liste_one->user->avatar)) }}"
                                                alt="Image de {{ $liste_one->user->username }}">
                                        </div>
                                        <span>
                                            @if (($sanction == null &&
                                                $pivot != null &&
                                                $enchere->munite * 60 + $enchere->seconde > 0 &&
                                                $first_treve > $enchere->munite) ||
                                                $second_treve == $enchere->munite ||
                                                ($tree_treve == $enchere->munite &&
                                                    date('d/ m /Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d/ m /Y ') &&
                                                    $pivot->where('enchere_id', $enchere->id)->where('user_id', Auth::user()->id)->first() != null &&
                                                    date('H:i', strtotime($this->enchere->dat_debut)) <= now(' Africa/kinshasa')->format('H:i')))
                                                <a class="" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalEnchere_{{ $liste_one->user->id ?? '' }}">{{ Str::substr($liste_one->user->username, 0, 7) ?? '' }}</a>
                                            @else
                                                <a href="" data-bs-toggle="modal" data-bs-target="#nonenchere">
                                                    {{ Str::substr($liste_one->user->username, 0, 7) ?? '' }}</a>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                <div class="block-right d-flex align-items-center">
                                    <div class="options">
                                        @if ($pivot)
                                            @if ($liste_one->roi >= 1)
                                                <img src="{{ asset('images/couronne.png') }}" alt="">
                                            @endif
                                            @if ($liste_one->foudre >= 1)
                                                <img src="{{ asset('images/foudre.png') }}" alt="">
                                            @endif
                                            @if ($liste_one->click >= 1)
                                                <img src="{{ asset('images/click.png') }}" alt="">
                                            @endif
                                            @if ($liste_one->bouclier >= 1)
                                                <img src="{{ asset('images/bouclier.png') }}" alt="">
                                            @endif
                                        @endif
                                    </div>
                                    <div class="num-click">{{ $liste_one->valeur ?? '' }}</div>
                                    {{-- <div class="badge bg-primary ms-2">{{$liste_one->valeur ??''}}</div> --}}
                                </div>
                            </div>

                    </div>
                @endif

                @if (count($listes) > 0)
                    <span wire:model="{{ $liste_count }}" class="d-none">{{ count($listes) }} </span>

                    <div class="card card-part">
                        {{-- <h6 class="text-center mt-1" style="font-size: 14px">Participant</h6> --}}
                        <div class="block-content-user">
                            @foreach ($listes as $liste)
                                <div
                                    class="block-user-info d-flex justify-content-between align-items-center {{ Auth::user()->id == $liste->user->id ? 'me' : '' }}">
                                    <div class="block-left d-flex align-items-center">
                                        <div class="num first">{{ $loop->index + 2 }}</div>
                                        <div class="name">
                                            <div class="avatar-user">
                                                <img src="{{ asset('images/users/' . ($liste->user->avatar == null ? 'default.png' : $liste->user->avatar)) }}"
                                                    alt="Image de {{ Auth::user()->username }}">
                                            </div>
                                            <span>
                                                @if (($sanction == null &&
                                                    $pivot != null &&
                                                    $enchere->munite * 60 + $enchere->seconde > 0 &&
                                                    $first_treve > $enchere->munite) ||
                                                    $second_treve == $enchere->munite ||
                                                    ($tree_treve == $enchere->munite &&
                                                        date('d/ m /Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d/ m /Y ') &&
                                                        $pivot->where('enchere_id', $enchere->id)->where('user_id', Auth::user()->id)->first() != null &&
                                                        date('H:i', strtotime($this->enchere->dat_debut)) <= now(' Africa/kinshasa')->format('H:i')))
                                                    <a class="" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalEnchere_{{ $liste->user->id ?? '' }}">{{ Str::substr($liste->user->username, 0, 7) ?? '' }}</a>
                                                @else
                                                    <a href="" data-bs-toggle="modal"
                                                        data-bs-target="#nonenchere">
                                                        {{ Str::substr($liste->user->username, 0, 7) ?? '' }}</a>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="block-right d-flex align-items-center">
                                        <div class="options">
                                            @if ($pivot)
                                                @if ($liste->roi >= 1)
                                                    <img src="{{ asset('images/couronne.png') }}" alt="">
                                                @endif
                                                @if ($liste->foudre >= 1)
                                                    <img src="{{ asset('images/foudre.png') }}" alt="">
                                                @endif
                                                @if ($liste->click >= 1)
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                @endif
                                                @if ($liste->bouclier >= 1)
                                                    <img src="{{ asset('images/bouclier.png') }}" alt="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- ask if Auth is there --}}
                                @if (Auth::user()->id == $liste->user_id)
                                   <input wire:model="{{ $isSet }}" type="hidden" value="{{ $isSet +=1  }}" >

                                @else
                                   <input wire:model="{{ $isSet }}" type="hidden" value="{{ $isSet -=1  }}" >

                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                @if ($pivot && $isSet < 0  && $this->liste_one->user->id != Auth::user()->id )
                    <div class="card card-part mt-2">
                        {{-- <h6 class="text-center mt-1" style="font-size: 14px">Participant</h6> --}}
                        <div class="block-content-user">
                            {{-- @foreach ($listes_auth as $liste) --}}
                                <div
                                    class="block-user-info d-flex justify-content-between align-items-center me">
                                    <div class="block-left d-flex align-items-center">
                                        <div class="num first">...</div>
                                        <div class="name">
                                            <div class="avatar-user">
                                                <img src="{{ asset('images/users/' . ($listes_auth->user->avatar == null ? 'default.png' : $listes_auth->user->avatar)) }}"
                                                    alt="Image de {{ Auth::user()->username }}">
                                            </div>
                                            <span>
                                                @if (($sanction == null &&
                                                    $pivot != null &&
                                                    $enchere->munite * 60 + $enchere->seconde > 0 &&
                                                    $first_treve > $enchere->munite) ||
                                                    $second_treve == $enchere->munite ||
                                                    ($tree_treve == $enchere->munite &&
                                                        date('d/ m /Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d/ m /Y ') &&
                                                        $pivot->where('enchere_id', $enchere->id)->where('user_id', Auth::user()->id)->first() != null &&
                                                        date('H:i', strtotime($this->enchere->dat_debut)) <= now(' Africa/kinshasa')->format('H:i')))
                                                    <a class="" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalEnchere_{{ $listes_auth->user->id ?? '' }}">{{ Str::substr($listes_auth->user->username, 0, 7) ?? '' }}</a>
                                                @else
                                                    <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal"
                                                        data-bs-target="#achat_foudre">Acheter l'option</a>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
               @endif

                <div class="chat-block mt-3" style="overflow-y:auto;background: none;">
                    <div class="container-fluid">
                        <div class="chatbox" >
                            <div class="w-100">
                                <div class="block-content-chat w-100">
                                    @foreach ($messages as $message)
                                        @if ($message->created_at->format('d-m-Y') <= Auth::user()->created_at->format('d-m-Y'))
                                            <div class="msg-row">
                                                <div class="avatar-block ">
                                                    <div class="avatar">
                                                        <img src="{{ asset('images/users/' . ($message->user->avatar ? $message->user->avatar : 'default.png')) }} "
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <span class="name-user"
                                                        style="font-size: 11px;">{{ $message->user->username ?? '' }}</span>
                                                    <p style="font-size: 12px;" class="mb-0">{{ $message->libelle }}
                                                    </p>
                                                    <div class="date text-end">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        </tbody>

                                    </table>
                                    <button type="button" class="btn btn-ok" data-dismiss="modal">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div wire:ignore.self class="modal fade" id="modalliste" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <span
                                                            class="badge bg-primary count-bib">{{ $liste->valeur ?? '' }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <button type="button" class="btn btn-ok"
                                        data-bs-dismiss="modal">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div wire:ignore.self class="modal fade" id="achat_use_{{ $article_enchere }}" tabindex="-1"
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
                        <h6> Voulez-vous utiliser la mode du clique automatique ?</h6>
                        @if (Auth::user() && $pivot != null)
                            @if ($enchere->munite * 60 + $enchere->seconde > 0)
                                {{-- <a type="button" href="{{ route('bid.auto', ['name' => Auth::user()->nom]) }}"
                                    class="btn btn-ok w-50">Oui</a> --}}
                            <a href="{{ route('Active.click',['name' => Auth::user()->nom,'enchere' =>$enchere->id]) }}" type="button"
                                    class="btn btn-ok w-50 ">Oui</a>
                            @else
                            <a type="button" href="{{ route('achat.bid.enchere',['enchere_id'=>$enchere->id,'enchere_titre'=>$enchere->article->titre]) }}"
                            class="btn btn-ok w-50 ">Oui</a>

                            @endif
                        @else
                            @if (Auth::user())
                                <a type="button" href="#" data-bs-dismiss="modal" data-bs-toggle="modal"
                                    aria-label="close" data-bs-target="#modalEnchere_{{ $article }}"
                                    class="btn btn-ok w-50 ">Participer a l'enchere</a>
                            @else
                                <a type="button" href="/login" data-bs-dismiss="modal" aria-label="close"
                                    class="btn btn-ok w-50 ">Participer a l'enchere</a>
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
    {{-- modal participer --}}
    <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $article }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                    </div>
                    <div class="text-center">

                        <h5>Voulez-vous participer à cette enchère ?</h5>
                        {{-- @if (Auth::user()) --}}
                        <p> Pour y participer, veuillez souscrire à la catégorie "{{ $enchere->paquet->libelle }}" en
                            payent {{ $enchere->paquet->prix }} bids.</p>
                        {{-- @endif --}}
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-non" data-bs-dismiss="modal"
                        aria-label="close">Annuler</button>
                    @if (Auth::user() && Auth::user()->bideurs->first()->balance < $enchere->paquet->prix)
                        <a type="button" href="{{ route('achat.bid.enchere',['enchere_id'=>$enchere->id,'enchere_titre'=>$enchere->article->titre]) }}" class="btn btn-ok">Participer</a>
                    @elseif (Auth::user() && Auth::user()->bideurs->first()->balance >= $enchere->paquet->prix)
                        <a type="button" href="{{ route('detail.article', ['id' => $article, 'name' => $article_titre]) }}"
                            class="btn btn-ok">Participer</a>
                    @else
                        <a type="button" href="/login" class="btn btn-ok">Participer</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
