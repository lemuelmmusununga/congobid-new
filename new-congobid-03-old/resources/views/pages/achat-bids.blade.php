@extends('layouts.app-page')
@section('content')
    <div class="block-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center title">Achat de bids</h4>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            International
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3">
                            <div class="col-4">
                                <div class="block-pay" data-bs-toggle="modal" data-bs-target="#modalPay">
                                    <img src="{{ asset('images/pay/p.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ma.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/vi.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            R.D.Congo
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3">
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/afri.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/mp.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/air.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ora.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Côte d'Ivoire
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3">
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/moo.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/mtn.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ora.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Sénégal
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3">
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/wav.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/free.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ora.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Cameroun
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3">
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ex.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/mtn.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ora.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Togo
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3 justify-content-center">
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/tm.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/moov.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Mali
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3 justify-content-center">
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ora.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/moov.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Burkinafaso
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3 justify-content-center">
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ora.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/moov.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Guinée Conakry
                        </div>
                        <div class="row g-4 gl-lg-5 mb-3 justify-content-center">
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/ora.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/mtn.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Bénin
                        </div>
                        <div class="row g-2 gl-lg-5 mb-3 justify-content-center">
                            <div class="col-8">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/mtn.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-achat-bid">
                        <div class="header text-center">
                            Niger
                        </div>
                        <div class="row g-2 gl-lg-5 mb-3 justify-content-center">
                            <div class="col-8">
                                <div class="block-pay">
                                    <img src="{{ asset('images/pay/air.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalPay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group row g-4">
                            <div class="col-12 text-center">
                                <h4 class="mb-0"  style="color:var(--colorGold); font-weight:600">
                                    <span class="money-user">
                                        5.400 CFA
                                    </span>
                                </h4>
                                <h4 class="mb-0"  style="color:var(--colorGold); font-weight:600; font-size: 16px">
                                    <span class="money-dollar">
                                        5$
                                    </span>
                                </h4>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input placeholder="Entrez votre nom" id="name" class="block mt-1 w-full form-control" type="text" name="name" required="" autofocus="">
                                    <label for="floatingInput" class="d-flex align-items-center">Nombres de bids</label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-3d-rounded-sm" data-bs-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-3d-rounded-sm">Valider</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
