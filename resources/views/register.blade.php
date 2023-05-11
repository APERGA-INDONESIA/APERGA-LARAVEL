<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-frame">
        <div class="login-form">
            <div class="form-title">Daftar</div>
            <div class="form-input-container">
              <input type="text" class="form-input form-input-no-border" placeholder="Username">
              <div class="form-input-underline"></div>
            </div>
            <div class="form-input-container">
                <input type="text" class="form-input form-input-no-border" placeholder="Nomor Telepon">
                <div class="form-input-underline"></div>
              </div>
              <div class="form-input-container">
                <input type="text" class="form-input form-input-no-border" placeholder="Email">
                <div class="form-input-underline"></div>
              </div>
            <div class="form-input-container">
              <input type="password" class="form-input form-input-no-border" placeholder="Password">
              <div class="form-input-underline"></div>
            </div>
            <button type="submit" class="submit-button" onclick="window.location.href='http://localhost:8000/login'">Daftar</button>
        </div>
    </div>
    <div class="title">APERGA</div>
</body>
</html>
