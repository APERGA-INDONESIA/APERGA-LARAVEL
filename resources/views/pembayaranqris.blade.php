@extends('template3')
@section('title', 'Pembayaran QRIS')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="transfer-virtual-account">Pembayaran: Scan QRIS</div>
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


        <p class="timer-text">Selesaikan dalam waktu:</p>

        <p class="timersplit">:</p>
        <p class="timer-split">:</p>
        <p class="timer-hour">23</p>
        <p class="timer-minute">59</p>
        <p class="timer-second">59</p>
        <p class="timer-desc">Jam</p>
        <p class="timer-desc-1">Menit</p>
        <p class="timer-desc-2">Detik</p>

        <div class="button-group">
            <form id="konfirmasiForm" method="POST" action="{{ route('pembayaran.sukses.submit.qris', ['id' => $orderTransaction->id]) }}">
                @csrf
                <button type="submit" class="lanjutkan-pembayaran">Konfirmasi Pembayaran</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
      var hourElement = document.querySelector('.timer-hour');
      var minuteElement = document.querySelector('.timer-minute');
      var secondElement = document.querySelector('.timer-second');

      var hour = parseInt(hourElement.textContent);
      var minute = parseInt(minuteElement.textContent);
      var second = parseInt(secondElement.textContent);

      var timer = setInterval(function() {
        if (hour === 0 && minute === 0 && second === 0) {
          clearInterval(timer);
          // Lakukan tindakan setelah waktu berakhir
          console.log('Waktu telah berakhir');
        } else {
          if (second === 0) {
            if (minute === 0) {
              if (hour > 0) {
                hour--;
                minute = 59;
                second = 59;
              }
            } else {
              minute--;
              second = 59;
            }
          } else {
            second--;
          }

          hourElement.textContent = hour < 10 ? '0' + hour : hour;
          minuteElement.textContent = minute < 10 ? '0' + minute : minute;
          secondElement.textContent = second < 10 ? '0' + second : second;
        }
      }, 1000);
    });
  </script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pembayaranqris.css') }}">
@endpush
