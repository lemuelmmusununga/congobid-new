@extends('layouts.app')
@section('content')
    @include('components.header-index')
    <div class="content-block">
        {{-- <div class="banner-sm banner-enchere">
            <div class="container-fluid">
                <h3 class="name-article text-center">{{$article->titre ?? ''}}</h3>
                <div class="row g-0">
                    <div class="col-4">
                        <div class="block-price">
                            <p>Prix congobid($)</p>
                            <h6>{{$article->prix}}</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="img-enchere">
                            <img src="{{asset('images/articles/'.$article->images->first()->lien)}}" alt="img-congobid">
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="block-price">
                            <p>Prix marché($)</p>
                            <h6>{{$article->prix_marche}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="block-detail-enchere">
            <div class="container-fluid">
                <div class="row g-3 justify-content-center">

                    <div class="col-lg-5">
                        <div class="text-center mb-4">
                            <h3 class="name-article text-center">{{$article->titre ?? ''}}</h3>
                            <?php
                                $temps_restant_heure = (now()->format('H') - date('H', strtotime($article->enchere->heure_debut))) ;
                                $temps_restant_minute = (now()->format('i') - date('i', strtotime($article->enchere->heure_debut)));

                                $temps_restant_heure_minute = ($temps_restant_heure * 60) + $temps_restant_minute;

                                $temps_restant_total = $article->paquet->duree - $temps_restant_heure_minute ;

                                $enchere_fini = ($temps_restant_total <= 0) ? 'true' : 'false';
                            ?>
                            <h3 class="name-article text-center">temps restant : {{ $temps_restant_heure.':'.$temps_restant_minute }}</h3>
                            <h3 class="name-article text-center"> temps restant en minute : {{ $temps_restant_heure_minute }}</h3>
                            <h3 class="name-article text-center">durée de l'enchere : {{ $article->paquet->duree }}</h3>
                            <h3 class="name-article text-center">heure du debut de l'enchere : {{ $article->enchere->heure_debut }}</h3>
                            <h3 class="name-article text-center">temps restant total en minute : {{ $temps_restant_total }}</h3>
                            <h3 class="name-article text-center">Etat de l'enchere : {{ $enchere_fini }}</h3>
                        </div>
                        @if (Session::has('danger'))
                                <div class="alert alert-danger">
                                    <span>{{Session::get('danger')}}</span>
                                </div>
                        @elseif(Session::has('success'))
                            <div class="alert alert-success">
                                <span>{{Session::get('success')}}</span>
                            </div>
                        @endif

                        @livewire('counterbid',['article'=>$article->id,'article_titre'=>$article->titre,'article_paquet'=>$article->paquet_id,'article_enchere'=>$article->enchere->id])

                    </div>
                    {{-- <div class="col-12 col-md-6 col-lg-3">
                        <div class="card card-detail">
                            <div class="type-lg">
                                <div class="ribbon">
                                    {{ $article->paquet->libelle }}
                                </div>
                                <div class="dote"></div>
                            </div>
                            <div class="block-statut {{ $article->paquet_id == Auth::user()->bideurs->first()->paquet_id ? 'active' : 'unactive' }} {{ $article->enchere->state == '1' ? 'on' : 'off' }}">
                                <div class="statut">
                                    <span class="blink"></span>
                                </div>
                            </div>
                            <div class="block-time mt-3">
                                <div class="title">Date début</div>
                            <div class="time">{{ $article->enchere->date_debut }}</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 text-star">
                                    <div class="block-bid">
                                        <p>Solde(Bids)</p>
                                        <h5>{{ Auth::user()->bideurs->first()->balance }}</h5>
                                    </div>
                                </div>
                            <div class="col-4 text-center">
                        </div>
                        <div class="col-4 text-end">
                            <div class="block-bid">
                                <p>Bonus(Bids)</p>
                                <h5>{{ Auth::user()->bideurs->first()->bonus }}</h5>
                            </div>
                        </div>
                    </div>

                    <div class="block-options d-flex justify-content-between align-items-center">
                        <div class="block-icon-option">
                            <div class="title">Option</div>
                            <div class="card-footer">
                                @livewire('counterbid',['article'=>$article->id])
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalparticipant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
            <div class="icon" style="margin: 0">
                <span class="iconify" data-icon="clarity:users-line"></span>
            </div>
            <div class="text-star">
                <h5>Participants</h5>
            </div>
            <form action="" class="mb-3">
                <input type="text" class="form-control input-search-part" placeholder="Recherche....">
            </form>
            <div class="block-all-part">
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </div>
            </div>
            <div class="modal-footer d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
            <a type="button" href="#"  class="btn btn-ok">Foudroyer</a>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="modalparticipant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
            <div class="icon" style="margin: 0">
                <span class="iconify" data-icon="clarity:users-line"></span>
            </div>
            <div class="text-star">
                <h5>Participants</h5>
            </div>
            <form action="" class="mb-3">
                <input type="text" class="form-control input-search-part" placeholder="Recherche....">
            </form>
            <div class="block-all-part">
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="form-check d-flex ps-0">
                    <label class="form-check-label w-100 d-flex align-items-center" for="flexCheckDefault">
                    <div class="block-user-part d-flex align-items-center">
                        <div class="block-avatar-part">
                            <div class="avatar">
                                <img src="{{asset('images/img-2.jpg')}}" alt="img">
                            </div>
                        </div>
                        <div class="block-name">
                            <h6>John Doe</h6>
                            <p>@John20</p>
                        </div>
                    </div>
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                </div>
            </div>
            </div>
            <div class="modal-footer d-flex justify-content-between align-items-center">
            <button type="button" class="btn btn-no" data-bs-dismiss="modal">Annuler</button>
            <a type="button" href="#"  class="btn btn-ok">Foudroyer</a>
            </div>
        </div>
        </div>
    </div>
@endsection
