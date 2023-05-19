
<div wire:poll.keeplive x-data= "{ counter : {{ $counter }} } ">
    @php
        $pivot = Auth::user()->pivotbideurenchere->where('enchere_id',$this->article_enchere)->first();
        
        $verify_sanction = App\Models\Sanction::where('enchere_id', $article_enchere)
            ->where('user_id', Auth::user()->id)
            ->first();
        $sanction = App\Models\Sanction::where('enchere_id', $article_enchere)
            ->where('user_id', Auth::user()->id)
            ->where('statut', 1)
            ->where('deleted_at', null)
            ->first();
        // treve
        // $enchere= App\Models\Enchere::where('id',$article)->first();

        // dump($first_treve , $enchere->munite ,$second_treve,$tree_treve);
    @endphp
    @include('components.achat-bid-enchere')
    <div id="confetti-container"></div>
    <div class="block-bid" >
        <div class="btn-mobile btn-message" id="mobile">
            <i class="fi fi-rr-comment-alt"></i>
        </div>
        <div class="btn-mobile btn-list">
            <i class="fi fi-rr-list"></i>
        </div>
        <div class="container" x-data="{ counter : {{  $counter }} } ">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <div class="num">
                                            1
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <img src="{{ asset('images/users/' . ($liste_one->user->avatar == null ? 'default.png' : $liste_one->user->avatar)) }}" alt="">
                                    </div>
                                    <div class="block-name d-flex justify-content-between align-items-center">
                                        <div class="name">
                                            {{ Str::substr($liste_one->user->username, 0, 7) ?? '' }}
                                        </div>
                                        <div class="options d-flex justify-content-end align-items-center">
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
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-flex justify-content-end ps-0">
                                <div class="block-info-click" x-text="counter">
                                  
                                </div>
                            </div>
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
                            @livewire('decrematation', ['getart'=>$getart])
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-user mb-3">
                @if(!($liste_one->user->id == Auth::user()->id ))
                    <div class="header-table">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="left d-flex align-items-center">
                                <div class="num">
                                    {{$liste_one->id}}
                                </div>
                                <div class="avatar">
                                    <img src="{{ asset('images/users/' . (Auth::user()->avatar == null ? 'default.png' : Auth::user()->avatar)) }}" alt="">
                                </div>
                                <div class="name">
                                    {{ Str::substr($liste_one->user->username, 0, 7) ?? '' }}
                                </div>
                            </div>
                            <div class="right d-flex align-items-center justify-content-end" x-data="{ counter : {{  $counter }} } ">
                                <img src="{{asset('images/click.png')}}" alt="">
                                <div class="num-click"  x-text="counter">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (count($listes) > 0)
                    @foreach ($listes as $key=> $liste)
                    
                        <div class="all-user d-flex flex-grow-1">
                            <div class="items">
                                <div class="num">
                                    {{ $key + 2 }}
                                </div>
                                <div class="content-user d-flex align-items-center justify-content-between">
                                    <div class="left d-flex align-items-center">
                                        <div class="avatar">
                                            <img src="{{ asset('images/users/' . ($liste->user?->avatar == null ? 'default.png' : $liste->user?->avatar)) }}" alt="">
                                        </div>
                                        <div class="name">
                                            {{ Str::substr($liste->user?->username, 0, 7) ?? '' }}
                                        </div>
                                    </div>
                                    <div class="right d-flex align-items-center justify-content-end">
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
                                            <img src="{{ asset('images/save.png') }}" alt="">
                                        @endif
                                        <div class="num-click">
                                            {{$liste->valeur ??''}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <button class="btn btn-rounded">
                                    <img src="{{asset('images/crown.png')}}" alt="">
                                    <span>{{$paquet->roi}}</span>
                                </button>
                                <button class="btn btn-rounded">
                                    <img src="{{asset('images/tunder.png')}}" alt="">
                                    <span>{{$paquet->foudre}}</span>
                                </button>
                                <button class="btn btn-rounded">
                                    <img src="{{asset('images/save.png')}}" alt="">
                                    <span>{{$paquet->bouclier}}</span>
                                </button>
                                <button class="btn btn-rounded">
                                    <img src="{{asset('images/click.png')}}" alt="">
                                    <span>{{$paquet->click}}</span>
                                </button>
                                <button class="btn btn-achat">
                                    Acheter de clics
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    @if ($pivot != null)
                        @if ($enchere->munite*60+$enchere->seconde>0  && $pivot->where('enchere_id',$enchere->id)->where('user_id', Auth::user()->id)->first() != null && date('H:i', strtotime($this->enchere->date_debut)) <= now(' Africa/kinshasa')->format('H:i'))
                        @if ($sanction == null)
                                <div class="col-5">
                                    <button class="btn btn-bid" @click="counter++" wire:click.prevent="update()">
                                        <i class="fi fi-rr-fingerprint"></i>
                                    </button>
                                </div>
                            @else
                                <div class="col-5">
                                    <button class="btn btn-bid"  data-bs-toggle="modal" data-bs-target="#debloque_user_{{$sanction->id}}">
                                        Clique ici pour  vous debloquer
                                    </button>
                                </div>
                            @endif
                        @elseif ($enchere->munite*60+$enchere->seconde == 0  && $pivot->where('enchere_id',$enchere->id)->where('user_id', Auth::user()->id)->first() != null && date('H:i', strtotime($this->enchere->date_debut)) > now(' Africa/kinshasa')->format('H:i'))
                            <div class="col-5">
                                <button class="btn btn-bid"  >
                                    <i class="fi fi-rr-fingerprint"></i>1
                                </button>
                            </div>
                        @else
                            <div class="col-5">
                                <button class="btn btn-bid"  >
                                    <i class="fi fi-rr-fingerprint"></i>2
                                </button>
                            </div>
                        @endif
                    @else
                        <div class="col-5">
                            <button class="btn btn-bid"  data-bs-toggle="modal" data-bs-target="#debloque_user_{{$sanction->id}}">
                                <i class="fi fi-rr-fingerprint"></i>3
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            @if ($enchere->munite * 60 + $enchere->seconde > 0 &&
                date('d/ m /Y ', strtotime($this->enchere->date_debut)) == now('africa/kinshasa')->format('d/ m /Y ') &&
                date('d/ m /Y H:i', strtotime($this->enchere->dat_debut)) <= now(' Africa/kinshasa')->format('d/ m /Y H:i'))
                @include('components.outils-detailenchere')
            @else
                @include('components.outils-detailenchere-future')
            @endif
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
                       <img src="{{asset('images/tank.png')}}" alt="">
                       <img src="{{asset('images/tank.png')}}" alt="">
                       <img src="{{asset('images/tank.png')}}" alt="">
                    </div>
                    <div class="move"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-bid-info fixed-bottom">
        <div class="content-bid-info d-flex align-items-center justify-content-between">
            <div class="item d-flex flex-column align-items-center justify-content-center">
                <div class="num">{{$solde_non_tranferable}}</div>
                <div class="info">
                    Bids non-transférable
                </div>
            </div>
            <div class="item d-flex flex-column align-items-center justify-content-center">
                <div class="num">{{$solde_bid}}</div>
                <div class="info">
                    Bids
                </div>
            </div>
            <div class="item d-flex flex-column align-items-center justify-content-center">
                <div class="num">{{$solde_bonus->bonus}}</div>
                <div class="info">
                    Bids bonus
                </div>
            </div>
        </div>
    </div>

</div>


