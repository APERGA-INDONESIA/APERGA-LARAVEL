@extends('template')
@section('title', 'Pembayaran')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="pembayaran">
        Pembayaran
    </div>
</div>

<div class="infopekerja">
    <div class="big-profile">
        <img src="{{ asset('images/bigprofile.png') }}" alt="Big Profile" class="big-profile-img">
    </div>
    <div class="deskripsi">
        <div class="metode-pembayaran-title">Metode Pembayaran</div>
        <div class="debit-kredit-button">
            <button type="button" class="btn btn-primary btn-lg btn-block">
            <img src="{{ asset('images/debit-kredit.svg') }}" alt="Debit-Kredit" class="debit-kredit-img">
            Debit/Kredit</button>
        </div>
        <br>
        <div class="virtual-account-button">
            <button type="button" class="btn btn-primary btn-lg btn-block">
            <img src="{{ asset('images/virtual-account.svg') }}" alt="virtual-account" class="virtual-account-img">
            Virtual Account</button>
        </div>
        <br>

        <div class="ringkasan-pembayaran-title">Ringkasan Pembayaran</div>
        <div class="total-tagihan-box">
            <div class="total-tagihan-text">Total Tagihan</div>
            <div class="total-tagihan">Rp 5.000.000,00 </div>
        </div>
        <div class="biaya-layanan-box">
            <div class="biaya-layanan-text">Biaya Layanan</div>
            <div class="biaya-layanan">Rp 250.000,00 </div>
        </div>

        <div class="line"></div>
        <div class="total-bayar-box">
            <div class="total-bayar-title">Total Bayar</div>
            <div class="total-bayar">Rp 5.250.000,00</div>
        </div>
        <div class="button-group">
            <button class="kembali">Kembali</button>
            <button class="bayar">Bayar</button>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">
@endpush

