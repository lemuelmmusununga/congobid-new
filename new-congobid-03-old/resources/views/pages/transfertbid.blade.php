@extends('layouts.app-page')
@section('content')
    <div class="block-page">
        <form action="">
            <div class="container">
                <div class="row justify-content-center g-3 mb-4">
                    <div class="col-lg-6">
                        <h4 class="text-center title">Transférer des options</h4>
                        <p class="text-descr">
                            Séléctionnez et faites glisser vers la droite les options que vous souhaitez transférer.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control rounded-pill" placeholder="Pseudo">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control rounded-pill" placeholder="Numéro de téléphone">
                    </div>
                </div>
            </div>
            <div class="block-content-option pb-4">
                <div class="container">
                    <div class="row g-1">
                        <div class="col-6 col-md-6">
                            <div class="card card-option h-100">
                                <div class="header">
                                    Simba
                                </div>
                                <div class="row g-1 mt-3">

                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
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
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option h-100">
                                <div class="header">
                                    Simba
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option">
                                <div class="header">
                                    Benda
                                </div>
                                <div class="row g-1 mt-3">

                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
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
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option h-100">
                                <div class="header">
                                    Benda
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option">
                                <div class="header">
                                    Turbo
                                </div>
                                <div class="row g-1 mt-3">

                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{asset('images/crown.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/tunder.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/click.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/save.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option h-100">
                                <div class="header">
                                    Turbo
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option">
                                <div class="header">
                                    Bulldozer
                                </div>
                                <div class="row g-1 mt-3">

                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{asset('images/crown.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/tunder.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/click.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/save.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option h-100">
                                <div class="header">
                                    Bulldozer
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option">
                                <div class="header">
                                    Sukisa
                                </div>
                                <div class="row g-1 mt-3">

                                    <div class="col-6">
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{asset('images/crown.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/tunder.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/click.png')}}" alt="">
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
                                                <div class="img-option">
                                                    <img src="{{asset('images/save.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>0</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card card-option h-100">
                                <div class="header">
                                    Sukisa
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row g-1 mt-5">
                        <div class="col-6 col-md-6 d-flex justify-content-center">
                            <a href="#" class="btn btn-3d-rounded-sm">
                                Annuler
                            </a>
                        </div>
                        <div class="col-6 col-md-6 d-flex justify-content-center">
                            <button class="btn btn-3d-rounded-sm">
                                Valider
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
