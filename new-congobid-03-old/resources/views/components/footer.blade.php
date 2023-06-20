<div class="navbottom">
    <div class="container-fluid">
        <div class="block-icon-nav d-flex justify-content-between align-items-center">

            <a href="/salon" class="icon-nav {{ $page == 0 ? 'active' : '' }} ">
                <div class="icon">
                    <span class="iconify" data-icon="ci:chat"></span>
                </div>
                <span class="title">Salon</span>
            @if (Auth::user())

                <a href="/chat" class="icon-nav {{ $page == 1 ? 'active' : '' }}">
                    <div class="icon">
                        <span class="iconify" data-icon="eva:message-square-outline">
                        </span>
                        {{-- <span class="blink"></span> --}}
                    </div>

                    <span class="title">Chat</span>
                </a>
            @else
                <a href="/login" class="icon-nav {{ $page == 1 ? 'active' : '' }}">
                    <div class="icon">
                        <span class="iconify" data-icon="eva:message-square-outline">
                        </span>
                        {{-- <span class="blink"></span> --}}
                    </div>

                    <span class="title">Chat</span>
                </a>
            @endif
            <a href="{{route('index')}}" class="icon-nav {{ $page == 2 ? 'active' : '' }}">
                <div class="icon">
                    <span class="iconify" data-icon="fluent:home-16-regular"></span>
                </div>
                <span class="title">Accueil</span>
            </a>
            <a href="/notification" class="icon-nav {{ $page == 3 ? 'active' : '' }}">
                <div class="icon">
                    <span class="iconify" data-icon="eva:bell-outline">
                    </span>
                    {{-- <span class="blink"></span> --}}
                </div>
                <span class="title">Notification</span>
            </a>
            <a href="/profil" class="icon-nav {{ $page == 4 ? 'active' : '' }}">
                <div class="icon">
                    <span class="iconify" data-icon="bx:bx-user"></span>
                </div>
                <span class="title">Profil</span>
            </a>
        </div>
    </div>
</div>

{{-- class="{{ Route::is('dashboard.index') ? 'active' : '' }}" --}}
