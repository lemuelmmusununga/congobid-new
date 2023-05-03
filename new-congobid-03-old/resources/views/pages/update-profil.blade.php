@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="block-banner-profil block-banner-profil-edit">
      <div class="content-banner text-center">
        <div class="avatar">
            @if (Auth::user()->avatar != null)
                <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="">
            @else
                <img src="{{ asset('images/users/default.png') }}" alt="">
            @endif
          <div class="add-photo" data-bs-toggle="modal" data-bs-target="#modal-upload-file-profil">
            <i class="fi fi-rr-camera"></i>
          </div>
        </div>
        <div class="name">
          {{Auth::user()->pseudo}} 
        </div>
      </div>
    </div>
    <div class="block-content-profil block-content-profil-edit">
      <div class="container">
        <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data" class="form-edit">
            @csrf
      
          <div class="form-group row g-3 justify-content-center mt-2">
            <div class="col-11">
              <input type="text" value="{{Auth::user()->nom}}" class="form-control" placeholder="Nom complet (tels que sur votre identité)"  name="name"  required autofocus >
            </div>
            <div class="col-11">
                <input type="text" value="{{Auth::user()->username}}" class="form-control" placeholder="Speudo"  name="pseudo"  required autofocus  >
            </div>
            <div class="col-11">
              <input type="telephone" class="form-control" placeholder="Numéro téléphone portable" value="{{Auth::user()->telephone}}" name="telephone" required autofocus>
            </div>
            <div class="col-11">
              <input type="email" value="{{Auth::user()->email}}" class="form-control" placeholder="Email" type="email" name="email" >
            </div>
            <div class="col-11">
              <textarea name="adresse" id="" cols="30" rows="2" class="form-control" placeholder="Adresse"></textarea>
            </div>
            <div class="col-11">
                <select class="form-select form-control" aria-label="Default select example" name="ville">
                    <option selected>Ville</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="col-11">
                <select class="form-select form-control" aria-label="Default select example" name="pays">
                    <option selected>Pays</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            
            <div class="col-11">
                <input type="text" class="form-control" placeholder="Lieu de naissance" name="lieu-naiss">
            </div>
            <div class="col-11">
                <div class="fake-form-control">
                    <div class="row g-1 align-items-center">
                        <div class="col-3">
                            <label for="">Date de naiss</label>
                        </div>
                        <div class="col-3">
                            <input type="date" class="form-control" name="lieu-naiss"> 
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe" >
                                <option selected>M</option>
                                <option value="1">Masculin</option>
                                <option value="2">Feminin</option>
                                <option value="3">Personnalisé</option>
                              </select>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-11">
                <div class="fake-form-control">
                    <div class="row g-1 align-items-center">
                        <div class="col-4">
                            <label for="">Pointure</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select form-control" aria-label="Default select example" name="pointure">
                                <option selected >US</option>
                                @for ($i = 30; $i < 90; $i++)
                                <option value="{{$i}}">
                                      {{$i}} 
                                    </option>
                                    @endfor
                          
                              </select>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-11">
                <div class="fake-form-control">
                    <div class="row g-1 align-items-center">
                        <div class="col-3">
                            <label for="">Taille du haut</label>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" >
                                <option selected>US</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" >
                                <option selected>EU</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" >
                                <option selected>Small</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11">
                <div class="fake-form-control">
                    <div class="row g-1 align-items-center">
                        <div class="col-3">
                            <label for="">Taille du bas</label>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="taille">
                                <option selected>US</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" >
                                <option selected>EU</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" >
                                <option selected>Small</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11">
                <div class="fake-form-control">
                    <div class="row g-1 align-items-center">
                        <div class="col-3">
                            <label for="">Taille de la ceinture</label>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="tailleCeinture">
                                <option selected>US</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        {{-- <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" >
                                <option selected>EU</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div> --}}
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" >
                                <option selected>Small</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11">
                <input type="password" class="form-control" placeholder="Mot de passe" name="mot-passe" required>
            </div>
            <div class="col-11">
                <input type="text" class="form-control" placeholder="Comfirmer le mot de passe" name="pass-conf" required>
              </div>
            <div class="col-11">
              <button class="btn btn-3d-rounded-sm w-100" type="submit">
                <i class="fi fi-rr-check"></i> Valider
              </button>
            </div>
          </div>
        </form>
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
                    <p  class="text-white btn btn-sm btn-danger" data-bs-dismiss="modal" style="font-size: 16px">Supprimer</p>
                    <x-button type="button" class="btn btn-primary" type="submit">Sauvegarder</x-button>
                </div>
            </form>
    
    
          </div>
        </div>
    </div>
@endsection

