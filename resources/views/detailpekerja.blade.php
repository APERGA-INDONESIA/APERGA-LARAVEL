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
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/detailpekerja.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
@endpush
