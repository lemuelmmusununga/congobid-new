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
        
    </div>
  </nav>
</header>
