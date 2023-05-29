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
        <form method="GET" action="{{ route('pencarian') }}">
            <input type="text" class="search-bar" id="search-input" name="keyword" placeholder="Ketikkan pencarian PRT" value="{{ session('keyword', '') }}">
            <div class="tombolcari">
                <button type="submit" class="tombolcari-button" id="search-button">Search</button>
            </div>
        </form>
    </div>

    <button class="filter-button" onclick="window.location.href='/dashboard'">
        <img src="{{ asset('images/filterr.png') }}" class="filter-img" alt="Filter Icon">
    </button>

</div>

<div class="list-prt">
    <div class="row">
        @php
            $prtsArray = $prts->toArray();
            shuffle($prtsArray['data']); // Mengacak urutan data
        @endphp

        @foreach ($prtsArray['data'] as $prt)
            @php
                $imagePath = 'images/prt/prt' . $prt['id'] . '.jpg';
                $imageURL = file_exists(public_path($imagePath)) ? asset($imagePath) : asset('images/bigprofile.png');
            @endphp
            <div class="prt-item" data-nama="{{ $prt['nama'] }}" data-lokasi="{{ $prt['lokasi'] }}">
                <img src="{{ $imageURL }}" alt="Profile Image" class="person-img">
                <p class="nama-prt">{{ $prt['nama'] }}</p>
                <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
                <p class="lokasi">{{ $prt['lokasi'] }}</p>
                <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
                <p class="ratingtext">{{ $prt['rating'] }}/5</p>
                <a href="{{ url('detail-pekerja', $prt['id']) }}" class="cek-selengkapnya">
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
            <li class="page-item"><a class="page-link" href="{{ $prts->url($page) }}&amp;keyword={{ session('keyword') }}">{{ $page }}</a></li>
        @endforeach
        <li class="page-item"><a class="page-link" href="{{ $prts->nextPageUrl() }}">Next</a></li>
    </ul>
</nav>


@endsection

@section('footer')
<div class="space"></div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cari.css') }}">
@endpush

@push('scripts')
<script>
    // Fungsi untuk menampilkan data prt sesuai hasil pencarian
    function showFilteredData(prts) {
         var prtItems = $('.prt-item');
         prtItems.hide(); // Sembunyikan semua prt-item

         $.each(prts, function(index, prt) {
             var prtItem = $('.prt-item[data-nama="' + prt.nama + '"][data-lokasi="' + prt.lokasi + '"]');
             prtItem.show(); // Tampilkan prt-item yang cocok dengan hasil pencarian
         });
     }

     // Fungsi untuk melakukan pencarian
     function performSearch() {
         var keyword = $('#search-input').val().toLowerCase().trim();

         // Ubah URL dengan keyword pencarian
         var searchURL = '{{ route('pencarian') }}' + '?keyword=' + keyword;
         history.pushState(null, '', searchURL); // Ubah URL di browser

         // Kirim permintaan pencarian ke backend
         $.ajax({
             url: searchURL,
             type: 'GET',
             success: function(response) {
                 showFilteredData(response.prts); // Tampilkan hasil pencarian
             },
             error: function(xhr, status, error) {
                 console.error(error);
             }
         });
     }

     // Mendapatkan tombol pencarian
     var searchButton = document.getElementById('search-button');

     // Menambahkan event listener untuk tombol pencarian
     searchButton.addEventListener('click', function() {
         performSearch();
     });

     // Menghubungkan event keyup pada input pencarian
     $('#search-input').keyup(function(e) {
         if (e.keyCode === 13) {
             performSearch();
         }
     });

     // Mengambil keyword pencarian dari URL saat halaman dimuat
     $(document).ready(function() {
         var searchURLParams = new URLSearchParams(window.location.search);
         var keyword = searchURLParams.get('keyword');
         if (keyword) {
             $('#search-input').val(keyword);
             performSearch();
         }
     });
 </script>

@endpush
