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
