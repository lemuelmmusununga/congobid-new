<!DOCTYPE html>
<html lang="fr">

<head>
    @include('admin.layouts.partials.meta.meta')

    @include('admin.layouts.partials.meta.stylesheet')

    @livewireStyles

    @yield('css')
</head>

<body>
    <div class="wrapper">
        <div class="main-header">

            @include('admin.layouts.partials.header.header')

            @include('admin.layouts.partials.header.navbar')

        </div>

        @include('admin.layouts.partials.header.sidebar')

        <div class="main-panel">
            <div class="content">
                @if (session('erreur'))
                    <div class="alert alert-danger">
                        {{ session('erreur') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @livewireScripts
                @yield('body')

            </div>



        </div>
    </div>
    @include('admin.layouts.partials.meta.script')

    @yield('javascript')
</body>
    {{-- @include('admin.layouts.partials.footer.footer') --}}
</html>
