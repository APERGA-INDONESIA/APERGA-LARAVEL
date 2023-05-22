@extends('template')
@section('title', 'Daftar Pekerja')
@section('navbar')
@endsection

@section('konten')
    <div class="pekerja-container">
        <div class="pekerja-text">
            <img src="{{ asset('images/arrow.png') }}" alt="Arrow" class="arrow">
            <h1 class="pekerja-anda">Pekerja Anda</h1>
        </div>
    </div>
    <div class="kotak-hitam">
        <img src="{{ asset('images/Profile 1.png') }}" alt="Profile 1" class="profile-image">
        <p class="halo-username">Halo, {{ Auth::user()->name }}</p>
    </div>
    <div class="List-Pekerja">
        <div class="list-pekerja-1">
            <div class="kotak-abu">
                <img src="{{ asset('images/person.png') }}" alt="person" class="profile-image">
                <p class="nama-pekerja">Abdul Ghafur</p>
            </div>
            <div class="tombol-detail">
                <a href="http://localhost:8000/detailpekerja">Detail</a>
            </div>
        </div>
        <div class="list-pekerja-2">
            <div class="kotak-abu">
                <img src="{{ asset('images/person.png') }}" alt="person" class="profile-image">
                <p class="nama-pekerja">Abdul Ghafur</p>
            </div>
            <div class="tombol-detail">
                <a href="http://localhost:8000/detailpekerja">Detail</a>
            </div>
        </div>
        <div class="list-pekerja-3">
            <div class="kotak-abu">
                <img src="{{ asset('images/person.png') }}" alt="person" class="profile-image">
                <p class="nama-pekerja">Abdul Ghafur</p>
            </div>
            <div class="tombol-detail">
                <a href="http://localhost:8000/detailpekerja">Detail</a>
            </div>
        </div>
        <div class="list-pekerja-4">
            <div class="kotak-abu">
                <img src="{{ asset('images/person.png') }}" alt="person" class="profile-image">
                <p class="nama-pekerja">Abdul Ghafur</p>
            </div>
            <div class="tombol-detail">
                <a href="http://localhost:8000/detailpekerja">Detail</a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/daftarpekerja.css') }}">
@endpush
