@extends('template')
@section('title', 'Detail Pekerja')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="detail-pekerja">
        Detail Pekerja
    </div>
</div>

<div class="infopekerja">
    <div class="big-profile">
        <img src="{{ asset('images/bigprofile.png') }}" alt="Big Profile" class="big-profile-img">
    </div>
    <div class="deskripsi">
        <div class="nama-pekerja">Abdul Ghafur</div>
        <div class="rating">
            <img src="{{ asset('images/star.png') }}" alt="Star" class="star-img">
            <span class="rating-text">4.5/5</span>
        </div>


        <div class="button-group">
            <button class="WABtn" onClick="window.location.href = 'http://localhost:8000/waadmin';">
              <span>Whatsapp</span>
            </button>
            <button class="order" onClick="window.location.href = 'http://localhost:8000/mulaikontrak';">
              <span>Pesan Sekarang</span>
            </button>
          </div>

    </div>
</div>



@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/detail-pekerja.css') }}">
@endpush

@push('scripts')

@endpush
