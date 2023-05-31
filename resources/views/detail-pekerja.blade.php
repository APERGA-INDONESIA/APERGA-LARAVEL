@extends('template2')

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
            $ratingStars = min(5, max(0, $rating));
            ?>

            @for ($i = 0; $i < $ratingStars; $i++)
                <img src="{{ asset('images/star.png') }}" alt="Star" class="star-img">
            @endfor

            @if ($rating > $ratingStars)
                <img src="{{ asset('images/star-half.png') }}" alt="Star" class="star-img">
            @endif
            <span class="rating-text">{{ $prt->rating }}/5</span>
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
            <button class="WABtn" onClick="window.location.href = 'http://localhost:8000/waadmin';">
                <span>Whatsapp</span>
            </button>
            <button class="order" onClick="window.location.href = '{{ route('mulaikontrak', ['id' => $prt->id]) }}';">
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
