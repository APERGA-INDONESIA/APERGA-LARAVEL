@extends('template')
@section('favicon')
@endsection
@section('navbar')
@endsection

@section('konten')
<div class="dashboard-kotak"></div>
<img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
<p class="greeting">Halo, Selamat Datang</p>
<p class="username">{{ Auth::user()->name }}</p>
<a href="javascript:void(0);" onclick="window.history.back();">
    <img src="{{ asset('images/arrow.png') }}" alt="Arrow" class="arrow">
</a>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tentangaplikasi.css') }}">
@endpush
