@extends('layouts.app')

@section('content')
    <div class="login-frame">
        <div class="login-form">
            <div class="form-title">Daftar</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-input-container">
                    <input type="text" class="form-input form-input-no-border" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <div class="form-input-underline"></div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input-container">
                    <input type="text" class="form-input form-input-no-border" placeholder="Nomor Telepon" name="phone" value="{{ old('phone') }}" required>
                    <div class="form-input-underline"></div>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input-container">
                    <input type="email" class="form-input form-input-no-border" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="form-input-underline"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input-container">
                    <input type="password" class="form-input form-input-no-border" placeholder="Password" name="password" required autocomplete="new-password">
                    <div class="form-input-underline"></div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input-container">
                    <input type="password" class="form-input form-input-no-border" placeholder="Masukkan Ulang Password" name="password_confirmation" required autocomplete="new-password">
                    <div class="form-input-underline"></div>
                </div>

                <button type="submit" class="submit-button">
                    {{ __('register') }}
                </button>
            </form>

            <div class="forgot-password-container">
                <a href="{{ route('login') }}" class="forgot-password">Sudah memiliki akun? Masuk</a>
            </div>
        </div>
    </div>
    <div class="title">APERGA</div>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
@endsection
