@extends('template')

@section('title', 'Bantuan')

@section('navbar')
@endsection

@section('konten')
<div class="container">
    <div class="dashboard-kotak"></div>
    <img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
    <p class="greeting">Halo, Selamat Datang</p>
    <p class="username">{{ Auth::user()->name }}</p>

    <div class="FAQ">
        <div class="FAQ-with-Icon">
            <img src="{{ asset('images/faq.png') }}" alt="FAQ Icon" class="icon">
        </div>
        <div class="FAQ-items">
            <div class="FAQ-item">
                <div class="dropdown">
                    <button class="faq-button dropdown-toggle" type="button" id="faqDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Bagaimana saya membatalkan Pesanan?
                        <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Dropdown Icon" class="dropdown-icon">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="faqDropdown">
                        <a class="dropdown-item" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non luctus dolor. Quisque vitae risus vel orci feugiat rutru.</a>
                    </div>
                </div>
            </div>
            <div class="FAQ-item">
                <div class="dropdown">
                    <button class="faq-button dropdown-toggle" type="button" id="faqDropdown2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Bagaimana saya membatalkan Pesanan?
                        <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Dropdown Icon" class="dropdown-icon">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="faqDropdown2">
                        <a class="dropdown-item" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non luctus dolor. Quisque vitae risus vel orci feugiat rutru.</a>
                    </div>
                </div>
            </div>
            <div class="FAQ-item">
                <div class="dropdown">
                    <button class="faq-button dropdown-toggle" type="button" id="faqDropdown3" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Bagaimana saya membatalkan Pesanan?
                        <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Dropdown Icon" class="dropdown-icon">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="faqDropdown3">
                        <a class="dropdown-item" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non luctus dolor. Quisque vitae risus vel orci feugiat rutru.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="CallCenter">
        <div class="CallCenter-with-Icon">
            <img src="{{ asset('images/CallCenter.png') }}" alt="Call Center" class="icon">
        </div>
        <div class="CallCenter-items">
            <div class="CallCenter-item">
                <button onclick="window.open('https://wa.me/+6283111111', '_blank')">Telepon Kami</button>
            </div>
            <div class="CallCenter-item">
                <button onclick="window.open('mailto:contoh@gmail.com', '_blank')">Email Kami</button>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/bantuan.css') }}">
@endpush
