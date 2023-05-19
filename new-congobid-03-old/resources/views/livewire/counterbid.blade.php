<div wire:poll.keeplive x-data="{ counter : {{ $counter }} } ">
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
        $first = $liste_one->user->options->where('paquet_id',$paquet_enchere->id )->first();
        // treve
        // $enchere= App\Models\Enchere::where('id',$article)->first();
        
        // dump($first_treve , $enchere->munite ,$second_treve,$tree_treve);
        
    @endphp
    @if (Session::has('success'))
        <span>{{Session::get('success')}}</span>

    @endif
    @if (Session::has('danger'))
        <span>{{Session::get('danger')}}</span>
        
    @endif
    @include('components.achat-bid-enchere')
   
    <div id="confetti-container"></div>
    <div class="block-bid">
        <div class="btn-mobile btn-message" data-bs-toggle="offcanvas" data-bs-target="#offcanvasmessage" aria-controls="offcanvasmessage">
            <i class="fi fi-rr-comment-alt"></i>
        </div>
        <div class="btn-mobile btn-list">
            <i class="fi fi-rr-list"></i>
        </div>
        <div class="container" x-data="{ counter: {{ $counter }} }">
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
                </div>
            </div>
            <div class="block-first card mb-2">
                <div class="container-fluid">
                    <div class="row align-items-center g-0">
                        @if ($this->liste_one != null)
                            <div class="col-9">
                                <div class="d-flex align-items-center">
                                    <div class="position">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <div class="num">
                                            1
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <img src="{{ asset('images/users/' . ($liste_one->user->avatar == null ? 'default.png' : $liste_one->user->avatar)) }}"
                                            alt="">
                                    </div>
                                    <div class="block-name d-flex justify-content-between align-items-center">
                                        <div class="name" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $liste_one->id ?? '' }}">
                                            {{ Str::substr($liste_one->user->username, 0, 7) ?? '' }}
                                            {{$liste_one->user->options->where('paquet_id',$paquet_enchere)->first()}}
                                        </div>
                                        <div class="options d-flex justify-content-end align-items-center">
                                            @if ($pivot)
                                                @if ($first->roi >0)
                                                    <img src="{{ asset('images/couronne.png') }}" alt="">
                                                @endif
                                                @if ($first->foudre >0)
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                @endif
                                                @if ($first->click >0)
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                @endif
                                                @if ($first->bouclier >0)
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($liste_one->user_id == Auth::user()->id)
                                
                                <div class="col-3 d-flex justify-content-end ps-0">
                                    <div class="block-info-click" x-text="counter">

                                    </div>
                                </div>
                            @else
                            <div class="col-3 d-flex justify-content-end ps-0">
                                <div class="block-info-click">
                               {{$liste_one->valeur}} 
                                </div>
                            </div>
                            @endif
                            @if (Auth::user()->id !=$liste_one->user?->id )
                                <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $liste_one->id ?? '' }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                <div class="text-center">
                            
                                                    @if (Auth::user() && $pivot != null)
                            
                                                        <h5> Voulez-vous bloquer {{ $liste_one->user->username}} ?</h5>
                                                    @else
                                                    <h5> Veillez pentientez l'enchere n'a pas encore commencée !</h5>
                            
                                                    @endif
                            
                                                </div>
                                            </div>
                            
                                            <div class="modal-footer d-flex justify-content-center align-items-center">
                                                <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                                                @if ($paquet->foudre > 0)
                                                <a href="{{ route('sanction', ['id' => $liste_one->user->id, 'enchere' => $pivot->enchere_id, 'sanction' => 'foudre', 'name' => $liste_one->user->nom, 'bid_cut' => 0]) }}">Bloquer</a> 
                                                @else
                                                <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#achat_foudre">Veillez acheter l'option</a> 
                                                @endif
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="block-info-enchere mb-2">
                <div class="d-flex w-100 align-items-center justify-content-center" style="gap: 20px">
                    <div class="item d-flex flex-column align-items-center justify-content-center text-center">
                        <span>
                            $ {{ Str::substr($prix_final, 0, 6) }}
                        </span>
                        <span>
                            Prix de l'enchère
                        </span>
                    </div>
                    <div class="item d-flex flex-column align-items-center justify-content-center text-center">
                        <span x-text="counter">

                        </span>
                        <span class="d-none" wire:model="counter" x-text="counter"></span>
                        <span>
                            Ton nombre de clics
                        </span>
                    </div>
                    <div class="item d-flex align-items-center justify-content-center">
                        <span style="margin-right: 2px">
                            <i class="fi fi-rr-alarm-clock"></i>
                        </span>
                        <span style="font-size: 9px">
                            @livewire('decrematation', ['getart' => $getart])
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-user mb-3">
                @if (!($liste_one->user->id == Auth::user()->id))
                    <div class="header-table" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $liste_one->user->id ?? '' }}">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="left d-flex align-items-center">
                                <div class="num">
                                    {{ $liste_one->id }}
                                </div>
                                <div class="avatar">
                                    <img src="{{ asset('images/users/' . (Auth::user()->avatar == null ? 'default.png' : Auth::user()->avatar)) }}"
                                        alt="">
                                </div>
                                <div class="name">
                                    {{ Str::substr(Auth::user()->username, 0, 7) ?? '' }}
                                </div>
                            </div>
                            <div class="right d-flex align-items-center justify-content-end" x-data="{ counter: {{ $counter }} }">
                                <img src="{{ asset('images/click.png') }}" alt="">
                                <div class="num-click">
                                   {{ $counter}}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endif
                @if (count($listes) > 0)
                    @foreach ($listes as $key => $liste)
                        <div class="all-user d-flex flex-grow-1" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $liste->user->id ?? '' }}">
                            <div class="items">
                                <div class="num">
                                    {{ $key + 2 }}
                                </div>
                                <div class="content-user d-flex align-items-center justify-content-between">
                                    <div class="left d-flex align-items-center">
                                        <div class="avatar" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $liste->user->id ?? '' }}">
                                            <img src="{{ asset('images/users/' . ($liste->user?->avatar == null ? 'default.png' : $liste->user?->avatar)) }}"
                                                alt="">
                                        </div>
                                        <div class="name">
                                            @if (
                                                ($sanction == null &&
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
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modalEnchere_{{ $liste->user->id ?? '' }}">
                                                    {{ Str::substr($liste->user->username, 0, 7) ?? '' }}</a>
                                            @endif

                                        </div>
                                    </div>
                                    
                                    <div class="right d-flex align-items-center justify-content-end">
                                        @if ($liste_one->roi > 0)
                                            <img src="{{ asset('images/couronne.png') }}" alt="">
                                        @endif
                                        @if ($liste_one->foudre > 0)
                                            <img src="{{ asset('images/tunder.png') }}" alt="">
                                        @endif
                                        @if ($liste_one->click > 0)
                                            <img src="{{ asset('images/click.png') }}" alt="">
                                        @endif
                                        @if ($liste_one->bouclier > 0)
                                            <img src="{{ asset('images/save.png') }}" alt="">
                                        @endif
                                        <div class="num-click">
                                            {{ $liste->valeur ?? '' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($liste->user->id != Auth::user()->id )
                            <div wire:ignore.self class="modal fade" id="modalEnchere_{{ $liste->user->id ?? '' }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="icon">
                                                <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                            </div>
                                            <div class="text-center">
                        
                                                @if (Auth::user() && $pivot != null)
                                                    <h5> Voulez-vous bloquer {{$liste->user->username}} ?</h5>
                                                @else
                                                    <h5> Veillez pentientez l'enchere n'a pas encore commencée !</h5>
                                                @endif
                        
                                            </div>
                                        </div>
                        
                                        <div class="modal-footer d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                                            @if ($paquet->foudre > 0)
                                            <a href="{{ route('sanction', ['id' => $liste->user->id, 'enchere' => $pivot->enchere_id, 'sanction' => 'foudre', 'name' => $liste->user->nom, 'bid_cut' => 0]) }}">Bloquer1</a> 
                                            @else
                                            <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#achat_foudre">Acheter l'option</a> 
                                            @endif
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="block-actions-bids mb-4">
                <div class="row align-items-center g-4">
                    <div class="col-7 pe-0">
                        <div class="block-options-bid">
                            <div class="text-center">
                                <h5>Options</h5>
                            </div>
                            <div class="d-flex btns align-items-center flex-wrap">
                                
                                @if ($paquet->roi > 0)
                                    <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#roi_bloque">
                                        <img src="{{ asset('images/crown.png') }}" alt="">
                                        <span>{{ $paquet->roi }}</span>
                                    </button>
                                @else
                                    <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_roi">
                                        <img src="{{ asset('images/crown.png') }}" alt="">
                                        <span>{{ $paquet->roi }}</span>
                                    </button>
                                @endif
                                @if ($paquet->foudre > 0)
                                    <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#modalliste">
                                        <img src="{{ asset('images/tunder.png') }}" alt="">
                                        <span>{{ $paquet->foudre }}</span>
                                    </button>
                                @else
                                    <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_foudre">
                                        <img src="{{ asset('images/tunder.png') }}" alt="">
                                        <span>{{ $paquet->foudre }}</span>
                                    </button>
                                @endif
                                @if ($paquet->bouclier > 0)
                                    <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#use_bouclier">
                                        <img src="{{ asset('images/save.png') }}" alt="">
                                        <span>{{ $paquet->bouclier }}</span>
                                    </button>
                                @else
                                    <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_bouclier">
                                        <img src="{{ asset('images/save.png') }}" alt="">
                                        <span>{{ $paquet->bouclier }}</span>
                                    </button>
                                @endif
                                @if ($paquet->click > 0)
                                    <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#use_click">
                                        <img src="{{ asset('images/click.png') }}" alt="">
                                        <span>{{ $paquet->click }}</span>
                                    </button>
                                @else
                                    <button class="btn btn-rounded" data-bs-toggle="modal" data-bs-target="#achat_click">
                                        <img src="{{ asset('images/click.png') }}" alt="">
                                        <span>{{ $paquet->click }}</span>
                                    </button>
                                @endif
                               
                                <button class="btn btn-achat">
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
                                <button class="btn btn-bid" data-bs-toggle="modal"
                                data-bs-target="#debloque_user_{{ $sanction->id }}">
                                <span>
                                    Vous avez été bloqué par {{ '@ ' . $sanction->sanction->username }}
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

    @if (
        $enchere->munite * 60 + $enchere->seconde > 0 )
        @include('components.outils-detailenchere')
    @else
        @include('components.outils-detailenchere-future')
    @endif
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
                                                        {{ $liste->user->username  ?? '' }}</a></td>
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
                            <button type="button" class="btn btn-ok" data-bs-dismiss="modal">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
