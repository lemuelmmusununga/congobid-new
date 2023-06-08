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
                    <div class="content d-flex justify-content-center align-items-center" style="height: inherit; flex-direction:column">
                        <div class="block-avatar-profil">

                            <div class="upload-file" data-bs-toggle="modal" data-bs-target="#modal-upload-file-profil">
                                <label>
                                    <span  class="iconify" data-icon="fa:camera"></span>
                                </label>
                            </div>

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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-upload-file-profil">

                                            <img src="{{ asset('images/users/default.png') }}" alt="Image de {{ Auth::user()->username }}">
                                        </a>
                                    </div>
                                @else
                                        <div class="avatar">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-upload-file-profil">

                                            <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                                        </a>
                                        </div>
                                    @endif
                                </div>
                                {{-- <div class="block-name mt-2">
                                    <h5>{{Auth::user()->nom}}</h5>
                                    <span>{{ '@' }}{{Auth::user()->username}}</span>
                                </div> --}}
                    </div>
                    {{-- <div class="avatar">
                           <a href="{{route('update.profil',['name'=>Auth::user()->nom,'id'=>Auth::user()->id])}}"><img src="{{ asset('images/users/default.png') }}" alt="Image de {{ Auth::user()->username }}"></a>
                        </div> --}}
                    @else
                    <div class="content d-flex justify-content-center align-items-center" style="height: inherit; flex-direction:column">
                        <div class="block-avatar-profil">

                            <div class="upload-file" data-bs-toggle="modal" data-bs-target="#modal-upload-file-profil">
                                <label>
                                    <span  class="iconify" data-icon="fa:camera"></span>
                                </label>
                            </div>

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
                                        <a href="{{route('update.profil',['name'=>Auth::user()->nom,'id'=>Auth::user()->id])}}">
                                            <img src="{{ asset('images/users/default.png') }}" alt="Image de {{ Auth::user()->username }}">
                                        </a>
                                    </div>
                                @else
                                        <div class="avatar">
                                            <a href="{{route('update.profil',['name'=>Auth::user()->nom,'id'=>Auth::user()->id])}}">
                                                <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                {{-- <div class="block-name mt-2">
                                    <h5>{{Auth::user()->nom}}</h5>
                                    <span>{{ '@' }}{{Auth::user()->username}}</span>
                                </div> --}}
                    </div>
                        {{-- <div class="avatar">
                            <a href="{{route('update.profil',['name'=>Auth::user()->nom,'id'=>Auth::user()->id])}}"><img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}"></a>
                        </div> --}}
                    @endif
                    </div>
                    <div class="block-name">
                        <h5>{{Auth::user()->prenom}}</h5>
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
                                            Solde de bids non transférable  : {{ Auth::user()->bideurs->first()->nontransferable }}
                                        </span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('show.enchers-gagne') }}">
                                        <span class="iconify" data-icon="akar-icons:trophy"></span>
                                        <span class="title">
                                            Mes enchères gagnées : {{ $gagners->count() }}
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
                                            Porte-feuille : 1 roi , 2 foudres
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/envoyer/bid">
                                        <span class="iconify" data-icon="carbon:user-follow"></span>
                                        <span class="title">
                                            transfère des bids
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-upload-file-profile">
                                        <span class="iconify" data-icon="carbon:user-follow"></span>
                                        <span class="title">
                                            Modifier mot de passe
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
                                                Déconnexion
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


     <!-- Modal -->
  <div class="modal fade" id="modal-upload-file-profil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Changer photo profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('update.my.profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                    <div class="avatar-profil">
                        <img src="{{ asset('images/users/default.png') }}" alt="Image de {{ Auth::user()->username }}">
                        <div class="upload-file">
                            <label for="img-file">
                            </label>
                            <input type="file" id="img-file" name="profil" accept=".jpg, .png, .svg, .jpeg">
                        </div>
                    </div>
                @else
                    <div class="avatar-profil">
                        <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                        <div class="upload-file">
                            <label for="img-file">

                            </label>
                            <input type="file" name="profil" id="img-file" accept=".jpg, .png, .svg, .jpeg" value="img-file">
                        </div>
                    </div>
                @endif
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <a href="{{ route('sup.profil') }}" class="text-white btn btn-danger"  style="font-size: 16px">Supprimer</a>
                <x-button type="button" class="btn btn-primary" type="submit">Sauvegarder</x-button>
            </div>
        </form>


      </div>
    </div>
  </div>
    <div class="modal fade" id="modal-upload-file-profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modifier le mot de passe</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('update.profile.mot') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body ">
                    <div class="row ">

                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-8 ">
                            <div class="col-12">
                                <div class="col-password">
                                    <x-input  id="password" class="block form-control rounded-pill mt-1 w-full" type="password" name="old-password" placeholder="Ancien Mot de passe"  autocomplete="new-password"  />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="col-password">
                                    <x-input  id="password" class="block form-control rounded-pill mt-1 w-full" type="password" name="new-password" placeholder="Nouveau Mot de passe"  autocomplete="new-password"  />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="col-password">
                                    <x-input  id="password" class="block form-control rounded-pill mt-1 w-full" type="password" name="password" placeholder="Confirmer le nouveau mot de passe"  autocomplete="new-password"  />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <p  class="btn btn-default" data-bs-dismiss="modal" style="font-size: 16px">Annuler</p>
                    <x-button type="button" class="btn btn-primary" type="submit">Sauvegarder</x-button>
                </div>
            </form>


          </div>
        </div>
      </div>

@endsection
