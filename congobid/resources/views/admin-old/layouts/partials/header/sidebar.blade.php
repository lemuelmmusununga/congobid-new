<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @if ((Auth::user()->avatar == "default.png") || (Auth::user()->avatar == "default.jpg") || (Auth::user()->avatar == "users/default.png") || (Auth::user()->avatar == "") || (Auth::user()->avatar == null))
                        <div class="icon">
                            <span class="iconify" data-icon="bx:bx-user"></span>
                        </div>
                    @else
                        <div class="avatar">
                            <img src="{{ asset('images/profil/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->nom }}" class="avatar-img rounded-circle">
                        </div>
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->nom }}
                            <span class="user-level">{{ Auth::user()->administrateurs->first()->poste }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="{{ route('admin.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Statistiques</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#agents">
                        <i class="fas fa-layer-group"></i>
                        <p>Agents</p>
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
                <li class="nav-item">
                    <a data-toggle="collapse" href="#bideurs">
                        <i class="fas fa-layer-group"></i>
                        <p>Bideurs</p>
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
                <li class="nav-item">
                    <a data-toggle="collapse" href="#categories">
                        <i class="fas fa-layer-group"></i>
                        <p>Cat??gories</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="categories">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('categories.create') }}">
                                    <span class="sub-item">Ajouter une cat??gorie</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('categories.index') }}">
                                    <span class="sub-item">Voir les sous-cat??gories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('paquets.index') }}">
                                    <span class="sub-item">Voir les cat??gories</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#articles">
                        <i class="fas fa-layer-group"></i>
                        <p>Articles</p>
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
                <li class="nav-item">
                    <a data-toggle="collapse" href="#bids">
                        <i class="fas fa-layer-group"></i>
                        <p>Taux de conversion</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bids">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('bids.create') }}">
                                    <span class="sub-item">Ajouter un taux de conversion</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('bids.index') }}">
                                    <span class="sub-item">Voir les taux de conversion</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gagnants.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Gagnants</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('newsletters.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Newsletters</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('historiques.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Historiques</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
