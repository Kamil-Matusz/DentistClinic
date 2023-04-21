<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dentist Clinic') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md sticky-top navbar-light shadow-sm" style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Dentist Clinic', 'Dentist Clinic') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.index') }}">Services</a>
                        </li>
                        @can('isUser')
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.implants') }}">Implants</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.dentalSurgery') }}">Dental Surgery</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.childrenDentistry') }}">Children Dentistry</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.prevention') }}">Prevention</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                        </li>
                        @endcan
                        @can('isAdmin')
                        <li class="nav-item">
                        <a class="nav-link" href="/users/list">User List</a>
                        </li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
</body>
</html>
