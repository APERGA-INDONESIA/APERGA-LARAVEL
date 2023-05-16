<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pendaftaran.css') }}">
</head>
<body>
    <div class="pendaftaran-frame">
        <div class="pendaftaran-form">
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
            <div class="forgot-password-container">
                <a href="#" class="forgot-password">sudah memiliki akun? masuk</a>
            </div>
            <div class="forgot-password-container">
                <input class="form-check-input" type="checkbox" name="agreement" id="agreement">
                <label class="form-check-label" for="agreement">
                  Saya menyetujui dengan syarat dan ketentuan
                </label>
              </div>
            <button type="submit" class="submit-button" onclick="window.location.href='http://localhost:8000/dashboard'">Daftar</button>


        </div>
        </div>
    </div>
    <div class="title">APERGA</div>
</body>
</html>
