@extends('layouts.detail-profil')
@section('content')

    <div class="content-block">

        <div class="block-detail-salon">
            <div class="container-fluid">
                <div class="row g-3 justify-content-center">

                    <div class="col-lg-5">
                        <div class="text-center mb-4">
                            <h3 class="name-article text-center">{{$article->titre ?? ''}}</h3>
                            <?php
                                $temps_restant_heure = 0  ;
                                $temps_restant_minute = 0  ;
                                $temps_restant_seconde =0 ;

                                $temps_restant_heure_minute =0 ?? '';

                                $temps_restant_total = 0 ?? '' ;

                                $salon_fini = ($temps_restant_total <= 0) ? 'true' : 'false';
                                $total_heure_restant =  0 ?? '';
                            ?>


                        </div>
                        <div wire:ignore.self class="modal fade" id="achat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="icon">
                                            <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                        </div>
                                        <div class="text-center">

                                                <h5> il faudrait payé   bids ?</h5>


                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-non" data-bs-dismiss="modal" aria-label="close">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @livewire('counterbidsalon',['article'=>$article->id ?? '','article_titre'=>$article->titre ?? '','article_paquet'=>$article->paquet_id ?? '','article_salon'=>$article->salon->id ?? '','temps_total_heure'=>$total_heure_restant ?? '','temps_restant_seconde'=>$temps_restant_seconde ?? ''])
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
