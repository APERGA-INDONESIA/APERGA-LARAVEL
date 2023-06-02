@extends('template3')
@section('title', 'Pembayaran Qris')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="transfer-virtual-account">Transfer QRIS Bar Code</div>
    <div class="content">
        <div class="qr-code">
            <img src="{{ asset('images/barcode-virtual-account.png') }}" alt="Barcode Virtual Account" class="qr-code-img">
        </div>
        <div class="text">Scan barcode di atas untuk melakukan pembayaran. Lakukan pembayaran sesuai instruksi di bawah ini:</div>
        <div class="instruksi">
            <p class="instruksi-pembayaran">Instruksi Pembayaran</p>
            <p class="deskripsi-pembayaran">
                1. Unduh dan instal aplikasi dompet digital.
                <br>
                2. Buka aplikasi dompet digital dan lakukan pendaftaran atau masuk ke akun Anda.
                <br>
                3. Cari opsi "Pembayaran" atau "Scan QR" di dalam aplikasi dompet digital.
                <br>
                4. Pilih opsi "Pembayaran" atau "Scan QR" dan aktifkan kamera ponsel Anda.
                <br>
                5. Arahkan kamera ke kode QR yang ingin Anda bayar.
        </div>
        <div class="total-pembayaran">
            <p class="total-pembayaran-text">Total Pembayaran:</p>
            <p class="total-bayar">Rp {{ number_format($totalBayar, 2, ',', '.') }}</p>
        </div>
        <div class="button-group">
            <form id="konfirmasiForm" method="POST" action="{{ route('pembayaran.sukses', ['id' => $orderTransaction->id]) }}">
                @csrf
                <button type="submit" class="lanjutkan-pembayaran">Konfirmasi Pembayaran</button>
            </form>


        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pembayaranqris.css') }}">
@endpush
