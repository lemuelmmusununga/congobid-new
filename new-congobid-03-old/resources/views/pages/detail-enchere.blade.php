@extends('layouts.app-bid')
@section('content')
    {{-- <script>
        setTimeout(() => {
            document.location.reload();
        }, 30000);
    </script> --}}
    <header>
        <nav class="navbar navbar-expand-lg sticky-top nav-bid">
          <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5 px-1">
            <div class="row w-100 ms-0 align-items-center">
              <div class="col-3">
                <a href="javascript:history.go(-1)" class="back"><i class="fi fi-rr-angle-left"></i>Retour</a>
              </div>
              <div class="col-6 px-0 d-flex align-items-center">
                <div class="info-bid">
                    <div class="row">
                        <div class="col-12">
                            <p>{{$article->titre ?? ''}}</p>
                        </div>
                        <div class="col-12">
                            <p>Prix congoBid: <span>{{$article->prix ?? ''}}</span></p>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-3 d-flex justify-content-end align-items-center ">
                <div class="block-avatar me-3">
                    @if (Auth::user())
                      <a href="/profil">
                          @if (Auth::user()->avatar != null)
                            <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="">
                          @else
                            <img src="{{ asset('images/users/default.png') }}" alt="">
                          @endif
                      </a>
                    @else
                        <a href="/login">
                            <img src="{{ asset('images/users/default.png') }}" alt="">
                        </a>
                    @endif
                </div>
                <div class="block-tools d-flex align-items-center">
                  <!-- <a href="#">
                    <i class="fi fi-rr-envelope"></i>
                  </a> -->
                  <a href="#" class="btn-menu">
                    <i class="fi fi-rr-menu-burger"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link active" href="index.html">
                    <div class="flip-text">
                      <span>Accueil</span>
                    </div>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="about.html">
                    <div class="flip-text">
                      <span>A propos</span>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="shop.html">
                    <div class="flip-text">
                      <span>Shop</span>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.html">
                    <div class="flip-text">
                      <span>Blog</span>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">
                    <div class="flip-text">
                      <span>Contact</span>
                    </div>
                  </a>
                </li>
    
    
              </ul>
            </div> -->
        </div>
      </nav>
    </header>
    <div class="content-block">
        <div class="block-detail-enchere">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="text-center ">
                            <?php
                                $temps_restant_heure = date('H', strtotime($article->enchere->heure_debut)) - (now()->format('H'))  ;
                                $temps_restant_minute =  date('i', strtotime($article->enchere->heure_debut))-(now()->format('i'));
                                $temps_restant_seconde =(date('s', strtotime($article->enchere->heure_debut))- (now()->format('s')))- (date('s', strtotime($article->enchere->heure_debut))- (now()->format('s')))*2;

                                $temps_restant_heure_minute = ($temps_restant_heure * 60) + $temps_restant_minute;

                                $temps_restant_total = $article->paquet->duree - $temps_restant_heure_minute ;

                                $enchere_fini = ($temps_restant_total <= 0) ? 'true' : 'false';
                                $total_heure_restant =  $temps_restant_heure .":". $temps_restant_minute .":". $temps_restant_seconde;
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
                        @livewire('gagnant',['article'=>$article->enchere->id])
                        @livewire('counterbid',['article'=>$article->id,'article_titre'=>$article->titre,'article_paquet'=>$article->paquet_id,'article_enchere'=>$article->enchere->id,'temps_total_heure'=>$total_heure_restant,'temps_restant_seconde'=>$temps_restant_seconde])
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
@section('javascript')
@stack('script')
@endsection



