@extends('template')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-utama">
        <div class="header"><img src="{{ asset('images/arrow-white.png') }}" alt="Arrow" class="arrow"></div>
        <div class="header"><p >Pilihan Pekerja di Aperga</p></div>

</div>
<form class="search-box">
    <div><input class="search-input" type="text" name="cari" placeholder="Cari Pekerja"></div>
    <div><input class="search-button" id="cari-text" type="submit" value="Cari"></div>
</form>

<form action="{{ route('filter') }}" method="GET">

    <div class="btn-group" role="group" aria-label="Filter">

        <div>
        <p class="filter-text">filter berdasarkan</p>
        <button class="filter-button" type="submit" name="filter" value="gaji" class="btn btn-primary">Gaji</button>
        <button class="filter-button" type="submit" name="filter" value="umur" class="btn btn-primary">Umur</button>
        <button class="filter-button" type="submit" name="filter" value="lokasi" class="btn btn-primary">Lokasi</button>
    </div>
</form>





@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cariPRT.css') }}">
@endpush


