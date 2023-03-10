<header class="sticky-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5 px-1">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{asset('images/logo/logo.png')}}" alt="logo-congobid">
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
                    <a class="nav-link" href="{{ route('clients.salons.index') }}">Salons</a>
                </li>
                {{-- <li class="nav-item">

                    <a class="nav-link" href="{{ route('clients.instructions.index') }}">Comment ça marche ?</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('favoris')}}">Favoris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/chat">chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Nous contacter</a>
                </li>
                </ul>
            </div>
            <div class="block-items d-flex align-items-center">
                @livewire('seach')
                <div class="block-link d-flex align-items-center">
                    <div class="notify">
                        <div class="dropdown">
                            <i class="bi bi-bell text-white mx-3 dropdown-toggle" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 30px;height:30px; font-size: 20px;margin-bottom:5px "></i>
                            <div class="dropdown-menu block-notification" aria-labelledby="dropdownMenuButton">
                                <div class="header">
                                    <h5>Notifications</h5>
                                </div>
                                <div class="content-notif">
                                    <div class="block-notif">
                                        @foreach ($publics as $public)
                                        <div class="block d-flex align-items-start justify-content-start">
                                            <div class="icon">
                                                <i class="bi bi-bell"></i>
                                            </div>

                                            <div class="content-info">
                                                <p><span>CongoBid</span>{{ $public->message }}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="date">{{ $public->created_at->diffForHumans() }}</span>
                                                    {{-- <a href="{{ route('destroy.notif',['id'=>$public->id]) }}" class="delete">Supprimer</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @if(Auth::user())
                                        @foreach ($notifications as $notify)
                                        <div class="block d-flex align-items-start justify-content-start">
                                            <div class="icon valid">
                                                <i class="bi bi-check-lg"></i>
                                            </div>
                                            <div class="content-info">
                                                <p>{{ $notify->message }}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="date">{{ $public->created_at->diffForHumans() }}</span>
                                                    <a href="{{ route('destroy.notif',['id'=>$notify->id]) }}" class="delete">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                {{-- @foreach ($publics as $public)
                                    <div>
                                        <div class="container-fluid p-0">
                                            <div class="row w-100 m-0">
                                                <div class="col-md-12 col-sm-12 p-0">
                                                    <p><span>CongoBid</span> {{ $public->message }} <small style="font-size: 10px;">{{ $public->created_at->diffForHumans() }} </small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                @endforeach
                                @if(Auth::user())
                                    @if (count($notifications) < 1 && count($publics) < 1  )
                                        <a class="dropdown-item">Pas des notifications</a></li>
                                    @endif
                                    @foreach ($notifications as $notify)
                                    <div>
                                        <div class=" container">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 ">
                                                    <p>{{ $notify->message }} <small style="font-size: 10px;">{{ $notify->created_at->diffForHumans() }} <a class="text-danger mx-2" href="{{ route('destroy.notif',['id'=>$notify->id]) }}">Supprimer</a> </small></p>
                                                </div>

                                            </div>

                                            <hr>
                                        </div>

                                    </div>
                                    @endforeach

                                @endif --}}
                            </div>
                        </div>
                    </div>
                    <div class="links d-flex justify-content-end">
                        @if (Auth::user())
                            <a href="/profil">
                                @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                                    <div class="icon">
                                        <img src="{{ asset('images/users/default.png') }}" alt="" srcset="" class="rounded-pill" style="width: 30px;height:30px; background: #fff; border: 2px solid #fff;font-size: 20px;">
                                    </div>
                                @else

                                    <div class="icon">
                                        <img src="{{ asset('images/users/' . Auth::user()->avatar ) }}" alt="" srcset="" class="rounded-pill" style="width: 30px;height:30px;font-size: 20px;">
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
                            <a  class="humber text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="font-size: 22px;">
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
                                        <a class="nav-link" href="{{ route('clients.salons.index') }}">Salons</a>
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
