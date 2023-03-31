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
                                @foreach ($priceSimbas  as $key => $simba) 
                                    <div class="col-6" data-bs-toggle="modal" data-bs-target="#modalTransBid_{{$key}}">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$simba->prix}}
                                                       </span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',1)->first()->roi}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$simba->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',1)->first()->foudre}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$simba->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',1)->first()->click}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$simba->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',1)->first()->bouclier}}</p>
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
                                Benda
                            </div>
                            <div class="row g-1 mt-3">
                                @foreach ($pricebendas  as $key => $benda) 
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$benda->prix}}
                                                       </span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',2)->first()->roi}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$benda->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',2)->first()->foudre}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$benda->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',3)->first()->click}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$benda->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',2)->first()->bouclier}}</p>
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
                                @foreach ($priceturbos  as $key => $turbo) 
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$turbo->prix}}
                                                       </span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',3)->first()->roi}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$turbo->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',3)->first()->foudre}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$turbo->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',3)->first()->click}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$turbo->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',3)->first()->bouclier}}</p>
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
                                @foreach ($pricebetons  as $key => $beton) 
                                    <div class="col-6">
                                        <div class="card-option-sm">
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
                                    <div class="col-6">
                                        <div class="card-option-sm">
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
                                    <div class="col-6">
                                        <div class="card-option-sm">
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
                                    <div class="col-6">
                                        <div class="card-option-sm">
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
                                @foreach ($pricesukisas  as $key => $sukisa) 
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$sukisa->prix}}
                                                       </span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',6)->first()->roi}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$sukisa->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',6)->first()->foudre}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$sukisa->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',6)->first()->click}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$sukisa->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',6)->first()->bouclier}}</p>
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
                                @foreach ($pricebulldozers  as $key => $bulldozer) 
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$bulldozer->prix}}
                                                       </span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',5)->first()->roi}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$bulldozer->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',5)->first()->foudre}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$bulldozer->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',5)->first()->click}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="header-bid">
                                                    <img src="{{ asset('images/piece.png') }}" alt="">
                                                    <span>{{$bulldozer->prix}}</span>
                                                </div>
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{Auth::user()->options->where('paquet_id',5)->first()->bouclier}}</p>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <a href="{{route('trans.options')}}" class="btn btn-3d-rounded-sm w-100">
                            Transférer <br> des options <br> à un ami
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('components.achat-option')
@endsection
