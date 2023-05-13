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
        <p class="halo-username">Halo, username</p>
        //
    </div>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/daftarpekerja.css') }}">
@endpush
