@extends('template')

@section('favicon')
@endsection

@section('navbar')
@endsection

@section('konten')
<div class="dashboard-kotak">
    <div class="search-container">
        <img src="{{ asset('images/search.png') }}" alt="Search" class="search-icon">
        <input type="text" class="cari-input" placeholder="Cari PRT">
    </div>
</div>


<div class="dashboard-kotak-2">
    <a href="http://localhost:8000/profil">
        <img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
        <p class="greeting">Halo, Selamat Datang</p>
        <p class="username">{{ Auth::user()->name }}</p>
    </a>
</div>

<div class="dashboard-kotak-3">
    <a href="http://localhost:8000/daftarpekerja">
        <img src="{{ asset('images/worker.png') }}" alt="Profile Image" class="profile-img">
        <p class="jumlahpekerja-text">Jumlah Pekerja</p>
        @php
            use App\Models\Prt;

            $userId = auth()->id();
            $jumlahPekerja = Prt::where('user_id', $userId)
                ->whereBetween('id', [16, 166])
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
