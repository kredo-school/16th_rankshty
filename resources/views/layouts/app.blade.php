<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
      @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Footer.js --}}
      <script src="{{ asset('js/footer.js') }}" defer></script>
</head>
<body>

    <div id="app">
        {{-- navbar --}}
        @include('common.navbar')

        <main class="py-5">
            <div class="container">
                <div class="row justify-content-center">

                    {{-- Sidebar --}}
                    {{-- @auth --}}
                    @include('common.sidebar')
                    {{-- @endauth --}}

                    {{-- Content --}}
                    <div class="col-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
    @include('common.footer')

</body>
</html>
