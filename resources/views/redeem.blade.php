@extends('template')
@section('title', 'Tentang Aplikasi')

@section('navbar')
@endsection

@section('konten')
<div class="RedeemPoint">
    <a href="javascript:void(0);" onclick="window.history.back();">
    <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
    </a>
    <div class="redeem-title">Redeem Point</div>
</div>


@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/redeem.css') }}">
@endpush
