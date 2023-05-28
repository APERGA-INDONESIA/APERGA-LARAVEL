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
        <input type="text" class="search-bar" id="search-input" placeholder="Ketikkan pencarian PRT">
        <div class="tombolcari">
            <button type="button" class="tombolcari-button" id="search-button">Search</button>
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
        // Cek nilai kolom user_id
        if ($prt->user_id != 0) {
            continue; // Lewati jika nilai user_id bukan 0
        }

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

@endsection

@section('footer')
<div class="space"></div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cari.css') }}">
@endpush

@push('scripts')
<script>
// Ambil elemen div "list-prt"
var listPrt = document.querySelector('.list-prt');

// Ambil elemen pagination
var pagination = document.querySelector('.pagination');

// Fungsi untuk menetapkan posisi pagination
function setPaginationPosition() {
  var listPrtHeight = listPrt.offsetHeight;
  var paginationHeight = pagination.offsetHeight;

  pagination.style.top = listPrtHeight + 'px';
}

// Panggil fungsi setPaginationPosition saat halaman berubah
document.addEventListener('DOMContentLoaded', function() {
  setPaginationPosition();
});

// Juga panggil fungsi setPaginationPosition saat halaman berpindah
pagination.addEventListener('click', function() {
  setTimeout(setPaginationPosition, 0);
});

// Fungsi untuk melakukan pencarian
function performSearch() {
  var keyword = document.getElementById('search-input').value.toLowerCase().trim();
  var prtItems = document.getElementsByClassName('prt-item');

  for (var i = 0; i < prtItems.length; i++) {
    var prtItem = prtItems[i];
    var namaPRT = prtItem.getElementsByClassName('nama-prt')[0].textContent.toLowerCase();

    if (namaPRT.includes(keyword)) {
      prtItem.style.display = 'block';
    } else {
      prtItem.style.display = 'none';
    }
  }
}

// Mendapatkan tombol pencarian
var searchButton = document.getElementById('search-button');

// Menambahkan event listener untuk tombol pencarian
searchButton.addEventListener('click', function() {
  performSearch();
  setPaginationPosition();
});
</script>
@endpush

