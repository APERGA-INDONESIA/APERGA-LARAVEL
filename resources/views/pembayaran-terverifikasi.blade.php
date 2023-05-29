@extends('template')
@section('title', 'Pembayaran Qris')

@section('navbar')
@endsection

@section('konten')
<div class="pembayaran-terverifikasi">Pembayaran</div>
<div class="kotak-hitam">
    <div class="content">
        <div class="logo">
            <img src="{{ asset('images/pembayaran-terverifikasi.svg') }}" alt="Pembayaran Terverifikasi" class="pembayaran-terverifikasi-svg">
        </div>
        <div class="text">Pembayaran Terverifikasi</div>
        <div class="button-group">
            <button class="kembali">Kembali ke Home</button>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pembayaran-terverifikasi.css') }}">
@endpush

