<header class="sticky-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5 px-1">
          <a class="navbar-brand" href="/">
            <img src="{{asset('images/logo.png')}}" alt="logo-congobid">
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
                <a class="nav-link active" href="#">Tarifs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.salons.index') }}">Salons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.instructions.index') }}">Comment ça marche ?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nous contacter</a>
              </li>
            </ul>
        </div>
          <div class="block-items d-flex align-items-center">
            @livewire('seach')
            <div class="block-link d-flex align-items-center">
                <ul class="d-flex mb-0 language">
                    @if (Str::is(Config::get('languages')[App::getLocale()],'English'))
                    @foreach (Config::get('languages') as $lang => $language)

                        @if ($lang != App::getLocale())
                        <li>

                            <a href="{{ route('lang.switch', $lang) }}" class="active">
                                FR
                            </a>
                        </li>
                        @endif
                    @endforeach
                    @else
                        @foreach (Config::get('languages') as $lang => $language)

                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}" class="active">
                                        ENG
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                    {{-- <li>
                        <a href="#">FR</a>
                    </li> --}}
                    {{-- <li>
                        <a href="#">ENG</a>
                    </li> --}}
                </ul>
                <div class="links d-flex justify-content-end">
                    <a href="/profil">
                        <div class="icon">
                            <span class="iconify" data-icon="fa:user"></span>
                        </div>
                    </a>
                    <a href="/profil" class="humber">
                        <div class="icon">
                            <span class="iconify" data-icon="eva:menu-outline"></span>
                        </div>
                    </a>
                    <div class="dropdown">
                        <a  class="humber" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
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
            </div>
          </div>
        </div>
      </nav>

</header>
