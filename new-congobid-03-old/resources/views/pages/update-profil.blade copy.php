@extends('layouts.detail-profil')
@section('content')

    <div class="wrapper">
        <div class="banner-user">
            <div class="container-fluid" style="height: inherit">
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
                                    <img src="{{ asset('images/users/default.png') }}" alt="Image de {{ Auth::user()->username }}">
                                </div>
                            @else
                                    <div class="avatar">
                                        <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                                    </div>
                                @endif
                            </div>
                            {{-- <div class="block-name mt-2">
                                <h5>{{Auth::user()->nom}}</h5>
                                <span>{{ '@' }}{{Auth::user()->username}}</span>
                            </div> --}}
                </div>

            </div>
        </div>
        <div class="content-link">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card justify-content-center" style="margin-top: -88px">
                            <div class="col-lg-12 px-0">
                                <div class="">
                                    {{-- <a href="/" class="back">
                                        <span>
                                            <span class="iconify" data-icon="la:angle-left"></span>
                                        </span>
                                        Accueil
                                    </a> --}}

                                </div>

                            </div>
                            <div class="row ">

                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-4 ">
                                    <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row g-3">
                                            <div class="col-12">
                                                <x-input value="{{Auth::user()->nom}}" placeholder="Entrez votre nom" id="name" class="block rounded-pill mt-1 w-full form-control" type="text" name="name"  required autofocus />
                                            </div>
                                            <div class="col-12">
                                                <x-input value="{{Auth::user()->username}}" placeholder="Entrez votre pseudonyme" id="pseudo" class="block rounded-pill mt-1 w-full form-control" type="text" name="pseudo"  required autofocus />
                                            </div>
                                            <div class="col-12">
                                                <input value="{{Auth::user()->telephone}}" placeholder="Entrez votre numero de telephone" id="telephone" class="block rounded-pill mt-1 w-full form-control" type="telephone" maxlength="12" name="telephone" required autofocus />
                                            </div>
                                            <!-- Email Address -->
                                            <div class="col-12">
                                                <x-input value="{{Auth::user()->email}}" placeholder="Entrez votre adresse e-mail" id="email" class="block rounded-pill mt-1 w-full form-control" type="email" name="email" />
                                            </div>
                                            <!-- Password -->

                                            <div class="col-12">
                                                <x-button class="ml-4 btn-primary rounded-pill w-100 btn mt-3">
                                                    Modifier
                                                </x-button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->


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
                <p  class="text-white btn btn-sm btn-danger" data-bs-dismiss="modal" style="font-size: 16px">Supprimer</p>
                <x-button type="button" class="btn btn-primary" type="submit">Sauvegarder</x-button>
            </div>
        </form>


      </div>
    </div>
  </div>

@endsection

