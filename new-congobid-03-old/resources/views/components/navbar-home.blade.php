<header class="sticky-top">
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid px-lg-3 px-xl-3 px-xxl-5 px-1">
            <div class="row w-100 ms-0">
                <div class="col-3">
                    <div class="block-avatar">
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
                </div>
                <div class="col-6 d-flex justify-content-center">
                    {{-- <div class="logo-site d-flex align-items-center">
                        <a href="/" class="block-logo d-flex">
                            <img src="images/users/default.png" alt="">
                        </a>
                    </div> --}}

                </div>
                <div class="col-3 d-flex justify-content-end">
                    <div class="block-tools d-flex align-items-center">
                        <a href="/message">
                            <i class="fi fi-rr-envelope"></i>
                        </a>
                        <a href="#" class="btn-menu">
                            <i class="fi fi-rr-menu-burger"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
