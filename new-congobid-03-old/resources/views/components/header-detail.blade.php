<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5 px-1">
            <a href="/" class="back text-white">
                <span>
                    <span class="iconify" data-icon="la:angle-left"></span>
                </span>
                Retour
            </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.achat.bid') }}">Achat des bids</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Enchères
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('show.enchers') }}">Enchères encours</a></li>
                  <li><a class="dropdown-item" href="{{ route('show.enchers-future') }}">Enchères futures</a></li>
                  <li><a class="dropdown-item" href="{{ route('show.enchers-gagne') }}">Enchères gagnées</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/tarif">Tarifs</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.instructions.index') }}">Comment ça marche ?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('favoris')}}">Favoris</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/chat">chat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.salons.index') }}">Salons</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Nous contacter</a>
              </li>
            </ul>
        </div>

            <div class="block-items d-flex align-items-center">
                @if (Auth::user())
                    <a href="/profil">
                        @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                            <div class="icon">
                                <img src="{{ asset('images/users/default.png') }}" alt="" srcset="" class="rounded-pill mx-2" style="width: 30px;height:30px; background: #fff; border: 2px solid #fff;">
                            </div>
                        @else

                            <div class="icon">
                                <img src="{{ asset('images/users/' . Auth::user()->avatar ) }}" alt="" srcset="" class="rounded-pill mx-2" style="width: 30px;height:30px;">
                            </div>
                        @endif
                    </a>
                @else
                    <a href="/profil">
                        <div class="icon">
                            <span class="iconify" data-icon="fa:user"></span>
                        </div>
                    </a>
                @endif
                <div class="dropdown d-md-none">
                    <a style="font-size: 22px;" class="humber text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <div class="icon">
                            <span class="iconify" data-icon="eva:menu-outline"></span>
                        </div>
                    </a>

                </div>

                <div class="offcanvas offcanvas-end d-md-none" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="    width: 250px;
                    border-radius: 40px 0px 0px 40px;">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Menu</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0">
                        <div class="d-block">
                            <div class="link-menu">
                                <a href="/tarif" class="fw-bold fs-3 text-black-50 text-black-50"> Tarifs</a>
                            </div>
                            {{-- <div class="link-menu">
                                <a href="#" class="fw-bold fs-3 text-black-50 text-black-50">Notifications</a>
                            </div> --}}
                            <div class="link-menu">
                                <a href="/favoris" class="fw-bold fs-3 text-black-50 text-black-50">Favoris</a>
                            </div>
                            <div class="link-menu">
                                <a href="{{route('clients.achat.bid')}}" class="fw-bold fs-3 text-black-50">Acheter des bids</a>
                            </div>
                            <div class="link-menu">
                                <a href="{{route('show.enchers-gagne')}}" class="fw-bold fs-3 text-black-50">Enchères gagnées</a>
                            </div>
                            <div class="link-menu">
                                <a href="{{route('show.enchers-ferme')}}" class="fw-bold fs-3 text-black-50">Enchères fermées</a>
                            </div>
                            <div class="link-menu">
                                <a href="/profil" class="fw-bold fs-3 text-black-50">Profile</a>

                            </div>
                            <div class="link-menu">
                                <a href="/chat" class="fw-bold fs-3 text-black-50">Chat</a>
                            </div>
                            <div class="link-menu">
                                <a href="{{ route('clients.instructions.index') }}" class="fw-bold fs-3 text-black-50">Comment ça marche</a>
                            </div>
                            <div class="link-menu">
                                <a href="/contact" class="fw-bold fs-3 text-black-50">Nous contactez</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </nav>
</header>
