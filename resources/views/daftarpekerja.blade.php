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
                ->whereBetween('id', [16, 269])
                ->paginate(20);
        @endphp

        @if ($pekerja->count() > 0)
            <!-- User memiliki pekerja -->
            @foreach ($pekerja as $prt)
                <div class="list-pekerja">
                    <div class="kotak-abu">
                        <?php
                        $imagePath = 'images/prt/prt' . $prt->id . '.jpg';

                        if (file_exists(public_path($imagePath))) {
                            $imageURL = asset($imagePath);
                        } else {
                            $imageURL = asset('images/person.png');
                        }
                        ?>
                        <img src="{{ $imageURL }}" alt="Profile Image" class="profile-img" style="position: absolute; width: 46px; height: 45px; left: 30px; top: 50%; transform: translateY(-50%); border-radius: 50%;">
                        <p class="nama-pekerja">{{ $prt->nama }}</p>
                    </div>
                </div>
                <div class="tombol-detail">
                    <a href="{{ route('detailpekerja', ['id' => $prt->id]) }}">Detail</a>
                </div>
            @endforeach
        @else
            <!-- User tidak memiliki pekerja, tampilkan div class: no-prt -->
            <div class="no-prt">
                <img src="{{ asset('images/shopping.png') }}" alt="shopping" class="shopping">
                <p class="noprt-text">Anda belum memiliki PRT nih, yuk mulai cari PRT! <a href="{{ url('/cariPRT') }}" style="color: #135589; font-weight: bold;">Klik Disini</a></p>
            </div>
        @endif

        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                @if ($pekerja->count() > 0)
                    <!-- User memiliki pekerja, tampilkan pagination -->
                    @if ($pekerja->currentPage() > 1)
                        <li class="page-item">
                            <a class="page-link" href="{{ $pekerja->previousPageUrl() }}" tabindex="-1"><<</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link" tabindex="-1"><<</span>
                        </li>
                    @endif

                    @for ($page = 1; $page <= $pekerja->lastPage(); $page++)
                        <li class="page-item {{ $page === $pekerja->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $pekerja->url($page) }}">{{ $page }}</a>
                        </li>
                    @endfor

                    @if ($pekerja->currentPage() < $pekerja->lastPage())
                        <li class="page-item">
                            <a class="page-link" href="{{ $pekerja->nextPageUrl() }}">>></a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">>></span>
                        </li>
                    @endif
                @endif
            </ul>
        </nav>
    </div>
<div class="footer">
</div>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/daftarpekerja.css') }}">
@endpush
