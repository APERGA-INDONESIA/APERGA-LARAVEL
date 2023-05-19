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
        <div class="deskripsi-jam-kerja">
            <div class="jam-kerja">
                <div class="jam-kerja-title">Jam Kerja</div>
                <div class="jam-kerja-box">
                    <div class="jam-kerja-text">4 jam/hari</div>
                </div>
            </div>
            <div class="durasi-kerja">
                <div class="durasi-kerja-title">Durasi Kerja</div>
                <div class="durasi-kerja-box">
                    <div class="durasi-kerja-text">1 Bulan</div>
                </div>
            </div>
        </div>
        <div class="catatan-khusus">
            <div class="catatan-khusus-textbox">
                <span>Catatan Khusus</span>
            </div>
            <div class="deskripsi-catatan-khusus">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
        </div>
        <div class="rincian-biaya">
            <div class="subtotal-biaya">Subtotal Biaya: <br> Rp.5.000.000,00 </div>
        </div>
        <div class="button-group">
            <button id="batalkanKontrakBtn" class="batalkan">Batalkan kontrak</button>
            <button class="return">Kembali</button>
        </div>
    </div>
</div>

<div id="popup" class="popup">
    <div class="popup-field">
      <div class="popup-content">
        <img src="{{ asset('images/alert-triangle.png') }}" alt="alert-triangle" class="star-img">
        <p>Apakah Anda yakin ingin membatalkan kontrak?</p>
        <div class="button-container">
          <button id="confirmBtn">Kembali</button>
          <button id="cancelBtn">Batalkan</button>
        </div>
      </div>
    </div>
  </div>


@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/detailpekerja.css') }}">
@endpush

@push('scripts')
<script>
    // Menangkap tombol "Batalkan kontrak" dan popup
    var batalkanKontrakBtn = document.getElementById('batalkanKontrakBtn');
    var popup = document.getElementById('popup');
    var confirmBtn = document.getElementById('confirmBtn');
    var cancelBtn = document.getElementById('cancelBtn');

    // Menambahkan event listener untuk menampilkan dan menyembunyikan popup saat tombol diklik
    batalkanKontrakBtn.addEventListener('click', function() {
        popup.classList.add('active');
    });

    confirmBtn.addEventListener('click', function() {
        var confirmation = confirm("Apakah Anda yakin ingin membatalkan kontrak?");
        if (confirmation) {
            // Logika untuk membatalkan kontrak
        }
    });

    cancelBtn.addEventListener('click', function() {
        popup.classList.remove('active');
    });
</script>
@endpush
