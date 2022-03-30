@extends('layouts.app')
@section('content')
@include('components.header-index')

    <div class="wrapper">
        <div class="banner-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>Nos gagnants</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-all-videos">
            <div class="container-fluid">
                <div class="row g-3">
                    @foreach ($gagnants as $key => $gagnant)
                        <div class="col-12">
                            <div class="card {{ $key == 0 ? 'card-first' : '' }}">
                                <div class="row align-items-center g-2">
                                    <div class="col-3">
                                        <div class="img-video">
                                            <span class="iconify" data-icon="clarity:play-solid"></span>
                                            <img src="{{('images/img-1.jpg')}}" alt="img-video">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="detail-video">
                                            <h3> Enchère du {{ date('d-m-Y', strtotime($gagnant->enchere->date_debut)) }} </h3>
                                            <p> Gagnant : {{ $gagnant->user->nom }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

