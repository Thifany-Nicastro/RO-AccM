<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        <nav class="navbar navbar-expand-md my-5" id="header-nav">
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}"><i class="fas fa-home fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.personagens')}}"><i class="fas fa-address-card fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.album')}}"><i class="fas fa-images fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.inventario')}}"><i class="fas fa-box-open fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.carteira')}}"><i class="fas fa-wallet fa-lg"></i></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('user.builds')}}"><i class="fas fa-clipboard-list fa-lg"></i></i></a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{route('user.configs')}}"><i class="fas fa-cog fa-lg"></i></a> --}}
                    </li>
                </ul>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-md-center m-0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tags-nav">
                            <li class="nav-item active">
                                <a class="nav-link n" href="#">Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link n" href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link n" href="#">A-B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link n" href="#">...</a>
                            </li>
                        </ul>
                    </div>
                </div>

                @yield('content')
            </div>
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>

</html>