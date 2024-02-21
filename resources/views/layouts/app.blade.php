<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- FONTAWESOME --}}
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        {{-- JQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Styles -->
        {{-- css for all pages --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/searchcondition.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
        {{-- Specific page css --}}
        @stack('css')

        {{-- js for all pages --}}
        {{-- Searchcondition.js --}}
        <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
        {{-- Footer.js --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js"></script>
        <script src="{{ asset('js/searchcondition.js') }}" defer></script>
        {{-- Footer.js --}}
        <script src="{{ asset('js/footer.js') }}" defer></script>

    </head>

    <body>

        <div id="app">
            {{-- navbar --}}
            @include('common.navbar')

            <main>
                <div
                    @if (request()->is('/') || request()->is('home') || request()->is('product')) class="py-5 container-fluid"
                    @else class="py-5 container" @endif>
                    <div class="row justify-content-center">

                        {{-- Sidebar --}}
                        @auth
                            @if (request()->is('admin/*') || request()->is('buyer/*') || request()->is('seller/*'))
                                @include('common.sidebar')
                            @endif
                        @endauth

                        @if (request()->is('ranking/*'))
                            @include('ranking-sidebar')
                        @endif

                        @if (request()->is('categorize'))
                            @include('categorize-sidebar')
                        @endif

                        {{-- Content --}}
                        <div class="col-9">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @include('common.footer')

        {{-- Scripts --}}
        {{-- Specific page js --}}
        @stack('js')
    </body>

</html>
