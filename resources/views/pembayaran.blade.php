@extends('template6')
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
    @php
    $id_prt = $orderTransaction->prt_id;
    $id_prt_number = preg_replace('/[^0-9]/', '', $id_prt);
    $imagePath = 'images/prt/prt' . $id_prt_number . '.jpg';

    if (file_exists(public_path($imagePath))) {
        $imageUrl = asset($imagePath);
    } else {
        $defaultImagePath = 'images/bigprofile.png';
        $imageUrl = asset($defaultImagePath);
    }

    $saldoApergaRoute = route('pembayaransaldo', ['id' => $orderTransaction->id]);
    $bankRoute = route('pembayaranbank', ['id' => $orderTransaction->id]);
    $ewalletRoute = route('pembayaranewallet', ['id' => $orderTransaction->id]);
    $qrisRoute = route('pembayaranqris', ['id' => $orderTransaction->id]);
    @endphp

    <div class="big-profile">
        <img src="{{ $imageUrl }}" alt="Big Profile" class="big-profile-img"
            style="width: 509px; height: 436px; border-radius: 23px;">
    </div>

    <div class="deskripsi">
        <div class="metode-pembayaran-title">Metode Pembayaran</div>
        <div class="debit-kredit-button">
            <button type="button" class="btn btn-primary btn-lg btn-block" id="saldoApergaBtn">
                SALDO APERGA
            </button>
        </div>
        <br>
        <div class="dropdown">
            <select class="btn btn-primary btn-lg btn-block dropdown-toggle" id="dropdownMenuButton">
                <option value="" disabled selected>NON SALDO APERGA</option>
                <option value="{{ $bankRoute }}">TRANSFER BANK</option>
                <option value="{{ $ewalletRoute }}">DOMPET DIGITAL</option>
                <option value="{{ $qrisRoute }}">PEMBAYARAN QRIS</option>
            </select>
        </div>
        <br>

        <div class="ringkasan-pembayaran-title">Ringkasan Pembayaran</div>
        <?php
        function abbreviateNumber($number)
        {
            if ($number >= 1e9) {
                return number_format($number / 1e9, 1) . ' Milliar';
            }
            if ($number >= 1e6) {
                return number_format($number / 1e6, 1) . ' Juta';
            }
            if ($number >= 1e3) {
                return number_format($number / 1e6, 1) . ' Ribu';
            }
            return number_format($number);
        }
        ?>

        <div class="total-tagihan-box">
            <div class="total-tagihan-text">
                <span style="font-weight: bold;">Total Tagihan</span> (Untuk {{ $orderTransaction->durasi_kerja }} Bulan)
            </div>
            <div class="total-tagihan">Rp {{ abbreviateNumber($gaji * $orderTransaction->durasi_kerja) }}</div>
        </div>

        <div class="biaya-layanan-box">
            <div class="biaya-layanan-text">
                <span style="font-weight: bold;">Biaya Layanan</span> (5% Tagihan)
            </div>
            <div class="biaya-layanan">Rp {{ abbreviateNumber($biayaLayanan) }}</div>
        </div>

        <div class="line"></div>
        <div class="total-bayar-box">
            <div class="total-bayar-title">Total Bayar</div>
            <div class="total-bayar">Rp {{ abbreviateNumber(($gaji * $durasi_kerja) + $biayaLayanan) }}</div>
        </div>

        <div class="button-group">
            <button class="kembali" onclick="batalTransaksi({{ $orderTransaction->id }})">Kembali</button>
            <form id="bayarForm" method="POST" action="{{ route('pembayaran.process', ['id' => $orderTransaction->id]) }}">
                @csrf
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="total_harga" value="{{ $gaji + $biayaLayanan }}">
                <input type="hidden" name="status_transaksi" value="Pembayaran">
                <button type="submit" class="bayar">Bayar</button>
            </form>
        </div>
    </div>
</div>
@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">
@endpush

@push('scripts')
<script>
    document.getElementById('dropdownMenuButton').addEventListener('change', function() {
        var selectedOption = this.value;
        document.getElementById('bayarForm').setAttribute('action', selectedOption);
    });

    document.getElementById('bayarForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var form = document.getElementById('bayarForm');
        var action = form.getAttribute('action');
        var totalHargaInput = document.querySelector('input[name="total_harga"]');
        var totalHargaValue = totalHargaInput.value;
        var statusTransaksiInput = document.querySelector('input[name="status_transaksi"]');
        var statusTransaksiValue = statusTransaksiInput.value;
        window.location.href = action + '?total_harga=' + totalHargaValue + '&status_transaksi=' + statusTransaksiValue;
    });

    document.getElementById('kembaliBtn').addEventListener('click', function() {
    fetch('/pembayaran/batal/{{ $orderTransaction->id }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            status_transaksi: 'Pembayaran'
        })
    })
    .then(function(response) {
        if (response.ok) {
            // Redirect ke halaman dashboard setelah berhasil memperbarui
            window.location.href = '/dashboard';
        } else {
            // Tampilkan pesan atau tangani jika ada kesalahan dalam pembaruan
            console.error('Terjadi kesalahan saat memperbarui status transaksi.');
        }
    })
    .catch(function(error) {
        console.error('Terjadi kesalahan saat memperbarui status transaksi.', error);
    });
    });


</script>

<script>
    document.getElementById('saldoApergaBtn').addEventListener('click', function() {
        window.location.href = "{{ $saldoApergaRoute }}";
    });
</script>

<script>
function batalTransaksi() {
    fetch('/pembayaran/batal/{{ $orderTransaction->id }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            status_transaksi: 'Transaksi Dibatalkan'
        })
    })
    .then(function(response) {
        if (response.ok) {
            // Redirect ke halaman dashboard setelah berhasil memperbarui
            window.location.href = '/dashboard';
        } else {
            // Tampilkan pesan atau tangani jika ada kesalahan dalam pembaruan
            console.error('Terjadi kesalahan saat memperbarui status transaksi.');
        }
    })
    .catch(function(error) {
        console.error('Terjadi kesalahan saat memperbarui status transaksi.', error);
    });
}

</script>
@endpush
