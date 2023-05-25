@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="login-frame">
    <div class="login-form">
        <div class="form-title">{{ __('Login') }}</div>
        <form method="POST" action="{{ route('login') }}">

            <div class="form-input-container">
                <input id="email" type="email" class="form-input form-input-no-border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email" autofocus>
                <div class="form-input-underline"></div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-input-container">
                <input id="password" type="password" class="form-input form-input-no-border @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                <div class="form-input-underline"></div>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="forgot-password-container">
                <a href="http://localhost:8000/reset" class="forgot-password">{{ __('Forgot Your Password?') }}</a>
            </div>

            <button type="submit" class="submit-button">
                {{ __('Login') }}
            </button>
        </form>

        <div class="belum-password-container">
            <a href="{{ route('register') }}" class="belum-password">{{ __('Belum memiliki akun? Daftar') }}</a>
        </div>
    </div>
</div>
<div class="title">APERGA</div>

<!-- Menyertakan tautan CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection
