<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-4">

                    @if (Auth::user()->avatar == 'default.png' ||
                            Auth::user()->avatar == 'default.jpg' ||
                            Auth::user()->avatar == 'users/default.png' ||
                            Auth::user()->avatar == '' ||
                            Auth::user()->avatar == null)
                        <div class="avatar">
                            <img src="{{ asset('images/users/avatar2.png') }}" alt="{{ Auth::user()->nom }}"
                                class="avatar-img rounded-circle mr-2">
                        </div>
                    @else
                        <div class="avatar">
                            <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->nom }}"
                                class="avatar-img rounded-circle mr-2">
                        </div>
                    @endif
                </div>
                <div class="info mx-4">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span class=user_name>
                            {{ Auth::user()->nom ?? '' }}

                        </span>
                        <span class="user_role">
                            {{ Auth::user()->role->name ?? '' }}

                        </span>
                    </a>
                    <div class="clearfix"></div>


                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item  {{ request()->is('tableau-de-bord/administrator') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Tableau de bord</p>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->is('tableau-de-bord/creation/agent') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/agents') ? 'active' : '' }} ">
                    <a href="{{ route('agents.index') }}">
                        <i class="fas fa-user"></i>
                        <p>Administrateurs</p>
                    </a>

                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/bideur') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/bideurs') ? 'active' : '' }} " ">
                    <a href="{{ route('bideurs.index') }}">

                        <i class="fas fa-hands"></i>
                        <p>Utilisateurs</p>
                    </a>

                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/article') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/articles') ? 'active' : '' }}">
                    <a href="{{route('articles.index')}}">
                        <i class="fas fa-home"></i>
                        <p>Articles</p>
                    </a>

                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/enchere') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/encheres') ? 'active' : '' }}">
                    <a href="{{ route('encheres.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Enchères</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/salons') ? 'active' : '' }}">
                    <a href="{{ route('salons.index') }}">
                        <i class="fas fa-coins"></i>
                        <p>Salons</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/categorie') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/sous-categories') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/categories') ? 'active' : '' }} " >
                    <a data-toggle="collapse" href="#categories">
                        <i class="fas fa-layer-group"></i>
                        <p>Paquets & Catégories</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/envoie/bid/list') ? 'active' : '' }}">
                    <a href="{{ route('envoie.index') }}">
                        <i class="fas fa-coins"></i>
                        <p>Envoie des bids</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/bid') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/bids') ? 'active' : '' }}">
                    <a href="{{ route('bids.index') }}">
                        <i class="fas fa-home"></i>
                        <p>VAleur des bids</p>

                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/gagnants') ? 'active' : '' }}">
                    <a href="{{ route('gagnants.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Gagnants</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/comment-ca-marche') ? 'active' : '' }}">
                    <a href="{{ route('commentcamarche.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Comment ça marche ?</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/politique') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/politiques') ? 'active' : '' }}">
                    <a href="{{ route('politiques.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Conditions d'utilisation</p>
                    </a>

                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/faq') ? 'active' : '' }} ?? {{ request()->is('tableau-de-bord/faqs') ? 'active' : '' }}">
                    <a href="{{ route('faqs.index') }}">
                        <i class="fas fa-home"></i>
                        <p>FAQ</p>
                    </a>

                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/newsletters') ? 'active' : '' }}">
                    <a href="{{ route('newsletters.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Newsletters</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('tableau-de-bord/historiques') ? 'active' : '' }}">
                    <a href="{{ route('historiques.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Historiques</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
