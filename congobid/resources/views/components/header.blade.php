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
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.salons.index') }}">Salons</a>
              </li> --}}
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
                    <div class="block-dropmenu">
                        <ul>
                            <li><a href="#">Tarifs</a></li>
                            <li><a href="#">Notifications</a></li>
                            <li><a href="{{route('clients.achat.bid')}}">Acheter des bids</a></li>
                            <li><a href="{{route('show.enchers-gagne')}}">Enchères gagnées</a></li>
                            {{-- <li><a href="{{ route('clients.salons.index') }}">Salons</a></li> --}}
                            <li><a href="{{ route('clients.instructions.index') }}">Comment ça marche ?</a></li>
                            <li><a href="#">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </nav>
    {{-- <nav class="navbar">
        <div class="container">
            <div class="block-language w-100 d-flex justify-content-center align-items-center">

                @if (Str::is(Config::get('languages')[App::getLocale()],'English'))
                    @foreach (Config::get('languages') as $lang => $language)

                        @if ($lang != App::getLocale())
                        <a href="{{ route('lang.switch', $lang) }}" class="active">
                            <img src="{{ asset('images/eng.jpg') }}" alt="eng" >
                        </a>
                        @endif
                    @endforeach
                @else
                    @foreach (Config::get('languages') as $lang => $language)

                        @if ($lang != App::getLocale())
                            <a href="{{ route('lang.switch', $lang) }}" class="active">
                                <img src="{{ asset('images/fr.webp') }}" alt="fr" >
                            </a>
                        @endif
                    @endforeach
                @endif

            </div>
            <div class="block-items-nav  d-flex justify-content-between align-items-center w-100">
                <div class="block-login">
                    @if (!Auth::user())

                        <a href="/register">S'inscrire</a>
                    @else
                    <div class="block-notification">
                        <span class="badge">
                            4
                        </span>
                        <span class="iconify" data-icon="eva:bell-outline">
                        </span>
                        <div class="block-content-notification">
                            <h5>Notifications</h5>
                            <div class="card">
                                <div class="content d-flex align-items-center">
                                    <div class="icon-info icon-sucess">
                                        <span class="iconify" data-icon="akar-icons:check"></span>
                                    </div>
                                    <div class="content-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, iste?</p>
                                    </div>
                                </div>
                                <div class="date">
                                    23min
                                </div>
                            </div>
                            <div class="card">
                                <div class="content d-flex align-items-center">
                                    <div class="icon-info icon-danger">
                                        <span class="iconify" data-icon="iwwa:delete"></span>
                                    </div>
                                    <div class="content-text">
                                        <p>Vous avez été foudroyé par <span>John Doe</span></p>
                                    </div>
                                </div>
                                <div class="date">
                                    5min
                                </div>
                            </div>
                            <div class="card">
                                <div class="content d-flex align-items-center">
                                    <div class="icon-info">
                                        <span class="iconify" data-icon="ant-design:info-outlined"></span>
                                    </div>
                                    <div class="content-text">
                                        <p><span>CongoBid</span> Vous informe que sa nouvelle plateforme est maintenant disponible</p>
                                    </div>
                                </div>
                                <div class="date">
                                    12:30
                                </div>
                            </div>
                            <a href="/notification" class="more">Voir plus</a>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="block-logo">
                    <div class="logo">
                        <a href="/">
                            <img src="images/logo.png" alt="logo-congobid">
                        </a>
                    </div>
                </div>
                <div class="block-user d-flex align-items-center">
                    <div class="avatar-user">
                        @if (Auth::user())
                            @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                                <a class="icon-user" href="{{ route('profil') }}">
                                    <span class="iconify" data-icon="bx:bx-user">
                                    </span>
                                </a>
                            @else
                                <a class="avatar" href="{{ route('profil') }}">
                                    @if (Auth::user()->role_id == 5)
                                        <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                                    @else
                                        <img src="{{ asset('images/profil/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                                    @endif
                                </a>
                            @endif
                        @else
                            <a class="icon-user" href="{{ route('profil') }}">
                                <span class="iconify" data-icon="bx:bx-user"></span>
                            </a>
                        @endif
                    </div>
                    <div class="dropmenu">
                        <span class="iconify" data-icon="eva:menu-outline"></span>
                    </div>
                </div>
            </div>
            <div class="block-search w-100 mt-3">
                <form action="">
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Recherche..." aria-label="Recherche..."
                            aria-describedby="button-addon2" name="input-search" wire:model='search'>
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2" name="btn-search">
                            <span class="iconify" data-icon="akar-icons:search"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav> --}}
</header>
