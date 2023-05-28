@extends('template')

@section('title', 'Pencarian PRT')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">

    <div class="carikan">
        <a href="javascript:void(0);" onclick="window.history.back();">
            <img src="{{ asset('images/arrowwhite.png') }}" class="arrows-img" alt="Arrow">
        </a>
        <div class="cari-title">Pencarian PRT</div>
    </div>


    <div class="kotakpencarian">
        <img src="{{ asset('images/searchblack.png') }}" class="search-img" alt="Search Icon">
        <input type="text" class="search-bar" placeholder="Ketikkan pencarian PRT">
        <div class="tombolcari">
            <button type="button" class="tombolcari-button">Search</button>
        </div>
    </div>
    <div class="filter-button">
        <img src="{{ asset('images/filterr.png') }}" class="filter-img" alt="Filter Icon">
    </div>
</div>

    <div class="list-prt">
        <div class="row">
            @foreach ($prts as $prt)
            <?php
            $imagePath = 'images/prt/prt' . $prt->id . '.jpg';
            if (file_exists(public_path($imagePath))) {
                $imageURL = asset($imagePath);
            } else {
                $imageURL = asset('images/bigprofile.png');
            }
            ?>
            <div class="prt-item">
                <img src="{{ $imageURL }}" alt="Profile Image" class="person-img">
                <p class="nama-prt">{{ $prt->nama }}</p>
                <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
                <p class="lokasi">{{ $prt->lokasi }}</p>
                <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
                <p class="ratingtext">{{ $prt->rating }}/5</p>
                <a href="http://localhost:8000/detail-pekerja/{{ $prt->id }}" class="cek-selengkapnya">
                    Cek Selengkapnya
                </a>
            </div>
            @endforeach
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="{{ $prts->previousPageUrl() }}">Previous</a></li>
                @foreach(range(1, $prts->lastPage()) as $page)
                    <li class="page-item"><a class="page-link" href="{{ $prts->url($page) }}">{{ $page }}</a></li>
                @endforeach
                <li class="page-item"><a class="page-link" href="{{ $prts->nextPageUrl() }}">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

@endsection

@section('footer')
<div class="space"></div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cari.css') }}">
@endpush

@push('scripts')
<script>
    // Skrip tambahan
</script>
@endpush
