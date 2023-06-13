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

<div class="info-pekerja">
    <div class="big-profile">
        <?php
        $id = $prt->id;
        $imagePath = 'images/prt/prt' . $id . '.jpg';

        if (file_exists(public_path($imagePath))) {
            $imageURL = asset($imagePath);
        } else {
            $imageURL = asset('images/bigprofile.png');
        }
        ?>
        <img src="{{ $imageURL }}" alt="Big Profile" class="big-profile-img" style="width: 509px; height: 436px; border-radius: 23px; flex: none; order: 0; flex-grow: 0;">
    </div>
    <div class="deskripsi">
        <div class="nama-pekerja">
            {{ $prt->nama ?? 'Nama tidak tersedia' }}
        </div>
        <div class="rating">
            <?php
            $rating = $prt->rating ?? 0;
            $roundedRating = floor($rating); // Rating yang telah dibulatkan ke bawah
            $ratingStars = min(5, max(0, $roundedRating));
            $hasHalfStar = $rating > $roundedRating;
            ?>

            @for ($i = 0; $i < $ratingStars; $i++)
                <img src="{{ asset('images/star.png') }}" alt="Star" class="star-img">
            @endfor



            <span class="rating-text">{{ $roundedRating }}/5</span>
        </div>


        <div class="infopekerja">
            <p class="lokasi"><strong>Lokasi Pekerja:</strong> {{ $prt->lokasi ?? 'Lokasi tidak tersedia' }}</p>
            <p class="gaji"><strong>Besaran Gaji:</strong> {{ $prt->gaji ? 'Rp ' . number_format($prt->gaji, 2, ',', '.') : 'Gaji tidak tersedia' }}</p>
            <p class="umur"><strong>Umur Pekerja:</strong> {{ $prt->umur ? $prt->umur . ' Tahun' : 'Umur tidak tersedia' }}</p>
        </div>

        <div class="deskripsi-pekerja">
            <p class="deskripsi-text"><strong>Deskripsi:</strong></p>
            <p class="isi-deskripsi">{{ $prt->deskripsi ?? 'Deskripsi tidak tersedia' }}</p>
        </div>

        <div class="button-group">
            <button class="WABtn" onclick="openPopup()">
                <span>Whatsapp</span>
            </button>
            <button class="order" onClick="window.location.href = '{{ route('mulaikontrak', ['id' => $prt->id]) }}';">
                <span>Pesan Sekarang</span>
            </button>

        </div>

    </div>
    <div id="overlay" class="overlay" onclick="closePopup()"></div>
    <div id="popup" class="wa-admin-1">
        <div class="header-wa">
            <img src="{{ asset('images/wamin.png') }}">
            <p class="header-wa-title">Chat Admin Support</p>
            <p class="header-wa-text">Menjawab semua keluhan anda</p>
        </div>
        <p class="admin-support-text">Pilih admin support</p>
        <div class="admin-1">
            <img src="{{ asset('images/admin.jpg')}}">
            <p class="nama-admin">Luthfi Hakim</p>
            <p class="title-admin">Support Admin #1</p>
            <div class="kirim-pesan">
                <span>Kirim Pesan</span>
            </div>
        </div>

        <div class="admin-2">
            <img src="{{ asset('images/admin.jpg')}}">
            <p class="nama-admin">Ananda Surya</p>
            <p class="title-admin">Support Admin #2</p>
            <div class="kirim-pesan">
                <span>Kirim Pesan</span>
            </div>
        </div>
        <div class="button">
            <span>Batalkan</span>
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
<script>
function openPopup() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "block";
    overlay.style.display = "block";
}

function closePopup() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");
    popup.style.display = "none";
    overlay.style.display = "none";
}
    </script>

@endpush
