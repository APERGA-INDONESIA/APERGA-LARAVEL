@extends('template')

@section('favicon')
@endsection

@section('navbar')
@endsection

@section('konten')
@php
    $user = auth()->user();
@endphp

<div class="dashboard">
    <div class="dashboard-kotak">
        <a href="{{ route('profil') }}">
            <img src="{{ $user->profile_image ? asset('Images/Profile Image/' . $user->profile_image) : asset('images/profil.png') }}" alt="Profile Image" class="profile-img" style="border-radius: 100px;">
            <p class="greeting">Halo, Selamat Datang</p>
            <p class="username">{{ $user->name }}</p>
        </a>
        <a href="{{ route('profil.edit') }}">
            <img src="{{ asset('images/settings.png') }}" alt="Poin" class="setting">
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
                    ->whereBetween('id', [1, 269])
                    ->count();
            @endphp
            <p class="jumlahpekerja">{{ $jumlahPekerja }} Orang</p>
            <button class="tambah" onclick="location.href='{{ route('pencarian') }}'">
                <p class="tambahtext">Tambah</p>
            </button>
        </a>
    </div>
</div>
@endsection

@section('footer')

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush
