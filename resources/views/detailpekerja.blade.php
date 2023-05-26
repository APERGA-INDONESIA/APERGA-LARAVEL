@extends('template')
@section('title', 'Detail Pekerja')

@section('navbar')
@endsection

@section('konten')
<div class="kotak-hitam">
    <div class="detail-pekerja">
        Detail Pekerja
    </div>
</div>

<div class="infopekerja">
    <div class="big-profile">
        <?php
        $id = $pekerja->id;
        $imagePath = 'images/prt/prt' . $id . '.jpg';

        if (file_exists(public_path($imagePath))) {
            $imageURL = asset($imagePath);
        } else {
            $imageURL = asset('images/bigprofile.png');
        }
        ?>
        <img src="{{ $imageURL }}" alt="Big Profile" class="big-profile-img">
    </div>
    <div class="deskripsi">
        <div class="nama-pekerja">{{ $pekerja->nama }}</div>
        <div class="rating">
            <img src="{{ asset('images/star.png') }}" alt="Star" class="star-img">
            <span class="rating-text">{{ $pekerja->rating }}/5</span>
        </div>
        <div class="deskripsi-jam-kerja">
            <div class="jam-kerja">
                <div class="jam-kerja-title">Jam Kerja</div>
                <div class="jam-kerja-box">
                    <div class="jam-kerja-text">{{ $pekerja->jamkerja }} jam/hari</div>
                </div>
            </div>
            <div class="durasi-kerja">
                <div class="durasi-kerja-title">Durasi Kerja</div>
                <div class="durasi-kerja-box">
                    <div class="durasi-kerja-text">{{ $pekerja->durasi }} Bulan</div>
                </div>
            </div>
        </div>
        <div class="catatan-khusus">
            <div class="catatan-khusus-textbox">
                <span>Catatan Khusus</span>
            </div>
            <div class="deskripsi-catatan-khusus">
                <p>{{ $pekerja->catatan }}</p>
            </div>
        </div>
        <div class="rincian-biaya">
            <div class="subtotal-biaya">Subtotal Biaya: <br> Rp.{{ number_format($pekerja->harga, 2, ',', '.') }}</div>
        </div>
        <div class="button-group">
            <button id="batalkanKontrakBtn" data-pekerja-id="{{ $pekerja->id }}">Batalkan Kontrak</button>
            <a href="javascript:void(0);" onclick="window.history.back();">
                <button class="return">Kembali</button>
            </a>
        </div>
    </div>
</div>

<div id="popup" class="popup">
    <div class="popup-field">
        <div class="popup-content">
            <img src="{{ asset('images/alert-triangle.png') }}" alt="alert-triangle" class="star-img">
            <p>Apakah Anda yakin ingin membatalkan kontrak?</p>
            <div class="button-container">
                <div class="button-group">
                    <form action="{{ route('update.pekerja') }}" method="POST">
                        @csrf
                        <button type="submit" id="cancelBtn">Batalkan</button>
                        <input type="hidden" name="pekerjaId" value="{{ $pekerja->id }}">
                    </form>
                    <button id="confirmBtn">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="successPopup" class="popup">
    <div class="popup-field">
      <div class="popup-content">
        <img src="{{ asset('images/centang.png') }}" alt="centang" class="centang">
        <p>Kontrak berhasil dibatalkan. Silahkan periksa kembali daftar pekerja anda</p>
      </div>
      <button id="OKBtn">OK</button> <!-- Tombol OK ditempatkan di luar button-container -->
    </div>
  </div>


@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/detailpekerja.css') }}">
    <style>
        .big-profile-img {
            width: 509px;
            height: 436px;
            border-radius: 23px;
        }
    </style>
@endpush

@push('scripts')
<script>
    // Mendapatkan tombol batalkanKontrakBtn
    var batalkanKontrakBtn = document.getElementById('batalkanKontrakBtn');

    // Mendapatkan elemen popup
    var popup = document.getElementById('popup');

    // Mendapatkan elemen popup success
    var successPopup = document.getElementById('successPopup');

    // Mendapatkan tombol cancelBtn di dalam popup
    var cancelBtn = document.getElementById('cancelBtn');

    // Menambahkan event listener untuk klik pada tombol batalkanKontrakBtn
    batalkanKontrakBtn.addEventListener('click', function() {
        // Menampilkan popup
        popup.style.display = 'block';
    });

    // Menambahkan event listener untuk klik pada tombol cancelBtn di dalam popup
    cancelBtn.addEventListener('click', function() {
        // Mendapatkan pekerja id dari atribut data-pekerja-id
        var pekerjaId = batalkanKontrakBtn.getAttribute('data-pekerja-id');

        // Mengirim permintaan HTTP POST ke endpoint yang mengubah user_id menjadi 0
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/update-pekerja', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Sukses mengubah user_id menjadi 0
                    console.log('Kontrak dibatalkan.');
                    // Menampilkan popup success
                    successPopup.style.display = 'block';
                } else {
                    // Gagal mengubah user_id menjadi 0
                    console.log('Gagal membatalkan kontrak.');
                    // Menampilkan popup success
                    successPopup.style.display = 'block';
                    // Mengatur teks popup success menjadi pesan kesalahan
                    var successText = document.getElementById('successText');
                    successText.textContent = 'Gagal membatalkan kontrak.';
                    // Menghapus class successPopup dan menambahkan class errorPopup
                    successPopup.classList.remove('successPopup');
                    successPopup.classList.add('errorPopup');
                }
            }
        };

        // Mengirim data pekerja id sebagai payload
        var params = 'pekerjaId=' + encodeURIComponent(pekerjaId);
        xhr.send(params);

        // Menutup popup setelah proses selesai
        popup.style.display = 'none';
    });

    // Menambahkan event listener untuk klik pada tombol confirmBtn di dalam popup
    var confirmBtn = document.getElementById('confirmBtn');
    confirmBtn.addEventListener('click', function() {
        // Menutup popup tanpa melakukan apa pun
        popup.style.display = 'none';
    });

    // Menambahkan event listener untuk klik pada tombol OKBtn di dalam popup success
    var OKBtn = document.getElementById('OKBtn');
    OKBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan tindakan default dari tombol OKBtn
        // Mengarahkan halaman ke localhost:8000/daftarpekerja setelah menekan tombol OKBtn
        window.location.href = 'http://localhost:8000/daftarpekerja';
    });
</script>

@endpush
