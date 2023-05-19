@extends('template')
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
    <div class="big-profile">
        <img src="{{ asset('images/bigprofile.png') }}" alt="Big Profile" class="big-profile-img">
    </div>
    <div class="deskripsi">
        <div class="metode-pembayaran-title">Metode Pembayaran</div>
        
        <div class="metode-pembayaran">
            <div class="debit-kredit">
                <div class="debit-kredit-box">
                    <div class="debit-kredit-icon">4 jam/hari</div>
                    <div class="debit-kredit-title">Debit/Kredit</div>
                </div>
            </div>
            <div class="virtual-account">
                <div class="virtual-account-box">
                    <div class="virtual-account-icon">1 Bulan</div>
                    <div class="virtual-account-title">Durasi Kerja</div>
                </div>
            </div>
        </div>
        <div class="catatan-khusus">
            <div class="catatan-khusus-textbox">
                <span>Catatan Khusus</span>
            </div>
            <div class="deskripsi-catatan-khusus">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
            </div>
        </div>
        <div class="rincian-biaya">
            <div class="subtotal-biaya">Subtotal Biaya: <br> Rp.5.000.000,00 </div>
        </div>
        <div class="button-group">
            <button class="Batalkan">Batalkan kontrak</button>
            <button class="return">Kembali</button>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">
@endpush

