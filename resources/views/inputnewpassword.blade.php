<!DOCTYPE html>
<html>
<head>
    <title>Input New Password</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/inputnewpassword.css') }}">
</head>
<body>
    <div class="input-new-password-frame">
        <div class="input-new-password-form">
            <div class="form-title">Ubah Password</div>
            <form action="{{ route('update.password', ['token' => $token]) }}" method="POST">
                @csrf
                <div class="input-wrapper">
                    <input type="password" name="password" class="input-new-password" placeholder="Masukkan password baru">
                    <div class="input-underline"></div>
                </div>
                <div class="input-wrapper">
                    <input type="password" name="password_confirmation" class="input-new-password" placeholder="Konfirmasi password baru">
                    <div class="input-underline"></div>
                </div>
                <button type="submit" class="submit-button">Lanjutkan</button>
            </form>
        </div>
    </div>
    <div class="title">APERGA</div>
</body>
</html>
