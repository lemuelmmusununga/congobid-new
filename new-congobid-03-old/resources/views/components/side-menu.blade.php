<div class="side-menu">
    <div class="block-user">
        @if (Auth::user())
            <div class="block-name-user">
                {{-- ici lorsque l'utilisateur est connecté --}}
                <h6>Salut <br> <span class="name">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>
                    <br> <span class="pseudo">{{ '@' }}{{ Auth::user()->username }}</span>
                </h6>
            </div>
            <div class="block-avatar">
                @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                    <div class="icon">
                        <span class="iconify" data-icon="bx:bx-user"></span>
                    </div>
                @else
                    <div class="avatar">
                        @if (Auth::user()->role_id == 5)
                            <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                        @else
                            <img src="{{ asset('images/profil/' . Auth::user()->avatar) }}" alt="Image de {{ Auth::user()->username }}">
                        @endif
                    </div>
                @endif
            </div>
        @else
            <a href="{{ route('login') }}">
                Se connecter
            </a>
            <div class="block-avatar">
                <div class="icon">
                    <span class="iconify" data-icon="bx:bx-user"></span>
                </div>
            </div>
        @endif


        <div class="close-menu">
            <span></span>
            <span></span>
        </div>

    </div>
    <div class="block-content">
        <div class="block-items">
            {{-- ici lorsque l'utilisateur est connecté --}}
            @if (Auth::user())
                <ul class="block-profil">
                    @if (Auth::user()->role_id != 5)
                        <li>
                            <a href="{{ route('admin.index') }}">
                                <span class="iconify" data-icon="bx:bx-home"></span>
                                <span class="title">
                                    Tableau de bord
                                </span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="/profil">
                            <span class="iconify" data-icon="bx:bx-user"></span>
                            <span class="title">
                                Profil
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="bi:wallet"></span>
                            <span class="title">
                                Solde
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="file-icons:powerbuilder"></span>
                            <span class="title">
                                Options
                            </span>
                        </a>
                    </li>
                </ul>
                <ul class="block-notif">
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="akar-icons:heart"></span>
                            <span class="title">
                                Favoris
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:bell"></span>
                            <span class="title">
                                Notifications
                            </span>
                        </a>
                    </li>
                </ul>
                <ul class="block-trophy">
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="akar-icons:trophy"></span>
                            <span class="title">
                                Enchères gagnées
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:dollar"></span>
                            <span class="title">
                                Tarifs
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="lucide:users"></span>
                            <span class="title">
                                Gagner des bids
                            </span>
                        </a>
                    </li>
                </ul>
                <ul class="block-about">
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="carbon:pen"></span>
                            <span class="title">
                                A propos
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="grommet-icons:help"></span>
                            <span class="title">
                                Aide
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:cog"></span>
                            <span class="title">
                                Paramètres
                            </span>
                        </a>
                    </li>
                    <li>
                        @if (Auth::user())
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" href="{{ route('logout') }}" class="btn btn-action">
                                    Déconnexion
                                </button>
                            </form>
                        @else
                        <a  href="{{ route('login') }}" class="btn btn-action">
                                Se Connecter
                        </a>
                        @endif

                    </li>
                </ul>
            @else
                {{-- ici lorsque l'utilisateur n'est pas connecté --}}
                <ul class="block-trophy">
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:dollar"></span>
                            <span class="title">
                                Tarifs
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:dollar"></span>
                            <span class="title">
                                Notification
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:dollar"></span>
                            <span class="title">
                                Acheter des bids
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:dollar"></span>
                            <span class="title">
                                Enchères gagnées
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:dollar"></span>
                            <span class="title">
                                Salon
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:dollar"></span>
                            <span class="title">
                                Comment ça marche
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:dollar"></span>
                            <span class="title">
                                Nous contacter
                            </span>
                        </a>
                    </li>
                </ul>
                <ul class="block-about">
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="carbon:pen"></span>
                            <span class="title">
                                A propos
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="grommet-icons:help"></span>
                            <span class="title">
                                Aide
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="iconify" data-icon="cil:cog"></span>
                            <span class="title">
                                Paramètres
                            </span>
                        </a>
                    </li>
                </ul>
            @endif


        </div>
    </div>
</div>
