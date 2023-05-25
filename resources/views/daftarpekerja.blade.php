@extends('template')
@section('title', 'Daftar Pekerja')
@section('navbar')
@endsection

@section('konten')
    <div class="pekerja-container">
        <div class="pekerja-text">
            <a href="javascript:void(0);" onclick="window.history.back();">
                <img src="{{ asset('images/arrow.png') }}" alt="Arrow" class="arrow">
            </a>
            <h1 class="pekerja-anda">Pekerja Anda</h1>
        </div>
    </div>
    <div class="kotak-hitam">
        <img src="{{ asset('images/Profile 1.png') }}" alt="Profile 1" class="profile-image">
        <p class="halo-username">Halo, {{ Auth::user()->name }}</p>
    </div>
    <div class="List-Pekerja">

        @php
            $userId = auth()->id();
            $pekerja = App\Models\Prt::where('user_id', $userId)
                ->whereBetween('id', [16, 166])
                ->paginate(4);
        @endphp

        @foreach ($pekerja as $prt)
            <div class="list-pekerja">
                <div class="kotak-abu">
                    <img src="{{ asset('images/person.png') }}" alt="person" class="profile-image">
                    <p class="nama-pekerja">{{ $prt->nama }}</p>
                </div>

            </div>
            <div class="tombol-detail">
                <a href="{{ route('detailpekerja', ['id' => $prt->id]) }}">Detail</a>
            </div>
        @endforeach

        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                @if ($pekerja->currentPage() > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $pekerja->previousPageUrl() }}" tabindex="-1">Previous</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                @endif

                @for ($page = 1; $page <= $pekerja->lastPage(); $page++)
                    <li class="page-item {{ $page === $pekerja->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $pekerja->url($page) }}">{{ $page }}</a>
                    </li>
                @endfor

                @if ($pekerja->currentPage() < $pekerja->lastPage())
                    <li class="page-item">
                        <a class="page-link" href="{{ $pekerja->nextPageUrl() }}">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-disabled="true">Next</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/daftarpekerja.css') }}">
@endpush
