<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GorDiSalon') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .link {
            text-decoration: underline;
            color: black;
        }

        .borderWord {
            -webkit-text-stroke-width: 0.2px;
            -webkit-text-stroke-color: black;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {!! str_replace('GorDiSalon', 'GorDi<span class="text-warning borderWord">Salon</span>', config('app.name', 'GorDiSalon')) !!}
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if(auth()->user() && auth()->user()->role && (auth()->user()->role->name == 'Customer' || auth()->user()->role->name == null))
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/services') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/stylists') }}">Stylists</a>
                            </li>
                        </ul>
                    @endif


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <a href="tel:1234567890" class="nav-link">+(380)-956-778-090</a>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            <div class="d-flex align-items-top">
                <div>
                    @if(auth()->check())
                        @if(auth()->user()->role->name == 'Admin')
                            @include('layouts.admin') 
                        @elseif(auth()->user()->role->name == 'Stylist') 
                            @include('layouts.stylist') 
                        @elseif(auth()->user()->role->name == 'Customer') 
                            @include('layouts.customer') 
                        @elseif(auth()->user()->role->name == 'Manager') 
                            @include('layouts.manager')
                        @endif
                    @endif
                </div>
                @yield('content')
            </div>
        </main>
    </div>
</body>

<footer class="p-3"
    style="position:fixed; bottom: 0; width: 100%; background-color: rgb(70, 53, 39); color: white; font-size: 20px; text-align: center; margin-top: 2rem;" >
    <p>&copy; 2024 GorDi<span class="text-warning borderWord">Salon</span></p>
</footer>

</html>