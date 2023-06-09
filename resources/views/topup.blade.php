@extends('template5')

@section('title', 'Topup Saldo')

@section('navbar')
@endsection

@section('konten')
<div class="topup">
    <a href="javascript:void(0);" onclick="window.history.back();">
        <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
    </a>
    <div class="topup-title">Topup Saldo</div>

    <div class="paymentmethod">
        <div class="transferbank">
            <img src="{{ asset('images/transfer.png') }}" alt="Transfer Bank">
            <p>Transfer Bank</p>
        </div>

        <div class="e-wallet">
            <img src="{{ asset('images/wallet.png') }}" alt="Dompet Digital">
            <p>Dompet Digital</p>
        </div>
        <div class="othermethode">
            <img src="{{ asset('images/othermethode.png') }}" alt="Metode Lain">
            <p>Metode Lain</p>
        </div>
    </div>
    <div class="shadow1"></div>
    <div class="shadow2"></div>
    <div class="shadow3"></div>

    <div class="pilih-topup">
        <p class="pilih-bank">Pilih Bank Kamu</p>

        <div class="bankoption">
            <p class="placeholder">Klik disini untuk memilih bank</p>
            <img src="{{ asset('images/dropdwn.png') }}" alt="Dropdown">
        </div>

        <div class="nominalinput">
            <input type="text" placeholder="Klik disini untuk memasukkan nominal isi ulang">
        </div>
        <p class="pilih-nominal">Masukkan Nominal Kamu</p>
        <div class="shortcutnominal">
            <div class="nominal1">
                <p>Rp 50.000</p>
            </div>
            <div class="nominal2">
                <p>Rp 100.0000</p>
            </div>
            <div class="nominal3">
                <p>Rp 200.000</p>
            </div>
            <div class="nominal4">
                <p>Rp 350.000</p>
            </div>
            <div class="nominal5">
                <p>Rp 500.000</p>
            </div>
            <div class="nominal6">
                <p>Rp 1.000.000</p>
            </div>
        </div>
        <div class="button-group">
            <button id="confirmBtn" class="confirm">Kembali</button>
            <button id="pesanSekarangBtn" class="return" type="submit">Selesaikan Pembayaran</button>
        </div>
    </div>
    <div class="shadow4"></div>

    <div class="informasi-pembayaran">
        <p class="info-bayar">Informasi Pembayaran</p>

        <div class="logo-bayar">
            <img src="{{ asset('images/bank/BANK BCA.png') }}" alt="Logo Bayar">
        </div>

        <p class="no-bayar">Nomor Rekening Transfer</p>

        <div class="nomor-bayar">
            <p class="no-bayar-text">1234567890</p>
            <button class="salin-button">Salin</button>
        </div>

        <p class="transfernow">Nominal Pembayaran</p>

        <div class="nominal-bayar">
            <p class="no-bayar-text">1234567890</p>
            <button class="salin-button">Salin</button>
        </div>

        <button class="konfirmasi-button">Konfirmasi Pembayaran</button>
    </div>

</div>

@endsection

@section('footer')

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/topup.css') }}">
@endpush

@push('scripts')
<script>


</script>
@endpush
