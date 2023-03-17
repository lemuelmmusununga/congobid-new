@extends('layouts.app-page')
@section('content')
    <div class="block-page">
        <div class="block-banner-profil">
        <div class="content-banner text-center">
            <div class="avatar">
                @if (Auth::user()->avatar != null)
                    <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="">
                @else
                    <img src="{{ asset('images/users/default.png') }}" alt="">
                @endif            
            </div>
            <div class="name">
               {{Auth::user()->username}} 
            </div>
        </div>
        </div>
        <div class="block-content-profil">
        <div class="container">
            <div class="row g-2">
            <div class="col-4">
                <div class="card card-info">
                    <div class="card-header text-center">
                    <h6>Bids non-transférables</h6>
                    </div>
                    <div class="content-bid">
                        {{ Auth::user()->bideurs->first()->nontransferable }}
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-info">
                    <div class="card-header text-center">
                    <h6><img src="images/piece.png" alt=""> Bids</h6>
                    </div>
                    <div class="content-bid">
                        {{ Auth::user()->bideurs->first()->balance }}
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-info">
                    <div class="card-header text-center">
                    <h6>Bids <br> Bonus</h6>
                    </div>
                    <div class="content-bid">
                        {{ Auth::user()->bideurs->first()->bonus }}
                    </div>
                </div>
            </div>
            </div>
            <div class="row g-3 justify-content-center mt-2">
            <div class="col-11">
                <a href="{{route('update.profil',['name'=>Auth::user()->nom,'id'=>Auth::user()->id])}}" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-user"></i> Profil
                </a>
            </div>
            <div class="col-11">
                <a href="#" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rs-fire-flame-curved"></i> Pouvoir
                </a>
            </div>
            <div class="col-11">
                <a href="#" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-users-alt"></i>Salons
                </a>
            </div>
            <div class="col-11">
                <a href="#" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-heart"></i> Favoris
                </a>
            </div>
            <div class="col-11">
                <a href="#" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-exchange"></i> Transfére des bids
                </a>
            </div>
            <div class="col-11">
                <a href="#" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-envelope"></i> Message
                </a>
            </div>
            <div class="col-11">
                <a href="#" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-clipboard-list-check"></i> Historiques
                </a>
            </div>
            <div class="col-11">
                <a href="#" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-trophy"></i> Enchères gagnées
                </a>
            </div>
            <div class="col-11">
                <a href="#" class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-headset"></i> Aides
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

