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
        <main class="py-4">
            <div class="d-flex">
                <div class="card text-bg-dark" style="width: 18rem;">
                    <div class="card-header">Navigation</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a style="color: black"
                                class="{{  strpos($currentPath, 'customer') !== false ? 'link link-underline-warning' : '' }}"
                                href="{{ route('customer.index') }}">Customers</a>
                        </li>
                        <li class="list-group-item">
                            <a style="color: black"
                                class="{{  strpos($currentPath, 'service') !== false ? 'link link-underline-warning' : '' }}"
                                href="{{ route('service.index') }}">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>


</body>

</html>