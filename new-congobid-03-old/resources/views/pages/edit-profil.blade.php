@extends('layouts.app-page')
@section('content')
<div class="block-page">
    <div class="block-banner-profil block-banner-profil-edit">
      <div class="content-banner text-center">
        <div class="avatar">
          <img src="images/bg2.jpg" alt="image de profil">
          <div class="add-photo">
            <i class="fi fi-rr-camera"></i>
          </div>
        </div>
        <div class="name">
          Caleb
        </div>
      </div>
    </div>
    <div class="block-content-profil block-content-profil-edit">
      <div class="container">
        <form action="" class="form-edit">
          <div class="form-group row g-3 justify-content-center mt-2">
            <div class="col-11">
              <input type="text" class="form-control" placeholder="Nom complet (tels que sur votre identité)" name="full-name">
            </div>
            <div class="col-11">
              <input type="text" class="form-control" placeholder="Numéro téléphone portable" name="phone">
            </div>
            <div class="col-11">
              <input type="email" class="form-control" placeholder="Email" name="email">
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
                <select class="form-select form-control" aria-label="Default select example" name="sexe">
                    <option selected>Sexe</option>
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
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>J</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>M</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>A</option>
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
                        <div class="col-4">
                            <label for="">Pointure</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>US</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-4">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>EU</option>
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
                            <label for="">Taille du haut</label>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>US</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>EU</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
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
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>US</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>EU</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
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
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>US</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
                                <option selected>EU</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select form-control" aria-label="Default select example" name="sexe">
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
                <input type="password" class="form-control" placeholder="Lieu de naissance" name="mot-passe">
            </div>
            <div class="col-11">
                <input type="text" class="form-control" placeholder="Lieu de naissance" name="pass-conf">
              </div>
            <div class="col-11">
              <button class="btn btn-3d-rounded-sm w-100">
                <i class="fi fi-rr-check"></i> Valider
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

