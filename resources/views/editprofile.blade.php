@extends('template5')
@section('title', 'Edit Profile')

@section('favicon')

@section('navbar')

@endsection

@section('konten')
<div class="container2">
    <div class="container-fluid" id="edit-box" style="margin-top: -100px;">
        <div class="row">
            <div class="col-lg-12">
                <div id="edit-profil">
                    <a href="javascript:void(0);" onclick="window.history.back();">
                        <img src="{{ asset('images/arrow.png') }}" alt="Arrow" width="20px" height="20px">
                    </a>
                    <p class="edit-title">Pengaturan Profil</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 navbar-main">
                <nav class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" id="profil-saya-nav" href="javascript:void(0);" onclick="showProfile()">Profil Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" id="keamanan-akun-nav" href="javascript:void(0);" onclick="showSecurity()">Keamanan Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" id="histori-nav" href="javascript:void(0);" onclick="showHistori()">Riwayat</a>
                      </li>
                </nav>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12" id="profile-header">
                        <img src="{{ $user->profile_image ? asset('Images/Profile Image/' . $user->profile_image) : asset('images/profil.png') }}" alt="Profile Image" id="profile-img">
                        <img src="{{ $user->header_image ? asset('Images/Header Image/' . $user->header_image) : asset('images/header.png') }}" alt="Profile Image" id="header-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-2">
                <!-- Kosongkan kolom ini agar form input berada di sebelah kanan navbar -->
            </div>
            <div class="col-lg-10">
                <!-- Profil Saya Section -->
                <div id="profile-section">
                    <form action="{{ route('profil.update') }}" enctype="multipart/form-data" id="form-input" method="POST">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="name" class="font-weight-bold">Nama</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama lengkap anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="address" class="font-weight-bold">Alamat</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="address" id="address" class="form-control" placeholder="Masukkan alamat email lengkap anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="pekerjaan" class="font-weight-bold">Pekerjaan</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Masukkan nama pekerjaan anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="birthdate" class="font-weight-bold">Tanggal Lahir</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="date" name="birthdate" id="birthdate" class="form-control" placeholder="Masukkan tanggal lahir anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="profile_image" class="font-weight-bold">Foto Profil</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="file" name="profile_image" id="profile_image" class="form-control" placeholder="Unggah foto profil anda, ukuran maksimal 2mb">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="header_image" class="font-weight-bold">Foto Header</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="file" name="header_image" id="header_image" class="form-control" placeholder="Unggah foto header anda, ukuran maksimal 2mb">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <a href="" class="btn btn-outline-white mx-2 shadow">Batalkan</a>
                            <button type="submit" class="btn btn-blue shadow">Simpan</button>
                        </div>
                    </form>
                </div>

                <!-- Keamanan Akun Section -->
                <div id="security-section">
                    <form action="{{ route('profil.update') }}" enctype="multipart/form-data" id="form-input" method="POST">
                      @csrf
                      <!-- Bagian lain dari form -->

                      <div class="row mb-2">
                        <div class="col-lg-2">
                          <label for="email" class="font-weight-bold">Alamat Email</label>
                        </div>
                        <div class="col-lg-10">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan alamat email anda">
                        </div>
                      </div>

                      <div class="row mb-2">
                        <div class="col-lg-2">
                          <label for="phone" class="font-weight-bold">Nomor HP</label>
                        </div>
                        <div class="col-lg-10">
                          <input type="tel" name="phone" id="phone" class="form-control" placeholder="Masukkan nomor telepon anda">
                        </div>
                      </div>

                      <div class="row mb-2">
                        <div class="col-lg-2">
                          <label for="new_password" class="font-weight-bold">Kata Sandi</label>
                        </div>
                        <div class="col-lg-10">
                          <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Masukkan password baru">
                        </div>
                      </div>

                      <div class="d-flex justify-content-end mt-4">
                        <a href="" class="btn btn-outline-white mx-2 shadow">Kembali</a>
                        <button type="submit" class="btn btn-blue shadow">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>

                <div id="histori-section" style="display: none;">
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
@endpush

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
  // Ambil elemen-elemen yang diperlukan
  const profilSayaNavItem = document.querySelector(".nav-link#profil-saya-nav");
  const keamananAkunNavItem = document.querySelector(".nav-link#keamanan-akun-nav");
  const historiNavItem = document.querySelector(".nav-link#histori-nav");
  const profilSayaSection = document.querySelector("#profile-section");
  const keamananAkunSection = document.querySelector("#security-section");
  const historiSection = document.querySelector("#histori-section");

  // Tampilkan halaman "Profil Saya" secara default
  profilSayaNavItem.classList.add("active");
  keamananAkunSection.style.display = "none";
  historiSection.style.display = "none";

  // Tambahkan event listener untuk klik pada navbar item
  profilSayaNavItem.addEventListener("click", function() {
    profilSayaNavItem.classList.add("active");
    keamananAkunNavItem.classList.remove("active");
    historiNavItem.classList.remove("active");
    profilSayaSection.style.display = "block";
    keamananAkunSection.style.display = "none";
    historiSection.style.display = "none";
  });

  keamananAkunNavItem.addEventListener("click", function() {
    keamananAkunNavItem.classList.add("active");
    profilSayaNavItem.classList.remove("active");
    historiNavItem.classList.remove("active");
    profilSayaSection.style.display = "none";
    keamananAkunSection.style.display = "block";
    historiSection.style.display = "none";
  });

  historiNavItem.addEventListener("click", function() {
    historiNavItem.classList.add("active");
    profilSayaNavItem.classList.remove("active");
    keamananAkunNavItem.classList.remove("active");
    profilSayaSection.style.display = "none";
    keamananAkunSection.style.display = "none";
    historiSection.style.display = "block";
  });
});

function showSecurity() {
  const profilSayaNavItem = document.querySelector(".nav-link#profil-saya-nav");
  const keamananAkunNavItem = document.querySelector(".nav-link#keamanan-akun-nav");
  const historiNavItem = document.querySelector(".nav-link#histori-nav");
  const profilSayaSection = document.querySelector("#profile-section");
  const keamananAkunSection = document.querySelector("#security-section");
  const historiSection = document.querySelector("#histori-section");

  profilSayaNavItem.classList.remove("active");
  keamananAkunNavItem.classList.add("active");
  historiNavItem.classList.remove("active");
  profilSayaSection.style.display = "none";
  keamananAkunSection.style.display = "block";
  historiSection.style.display = "none";
}

function showHistori() {
  const profilSayaNavItem = document.querySelector(".nav-link#profil-saya-nav");
  const keamananAkunNavItem = document.querySelector(".nav-link#keamanan-akun-nav");
  const historiNavItem = document.querySelector(".nav-link#histori-nav");
  const profilSayaSection = document.querySelector("#profile-section");
  const keamananAkunSection = document.querySelector("#security-section");
  const historiSection = document.querySelector("#histori-section");

  profilSayaNavItem.classList.remove("active");
  keamananAkunNavItem.classList.remove("active");
  historiNavItem.classList.add("active");
  profilSayaSection.style.display = "none";
  keamananAkunSection.style.display = "none";
  historiSection.style.display = "block";
}

    </script>


@endpush

