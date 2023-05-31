<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366, maximum-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <title>@yield('title', 'Dashboard')</title>
</head>

<body>
    <div class="container-fluid">
        @if (auth()->check()) // Jika pengguna sudah login
        <!-- Navbar 2 -->
        <nav class="navbar navbar-expand navbar-dark bg-white sticky-top">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('images/aperga.png') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pencarian') }}">Cari PRT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentangaplikasi') }}">Tentang Aplikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bantuan') }}">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    @else
        <!-- Navbar 1 -->
        <nav class="navbar navbar-expand navbar-dark bg-white sticky-top">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('images/aperga.png') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pencarian') }}">Cari PRT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentangaplikasi') }}">Tentang Aplikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bantuan') }}"> Pusat Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                    </li>
                    </li>
                </ul>
            </div>
        </nav>
    @endif


        <div class="content">
            @yield('konten')
        </div>

        <br />
        <br />

        @yield('footer')

    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('styles')
    @stack('scripts')
</body>

</html>
