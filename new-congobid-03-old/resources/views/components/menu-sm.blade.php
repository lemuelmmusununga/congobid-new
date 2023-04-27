<div class="menu-sm">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4>Menu</h4>
            <div class="btn-close-menu">
                <i class="fi fi-rr-cross"></i>
            </div>
        </div>
        <ul>
            <li>
                <a href="/">Acceuil</a>
            </li>
            <li>
                <a href="/articles">Nos aticles</a>
            </li>
            <li>
                <a href="/tarif">Tarifs</a>
            </li>
            <li>
                <a href="{{route('show.enchers-ferme')}}">Enchères clôturées</a>
            </li>
            <li>
                <a href="/salons">Salons</a>
            </li>
            <li>
                <a href="/chat">Chats</a>
            </li>
            <li>
                <a href="{{ route('clients.instructions.index') }}">Comment ça marche</a>
            </li>
            <li>
                <a href="#">Obtenir gratuitement des bids</a>
            </li>
        </ul>

        {{-- action="" method="POST" --}}
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

    </div>
</div>
