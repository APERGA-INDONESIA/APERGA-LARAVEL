@extends('template')
@section('title', 'Pembayaran Qris')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
<div class="transfer-virtual-account">Transfer Virtual Account</div>
    <div class="content">
        <div class="qr-code">
            <img src="{{ asset('images/barcode-virtual-account.png') }}" alt="Barcode Virtual Account" class="qr-code-img">
        </div>
        <div class="text">Scan barcode di atas untuk melakukan pembayaran</div>
        <div class="button-group">
            <button class="lanjutkan-pembayaran">Lanjutkan Pembayaran</button>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pembayaranqris.css') }}">
@endpush

