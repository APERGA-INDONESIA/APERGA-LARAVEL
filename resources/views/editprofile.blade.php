@extends('template4')
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
                                <label for="alamat" class="font-weight-bold">Alamat</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat email lengkap anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="profesi" class="font-weight-bold">Pekerjaan</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="profesi" id="profesi" class="form-control" placeholder="Masukkan nama pekerjaan anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="tanggallahir" class="font-weight-bold">Tanggal Lahir</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="date" name="tanggallahir" id="tanggallahir" class="form-control" placeholder="Masukkan tanggal lahir anda">
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
                          <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password baru">
                        </div>
                      </div>

                      <div class="d-flex justify-content-end mt-4">
                        <a href="" class="btn btn-outline-white mx-2 shadow">Kembali</a>
                        <button type="submit" class="btn btn-blue shadow">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>

                <div id="histori-section" class="col-lg-10" style="display: none;">
                    <input type="hidden" id="anPageName" name="page" value="frame-40789" />
                    <div class="container-center-horizontal">
                      <div class="frame-40789 screen" data-id="1370:7393">
                        <div class="frame-40786-zNABwQ" data-id="1232:7512">
                          <div class="group-373-WKHWxx" data-id="1232:7974">
                            <header class="header-qme09M" data-id="1232:7513">
                              <div class="frame-40689-d2nYgL frame-40689" data-id="1232:7514">
                                <div class="no-wjP5Mt valign-text-middle montserrat-semi-bold-white-14px" data-id="1232:7515">
                                  No.
                                </div>
                              </div>
                              <div class="frame-40690-d2nYgL frame-40690" data-id="1232:7516">
                                <div class="id-transaksi-bQM5xo valign-text-middle montserrat-semi-bold-white-14px" data-id="1232:7517">
                                  ID Transaksi
                                </div>
                              </div>
                              <div class="frame-40694-d2nYgL frame-40694" data-id="1232:7518">
                                <div class="tipe-pembyaran-vMX03o valign-text-middle montserrat-semi-bold-white-14px" data-id="1232:7519">
                                  Tipe Pembayaran
                                </div>
                              </div>
                              <div class="frame-40691-d2nYgL frame-40691" data-id="1232:7520">
                                <div class="nominal-x7HMTp valign-text-middle montserrat-semi-bold-white-14px" data-id="1232:7521">
                                  Nominal
                                </div>
                              </div>
                              <div class="group-372-d2nYgL" data-id="1232:7794">
                                <div class="frame-40691-d2nYgL frame-40691" data-id="1232:7522">
                                  <div class="tanggal-transaksi-9ZkGg5 valign-text-middle montserrat-semi-bold-white-14px" data-id="1232:7523">
                                    Tanggal Transaksi
                                  </div>
                                </div>
                              </div>
                              <div class="frame-40691-d2nYgL frame-40691" data-id="1232:7526">
                                <div class="detail-tim-xZyEij valign-text-middle montserrat-semi-bold-white-14px" data-id="1232:7527">
                                  Status Transaksi
                                </div>
                              </div>
                            </header>
                            <div class="row-1-qme09M" data-id="1232:7528">
                              @foreach ($orderTransactions as $index => $orderTransaction)
                              <div class="frame-40689-EzLxVC frame-40689" data-id="1232:7529">
                                <div class="x1-hUqXmf valign-text-middle montserrat-normal-eerie-black-14px" data-id="1232:7530">
                                  {{ $index + 1 }}
                                </div>
                              </div>
                              <div class="frame-40690-EzLxVC frame-40690" data-id="1232:7531">
                                <div class="x123123123123-pxDxdi valign-text-middle montserrat-normal-eerie-black-14px" data-id="1232:7532">
                                  {{ $orderTransaction->id }}
                                </div>
                              </div>
                              <div class="frame-40691-EzLxVC frame-40691" data-id="1232:7533">
                                <div class="debit valign-text-middle montserrat-normal-eerie-black-14px" data-id="1232:7534">
                                  {{ $orderTransaction->tipe_pembayaran === 'Debit' ? 'Debit' : 'Tidak Tercatat' }}
                                </div>
                              </div>
                              <div class="frame-40694-EzLxVC frame-40694" data-id="1232:7535">
                                <div class="rp-5200000-9OWxt5 valign-text-middle montserrat-normal-eerie-black-14px" data-id="1232:7536">
                                  Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                                </div>
                              </div>
                              <div class="frame-40692-EzLxVC frame-40692" data-id="1232:7537">
                                <div class="x2023-02-15 valign-text-middle montserrat-normal-eerie-black-14px" data-id="1232:7538">
                                  {{ $orderTransaction->tanggal_transaksi }}
                                </div>
                              </div>
                              <div class="frame-40695-EzLxVC frame-40695" data-id="1232:7542">
                                <div class="badges-23v4Vt badges" data-id="1232:7978">
                                  <div class="label inter-semi-bold-medium-carmine-14px" data-id="I1232:7978;1:386">
                                    @if ($orderTransaction->status_transaksi === 'Transaksi Dibatalkan')
                                    Gagal
                                    @elseif ($orderTransaction->status_transaksi === 'Pembayaran Selesai')
                                    Berhasil
                                    @endif
                                  </div>
                                </div>
                              </div>
                              <hr class="solid">
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabel.css') }}">
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
  const headerImg = document.querySelector("#header-img");
  const profileImg = document.querySelector("#profile-img");

  // Tampilkan halaman "Profil Saya" secara default
  profilSayaNavItem.classList.add("active");
  keamananAkunSection.style.display = "none";
  historiSection.style.display = "none";
  headerImg.style.display = "block";
  profileImg.style.display = "block";

  // Tambahkan event listener untuk klik pada navbar item
  profilSayaNavItem.addEventListener("click", function() {
    profilSayaNavItem.classList.add("active");
    keamananAkunNavItem.classList.remove("active");
    historiNavItem.classList.remove("active");
    profilSayaSection.style.display = "block";
    keamananAkunSection.style.display = "none";
    historiSection.style.display = "none";
    headerImg.style.display = "block";
    profileImg.style.display = "block";
  });

  keamananAkunNavItem.addEventListener("click", function() {
    keamananAkunNavItem.classList.add("active");
    profilSayaNavItem.classList.remove("active");
    historiNavItem.classList.remove("active");
    profilSayaSection.style.display = "none";
    keamananAkunSection.style.display = "block";
    historiSection.style.display = "none";
    headerImg.style.display = "block";
    profileImg.style.display = "block";
  });

  historiNavItem.addEventListener("click", function() {
    historiNavItem.classList.add("active");
    profilSayaNavItem.classList.remove("active");
    keamananAkunNavItem.classList.remove("active");
    profilSayaSection.style.display = "none";
    keamananAkunSection.style.display = "none";
    historiSection.style.display = "block";
    headerImg.style.display = "none";
    profileImg.style.display = "none";
  });
});

function showSecurity() {
  const profilSayaNavItem = document.querySelector(".nav-link#profil-saya-nav");
  const keamananAkunNavItem = document.querySelector(".nav-link#keamanan-akun-nav");
  const historiNavItem = document.querySelector(".nav-link#histori-nav");
  const profilSayaSection = document.querySelector("#profile-section");
  const keamananAkunSection = document.querySelector("#security-section");
  const historiSection = document.querySelector("#histori-section");
  const headerImg = document.querySelector("#header-img");
  const profileImg = document.querySelector("#profile-img");

  profilSayaNavItem.classList.remove("active");
  keamananAkunNavItem.classList.add("active");
  historiNavItem.classList.remove("active");
  profilSayaSection.style.display = "none";
  keamananAkunSection.style.display = "block";
  historiSection.style.display = "none";
  headerImg.style.display = "block";
  profileImg.style.display = "block";
}

function showHistori() {
  const profilSayaNavItem = document.querySelector(".nav-link#profil-saya-nav");
  const keamananAkunNavItem = document.querySelector(".nav-link#keamanan-akun-nav");
  const historiNavItem = document.querySelector(".nav-link#histori-nav");
  const profilSayaSection = document.querySelector("#profile-section");
  const keamananAkunSection = document.querySelector("#security-section");
  const historiSection = document.querySelector("#histori-section");
  const headerImg = document.querySelector("#header-img");
  const profileImg = document.querySelector("#profile-img");

  profilSayaNavItem.classList.remove("active");
  keamananAkunNavItem.classList.remove("active");
  historiNavItem.classList.add("active");
  profilSayaSection.style.display = "none";
  keamananAkunSection.style.display = "none";
  historiSection.style.display = "block";
  headerImg.style.display = "none";
  profileImg.style.display = "none";
}


    </script>


@endpush

