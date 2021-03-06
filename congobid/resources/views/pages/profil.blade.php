@extends('layouts.app-profil')

@section('content')

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
                        <div class="avatar">
                           <a href="{{route('update.profil',['name'=>Auth::user()->nom,'id'=>Auth::user()->id])}}"><img src="{{ asset('images/users/default.png') }}" alt="Image de {{ Auth::user()->username }}"></a>
                        </div>
                    @else
                        <div class="avatar">
                            <a href="{{route('update.profil',['name'=>Auth::user()->nom,'id'=>Auth::user()->id])}}"><img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}"></a>
                        </div>
                    @endif
                    </div>
                    <div class="block-name">
                        <h5>{{Auth::user()->nom}}</h5>
                        <span>{{ '@' }}{{Auth::user()->username}}</span>
                    </div>
                </div>




                               @livewire('bid-bonus')


                        {{-- <div class="col-3">
                            <div class="item">
                                <?php
                                    $favoris = 0 ;
                                    foreach (Auth::user()->pivotbideurenchere as $favori) {
                                        $favoris = $favoris + $favori->favoris;
                                    }
                                ?>

                                <h4> {{ $favoris }} </h4>
                                <p class="mb-0">Favoris</p>
                            </div>
                        </div> --}}

            </div>
        </div>
        <div class="content-link " style="margin-top: 100px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <ul>
                                <li>
                                    <a href="{{route('update.profil',['name'=>Auth::user()->nom,'id'=>Auth::user()->id])}}">
                                        <span class="iconify" data-icon="bx:bx-user"></span>
                                        <span class="title">Modifier mon profil</span>
                                    </a>
                                </li>
                                {{-- <li>
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
                                            Solde de bids non transf??rable  : {{ Auth::user()->bideurs->first()->nontransferable }}
                                        </span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="akar-icons:trophy"></span>
                                        <span class="title">
                                            Mes ench??res gagn??es : {{ Auth::user()->gagnants->count() }}
                                        </span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="#">
                                        <span class="iconify" data-icon="akar-icons:heart"></span>
                                        <span class="title">
                                            Mes articles favoris
                                        </span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="/envoyer/bid">
                                        <span class="iconify" data-icon="carbon:user-follow"></span>
                                        <span class="title">
                                            transf??re des bids
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
                                <li class="last">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <span class="iconify" data-icon="uiw:logout"></span>
                                            <span class="title">
                                                D??connexion
                                            </span>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
