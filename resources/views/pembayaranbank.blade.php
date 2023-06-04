@extends('template3')
@section('title', 'Pembayaran Bank')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="bank-title">Pembayaran: Transfer Bank</div>
    <div class="banktext">TRANSFER BANK</div>
    <div class="bankoption" onclick="toggleDropdown()">
        <img src="{{ asset('images/banks.png') }}" alt="Bank Logo" class="bank-logo">
        <span class="bank-text">PILIH BANK ANDA</span>
        <img src="{{ asset('images/blackarrow.png') }}" alt="arrow" class="arrow">
    </div>
    <div class="dropdown-container">
        <div class="dropdown-menu" id="bankDropdown">
            <div class="dropdown-item">
                <input type="radio" id="bca" name="bank" value="BANK CENTRAL ASIA">
                <label for="bca">BANK CENTRAL ASIA (BCA) </label>
            </div>
            <div class="dropdown-item">
                <input type="radio" id="bni" name="bank" value="BANK BNI">
                <label for="bni">BANK NEGARA INDONESIA (BNI) </label>
            </div>
            <div class="dropdown-item">
                <input type="radio" id="bri" name="bank" value="BANK BRI">
                <label for="bri">BANK RAKYAT INDONESIA (BRI) </label>
            </div>
            <div class="dropdown-item">
                <input type="radio" id="mandiri" name="bank" value="BANK MANDIRI">
                <label for="mandiri">BANK MANDIRI</label>
            </div>
            <div class="dropdown-item">
                <input type="radio" id="bsi" name="bank" value="BANK BSI SYARIAH">
                <label for="bsi">BSI SYARIAH</label>
            </div>
        </div>
    </div>
    <div class="bankprofile hidden">
        <img src="{{ asset('images/BCA.png') }}" alt="Bank Logo" class="bank-logo-item">
        <span class="payment-number-text">Nomor Rekening Pembayaran:</span>
        <span class="payment-number">600032023</span>
        <span class="payment-owner">A/N: PT Adi Perkasa Guna</span>
    </div>
    <div class="total-pembayaran hidden">
        <p class="total-pembayaran-text">Total Pembayaran:</p>
        <p class="total-bayar">Rp 2.000.000</p>
    </div>
    <p class="timer-text hidden">Selesaikan dalam waktu:</p>

    <p class="timersplit hidden">:</p>
    <p class="timer-split hidden">:</p>
    <p class="timer-hour hidden">24</p>
    <p class="timer-minute hidden">60</p>
    <p class="timer-second hidden">60</p>
    <p class="timer-desc hidden">Jam</p>
    <p class="timer-desc-1 hidden">Menit</p>
    <p class="timer-desc-2 hidden">Detik</p>

    <div class="instruksi hidden">
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
        </p>
    </div>

    <div class="button-group">
        <button type="submit" class="lanjutkan-pembayaran">Konfirmasi Pembayaran</button>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('scripts')
<script src="{{ asset('js/dropdownbank.js') }}"></script>

@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pembayaranbank.css') }}">
<style>
    .bankprofile,
    .total-pembayaran,
    .timer-text,
    .instruksi,
    .timersplit, .timer-split,
    .timer-hour, .timer-minute,
    .timer-second, .timer-desc,
    .timer-desc-1, .timer-desc-2
     {
        display: none;
    }

    .show {
      display: block;
    }
    </style>

@endpush
