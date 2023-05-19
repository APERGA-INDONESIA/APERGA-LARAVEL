@extends('template')

@section('navbar')
@endsection

@section('konten')
<div class="container">
    <div class="dashboard-kotak"> </div>
    <img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
    <p class="greeting">Halo,</p>
    <p class="username">Username</p>

<div class="FAQ">
    <img src="{{ asset('images/faq.png') }}" alt="faq" class="faq">
    <img src="{{ asset('images/tulisandibawahfaq.png') }}" class="tulisandibawahfaq">



</div>


@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/bantuan.css') }}">
@endpush
