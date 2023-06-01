@extends('template2')
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
    $id_prt = $orderTransaction->id_prt; // Ganti $orderTransaction dengan variabel yang sesuai untuk mendapatkan ID PRT dari tabel order transactions

    $imagePath = 'images/prt/prt' . $id_prt . '.png';

    if (file_exists(public_path($imagePath))) {
        $imageUrl = asset($imagePath);
    } else {
        $imageUrl = asset('images/bigprofile.png');
    }
    @endphp


    <div class="big-profile">
        <img src="{{ $imageUrl }}" alt="Big Profile" class="big-profile-img">
    </div>
    <div class="deskripsi">
        <div class="metode-pembayaran-title">Metode Pembayaran</div>
        <div class="debit-kredit-button">
            <button type="button" class="btn btn-primary btn-lg btn-block">
                <img src="{{ asset('images/debit-kredit.svg') }}" alt="Debit-Kredit" class="debit-kredit-img">
                SALDO APERGA
            </button>
        </div>
        <br>
        <div class="dropdown">
            <select class="btn btn-primary btn-lg btn-block dropdown-toggle" id="dropdownMenuButton">
                <option value="" disabled selected>NON SALDO APERGA</option>
                <option value="{{ route('pembayaran.bank', ['id' => $orderTransaction->id]) }}">TRANSFER BANK</option>
                <option value="{{ route('pembayaran.ewallet', ['id' => $orderTransaction->id]) }}">DOMPET DIGITAL</option>
                <option value="{{ route('pembayaran.other', ['id' => $orderTransaction->id]) }}">PEMBAYARAN LAIN</option>
            </select>
        </div>
        <br>

        <div class="ringkasan-pembayaran-title">Ringkasan Pembayaran</div>
        <div class="total-tagihan-box">
            <div class="total-tagihan-text">Total Tagihan</div>
            <div class="total-tagihan">Rp {{ number_format($gaji, 2, ',', '.') }}</div>
        </div>
        <div class="biaya-layanan-box">
            <div class="biaya-layanan-text">Biaya Layanan</div>
            <div class="biaya-layanan">Rp {{ number_format($biayaLayanan, 2, ',', '.') }}</div>
        </div>

        <div class="line"></div>
        <div class="total-bayar-box">
            <div class="total-bayar-title">Total Bayar</div>
            <div class="total-bayar">Rp {{ number_format($gaji + $biayaLayanan, 2, ',', '.') }}</div>
        </div>
        <div class="button-group">
            <button class="kembali">Kembali</button>
            <button class="bayar" onclick="bayar({{ $orderTransaction->id }})">Bayar</button>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('script')
<script>
function bayar(id) {
    // Mendapatkan token CSRF
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Memperbarui nilai kolom status transaksi di tabel order transactions menjadi "Mulai Pembayaran"
    let url_perbarui_status = "{{ route('pembayaran.bayar', ':id') }}".replace(':id', id);
    // Mengirim permintaan AJAX ke URL yang sesuai
    axios.post(url_perbarui_status, { status: "Mulai Pembayaran" }, {
        headers: {
            'X-CSRF-TOKEN': token
        }
    })
        .then(response => {
            // Berhasil memperbarui status transaksi
            console.log(response.data);
            // Mengalihkan ke halaman pembayaran dengan ID transaksi
            let url_pembayaran = "{{ route('pembayaran.bayar', ':id') }}".replace(':id', id);
            window.location.href = url_pembayaran;
        })
        .catch(error => {
            // Gagal memperbarui status transaksi
            console.error(error);
        });
}

</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">
@endpush
