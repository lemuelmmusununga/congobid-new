<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-4">

                    @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                        <div class="avatar">
                            <img src="{{ asset('images/users/avatar2.png') }}" alt="{{ Auth::user()->nom }}" class="avatar-img rounded-circle mr-2">
                        </div>
                    @else
                        <div class="avatar">
                            <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->nom }}" class="avatar-img rounded-circle mr-2">
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
                <li class="nav-item  {{ request()->is('tableau-de-bord/administrator') ? 'active' : ''}}">
                    <a href="{{ route('admin.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Tableau de bord</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/agent') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/agents') ? 'active' : ''}} " >
                    <a data-toggle="collapse" href="#agents">
                        <i class="fas fa-user"></i>
                        <p>Gestion des Agents</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="agents">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('agents.create',) }}">
                                    <span class="sub-item">Ajouter un agent</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('agents.index') }}">
                                    <span class="sub-item">Voir les agents</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/bideur') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/bideurs') ? 'active' : ''}} " ">
                    <a data-toggle="collapse" href="#bideurs">
                        {{-- <i class="fas fa-layer-group"></i> --}}
                        <i class="fas fa-hands"></i>
                        <p>Gestion des Bideurs</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bideurs">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('bideurs.create',) }}">
                                    <span class="sub-item">Ajouter un bideur</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('bideurs.index') }}">
                                    <span class="sub-item">Voir les bideurs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/article') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/articles') ? 'active' : ''}}">
                    <a data-toggle="collapse" href="#articles">
                        <i class="fas fa-home"></i>
                        <p>Gestion des Articles</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="articles">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('articles.create') }}">
                                    <span class="sub-item">Ajouter un article</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('articles.index') }}">
                                    <span class="sub-item">Voir les articles</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/enchere') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/encheres') ? 'active' : ''}}">
                    <a href="{{ route('encheres.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Gestion des Enchères</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="#encheres">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('encheres.create') }}">
                                    <span class="sub-item">Ajouter une enchère</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('encheres.index') }}">
                                    <span class="sub-item">Voir les enchère</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/categorie') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/sous-categories') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/categories') ? 'active' : ''}} " >
                    <a data-toggle="collapse" href="#categories">
                        <i class="fas fa-layer-group"></i>
                        <p>Gestions des Catégories</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="categories">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('paquets.create') }}">
                                    <span class="sub-item">Ajouter une catégorie</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}">
                                    <span class="sub-item">Voir les sous-catégories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('paquets.index') }}">
                                    <span class="sub-item">Voir les catégories</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/demande/bid') ? 'active' : ''}}">
                    <a href="{{ route('demande.index') }}">
                        <i class="fas fa-coins"></i>
                        <p>Demande des bids</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/bid') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/bids') ? 'active' : ''}}">
                    <a data-toggle="collapse" href="#bids">
                        <i class="fas fa-home"></i>
                        <p>Gestion des bids</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bids">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('bids.create') }}">
                                    <span class="sub-item">Ajouter des bids</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('bids.index') }}">
                                    <span class="sub-item">Voir les bids</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/gagnants') ? 'active' : ''}}">
                    <a href="{{ route('gagnants.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Gestion des Gagnants</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/comment-ca-marche') ? 'active' : ''}}">
                    <a href="{{ route('commentcamarche.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Comment ça marche ?</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/politique') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/politiques') ? 'active' : ''}}">
                    <a data-toggle="collapse" href="#politiques">
                        <i class="fas fa-home"></i>
                        <p>Conditions d'utilisation</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="politiques">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('politiques.create') }}">
                                    <span class="sub-item">Ajouter une condition d'utilisation</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('politiques.index') }}">
                                    <span class="sub-item">Voir les conditions d'utilisation</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/creation/faq') ? 'active' : ''}} ?? {{ request()->is('tableau-de-bord/faqs') ? 'active' : ''}}">
                    <a data-toggle="collapse" href="#faqs">
                        <i class="fas fa-home"></i>
                        <p>FAQ</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="faqs">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('faqs.create') }}">
                                    <span class="sub-item">Ajouter une question</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faqs.index') }}">
                                    <span class="sub-item">Voir les questions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->is('tableau-de-bord/newsletters') ? 'active' : ''}}">
                    <a href="{{ route('newsletters.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Newsletters</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('tableau-de-bord/historiques') ? 'active' : ''}}">
                    <a href="{{ route('historiques.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Historiques</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
