@extends('template2')
@section('title', 'Pembayaran Qris')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="transfer-virtual-account">Transfer Virtual Account</div>
    <div class="content">
        <div class="qr-code">
            <img src="{{ asset('images/barcode-virtual-account.png') }}" alt="Barcode Virtual Account" class="qr-code-img">
        </div>
        <div class="text">Scan barcode di atas untuk melakukan pembayaran. Lakukan pembayaran sesuai instruksi di bawah ini:</div>
        <div class="instruksi">
            <p class="instruksi-pembayaran">Instruksi Pembayaran</p>
            <p class="deskripsi-pembayaran">1. Kunjungi bank atau buka aplikasi perbankan online Anda.
                <br>
                2. Pilih menu Transfer. <br>
                3. Masukkan nomor rekening tujuan yaitu 1234567890. <br>
                4. Masukkan jumlah pembayaran yang sesuai.<br>
                5. Konfirmasikan transfer.</p>
        </div>
        <div class="total-pembayaran">
            <p class="total-pembayaran-text">Total Pembayaran:</p>
            <p class="total-bayar">Rp.5.000.000,00</p>
        </div>
        <div class="button-group">
            <button class="lanjutkan-pembayaran">Konfirmasi Pembayaran</button>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pembayaranqris.css') }}">
@endpush
