<!DOCTYPE html>
<html>
<head>
    <title>Halaman 404</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/404.css') }}">
</head>
<body>
    <img class="background404" src="{{ asset('images/404.png') }}" alt="404">

    <script>
        setTimeout(function() {
            window.location.href = 'http://localhost:8000/dashboard';
        }, 3000);
    </script>
</body>
</html>
