@extends('layouts.app')
@section('title', 'Daftar')
@section('content')
    <div class="register-frame">
        <div class="register-form">
            <div class="register-title">{{ __('Daftar') }}</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-input-container">
                    <input type="text" class="form-input form-input-no-border" placeholder="{{ __('Nama') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <div class="form-input-underline"></div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input-container">
                    <input type="text" class="form-input form-input-no-border" placeholder="{{ __('Phone Number') }}" name="phone" value="{{ old('phone') }}" required>
                    <div class="form-input-underline"></div>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input-container">
                    <input type="email" class="form-input form-input-no-border" placeholder="{{ __('Email') }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="form-input-underline"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input-container">
                    <input type="password" class="form-input form-input-no-border" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">
                    <div class="form-input-underline"></div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input-container">
                    <input type="password" class="form-input form-input-no-border" placeholder="{{ __('Konfirmasi Password') }}" name="password_confirmation" required autocomplete="new-password">
                    <div class="form-input-underline"></div>
                </div>


                <button type="submit" class="submit-button">
                    {{ __('Daftar') }}
                </button>
            </form>


        </div>
    </div>
    <div class="title">APERGA</div>

<link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
@endsection
