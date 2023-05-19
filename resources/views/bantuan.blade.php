@extends('template')
@section('title', 'Bantuan')
@section('navbar')
@endsection

@section('konten')
<div class="container">
    <div class="dashboard-kotak"></div>
    <img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
    <p class="greeting">Halo,</p>
    <p class="username">Username</p>

    <div class="FAQ">
        <div class="FAQ-with-Icon">
            <img src="{{ asset('images/faq.png') }}" alt="FAQ Icon" class="icon">
        </div>
        <div class="FAQ-items">
            <div class="FAQ-item">
                <p class="question">Bagaimana saya membatalkan Pesanan?</p>
                <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Gambar 1" class="image">
            </div>
            <div class="FAQ-item">
                <p class="question">Bagaimana saya membatalkan Pesanan?</p>
                <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Gambar 2" class="image">
            </div>
            <div class="FAQ-item">
                <p class="question">Bagaimana saya membatalkan Pesanan?</p>
                <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Gambar 3" class="image">
            </div>
        </div>
    </div>

    <div class="Call Center">
        <div class="CallCenter-with-Icon">
            <img src="{{ asset('images/CallCenter.png') }}" alt="Call Center" class="icon">
        </div>
        <div class="CallCenter-items">
            <div class="CallCenter-item">
                <p class="question">Telepon Kami</p>
            </div>
            <div class="CallCenter-item">
                <p class="question">Telepon Kami</p>
            </div>
        </div>
    </div>



</div>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/bantuan.css') }}">
@endpush
