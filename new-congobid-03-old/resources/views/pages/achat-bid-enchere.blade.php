@extends('layouts.app-page')
@section('content')
<div class="banner-sm">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 text-center">
                <h1>Achats bids</h1>
                <p>Vous n'avez pas bid pour acheter cette option veillez acheter les bids qui vous permettra acheter l'option voulu.</p>
            </div>
        </div>
    </div>
</div>
<div class="content-block">

    <div class="content-bid">
        <div class="container">
            <div class="row g-4">
                {{-- @foreach ($bids as $bid)
                    <div class="col-6 col-md-3 col-sm-3">
                        <div class="card tarif junior">
                            <div class="ammount">
                                {{$bid->valeur}} $
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <h5>{{$bid->quantite}}<span> Bids</span></h5>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalbid_{{ $bid->id }}">Acheter</a>


                            </div>
                        </div>
                    </div>
                @endforeach --}}
                @foreach ($bids as $key => $bid)
                    <div class="col-6 col-md-3 col-sm-3">
                        <div class="card tarif junior">
                            <div class="ammount">
                                {{$bid->valeur}} $
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <h5>{{$bid->quantite}}<span> Bids</span></h5>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalbid_{{$key}}">Acheter</a>
                            </div>
                        </div>
                    </div>
                    <div wire:ignore.self class="modal fade" id="modalbid_{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="icon">
                                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                    </div>
                                    <div class="text-center">
                                        <h5>Voulez-vous acheter {{$bid->quantite}} bids  ?</h5>
                                        <p>Cette partie vas nous envoyer sur la page de moyen de payement qui est encours de traitement</p>
                                    </div>
                                </div>

                                <div class="modal-footer d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
                                 <a type="button" href="{{route('detail.article.enchere',['id'=>Auth::user()->id,'valeur'=>$bid->quantite,'enchere_id'=>$id_enchere,'enchere_name'=>$name_enchere])}}"  class="btn btn-ok">Accepter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
<div wire:ignore.self class="modal fade" id="modalbid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="icon">
                    <span class="iconify" data-icon="ant-design:info-outlined"></span>
                </div>
                <div class="text-center">
                    <h5>Voulez-vous acheter 800 bids  ?</h5>
                    <p>Cette partie vas nous envoyer sur la page de moyen de payement</p>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
            <a type="button" href="/"  class="btn btn-ok">Accepter</a>
            </div>
        </div>
    </div>
</div>
@endsection
