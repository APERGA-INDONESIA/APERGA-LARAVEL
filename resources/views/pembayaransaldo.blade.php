@extends('template3')
@section('title', 'Pembayaran Saldo')

@section('navbar')
@endsection

@section('konten')
@php
    function abbreviateNumber($number)
    {
        if ($number >= 1e9) {
            return number_format($number / 1e9, 1) . ' Milliar';
        }
        if ($number >= 1e6) {
            return number_format($number / 1e6, 1) . ' Juta';
        }

        return number_format($number);
    }
@endphp

<div class="kotak-hitam">
    <div class="saldo">Pembayaran: Saldo APERGA</div>
    <div class="saldo-section">
        <div class="saldo-header">
            <img src="{{ asset('images/dollar.png') }}" alt="Dollar Icon">
            <p class="saldo-header-text">SALDO APERGA</p>
        </div>
        <p class="saldo-text">Pembayaran yang mudah, cepat, dan aman hanya dengan pakai SALDO APERGA</p>
        <div class="rincian-pembayaran">
            <p class="rincian-pembayaran-text">Rincian Pembayaran:</p>
            <div class="saldo-info">
                    <p class="total-harga-text">Total Pembayaran:</p>
                    <p class="totalharga">Rp {{ abbreviateNumber($totalBayar) }}</p>
                <p class="saldo-me-text">Saldo Saya:</p>
                <p class="saldome">Rp {{ abbreviateNumber($saldoUser) }}</p>
            </div>
        </div>

        @if ($totalBayar <= $saldoUser)
            <p class="message">Saldo yang anda miliki mencukupi, silahkan klik tombol dibawah untuk menyelesaikan transaksi</p>
            <div class="button-group">
                <form id="konfirmasiForm" method="POST" action="{{ route('pembayaran.sukses.submit.saldo', ['id' => $orderTransaction->id]) }}">
                    @csrf
                    <button type="submit" class="lanjutkan-pembayaran">Konfirmasi Pembayaran</button>
                </form>
            </div>
        @else
            <p class="message" style="color: red;">Saldo anda masih belum mencukupi, silahkan lakukan Isi Ulang Saldo atau gunakan metode lain</p>
            <div class="button-group">
                <button type="submit" class="lanjutkan-pembayaran" disabled>Konfirmasi Pembayaran</button>
            </div>
        @endif

        <p class="timer-text">Selesaikan dalam waktu:</p>
        <p class="timersplit">:</p>
        <p class="timer-split">:</p>
        <p class="timer-hour">23</p>
        <p class="timer-minute">59</p>
        <p class="timer-second">59</p>
        <p class="timer-desc">Jam</p>
        <p class="timer-desc-1">Menit</p>
        <p class="timer-desc-2">Detik</p>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('scripts')
<script src="{{ asset('js/bayarsaldo.js') }}"></script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pembayaransaldo.css') }}">
@endpush
