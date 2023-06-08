@extends('layouts.app-page')
@section('content')
    <div class="block-page">
        <div class="block-banner-profil">
            <div class="content-banner text-center">
                <div class="avatar">
                    <img src="images/bg2.jpg" alt="image de profil">
                </div>
                <div class="name">
                    Caleb
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
                                4000
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-info">
                            <div class="card-header text-center">
                                <h6><img src="images/piece.png" alt=""> Bids</h6>
                            </div>
                            <div class="content-bid">
                                5370
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-info">
                            <div class="card-header text-center">
                                <h6>Bids <br> Bonus</h6>
                            </div>
                            <div class="content-bid">
                                40
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 justify-content-center mt-2">
                    <div class="col-11">
                        <a href="/edit_compte" class="btn btn-3d-rounded-sm w-100">
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
                        <a href="#" class="btn btn-3d-rounded-sm w-100" data-bs-toggle="modal" data-bs-target="#modalTransBid">
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
    <div class="modal fade" id="modalTransBid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group row g-3">
                            <div class="col-12">
                                <div class="text-center">
                                    <h4 class="title-form mb-0">Transférer des bids</h4>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Pseudo">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Numéro de téléphone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Nombre de Bids">
                            </div>
                            <div class="col-12 d-flex justify-content-between mb-4 mt-4">
                                <a href="#" class="btn btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</a>
                                <button class="btn-3d-rounded-sm">Ok</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
