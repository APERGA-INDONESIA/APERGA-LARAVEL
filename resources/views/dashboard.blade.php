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
            @if($user->profile_image)
            <img src="{{ asset('Images/Profile Image/' . $user->profile_image) }}" alt="Profile Image" class="profile-img" style="border-radius: 100px;">
            @else
            <img src="{{ asset('images/profil.png') }}" alt="Default Profile Image" class="profile-img" style="border-radius: 100px;">
            @endif

            <p class="greeting">Halo, Selamat Datang</p>
            <p class="username">{{ shortenName($user->name) }}</p>

            <?php
            function shortenName($name)
            {
                $words = explode(' ', $name); // Membagi string menjadi array kata-kata

                if (count($words) > 2) {
                    $shortened = ucfirst($words[0]); // Mengambil kata pertama dan mengkapitalisasi huruf pertama

                    for ($i = 1; $i < count($words); $i++) {
                        if ($i >= count($words) - 2) {
                            $shortened .= ' ' . strtoupper(substr($words[$i], 0, 1)) . '.'; // Menambahkan huruf pertama setiap kata terakhir ke depannya dengan titik
                        } else {
                            $shortened .= ' ' . $words[$i]; // Menambahkan kata pertama dan kedua tanpa perubahan
                        }
                    }

                    return $shortened;
                }

                return $name;
            }

            ?>

        </a>
        <a href="{{ route('profil.edit') }}">
            <img src="{{ asset('images/settings.png') }}" alt="Poin" class="setting" id="setting-element">
          </a>
    </div>


    <div class="dashboard-kotak-2">
        <p class="Pointext">Total Poin Saya</p>
        <img src="{{ asset('images/coin.png') }}" alt="Poin" class="MyPoin">

        @php
            $user = auth()->user();
            $totalPoin = $user->poin;
        @endphp

        <p class="TotalPoin">{{ abbreviateNumber($totalPoin) }} AP Point</p>

        <?php
        function abbreviateNumber($number)
        {
            if ($number >= 1e15) {
                return number_format($number / 1e15, 1) . ' Kuadriliun';
            }

            if ($number >= 1e12) {
                return number_format($number / 1e12, 1) . ' Triliun';
            }
            if ($number >= 1e9) {
                return number_format($number / 1e9, 1) . ' Milliar';
            }
            if ($number >= 1e6) {
                return number_format($number / 1e6, 1) . ' Juta';
            }

            return number_format($number);
        }

        ?>
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

        <p class="TotalSaldo">{{ customAbbreviateNumber($saldo) }}</p>
        <button class="isiulang" onclick="location.href='{{ route('topup') }}'">
            <p class="isiulangtext">Isi Ulang</p>
        </button>

        <?php
        function customAbbreviateNumber($number)
        {
            if ($number >= 1e9) {
                return 'Rp ' . number_format($number / 1e9, 1) . ' Miliar';
            }
            if ($number >= 1e6) {
                return 'Rp ' . number_format($number / 1e6, 1) . ' Juta';
            }

            return 'Rp ' . number_format($number, 0, ',', '.');
        }

        $saldo = 5000000; // Ganti dengan nilai saldo yang sesuai

        echo customAbbreviateNumber($saldo);
        ?>

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

@push('scripts')

@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush
