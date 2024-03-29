@extends('layouts.app-page')
@section('content')
    <div class="block-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4 class="text-center title">Options</h4>
                </div>
            </div>
        </div>
        <div class="block-content-option pb-4">
            <div class="container">
                <div class="row g-1 align-items-center">
                    <div class="col-6 col-md-6">
                        <div class="card card-option">
                            <div class="header">
                                Simba
                            </div>
                            <div class="row g-1 mt-3">
                                @foreach ($priceSimbas as $key => $simba)
                                    @if (Auth::user()->options->where('paquet_id', 1)->first()->roi == 0)
                                        <div class="col-6" data-bs-toggle="modal"
                                            data-bs-target="#modalAchat_{{$key}}">
                                    @else
                                        <div class="col-6" data-bs-toggle="modal"
                                            data-bs-target="#modalTransBid_{{$key}}">
                                    @endif
                                    <div class="card-option-sm">
                                        <div class="block-option">
                                            <div class="header-bid">
                                                <img src="{{ asset('images/piece.png') }}" alt="">

                                                <span>{{ $simba->rois?->first()->bid_prix }}
                                                </span>
                                            </div>
                                            <div class="img-option">
                                                <img src="{{ asset('images/crown.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p>{{ Auth::user()->options->where('paquet_id', 1)->first()->roi ?? 0 }}</p>
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::user()->options->where('paquet_id', 1)->first()->foudre == 0)
                                    <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
                                @else
                                    <div class="col-6" data-bs-toggle="modal"
                                            data-bs-target="#modalTransBid_{{$key}}">
                                @endif
                                <div class="card-option-sm">
                                    <div class="block-option">
                                        <div class="header-bid">
                                            <img src="{{ asset('images/piece.png') }}" alt="">
                                            <span>{{ $simba->foudres?->first()->bid_prix }}</span>
                                        </div>
                                        <div class="img-option">
                                            <img src="{{ asset('images/tunder.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p>{{ Auth::user()->options->where('paquet_id', 1)->first()->foudre ?? 0 }}</p>
                                    </div>
                                </div>
                            </div>
                            @if (Auth::user()->options->where('paquet_id', 1)->first()->click
                                == 0)
                            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
                            @else
                                <div class="col-6" data-bs-toggle="modal"
                                        data-bs-target="#modalTransBid_{{$key}}">
                            @endif
                            <div class="card-option-sm">
                                <div class="block-option">
                                    <div class="header-bid">
                                        <img src="{{ asset('images/piece.png') }}" alt="">
                                        <span>{{ $simba->clicks?->first()->prix_bid }}</span>
                                    </div>
                                    <div class="img-option">
                                        <img src="{{ asset('images/click.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p>{{ Auth::user()->options->where('paquet_id', 1)->first()->click ?? 0 }}</p>
                                </div>
                            </div>

                        </div>
                        @if (Auth::user()->options->where('paquet_id', 1)->first()->roi  == 0)
                            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
                            @else
                                <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
                        @endif
                        <div class="card-option-sm">
                            <div class="block-option">
                                <div class="header-bid">
                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                    <span>{{ $simba->boucliers?->first()->bid_prix }}</span>
                                </div>
                                <div class="img-option">
                                    <img src="{{ asset('images/save.png') }}" alt="">
                                </div>
                            </div>
                            <div class="text-center">
                                <p>{{ Auth::user()->options->where('paquet_id', 1)->first()->bouclier ?? 0 }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- @include('components.achat-option') --}}
                @endforeach
                
            </div>
        </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="card card-option">
            <div class="header">
                Benda
            </div>
            <div class="row g-1 mt-3">
                @foreach ($pricebendas as $key => $benda)
                    @if (Auth::user()->options->where('paquet_id', 2)->first()->roi ??
                            0 == 0)
                        <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
                        @else
                            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
                    @endif
                    <div class="card-option-sm">
                        <div class="block-option">
                            <div class="header-bid">
                                <img src="{{ asset('images/piece.png') }}" alt="">
                                <span>{{ $benda->rois?->first()->bid_prix }}
                                </span>
                            </div>
                            <div class="img-option">
                                <img src="{{ asset('images/crown.png') }}" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <p>{{ Auth::user()->options->where('paquet_id', 2)->first()->roi ?? 0 }}</p>
                        </div>
                    </div>

            </div>
            @if (Auth::user()->options->where('paquet_id', 2)->first()->foudre ??
                    0 == 0)
                <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
                @else
                    <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
            @endif
            <div class="card-option-sm">
                <div class="block-option">
                    <div class="header-bid">
                        <img src="{{ asset('images/piece.png') }}" alt="">
                        <span>{{ $benda->boucliers?->first()->bid_prix }}</span>
                    </div>
                    <div class="img-option">
                        <img src="{{ asset('images/tunder.png') }}" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <p>{{ Auth::user()->options->where('paquet_id', 2)->first()->foudre ?? 0 }}</p>
                </div>
            </div>

        </div>
        @if (Auth::user()->options->where('paquet_id', 3)->first()->click ??
                0 == 0)
            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
            @else
                <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
        @endif
        <div class="card-option-sm">
            <div class="block-option">
                <div class="header-bid">
                    <img src="{{ asset('images/piece.png') }}" alt="">
                    <span>{{ $benda->clicks?->first()->prix_bid }}</span>
                </div>
                <div class="img-option">
                    <img src="{{ asset('images/click.png') }}" alt="">
                </div>
            </div>
            <div class="text-center">
                <p>{{ Auth::user()->options->where('paquet_id', 3)->first()->click ?? 0 }}</p>
            </div>
        </div>

    </div>
    @if (Auth::user()->options->where('paquet_id', 2)->first()->bouclier ??
            0 == 0)
        <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
        @else
            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
    @endif
    <div class="card-option-sm">
        <div class="block-option">
            <div class="header-bid">
                <img src="{{ asset('images/piece.png') }}" alt="">
                <span>{{ $benda->boucliers?->first()->bid_prix }}</span>
            </div>
            <div class="img-option">
                <img src="{{ asset('images/save.png') }}" alt="">
            </div>
        </div>
        <div class="text-center">
            <p>{{ Auth::user()->options->where('paquet_id', 2)->first()->bouclier ?? 0 }}</p>
        </div>
    </div>

    </div>
    @endforeach
    </div>
    </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="card card-option">
            <div class="header">
                Turbo
            </div>
            <div class="row g-1 mt-3">
                @foreach ($priceturbos as $key => $turbo)
                    @if (Auth::user()->options->where('paquet_id', 3)->first()->roi ??
                            0 == 0)
                        <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
                        @else
                            <div class="col-6" data-bs-toggle="modal"
                                data-bs-target="#modalTransBid_{{$key}}">
                    @endif
                    <div class="card-option-sm">
                        <div class="block-option">
                            <div class="header-bid">
                                <img src="{{ asset('images/piece.png') }}" alt="">
                                <span>{{ $turbo->rois?->first()->bid_prix }}
                                </span>
                            </div>
                            <div class="img-option">
                                <img src="{{ asset('images/crown.png') }}" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <p>{{ Auth::user()->options->where('paquet_id', 3)->first()->roi ?? 0 }}</p>
                        </div>
                    </div>

            </div>
            @if (Auth::user()->options->where('paquet_id', 3)->first()->foudre ??
                    0 == 0)
                <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
                @else
                    <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
            @endif
            <div class="card-option-sm">
                <div class="block-option">
                    <div class="header-bid">
                        <img src="{{ asset('images/piece.png') }}" alt="">
                        <span>{{ $turbo->foudres?->first()->bid_prix }}</span>
                    </div>
                    <div class="img-option">
                        <img src="{{ asset('images/tunder.png') }}" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <p>{{ Auth::user()->options->where('paquet_id', 3)->first()->foudre ?? 0 }}</p>
                </div>
            </div>

        </div>
        @if (Auth::user()->options->where('paquet_id', 3)->first()->click ??
                0 == 0)
            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
            @else
                <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
        @endif
        <div class="card-option-sm">
            <div class="block-option">
                <div class="header-bid">
                    <img src="{{ asset('images/piece.png') }}" alt="">
                    <span>{{ $turbo->clicks?->first()->prix_bid }}</span>
                </div>
                <div class="img-option">
                    <img src="{{ asset('images/click.png') }}" alt="">
                </div>
            </div>
            <div class="text-center">
                <p>{{ Auth::user()->options->where('paquet_id', 3)->first()->click ?? 0 }}</p>
            </div>
        </div>

    </div>
    @if (Auth::user()->options->where('paquet_id', 3)->first()->bouclier ??
            0 == 0)
        <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchat_{{$key}}">
        @else
            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
    @endif
    <div class="card-option-sm">
        <div class="block-option">
            <div class="header-bid">
                <img src="{{ asset('images/piece.png') }}" alt="">
                <span>{{ $turbo->boucliers?->first()->bid_prix }}</span>
            </div>
            <div class="img-option">
                <img src="{{ asset('images/save.png') }}" alt="">
            </div>
        </div>
        <div class="text-center">
            <p>{{ Auth::user()->options->where('paquet_id', 3)->first()->bouclier ?? 0 }}</p>
        </div>
    </div>

    </div>
    @endforeach
    </div>
    </div>
    </div>
    {{-- <div class="col-6 col-md-6">
                        <div class="card card-option">
                            <div class="header">
                                Béton
                            </div>
                            <div class="row g-1 mt-3">
                                @foreach ($pricebetons as $key => $beton)
                                    @if (Auth::user()->options->where('paquet_id', 1)->first()->roi ??
    0 == 0)
                                    <div class="col-6" data-bs-toggle="modal"  data-bs-target="#modalAchat_{{$key}}">
                                @else
                                <div class="col-6" data-bs-toggle="modal"  data-bs-target="#modalTransBid_{{$key}}">

                                @endif                                    <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$beton->prix}}
                                                       </span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                    @if (Auth::user()->options->where('paquet_id', 1)->first()->roi ??
    0 == 0)
                                    <div class="col-6" data-bs-toggle="modal"  data-bs-target="#modalAchat_{{$key}}">
                                @else
                                <div class="col-6" data-bs-toggle="modal"  data-bs-target="#modalTransBid_{{$key}}">

                                @endif                                    <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$beton->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                    @if (Auth::user()->options->where('paquet_id', 1)->first()->roi ??
    0 == 0)
                                    <div class="col-6" data-bs-toggle="modal"  data-bs-target="#modalAchat_{{$key}}">
                                @else
                                <div class="col-6" data-bs-toggle="modal"  data-bs-target="#modalTransBid_{{$key}}">

                                @endif                                    <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$beton->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                    @if (Auth::user()->options->where('paquet_id', 1)->first()->roi ??
    0 == 0)
                                    <div class="col-6" data-bs-toggle="modal"  data-bs-target="#modalAchat_{{$key}}">
                                @else
                                <div class="col-6" data-bs-toggle="modal"  data-bs-target="#modalTransBid_{{$key}}">

                                @endif                                    <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$beton->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> --}}
    <div class="col-6 col-md-6">
        <div class="card card-option">
            <div class="header">
                Sukisa
            </div>
            <div class="row g-1 mt-3">
                @foreach ($pricesukisas as $key => $sukisa)
                    @if (Auth::user()->options->where('paquet_id', 6)->first()->roi ??
                            0 == 0)
                        <div class="col-6" data-bs-toggle="modal"
                            data-bs-target="#modalAchatsukisas_{{$key}}">
                        @else
                            <div class="col-6" data-bs-toggle="modal"
                                data-bs-target="#modalTransBidsukisas_{{$key}}">
                    @endif
                    <div class="card-option-sm">
                        <div class="block-option">
                            <div class="header-bid">
                                <img src="{{ asset('images/piece.png') }}" alt="">
                                <span>{{ $sukisa->rois?->first()->bid_prix }}
                                </span>
                            </div>
                            <div class="img-option">
                                <img src="{{ asset('images/crown.png') }}" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <p>{{ Auth::user()->options->where('paquet_id', 6)->first()->roi ?? 0 }}</p>
                        </div>
                    </div>

            </div>
            @if (Auth::user()->options->where('paquet_id', 6)->first()->foudre ??
                    0 == 0)
                <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchatsukisas_{{$key}}">
                @else
                    <div class="col-6" data-bs-toggle="modal"
                        data-bs-target="#modalTransBidsukisas_{{$key}}">
            @endif
            <div class="card-option-sm">
                <div class="block-option">
                    <div class="header-bid">
                        <img src="{{ asset('images/piece.png') }}" alt="">
                        <span>{{ $sukisa->foudres?->first()->bid_prix }}</span>
                    </div>
                    <div class="img-option">
                        <img src="{{ asset('images/tunder.png') }}" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <p>{{ Auth::user()->options->where('paquet_id', 6)->first()->foudre ?? 0 }}</p>
                </div>
            </div>

        </div>
        @if (Auth::user()->options->where('paquet_id', 6)->first()->click ??
                0 == 0)
            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchatsukisas_{{$key}}">
            @else
                <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBidsukisas_{{$key}}">
        @endif
        <div class="card-option-sm">
            <div class="block-option">
                <div class="header-bid">
                    <img src="{{ asset('images/piece.png') }}" alt="">
                    <span>{{ $sukisa->clicks?->first()->prix_bid }}</span>
                </div>
                <div class="img-option">
                    <img src="{{ asset('images/click.png') }}" alt="">
                </div>
            </div>
            <div class="text-center">
                <p>{{ Auth::user()->options->where('paquet_id', 6)->first()->click ?? 0 }}</p>
            </div>
        </div>
    </div>
    @if (Auth::user()->options->where('paquet_id', 6)->first()->bouclier ??
            0 == 0)
        <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchatsukisas_{{$key}}">
        @else
            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBidsukisas_{{$key}}">
    @endif
    <div class="card-option-sm">
        <div class="block-option">
            <div class="header-bid">
                <img src="{{ asset('images/piece.png') }}" alt="">
                <span>{{ $sukisa->boucliers?->first()->bid_prix }}</span>
            </div>
            <div class="img-option">
                <img src="{{ asset('images/save.png') }}" alt="">
            </div>
        </div>
        <div class="text-center">
            <p>{{ Auth::user()->options->where('paquet_id', 6)->first()->bouclier ?? 0 }}</p>
        </div>
    </div>

    </div>
    @endforeach
    </div>
    </div>
    </div>
    <div class="col-6 col-md-6">
        <div class="card card-option">
            <div class="header">
                Bulldozer
            </div>
            <div class="row g-1 mt-3">
                @foreach ($pricebulldozers as $key => $bulldozer)
                    @if (Auth::user()->options->where('paquet_id', 5)->first()->roi ??
                            0 == 0)
                        <div class="col-6" data-bs-toggle="modal"
                            data-bs-target="#modalAchatbulldozers_{{$key}}">
                        @else
                            <div class="col-6" data-bs-toggle="modal"
                                data-bs-target="#modalTransBidbulldozers_{{$key}}">
                    @endif
                    <div class="card-option-sm">
                        <div class="block-option">
                            <div class="header-bid">
                                <img src="{{ asset('images/piece.png') }}" alt="">
                                <span>{{ $bulldozer->rois?->first()->bid_prix }}
                                </span>
                            </div>
                            <div class="img-option">
                                <img src="{{ asset('images/crown.png') }}" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <p>{{ Auth::user()->options->where('paquet_id', 5)->first()->roi ?? 0 }}</p>
                        </div>
                    </div>

            </div>
            @if (Auth::user()->options->where('paquet_id', 5)->first()->foudre ??
                    0 == 0)
                <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchatbulldozers_{{$key}}">
                @else
                    <div class="col-6" data-bs-toggle="modal"
                        data-bs-target="#modalTransBidbulldozers_{{$key}}">
            @endif
            <div class="card-option-sm">
                <div class="block-option">
                    <div class="header-bid">
                        <img src="{{ asset('images/piece.png') }}" alt="">
                        <span>{{ $bulldozer->foudres?->first()->bid_prix }} </span>
                    </div>
                    <div class="img-option">
                        <img src="{{ asset('images/tunder.png') }}" alt="">
                    </div>
                </div>
                <div class="text-center">
                    <p>{{ Auth::user()->options->where('paquet_id', 5)->first()->foudre ?? 0 }}</p>
                </div>
            </div>

        </div>
        @if (Auth::user()->options->where('paquet_id', 5)->first()->click ??
                0 == 0)
            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchatbulldozers_{{$key}}">
            @else
                <div class="col-6" data-bs-toggle="modal"
                    data-bs-target="#modalTransBidbulldozers_{{$key}}">
        @endif
        <div class="card-option-sm">
            <div class="block-option">
                <div class="header-bid">
                    <img src="{{ asset('images/piece.png') }}" alt="">
                    <span>{{ $bulldozer->clicks?->first()->prix_bid }}</span>
                </div>
                <div class="img-option">
                    <img src="{{ asset('images/click.png') }}" alt="">
                </div>
            </div>
            <div class="text-center">
                <p>{{ Auth::user()->options->where('paquet_id', 5)->first()->click ?? 0 }}</p>
            </div>
        </div>

    </div>
    @if (Auth::user()->options->where('paquet_id', 5)->first()->bouclier ??
            0 == 0)
        <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalAchatbulldozers_{{$key}}">
        @else
            <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBidbulldozers_{{$key}}">
    @endif
    <div class="card-option-sm">
        <div class="block-option">
            <div class="header-bid">
                <img src="{{ asset('images/piece.png') }}" alt="">
                <span>{{ $bulldozer->boucliers?->first()->bid_prix }}</span>
            </div>
            <div class="img-option">
                <img src="{{ asset('images/save.png') }}" alt="">
            </div>
        </div>
        <div class="text-center">
            <p>{{ Auth::user()->options->where('paquet_id', 5)->first()->bouclier ?? 0 }}</p>
        </div>
    </div>

    </div>
    @endforeach
    </div>
    </div>
    </div>
    <div class="col-6 col-md-6">
        <a href="{{ route('trans.options') }}" class="btn btn-3d-rounded-sm w-100">
            Transférer <br> des options <br> à un ami
        </a>
    </div>
    </div>

    </div>
    </div>
    </div>

@endsection
