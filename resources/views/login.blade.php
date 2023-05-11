<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-frame">
        <div class="login-form">
            <div class="form-title">Login</div>
            <div class="form-input-container">
              <input type="text" class="form-input form-input-no-border" placeholder="Username / Email">
              <div class="form-input-underline"></div>
            </div>
            <div class="form-input-container">
              <input type="password" class="form-input form-input-no-border" placeholder="Password">
              <div class="form-input-underline"></div>
            </div>
            <div class="forgot-password-container">
                <a href="#" class="forgot-password">Lupa kata sandi?</a>
            </div>
            <button type="submit" class="submit-button" onclick="window.location.href='https://www.google.com'">Masuk</button>
            <div class="belum-password-container">
                <a href="p" class="belum-password">Belum memiliki akun? Daftar</a>
            </div>
        </div>
        </div>
    </div>
    <div class="title">APERGA</div>
</body>
</html>
