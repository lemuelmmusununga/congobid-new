@extends('layouts.detail-profil')
@section('content')

<div class="content-block">
    <div class="banner-sm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Achats bids</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content-bid">
        <div class="container-fluid">
            <div class="row g-4">
                @foreach ($bids as $bid)
                    <div class="col-6 col-md-3 col-sm-4">
                        <div class="card tarif junior">
                            <div class="ammount">
                                {{$bid->valeur}} $
                            </div>
                            <div class="card-body">
                                {{-- <h4>Junior</h4> --}}
                                <ul>
                                    <li>
                                        <h5>{{$bid->quantite}}<span> Bids</span></h5>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalbid_{{ $bid->id }}">Acheter</a>

                                <div wire:ignore.self class="modal fade" id="modalbid_{{ $bid->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="icon">
                                                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                                </div>
                                                <div class="text-center">
                                                    <h5>Voulez-vous acheter {{ $bid->quantite }} bids  ?</h5>
                                                    <p>Cette partie vas nous envoyer sur la page de moyen de payement
                                                        comme nous avons pas des api nous lui ajoutons {{ $bid->quantite }} de bids
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="modal-footer d-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                                            <a type="button" href="/detail-enchere/{{ 2}}"  class="btn btn-ok">Accepter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>

@endsection
