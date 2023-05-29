@extends('template')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-utama">
        <div class="header"><img src="{{ asset('images/arrow-white.png') }}" alt="Arrow" class="arrow"></div>
        <div class="header"><p >Pilihan Pekerja di Aperga</p></div>

</div>
<form class="search-box">
    <div><input class="search-input" type="text" name="cari" placeholder="Cari Pekerja"></div>
    <div><input class="search-button" id="cari-text" type="submit" value="Cari"></div>
</form>

<form action="{{ route('filter') }}" method="GET">

    <div class="btn-group" role="group" aria-label="Filter">

        <p class="filter-text">filter berdasarkan</p>
        <button class="filter-button" type="submit" name="filter" value="gaji" class="btn btn-primary">Gaji</button>
        <button class="filter-button" type="submit" name="filter" value="umur" class="btn btn-primary">Umur</button>
        <button class="filter-button" type="submit" name="filter" value="lokasi" class="btn btn-primary">Lokasi</button>
    </div>
</form>

<div class="container">
    <div class="row justify-content-between">
      <div class="col-md-1">
        <div class="card">
          <img src="gambar1.jpg" class="card-img-top" alt="Gambar 1">
          <div class="card-body">
            <h5 class="card-title">Card 1</h5>
            <p class="card-text">Deskripsi card ini.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="card">
          <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Deskripsi card ini.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="card">
          <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Deskripsi card ini.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="card">
          <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Deskripsi card ini.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="card">
          <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Deskripsi card ini.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="card">
          <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Deskripsi card ini.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-1">
        <div class="card">
          <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <p class="card-text">Deskripsi card ini.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>


    </div>

    <div class="row justify-content-between">
        <div class="col-md-1">
          <div class="card">
            <img src="gambar1.jpg" class="card-img-top" alt="Gambar 1">
            <div class="card-body">
              <h5 class="card-title">Card 1</h5>
              <p class="card-text">Deskripsi card ini.</p>
              <a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-1">
          <div class="card">
            <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Deskripsi card ini.</p>
              <a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-1">
          <div class="card">
            <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Deskripsi card ini.</p>
              <a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-1">
          <div class="card">
            <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Deskripsi card ini.</p>
              <a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-1">
          <div class="card">
            <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Deskripsi card ini.</p>
              <a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-1">
          <div class="card">
            <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Deskripsi card ini.</p>
              <a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-1">
          <div class="card">
            <img src="gambar3.jpg" class="card-img-top" alt="Gambar 3">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Deskripsi card ini.</p>
              <a href="#" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>


      </div>


</div>







@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cariPRT.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@endpush


