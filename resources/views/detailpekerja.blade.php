@extends('template')
@section('title', 'Detail Pekerja')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="detail-pekerja">
        Detail Pekerja
    </div>
</div>

<div class="infopekerja">
    <div class="big-profile">
        <img src="{{ asset('images/bigprofile.png') }}" alt="Big Profile" class="big-profile-img">
    </div>
    <div class="deskripsi">
        <div class="nama-pekerja">Abdul Ghafur</div>
        <div class="rating">
            <img src="{{ asset('images/star.png') }}" alt="Star" class="star-img">
            <span class="rating-text">4.5/5</span>
        </div>
        <div class="deskripsi-jam-kerja">
            <div class="jam-kerja">
                <div class="jam-kerja-title">Jam Kerja</div>
                <div class="jam-kerja-box">
                    <div class="jam-kerja-text">4 jam/hari</div>
                </div>
            </div>
            <div class="durasi-kerja">
                <div class="durasi-kerja-title">Durasi Kerja</div>
                <div class="durasi-kerja-box">
                    <div class="durasi-kerja-text">1 Bulan</div>
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
    <link rel="stylesheet" href="{{ asset('css/detailpekerja.css') }}">
@endpush

