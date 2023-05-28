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
        }

        #profile-img {
            position: absolute;
            width: 179px;
            height: 185px;
            left: 20vh;
            top: 20vh;
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
            background: rgba(217, 217, 217, 0.5);
            border-radius: 50px 50px 0px 0px;
            width: auto;
            height: 235px;
        }


        #edit-box {
            padding: 10vh 0;
            min-height: 100vh;
        }
    </style>
    <div class="container">

        <h1>Pengaturan </h1>
        <hr>
        <div class="container-fluid" id="edit-box">
            <div class="row">
                <div class="col-lg-2">
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
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="#">Keamanan Akun</a>
                        </li>
                    </nav>
                </div>
                <div class="col-lg-10">
                    <div id="profile-header">
                        <img src="{{ asset('images/Profile Image/'.Auth::user()->profile_image ?? asset('images/profile 1.png') ) }}" id="profile-img">
                    </div>
                    <form action="{{route('update-profil')}}" enctype="multipart/form-data" id="form-input" method="POST">
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
                                <label for="" class="font-weight-bold">Gaji</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="gaji" id="" class="form-control">
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
