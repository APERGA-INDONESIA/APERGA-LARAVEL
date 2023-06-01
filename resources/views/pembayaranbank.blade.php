@extends('template')
@section('title', 'Pembayaran')

@section('navbar')
@endsection

@section('konten')

<div class="kotak-hitam">
  <div class="tulisan-pembayaran">Pembayaran</div>
  <div class="rekening-bank">Rekening Bank</div>
  <div class="ringkasanpembayaran">Ringkasan Pembayaran</div>
  <div class="deskripsi">
    <div class="total-tagihan-box">
      <div class="total-tagihan-text">Total Tagihan</div>
      <div class="total-tagihan">Rp 5.000.000,00 </div>
    </div>
    <div class="biaya-layanan-box">
      <div class="biaya-layanan-text">Biaya Layanan</div>
      <div class="biaya-layanan">Rp 250.000,00 </div>
    </div>
  </div>
  <div class="total-bayar">Total Bayar</div>
  <div class="harga-total-bayar">Rp 5.250.000</div>

  <select class="round">
    <option>Pilih Bank</option>
    <option>BCA</option>
    <option>BRI</option>
    <option>Mandiri</option>
    <option>BSI</option>
  </select>

  <div class="button-group">
    <button class="bayar">Bayar</button>
  </div>
</div>







@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pembayaranbank.css') }}">
@endpush
