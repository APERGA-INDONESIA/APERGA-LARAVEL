@extends('template')
@section('title', 'Redeem Point')

@section('navbar')
@endsection

@section('konten')
<div class="RedeemPoint">
    <a href="javascript:void(0);" onclick="window.history.back();">
    <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
    </a>
    <div class="redeem-title">Redeem Point</div>
</div>

<div class="RedeemContainer">
    <div class="redeem-text">Redeem Point</div>
    <div class="redeem-description">Yuk tukarkan poin yang kamu miliki dengan saldo yang bisa kamu pakai buat perpanjang</div>
    <div class="total-points-label">Total Poin Ditukarkan:</div>
    <div class="TempatRedeem">
        <img src="{{ asset('images/coin.png') }}" alt="Coin" class="coin-img">
        <div class="masukkan-poin">Masukkan poin</div>
        <div class="minimal-poin">Minimal 1000 Poin</div>
    </div>
    <div class="total-saldo-label">Total Saldo didapatkan:</div>
    <div class="TempatSaldo">
        <img src="{{ asset('images/saldo.png') }}" alt="Saldo" class="saldo">
        <div class="hasilsaldo">Saldo didapatkan</div>
    </div>
    <button class="tukarkan-button">Tukarkan Sekarang</button>
</div>
<div class="pembatas">
</div>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/redeem.css') }}">
@endpush
