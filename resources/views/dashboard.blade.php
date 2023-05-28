@extends('template')

@section('favicon')
@endsection

@section('navbar')
@endsection

@section('konten')
    <div class="dashboard-kotak">
        <a href="http://localhost:8000/profil">
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
        <button class="redeem" onclick="location.href='http://localhost:8000/redeem'">
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
        <button class="isiulang" onclick="location.href='http://localhost:8000/topup'">
            <p class="isiulangtext">Isi Ulang</p>
        </button>
    </div>

    <div class="dashboard-kotak-3">
        <a href="http://localhost:8000/daftarpekerja">
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
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush
