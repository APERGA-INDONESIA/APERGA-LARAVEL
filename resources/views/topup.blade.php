
@extends('template')

@section('title', 'Topup Saldo')

@section('navbar')
@endsection

@section('konten')
<div class="topup">
    <a href="javascript:void(0);" onclick="window.history.back();">
        <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
    </a>
    <div class="topup-title">Topup Saldo</div>

    <div class="paymentmethod">
        <div class="transferbank">
            <img src="{{ asset('images/transfer.png') }}" alt="Transfer Bank">
            <p>Transfer Bank</p>
        </div>

        <div class="e-wallet">
            <img src="{{ asset('images/wallet.png') }}" alt="Dompet Digital">
            <p>Dompet Digital</p>
        </div>

        <div class="othermethode">
            <img src="{{ asset('images/othermethode.png') }}" alt="Metode Lain">
            <p>Metode Lain</p>
        </div>
    </div>
</div>

@endsection

@section('footer')
<div class="space"></div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/topup.css') }}">
@endpush

@push('scripts')
<script>


</script>
@endpush
