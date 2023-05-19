@extends('template')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-utama">
        <div class="header"><img src="{{ asset('images/arrow-white.png') }}" alt="Arrow" class="arrow"></div>
        <div class="header"><p >Pilihan Pekerja di Aperga</p></div>
</div>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cariPRT.css') }}">
@endpush


