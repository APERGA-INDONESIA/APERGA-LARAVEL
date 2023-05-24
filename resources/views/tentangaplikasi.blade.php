@extends('template')
@section('title', 'Tentang Aplikasi')

@section('navbar')
@endsection

@section('konten')
<div class="tentangaplikasi">
    <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
    <div class="tentangaplikasi-title">Tentang Aplikasi</div>
</div>

<img src="{{ asset('images/bigaperga.png') }}" class="bigaperga-img" alt="Big APERGA">

<div class="bgtentangaplikasi"></div>

<div class="tentangaplikasiputih">
    <div class="tentangaplikasiputih-text">
        APERGA, solusi ideal untuk pekerja rumah tangga terjangkau! Temukan keberagaman pekerja terampil dari bersih-bersih hingga memasak. Transaksi aman dengan penilaian dan ulasan yang memuaskan. Layanan pelanggan responsif, pemilihan pekerja mudah berdasarkan lokasi dan keahlian. Ciptakan kenyamanan dalam rumah tangga Anda dengan APERGA!
    </div>
</div>

<div class="VersiAplikasi">
    <img src="{{ asset('images/globe.png') }}" class="globe-img" alt="Globe">
    <div class="versi-aplikasi-text">Versi Aplikasi: 1.1.2</div>
</div>

<div class="Guidebook">
    <img src="{{ asset('images/guidebook.png') }}" class="guidebook-img" alt="Guidebook">
    <div class="guidebook-text">Guidebook</div>
    <a href="#" class="download-button">Download Disini</a>
</div>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/tentangaplikasi.css') }}">
@endpush
