
<div wire:poll.keeplive>
    @php

        $pivot = App\Models\PivotBideurEnchere::where('enchere_id', $article_enchere)
            ->where('user_id', Auth::user()->id)
            ->first();
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
    <div class="block-bid">
        <div class="btn-mobile btn-message" id="mobile">
            <i class="fi fi-rr-comment-alt"></i>
        </div>
        <div class="btn-mobile btn-list">
            <i class="fi fi-rr-list"></i>
        </div>
        <div class="container">
            <div class="card card-chatLive mb-2">
                <div class="all-disc">
                    <div class="user d-flex align-items-start">
                        <div class="me-1">
                            Alex:
                        </div>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="block-first card mb-2">
                <div class="container-fluid">
                    <div class="row align-items-center g-0">
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
                                    <img src="{{asset('images/bg7.jpg')}}" alt="">
                                </div>
                                <div class="block-name d-flex justify-content-between align-items-center">
                                    <div class="name">
                                        CALEB
                                    </div>
                                    <div class="options d-flex justify-content-end align-items-center">
                                        <img src="{{asset('images/save.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-end ps-0">
                            <div class="block-info-click">
                                355
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-info-enchere mb-2">
                <div class="d-flex w-100 align-items-center justify-content-center" style="gap: 20px">
                    <div class="item d-flex flex-column align-items-center justify-content-center text-center">
                       <span>
                        2$
                       </span>
                       <span>
                        Prix de l'enchère
                       </span>
                    </div>
                    <div class="item d-flex flex-column align-items-center justify-content-center text-center">
                        <span>
                            {{Auth::user()->pivotbideurenchere->where('enchere_id',$article_enchere)->first()->foudre  ?? 0}}
                        </span>
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
                <div class="header-table">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="left d-flex align-items-center">
                            <div class="num">
                                56
                            </div>
                            <div class="avatar">
                                <img src="{{asset('images/bg7.jpg')}}" alt="">
                            </div>
                            <div class="name">
                                PRO
                            </div>
                        </div>
                        <div class="right d-flex align-items-center justify-content-end">
                            <img src="{{asset('images/click.png')}}" alt="">
                            <div class="num-click">
                                141
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-user d-flex flex-grow-1">
                    <div class="items">
                        <div class="num">
                            1
                        </div>
                        <div class="content-user d-flex align-items-center justify-content-between">
                            <div class="left d-flex align-items-center">
                                <div class="avatar">
                                    <img src="{{asset('images/bg7.jpg')}}" alt="">
                                </div>
                                <div class="name">
                                    PRO
                                </div>
                            </div>
                            <div class="right d-flex align-items-center justify-content-end">
                                <img src="{{asset('images/click.png')}}" alt="">
                                <img src="{{asset('images/click.png')}}" alt="">
                                <img src="{{asset('images/click.png')}}" alt="">
                                <img src="{{asset('images/click.png')}}" alt="">
                                <div class="num-click">
                                    141
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <span>0</span>
                                </button>
                                <button class="btn btn-rounded">
                                    <img src="{{asset('images/tunder.png')}}" alt="">
                                    <span>12</span>
                                </button>
                                <button class="btn btn-rounded">
                                    <img src="{{asset('images/save.png')}}" alt="">
                                    <span>5</span>
                                </button>
                                <button class="btn btn-rounded">
                                    <img src="{{asset('images/click.png')}}" alt="">
                                    <span>0</span>
                                </button>
                                <button class="btn btn-achat">
                                    Acheter de clics
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-5">
                        <button class="btn btn-bid">
                            <i class="fi fi-rr-fingerprint"></i>
                        </button>
                    </div>
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
                <div class="num">200</div>
                <div class="info">
                    Bids non-transférable
                </div>
            </div>
            <div class="item d-flex flex-column align-items-center justify-content-center">
                <div class="num">100</div>
                <div class="info">
                    Bids
                </div>
            </div>
            <div class="item d-flex flex-column align-items-center justify-content-center">
                <div class="num">200</div>
                <div class="info">
                    Bids bonus
                </div>
            </div>
        </div>
    </div>

</div>


