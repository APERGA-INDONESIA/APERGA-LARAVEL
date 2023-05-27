<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/poppins@latest/css/poppins.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>@yield('title', 'Dashboard')</title>
</head>
<body>
@yield('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-light sticky-top">
    <a href="http://localhost:8000/dashboard">
        <img src="{{ asset('images/aperga.png') }}" alt="Logo" class="logo" style="margin-left: 100px;">
    </a>
    <ul class="menu">
        <li class="menu-item"><a href="http://localhost:8000/cariPRT">Cari PRT</a></li>
        <li class="menu-item"><a href="http://localhost:8000/tentangaplikasi">Tentang Aplikasi</a></li>
        <li class="menu-item"><a href="http://localhost:8000/bantuan">Bantuan</a></li>
        <li class="menu-item"><a href="#">Profil</a></li>
        <li class="menu-item" style="margin-right: 100px;">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>


  @yield('konten')
    <br />
    <br />
  @yield('footer')

  @stack('styles')
  @stack('scripts')


</body>
</html>
