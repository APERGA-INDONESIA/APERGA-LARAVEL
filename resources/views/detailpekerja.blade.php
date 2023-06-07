@extends('template6')
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
        <?php
        $id = $pekerja->id;
        $imagePath = 'images/prt/prt' . $id . '.jpg';

        if (file_exists(public_path($imagePath))) {
            $imageURL = asset($imagePath);
        } else {
            $imageURL = asset('images/bigprofile.png');
        }
        ?>
        <img src="{{ $imageURL }}" alt="Big Profile" class="big-profile-img">
    </div>
    <div class="deskripsi">
        <div class="nama-pekerja">{{ $pekerja->nama }}</div>
        <div class="rating">
            <?php
            $rating = $pekerja->rating ?? 0;
            $ratingStars = min(5, max(0, $rating));
            ?>

            @for ($i = 0; $i < $ratingStars; $i++)
                <img src="{{ asset('images/star.png') }}" alt="Star" class="star-img">
            @endfor

            @if ($rating > $ratingStars)
                <img src="{{ asset('images/star-half.png') }}" alt="Star" class="star-img">
            @endif
            <span class="rating-text">{{ $pekerja->rating }}/5</span>
        </div>
        <div class="deskripsi-jam-kerja">
            <div class="jam-kerja">
                <div class="jam-kerja-title">Jam Kerja</div>
                <div class="jam-kerja-box">
                    <div class="jam-kerja-text">{{ $pekerja->jamkerja }} jam/hari</div>
                </div>
            </div>
            <div class="durasi-kerja">
                <div class="durasi-kerja-title">Durasi Kerja</div>
                <div class="durasi-kerja-box">
                    <div class="durasi-kerja-text">{{ $pekerja->durasi }} Bulan</div>
                </div>
            </div>
        </div>
        <div class="catatan-khusus">
            <div class="catatan-khusus-textbox">
                <span>Catatan Khusus</span>
            </div>
            <div class="deskripsi-catatan-khusus">
                <p>{{ $pekerja->catatan }}</p>
            </div>
        </div>
        <div class="rincian-biaya">
            <div class="subtotal-biaya">Subtotal Biaya: <br> Rp.{{ number_format($pekerja->gaji, 2, ',', '.') }}</div>
        </div>
        <div class="button-group">
            <button id="batalkanKontrakBtn" data-pekerja-id="{{ $pekerja->id }}">Batalkan Kontrak</button>
            <a href="javascript:void(0);" onclick="window.history.back();">
                <button class="return">Kembali</button>
            </a>
        </div>
    </div>
</div>

<div id="popup" class="popup">
    <div class="popup-field">
        <div class="popup-content">
            <img src="{{ asset('images/alert-triangle.png') }}" alt="alert-triangle" class="star-img">
            <p>Apakah Anda yakin ingin membatalkan kontrak?</p>
            <div class="button-container">
                <div class="button-group">
                    <form action="{{ route('update.pekerja') }}" method="POST">
                        @csrf
                        <button type="submit" id="cancelBtn">Batalkan</button>
                        <input type="hidden" name="pekerjaId" value="{{ $pekerja->id }}">
                    </form>
                    <button id="confirmBtn">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="successPopup" class="popup">
    <div class="popup-field">
      <div class="popup-content">
        <img src="{{ asset('images/centang.png') }}" alt="centang" class="centang">
        <p>Kontrak berhasil dibatalkan. Silahkan periksa kembali daftar pekerja anda</p>
      </div>
      <button id="OKBtn">OK</button> <!-- Tombol OK ditempatkan di luar button-container -->
    </div>
  </div>


@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/detailpekerja.css') }}">
    <style>
        .big-profile-img {
            width: 509px;
            height: 436px;
            border-radius: 23px;
        }
    </style>
@endpush

@push('scripts')
<script src="{{ asset('js/batalkankontrak.js') }}"></script>

@endpush
