<header>
    <nav class="navbar navbar-expand-lg sticky-top nav-bid">
      <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5 px-1">
        <div class="row w-100 ms-0 align-items-center">
          <div class="col-3">
            <a href="javascript:history.go(-1)" class="back"><i class="fi fi-rr-angle-left"></i>Retour</a>
          </div>
          <div class="col-6 px-0 d-flex align-items-center">
            <div class="info-bid">
                <div class="row">
                    <div class="col-12">
                        <p>IPHONE 14 Pro Max</p>
                    </div>
                    <div class="col-12">
                        <p>Prix congoBid: <span>2$</span></p>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center ">
            <div class="block-avatar me-3">
                @if (Auth::user())
                  <a href="/profil">
                      @if (Auth::user()->avatar != null)
                          <img src="{{ asset('images/users/' . Auth::user()->avatar) }}" alt="">

                      @else

                      <img src="{{ asset('images/users/default.png') }}" alt="">
                      @endif
                  </a>
                @else
                    <a href="/login">
                        <img src="{{ asset('images/users/default.png') }}" alt="">
                    </a>
                @endif
            </div>
            <div class="block-tools d-flex align-items-center">
              <!-- <a href="#">
                <i class="fi fi-rr-envelope"></i>
              </a> -->
              <a href="#" class="btn-menu">
                <i class="fi fi-rr-menu-burger"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link active" href="index.html">
                <div class="flip-text">
                  <span>Accueil</span>
                </div>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="about.html">
                <div class="flip-text">
                  <span>A propos</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">
                <div class="flip-text">
                  <span>Shop</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">
                <div class="flip-text">
                  <span>Blog</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">
                <div class="flip-text">
                  <span>Contact</span>
                </div>
              </a>
            </li>


          </ul>
        </div> -->
    </div>
  </nav>
</header>
