@extends('template')

@section('title', 'Topup Saldo')

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
      <div class="prt-1">
        <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
        <p class="nama-prt">Nama PRT</p>
        <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
        <p class="lokasi">Lokasi PRT</p>
        <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
        <p class="ratingtext">4/5 </p>
        <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
            Cek Selengkapnya
        </a>

      </div>

      <div class="prt-2">
        <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
        <p class="nama-prt">Nama PRT</p>
        <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
        <p class="lokasi">Lokasi PRT</p>
        <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
        <p class="ratingtext">4/5 </p>
        <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
            Cek Selengkapnya
        </a>

      </div>

      <div class="prt-3">
        <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
        <p class="nama-prt">Nama PRT</p>
        <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
        <p class="lokasi">Lokasi PRT</p>
        <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
        <p class="ratingtext">4/5 </p>
        <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
            Cek Selengkapnya
        </a>

      </div>

      <div class="prt-4">
        <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
        <p class="nama-prt">Nama PRT</p>
        <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
        <p class="lokasi">Lokasi PRT</p>
        <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
        <p class="ratingtext">4/5 </p>
        <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
            Cek Selengkapnya
        </a>
      </div>

      <div class="prt-5">
        <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
        <p class="nama-prt">Nama PRT</p>
        <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
        <p class="lokasi">Lokasi PRT</p>
        <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
        <p class="ratingtext">4/5 </p>
        <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
            Cek Selengkapnya
        </a>

      </div>

      <div class="prt-6">
        <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
        <p class="nama-prt">Nama PRT</p>
        <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
        <p class="lokasi">Lokasi PRT</p>
        <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
        <p class="ratingtext">4/5 </p>
        <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
            Cek Selengkapnya
        </a>
      </div>
    </div>

    <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
      </div>

      <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
      </div>

      <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
      </div>

      <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
      </div>

      <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
      </div>

      <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
      </div>

      <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
      </div>

      <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
      </div>

      <div class="row">
        <div class="prt-1">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-2">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-3">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-4">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>

        <div class="prt-5">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>

        </div>

        <div class="prt-6">
          <img src="{{ asset('images/bigprofile.png') }}" class="person-img" alt="Person Icon">
          <p class="nama-prt">Nama PRT</p>
          <img src="{{ asset('images/location.png') }}" class="lokasi-img" alt="Location Icon">
          <p class="lokasi">Lokasi PRT</p>
          <img src="{{ asset('images/rating.png') }}" class="rating-img" alt="Rating Icon">
          <p class="ratingtext">4/5 </p>
          <a href="http://localhost:8000/detail-pekerja" class="cek-selengkapnya">
              Cek Selengkapnya
          </a>
        </div>
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
