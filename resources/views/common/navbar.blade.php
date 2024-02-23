{{-- Header --}}
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-3">
    <div class="container">
        <a class="navbar-brand me-5" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerSupportedContent"
            aria-controls="headerSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle header') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="headerSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- Search Bar --}}
            <ul class="navbar-nav ms-auto search-position d-flex align-items-center">
                <form action="#" class="d-flex">
                    <input type="search" name="search" class="form-control form-control-sm me-2" placeholder="Search">
                    <button type="submit" class="btn btn-primary btn-search text-light">Search</button>
                </form>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item item-position">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item item-position">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <li class="nav-item">
                    <a class="nav-link position-relative" href="#">
                        <i class="fa-regular fa-bell custom-bell me-2"></i>
                        <span class="badge rounded-pill bell-badge">
                            10
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-heart custom-heart"></i></a>
                </li>

                <li class="nav-item me-3">
                    <a class="nav-link" href="#">
                        <div class="bag-group me-2">
                            <img src="{{ asset('images/icon-bag.svg') }}" alt="bag" class="custom-bag">
                            <span class="badge rounded-pill orange-badge">
                                5
                                <span class="visually-hidden">no item</span>
                            </span>
                        </div>
                        <div class="nav-text small">
                            <span>Shopping cart</span>
                            <span class="fw-bold">$ 31.55</span>
                        </div>
                    </a>
                </li>

                <li class="nav-item dropdown item-position">
                    @if (isset(Auth::user()->username))
                        <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bold" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }}
                        </a>
                    @else
                        <div class="d-flex align-items-center">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Singin') }}</a> /
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Singup') }}</a>
                        </div>
                    @endif


                    <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- @can('admin') --}}
                        @if (auth()->user()->role_id == 1)
                            <a class="dropdown-item" href="{{ route('admin.users') }}">
                                {{ __('Admin') }}
                            </a>
                            <hr>
                        @endif
                        {{-- @endcan --}}

                        @if (auth()->user()->role_id == 2)
                                <a class="dropdown-item" href="{{ route('buyer.myPage') }}">
                                    {{ __('My Page') }}
                                </a>
                        @endif

                        @if (auth()->user()->role_id == 3)
                            <a class="dropdown-item" href="{{ route('seller.myPage') }}">
                                {{ __('My Page') }}
                            </a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

{{-- Navbar --}}
<nav class="navbar navbar-expand-md navbar-dark shadow-sm navbar-line p-1" style="background:#071657">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto fw-bold">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
                {{-- data-bs-auto-close="outside" --}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Categories') }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @include('common.searchcondition')
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buyer.help') }}">{{ __('Help') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Opening store') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
