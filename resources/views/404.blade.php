<!DOCTYPE html>
<html>
<head>
    <title>Halaman 404</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/404.css') }}">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins:400,600,800,500,700");
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

        .countdown {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            margin-top: 3px;
        }

        .redirect-text {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            text-align: center;
            margin-top: 3px;
        }

        .lets-go {
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            font-weight: 900;
            text-align: center;
            margin-top: 3px;
        }
    </style>
</head>
<body>
    <img class="background404" src="{{ asset('images/404.png') }}" alt="404">
    <div class="redirect-text">Sebentar lagi anda akan dialihkan ke halaman utama dalam waktu</div>
    <div class="countdown" id="countdown">5 detik</div>

    <div class="lets-go" id="letsGoText" style="display: none;">LETS GOOOOOO</div>

    <script>
        var countdownElement = document.getElementById('countdown');
        var letsGoTextElement = document.getElementById('letsGoText');
        var countdownValue = parseInt(countdownElement.textContent);

        function countdown() {
            countdownValue--;
            countdownElement.textContent = countdownValue + ' detik';

            if (countdownValue <= 0) {
                countdownElement.style.display = 'none';
                letsGoTextElement.style.display = 'block';
                setTimeout(function() {
                    window.location.href = 'http://localhost:8000/dashboard';
                }, 1000);
            } else {
                setTimeout(countdown, 1000);
            }
        }

        setTimeout(countdown, 1000);
    </script>
</body>
</html>
