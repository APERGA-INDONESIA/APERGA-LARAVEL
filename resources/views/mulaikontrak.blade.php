@extends('template6')
@section('title', 'Mulai Kontrak')

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
        $id = $prt->id;
        $imagePath = 'images/prt/prt' . $id . '.jpg';

        if (file_exists(public_path($imagePath))) {
            $imageURL = asset($imagePath);
        } else {
            $imageURL = asset('images/bigprofile.png');
        }
        ?>
        <img src="{{ $imageURL }}" alt="Big Profile" class="big-profile-img" style="width: 509px; height: 436px; border-radius: 23px; flex: none; order: 0; flex-grow: 0;">
    </div>
    <div class="deskripsi">
        <div class="nama-pekerja">{{ $prt->nama }}</div>
        <div class="rating">
            <?php
            $rating = $prt->rating ?? 0;
            $ratingStars = min(5, max(0, $rating));
            ?>

            @for ($i = 0; $i < $ratingStars; $i++)
                <img src="{{ asset('images/star.png') }}" alt="Star" class="star-img">
            @endfor

            @if ($rating > $ratingStars)
                <img src="{{ asset('images/star-half.png') }}" alt="Star" class="star-img">
            @endif
            <span class="rating-text">{{ $prt->rating }}/5</span>
        </div>
        <div class="deskripsi-jam-kerja">
            <div class="jam-kerja">
                <div class="jam-kerja-title">Pilih Jam Kerja</div>
                <div class="jam-kerja-box">
                    <div class="jam-kerja-text">
                        <input type="text" name="jam_kerja" id="jam_kerja_input" placeholder="Durasi Kerja" />
                    </div>
                </div>
            </div>
            <div class="durasi-kerja">
                <div class="durasi-kerja-title">Pilih Durasi Kerja</div>
                <div class="durasi-kerja-box">
                    <div class="durasi-kerja-text">
                        <input type="text" name="durasi_kerja" id="durasi_kerja_input" placeholder="Masa Kontrak" />
                    </div>
                </div>
            </div>
        </div>
        <div class="catatan-khusus">
            <div class="catatan-khusus-textbox">
                <span>Catatan Khusus</span>
            </div>
            <div class="deskripsi-catatan-khusus">
                <textarea name="catatan_khusus" id="catatan_khusus_input" rows="3" maxlength="60" placeholder="Masukkan catatan tambahan untuk Pekerja anda. Maksimal 18 kata ya."></textarea>
            </div>
        </div>
        <div class="rincian-biaya">
            <div class="subtotal-biaya">Subtotal Biaya: <br> Rp.{{ number_format($prt->gaji, 0, ',', '.') }} / Bulan</div>
        </div>
        <div class="button-group">
            <button id="confirmBtn" class="confirm">Kembali</button>
            <form id="simpanTransaksiForm" action="{{ route('simpantransaksi') }}" method="POST">
                @csrf
                <input type="hidden" name="prt_id" value="{{ $prt->id }}">
                <input type="hidden" name="jam_kerja" id="jam_kerja" value="">
                <input type="hidden" name="durasi_kerja" id="durasi_kerja" value="">
                <input type="hidden" name="catatan_khusus" id="catatan_khusus" value="">
                <button id="pesanSekarangBtn" class="return" type="submit">Pesan Sekarang</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mulaikontrak.css') }}">
@endpush

@push('scripts')
<script>
    const simpanTransaksiForm = document.getElementById('simpanTransaksiForm');
    simpanTransaksiForm.addEventListener('submit', function(event) {
        const jamKerjaInput = document.getElementById('jam_kerja_input').value;
        const durasiKerjaInput = document.getElementById('durasi_kerja_input').value;
        const catatanKhususInput = document.getElementById('catatan_khusus_input').value;
        const prtId = {{ $prt->id }}; // Mendapatkan ID pekerja dari blade template

        document.getElementById('jam_kerja').value = jamKerjaInput;
        document.getElementById('durasi_kerja').value = durasiKerjaInput;
        document.getElementById('catatan_khusus').value = catatanKhususInput;


        // Memasukkan ID pekerja ke dalam form
        const prtIdInput = document.createElement('input');
        prtIdInput.type = 'hidden';
        prtIdInput.name = 'prt_id';
        prtIdInput.value = prtId;
        simpanTransaksiForm.appendChild(prtIdInput);

        // Menghilangkan event default submit
        event.preventDefault();

        // Mengarahkan pengguna ke halaman pembayaran setelah form disubmit
        simpanTransaksiForm.submit();
    });

</script>
@endpush
