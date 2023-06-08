<div>
    <form action="{{route('send.option')}}" method="POST">
            @csrf
            <div class="container">
                <div class="row justify-content-center g-3 mb-4">
                    <div class="col-lg-6">
                        <h4 class="text-center title">Transférer des options</h4>
                        <p class="text-descr">
                            Séléctionnez et faites glisser vers la droite les options que vous souhaitez transférer.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control rounded-pill" placeholder="Pseudo" name="user" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="telephone" class="form-control rounded-pill" placeholder="Numéro de téléphone" name="telephone" required>
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

                                    <div class="col-6" wire:click='addClickRoiSimba'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$taperoiSimba}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="taperoiSimba" value="{{$taperoiSimba}}">
                                    </div>
                                    <div class="col-6" wire:click='addClickFoudreSimba'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeFoudreSimba}}</p>
                                            </div>
                                            <input type="hidden" name="tapeFoudreSimba" value="{{$tapeFoudreSimba}}">
                                        </div>

                                    </div>
                                    <div class="col-6" wire:click='addClickClickSimba'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeClickSimba}}</p>
                                            </div>
                                            <input type="hidden" name="tapeClickSimba" value="{{$tapeClickSimba}}">

                                        </div>

                                    </div>
                                    <div class="col-6" wire:click='addClickBouclierSimba'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeBouclierSimba}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeBouclierSimba" value="{{$tapeBouclierSimba}}">

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

                                    <div class="col-6" wire:click='addClickRoiBenda'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$taperoiBenda}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="taperoiBenda" value="{{$taperoiBenda}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickFoudreBenda'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeFoudreBenda}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeFoudreBenda" value="{{$tapeFoudreBenda}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickClickBenda'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeClickBenda}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeClickBenda" value="{{$tapeClickBenda}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickBouclierBenda'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeBouclierBenda}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeBouclierBenda" value="{{$tapeBouclierBenda}}">

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

                                    <div class="col-6" wire:click='addClickRoiTurbo'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$taperoiTurbo}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="taperoiTurbo" value="{{$taperoiTurbo}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickFoudreTurbo'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeFoudreTurbo}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeFoudreTurbo" value="{{$tapeFoudreTurbo}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickClickTurbo'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeClickTurbo}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeClickTurbo" value="{{$tapeClickTurbo}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickBouclierTurbo'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeBouclierTurbo}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeBouclierTurbo" value="{{$tapeBouclierTurbo}}">

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

                                    <div class="col-6" wire:click='addClickRoiBulldozer'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$taperoiBulldozer}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="taperoiBulldozer" value="{{$taperoiBulldozer}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickFoudreBulldozer'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeFoudreBulldozer}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeFoudreBulldozer" value="{{$tapeFoudreBulldozer}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickClickBulldozer'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeClickBulldozer}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeClickBulldozer" value="{{$tapeClickBulldozer}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickBouclierBulldozer'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeBouclierBulldozer}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeBouclierBulldozer" value="{{$tapeBouclierBulldozer}}">

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

                                    <div class="col-6" wire:click='addClickRoiSukisa'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/crown.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$taperoiSukisa}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="taperoiSukisa" value="{{$taperoiSukisa}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickFoudreSukisa'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/tunder.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeFoudreSukisa}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeFoudreSukisa" value="{{$tapeFoudreSukisa}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickClickSukisa'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/click.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeClickSukisa}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeClickSukisa" value="{{$tapeClickSukisa}}">

                                    </div>
                                    <div class="col-6" wire:click='addClickBouclierSukisa'>
                                        <div class="card-option-sm">
                                            <div class="block-option">
                                                <div class="img-option">
                                                    <img src="{{ asset('images/save.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p>{{$tapeBouclierSukisa}}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="tapeBouclierSukisa" value="{{$tapeBouclierSukisa}}">

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
                            <a href="javascript:history.go(-1)" class="btn btn-3d-rounded-sm">
                                Annuler
                            </a>
                        </div>
                        <div class="col-6 col-md-6 d-flex justify-content-center">
                            <button class="btn btn-3d-rounded-sm" type="submit">
                                Valider
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
