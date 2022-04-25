@extends('layouts.app')
@section('content')
    @include('components.header-index')
    <div class="content-block">

        <div class="block-detail-enchere">
            <div class="container-fluid">
                <div class="row g-3 justify-content-center">

                    <div class="col-lg-5">
                        <div class="text-center mb-4">
                            <h3 class="name-article text-center">{{$article->titre ?? ''}}</h3>
                            <?php
                                $temps_restant_heure = date('H', strtotime($article->enchere->heure_debut)) - (now()->format('H'))  ;
                                $temps_restant_minute =  date('i', strtotime($article->enchere->heure_debut))-(now()->format('i'));
                                $temps_restant_seconde =(date('s', strtotime($article->enchere->heure_debut))- (now()->format('s')))- (date('s', strtotime($article->enchere->heure_debut))- (now()->format('s')))*2;

                                $temps_restant_heure_minute = ($temps_restant_heure * 60) + $temps_restant_minute;

                                $temps_restant_total = $article->paquet->duree - $temps_restant_heure_minute ;

                                $enchere_fini = ($temps_restant_total <= 0) ? 'true' : 'false';
                                $total_heure_restant =  $temps_restant_heure .":". $temps_restant_minute .":". $temps_restant_seconde;
                            ?>
                            <h3 class="name-article text-center">temps restant : {{ $temps_restant_heure.':'.$temps_restant_minute }}</h3>
                            <h3 class="name-article text-center"> temps restant en minute : {{ $temps_restant_heure_minute }}</h3>
                            <h3 class="name-article text-center">durée de l'enchere : {{ $article->paquet->duree }}</h3>
                            <h3 class="name-article text-center">heure du debut de l'enchere : {{ $article->enchere->heure_debut }}</h3>
                            <h3 class="name-article text-center">temps restant total en minute : {{ $temps_restant_total }}</h3>
                            <h3 class="name-article text-center">Etat de l'enchere : {{ $enchere_fini }}</h3>
                            <h3 class="name-article text-center">Total heur : {{ $total_heure_restant }}</h3>

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

                        @livewire('counterbid',['article'=>$article->id,'article_titre'=>$article->titre,'article_paquet'=>$article->paquet_id,'article_enchere'=>$article->enchere->id,'temps_restant_total'=>$temps_restant_seconde,'temps_restant_seconde'=>$temps_restant_seconde])

                    </div>

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
