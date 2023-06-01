@extends('template')
@section('title', 'Edit Profile')

@section('favicon')

@section('navbar')
@endsection

@section('konten')

<style>
    * {
        font-family: 'Poppins';
    }

    #edit-profil {
    margin-top: 20vh;
    display: flex;
    align-items: center;
}

    #edit-profil img {
        margin-right: 15px;
        margin-bottom: 25px;
    }

    .edit-title {
        margin: 0;
        margin-bottom: 25px;
    }

    #profile-img {
        position: absolute;
        width: 185px;
        height: 185px;
        left: 20vh;
        top: 20vh;
        border-radius: 100px;
    }

    #header-img {
        width: 100%;
        height: 235px;
        object-fit: cover;
        border-radius: 50px 50px 0px 0px;
    }

    #form-input {
        position: relative;
        top: 15vh;
    }

    .form-control {
        border-radius: 20px;
    }

    .btn {
        border-radius: 20px;
    }

    .btn {
        width: 123px;
    }

    .btn-blue {
        background-color: #135589;
        color: white;
    }

    .btn-outline-white {
        border: 1px solid #135589;
        color: #135589;
    }

    #profile-header {
        width: auto;
        height: 235px;
    }

    #edit-box {
        padding: 10vh 0;
        height: 120vh; /* Atur tinggi sesuai kebutuhan */
        margin: 0 auto; /* Untuk mengatur elemen menjadi berada di tengah */
    }

    /* Custom CSS */
    label {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 1.5;
        color: #1B2223;
        display: block;
        margin-bottom: 10px;
    }

    .col-lg-2 label {
        margin-bottom: 0;
        text-align: left;
    }

    .col-lg-2.navbar-main {
        position: relative;
        width: 133px;
        height: 38px;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 1.5;
        text-align: center;
        color: #141414;
    }

    .col-lg-2.navbar-main .nav-link {
        margin-right: 0;
        text-align: left;
    }

    .navbar-main .nav-link:hover {
        background: rgba(217, 217, 217, 0.5);
        border-radius: 15px;
    }

    /* Additional CSS */
    #edit-box:before {
        content: "";
        display: inline-block;
        background-image: url("arrow.png");
        width: 20px;
        height: 20px;
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        left: -40px;
    }

    .edit-title {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 64px;
        color: #000000;
        margin-left: 16px;
    }

</style>

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
                        <a class="nav-link text-dark font-weight-bold" href="#">Profil Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" href="#">Keamanan Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" href="#">Riwayat</a>
                    </li>
                </nav>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12" id="profile-header">
                        @php
                            $headerImage = $user->header_image;
                            $headerImagePath = $headerImage ? asset('images/' . $headerImage) : asset('images/header.png');
                            $profileImage = $user->profile_image;
                            $imagePath = $profileImage ? asset('images/' . $profileImage) : asset('images/profil.png');
                        @endphp
                        <img src="{{ $headerImagePath }}" id="header-img">
                        <img src="{{ $imagePath }}" id="profile-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-2">
                <!-- Kosongkan kolom ini agar form input berada di sebelah kanan navbar -->
            </div>
            <div class="col-lg-10">
                <form action="{{ route('profil.update') }}" enctype="multipart/form-data" id="form-input" method="POST">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-lg-2">
                            <label for="" class="font-weight-bold">Nama</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2">
                            <label for="" class="font-weight-bold">No Telpon</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="number" name="phone" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2">
                            <label for="" class="font-weight-bold">Foto Profil</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="file" name="profile_image" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2">
                            <label for="" class="font-weight-bold">Foto Header</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="file" name="header_image" id="" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="" class="btn btn-outline-white mx-2 shadow">Batalkan</a>
                        <button type="submit" class="btn btn-blue shadow">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
