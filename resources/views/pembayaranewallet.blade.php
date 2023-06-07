@extends('template3')
@section('title', 'Pembayaran Dompet Digitak')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="dompet-title">Pembayaran: Dompet Digital</div>
    <div class="dompettext">DOMPET DIGITAL</div>
    <div class="dompetoption" onclick="toggleDropdown()">
        <img src="{{ asset('images/ewallet.png') }}" alt="Dompet Logo" class="dompet-logo">
        <span class="dompet-text" id="selectedDompetText">PILIH DOMPET ANDA</span>
        <img src="{{ asset('images/blackarrow.png') }}" alt="arrow" class="arrow">
    </div>
    <div class="dropdown-container">
        <div class="dropdown-menu" id="dompetDropdown">
            @foreach($infoPayments as $infoPayment)
            <div class="dropdown-item">
                <input type="radio" id="{{ $infoPayment->id }}" name="ewallet" value="{{ $infoPayment->tipe_pembayaran }}">
                <label for="{{ $infoPayment->id }}"> {{ $infoPayment->tipe_pembayaran }}</label>
                <input type="hidden" id="dompet-{{ $infoPayment->id }}" value="{{ json_encode($infoPayment) }}">
            </div>
            @endforeach
        </div>
    </div>
    <div class="dompetprofile hidden">
        <img src="{{ asset('images/ilust_bank.png') }}" alt="Default Dompet Logo" class="dompet-logo-item">
        <span class="payment-number-text">Nomor Rekening Pembayaran:</span>
        <span class="payment-number">{{ optional($selectedDompet)->nomor_pembayaran }}</span>
        <span class="payment-owner">A/N: {{ optional($selectedDompet)->nama_pemilik }}</span>
    </div>

    <div class="total-pembayaran hidden">
        <p class="total-pembayaran-text">Total Pembayaran:</p>
        <p class="total-bayar">Rp
            <?php
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

            echo abbreviateNumber($totalBayar);
            ?>
        </p>
    </div>
    
    <p class="timer-text hidden">Selesaikan dalam waktu:</p>

    <p class="timersplit hidden">:</p>
    <p class="timer-split hidden">:</p>
    <p class="timer-hour hidden">23</p>
    <p class="timer-minute hidden">59</p>
    <p class="timer-second hidden">60</p>
    <p class="timer-desc hidden">Jam</p>
    <p class="timer-desc-1 hidden">Menit</p>
    <p class="timer-desc-2 hidden">Detik</p>

    <div class="instruksi hidden">
        <p class="instruksi-pembayaran">Instruksi Pembayaran</p>
        <div class="deskripsi-pembayaran">
            @if ($selectedDompet)
                @php
                    $instruksiPembayaran = explode('. ', optional($selectedDompet)->instruksi_pembayaran);
                @endphp
                @foreach ($instruksiPembayaran as $kalimat)
                    {{ $kalimat }}.<br>
                @endforeach
            @endif
        </div>
    </div>

    <div class="button-group">
        <!-- Add a form to send data to the controller function -->
        <form action="{{ route('pembayaran.sukses.submit.dompet', ['id' => $orderTransaction->id]) }}" method="POST">
            @csrf
            <button type="submit" class="lanjutkan-pembayaran">Konfirmasi Pembayaran</button>
        </form>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('scripts')
<script src="{{ asset('js/dropdownewallet.js') }}"></script>

@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pembayaranewallet.css') }}">
<style>
    .dompetprofile,
    .total-pembayaran,
    .timer-text,
    .instruksi,
    .timersplit,
    .timer-split,
    .timer-hour,
    .timer-minute,
    .timer-second,
    .timer-desc,
    .timer-desc-1,
    .timer-desc-2 {
        display: none;
    }

    .show {
        display: block;
    }
</style>
@endpush
