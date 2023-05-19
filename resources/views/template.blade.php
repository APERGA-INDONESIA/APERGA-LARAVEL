<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>@yield('title', 'Dashboard')</title>
</head>
<body>
@yield('navbar')
  <nav class="navbar">
    <img src="{{ asset('images/aperga.png') }}" alt="Logo" class="logo" style="margin-left: 100px;">
    <ul class="menu">
      <li class="menu-item"><a href="#">Cari PRT</a></li>
      <li class="menu-item"><a href="#">Tentang Kami</a></li>
      <li class="menu-item"><a href="#">Bantuan</a></li>
      <li class="menu-item"><a href="#">Profil</a></li>
      <li class="menu-item" style="margin-right: 100px;"><a href="http://127.0.0.1:8000/login">Log Out</a></li>

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
