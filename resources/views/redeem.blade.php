@extends('template5')

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
    <div class="redeem-description">Yuk tukarkan poin yang kamu miliki dengan saldo yang bisa kamu dapatkan gratis.</div>
    <div class="total-points-label">Total Poin Ditukarkan:</div>
    <div class="TempatRedeem">
        <img src="{{ asset('images/coin.png') }}" alt="Coin" class="coin-img">
        <input type="number" id="redeemPoints" name="redeemPoints" class="masukkan-poin" placeholder="Masukan poin" min="10000" required>
        <div class="minimal-poin">Minimal 1000 Poin</div>
    </div>
    <div class="total-saldo-label">Total Saldo didapatkan:</div>
    <div class="TempatSaldo">
        <img src="{{ asset('images/saldo.png') }}" alt="Saldo" class="saldo">
        <div id="hasilSaldo" class="hasilsaldo">Saldo didapatkan</div>
    </div>
    <form id="redeemForm" action="{{ route('redeem.submit') }}" method="POST">
        @csrf
        <input type="hidden" id="csrfToken" value="{{ csrf_token() }}">
        <button class="tukarkan-button" type="button" onclick="redeemPoints()">Tukarkan Sekarang</button>
    </form>
</div>




@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/.css') }}">
<link rel="stylesheet" href="{{ asset('css/redeem.css') }}">
@endpush

@push('scripts')
<script>
// Mendapatkan CSRF token dari elemen dengan ID 'csrfToken'
var csrfToken = document.getElementById('csrfToken').value;

function redeemPoints() {
    var redeemPointsInput = document.querySelector('.masukkan-poin');
    var redeemPoints = parseInt(redeemPointsInput.value) || 0;
    var saldoLabel = document.querySelector('.hasilsaldo');
    var saldo = (redeemPoints / 1000).toFixed(2);

    if (redeemPoints >= 1000) {
        if (confirm('Apakah Anda yakin ingin menukarkan poin?')) {
            redeemPointsInput.disabled = true; // Menonaktifkan input selama permintaan AJAX sedang berjalan
            var formData = new FormData();
            formData.append('redeemPoints', redeemPoints);

            // Mengirim permintaan AJAX
            fetch('http://localhost:8000/redeem', {
                method: 'POST',
                headers: {
                    'X-CSRF-Token': csrfToken
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Poin Anda Tidak Cukup.');
                }
                return response.json();
            })
            .then(data => {
                if (data.message === 'Redeem Point Berhasil') {
                    // Transaksi berhasil, lakukan penanganan sesuai kebutuhan Anda
                    alert('Redeem Point Berhasil');
                    window.location.reload(); // Contoh: Refresh halaman setelah transaksi berhasil
                } else {
                    // Transaksi gagal, lakukan penanganan sesuai kebutuhan Anda
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
                alert('Poin Anda Tidak Cukup.');
            })
            .finally(() => {
                redeemPointsInput.disabled = false; // Mengaktifkan kembali input setelah permintaan selesai (berhasil atau gagal)
            });
        }
    } else {
        alert('Minimal poin yang bisa diredeem adalah 1000.');
    }
}

document.getElementById('redeemPoints').addEventListener('input', function() {
    var redeemPoints = parseInt(this.value) || 0;
    var saldo = redeemPoints / 1000;
    document.getElementById('hasilSaldo').textContent = saldo.toFixed(2);
});


</script>
@endpush
