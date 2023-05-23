<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resetpassword.css') }}">
</head>
<body>
    <div class="reset-password-frame">
        <div class="reset-form">
            <div class="form-title">Ubah Password</div>
            <form method="POST" action="{{ route('reset.password') }}">
                @csrf
                <div class="input-wrapper">
                    <input type="text" class="reset-input" placeholder="Masukkan email anda" name="email">
                    <div class="input-underline"></div>
                </div>
                <button type="submit" class="submit-button">Lanjutkan</button>
            </form>
            @if(session('error'))
                <div class="error-message">{{ session('error') }}</div>
            @endif
        </div>
    </div>
    <div class="title">APERGA</div>
</body>
</html>
