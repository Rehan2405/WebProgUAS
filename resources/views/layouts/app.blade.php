<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Muhammad Rehan') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<style>
  .navbar{
    justify-content: center;
    align-items:center;
    background-color: aquamarine;
    color: black;
    
  }
  h1.title{
    font-size: xx-large;
  }
</style>
<nav class="navbar"> 
  <div class="container justify-content-center">
    <h1 class="title">Amazing E-Grocery</h1>      
  </div> 
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-warning" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      {{-- <a class="btn btn-warning mb-auto" href="/" role="button">Sign Out</a> --}}
</div>
</nav>
</nav>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-warning shadow-sm ">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        @auth
                            @if (auth()->user()->role == 'member')
                            <li class="nav-item">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/welcome">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/cart">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/profile">Profile</a>
                                </li>
                            @endif
                            @if (auth()->user()->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/dashboard">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/profil">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/user">Account Maintenance</a>
                                </li>
                            @endif
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
