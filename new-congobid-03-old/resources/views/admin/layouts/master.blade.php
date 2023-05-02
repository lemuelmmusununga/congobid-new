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
                @livewireScripts
                @yield('body')

            </div>

            @include('admin.layouts.partials.footer.footer')


        </div>
    </div>
    @include('admin.layouts.partials.meta.script')

    @yield('javascript')
</body>

</html>
