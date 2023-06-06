<header class="sticky-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5 px-1">
            <a href="javascript:history.go(-1)" class="back text-white">
                <span>
                    <span class="iconify" data-icon="la:angle-left"></span>
                </span>
                Accueil
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
        <div class="dropdown d-md-none">
            <a style="font-size: 22px;" class="humber text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <div class="icon">
                    <span class="iconify" data-icon="eva:menu-outline"></span>
                </div>
            </a>

        </div>

        </div>
    </nav>
</header>
