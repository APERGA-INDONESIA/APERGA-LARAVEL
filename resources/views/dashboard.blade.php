@extends('template')

@section('favicon')
@endsection

@section('navbar')
@endsection

@section('konten')
<div class="dashboard-kotak">
    <a href="http://localhost:8000/cariPRT">
        <img src="{{ asset('images/search.png') }}" alt="Search" class="search-icon">
        <span class="cari-prt">Pencarian PRT</span>
    </a>
</div>

<div class="dashboard-kotak-2">
    <a href="http://localhost:8000/">
        <img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
        <p class="greeting">Halo, Selamat Datang</p>
        <p class="username">{{ Auth::user()->name }}</p>
    </a>
</div>

<div class="dashboard-kotak-3">
    <a href="http://localhost:8000/daftarpekerja">
        <img src="{{ asset('images/worker.png') }}" alt="Profile Image" class="profile-img">
        <p class="jumlahpekerja-text">Jumlah Pekerja</p>
        <p class="jumlahpekerja">2 Orang</p>
    </a>
</div>

@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush
