@extends('layouts.app')

@section('content')
@include('components.header')
    <div class="wrapper">
        <div class="banner-user">
            <div class="container-fluid" style="height: inherit">
                <div class="content d-flex justify-content-center align-items-center" style="height: inherit; flex-direction:column">
                    <div class="block-avatar-profil">

                {{-- @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                    <div class="icon">
                        <span class="iconify" data-icon="bx:bx-user"></span>
                    </div>
                @else
                    <div class="avatar">
                        @if (Auth::user()->role_id == 5)
                            <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                            @else
                            <img src="{{ asset('images/profil/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                            @endif
                        </div>
                        @endif --}}

                    @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                        <div class="icon">
                            <span class="iconify" data-icon="bx:bx-user"></span>
                        </div>
                    @else
                            <div class="avatar">
                                <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                            </div>
                        @endif
                    </div>
                    <div class="block-name">
                        <h5>{{Auth::user()->nom}}</h5>
                        <span>{{ '@' }}{{Auth::user()->username}}</span>
                    </div>
                </div>
                <div class="block-items-2">
                    <div class="row">
                        <div class="col-4">
                            <div class="item">
                                <h4> {{ Auth::user()->pivotbideurenchere->count() }} </h4>
                                <p class="mb-0">Enchères participées</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item">
                                <?php
                                    $clicks = 0;
                                    foreach (Auth::user()->pivotbideurenchere as $enchere) {
                                        $clicks = $clicks + $enchere->valeur;
                                    }
                                ?>
                                <h4> {{ $clicks }} </h4>
                                <p class="mb-0">Clicks</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item">
                                <h4> {{ Auth::user()->chats->count() }} </h4>
                                <p class="mb-0">Messages envoyés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-link">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="bx:bx-user"></span>
                                        <span class="title">Modifier mon profil</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="carbon:piggy-bank"></span>
                                        <span class="title">
                                            Solde de bids : {{ Auth::user()->bideurs->first()->balance }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="la:coins"></span>
                                        <span class="title">
                                            Solde de bids bonus : {{ Auth::user()->bideurs->first()->bonus }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="mdi:share-off-outline"></span>
                                        <span class="title">
                                            Solde de bids non transférable  : {{ Auth::user()->bideurs->first()->nontransferable }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="akar-icons:trophy"></span>
                                        <span class="title">
                                            Mes enchères gagnées : {{ Auth::user()->gagnants->count() }}
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="akar-icons:heart"></span>
                                        <span class="title">
                                            Mes articles favoris
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="carbon:user-follow"></span>
                                        <span class="title">
                                            Parrainage
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <span class="iconify" data-icon="uiw:logout"></span>
                                            <span class="title">
                                                Déconnexion
                                            </span>
                                        </a>
                                    </form>
                                </li>
                            <ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
