@extends('template')
@section('favicon')
@endsection
@section('navbar')
@endsection

@section('konten')
<div class="dashboard-kotak"></div>
<img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
<p class="greeting">Halo,</p>
<p class="username">Username</p>
<img src="{{ asset('images/arrow.png') }}" alt="Arrow" class="arrow">

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush
