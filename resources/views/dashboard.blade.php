@extends('template')

@section('favicon')
@endsection

@section('navbar')
@endsection

@section('konten')
    <div class="dashboard-kotak">
        <a href="">
            <img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
            <p class="greeting">Halo, Selamat Datang</p>
            <p class="username">{{ Auth::user()->name }}</p>
        </a>
    </div>


    <div class="dashboard-kotak-2">
        <p class="Pointext">Total Poin Saya</p>
        <img src="{{ asset('images/coin.png') }}" alt="Poin" class="MyPoin">

        @php
            $user = auth()->user();
            $totalPoin = $user->poin;
        @endphp

        <p class="TotalPoin">{{ number_format($totalPoin, 0, ',', '.') }} AP Point</p>
        <button class="redeem" onclick="location.href='{{ route('redeem') }}'">
            <p class="redeemtext">Redeem</p>
        </button>
    </div>

    <div class="dashboard-kotak-4">
        <p class="Saldotext">Total Saldo Saya</p>
        <img src="{{ asset('images/saldo.png') }}" alt="Poin" class="MyPoin">
        @php
            $user = auth()->user();
            $saldo = $user->saldo;
        @endphp

        <p class="TotalSaldo">Rp {{ number_format($saldo, 0, ',', '.') }}</p>
        <button class="isiulang" onclick="location.href='{{ route('topup') }}'">
            <p class="isiulangtext">Isi Ulang</p>
        </button>
    </div>

    <div class="dashboard-kotak-3">
        <a href="{{ route('daftarpekerja') }}">
            <img src="{{ asset('images/worker.png') }}" alt="Profile Image" class="profile-img">
            <p class="jumlahpekerja-text">Jumlah Pekerja</p>
            @php
                use App\Models\Prt;

                $userId = auth()->id();
                $jumlahPekerja = Prt::where('user_id', $userId)
                    ->whereBetween('id', [16, 269])
                    ->count();
            @endphp
            <p class="jumlahpekerja">{{ $jumlahPekerja }} Orang</p>
        </a>
    </div>
@endsection

@section('footer')
<div class="container-fluid">
    <nav class="navbar navbar-expand navbar-dark bg-white sticky-top">
        <a href="http://localhost:8000/dashboard">
            <img src="{{ asset('images/aperga.png') }}" alt="Logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/pencarian">Cari PRT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/tentangaplikasi">Tentang Aplikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/bantuan">Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/dashboard">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush
