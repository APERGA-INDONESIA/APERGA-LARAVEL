@extends('template3')

@section('title', 'Bantuan')

@section('navbar')
@endsection

@section('konten')
<div class="bantu">
    <a href="javascript:void(0);" onclick="window.history.back();">
        <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
    </a>
    <div class="bantu-title">Pusat Bantuan</div>

<div class="container">
    <div class="dashboard-kotak"></div>
    <img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
    <p class="greeting">Halo, Selamat Datang</p>
    <p class="username">{{ Auth::user()->name }}</p>

    <div class="FAQ">
        <div class="FAQ-with-Icon">
            <img src="{{ asset('images/faq.png') }}" alt="FAQ Icon" class="icon">
        </div>
        <div class="FAQ-item">
            <div class="dropdown">
                <button class="faq-button dropdown-toggle" type="button" id="faqDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Bagaimana cara membuat akun di website ini?
                    <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Dropdown Icon" class="dropdown-icon">
                </button>
                <div class="dropdown-menu" aria-labelledby="faqDropdown">
                    <a class="dropdown-item" href="#">
                        <strong> Untuk membuat akun di website ini, ikuti langkah-langkah berikut: </strong>
                        <br>
                            <ol>
                            <li>Buka halaman utama website.</li>
                            <li>Klik tombol "Daftar" atau "Buat Akun" yang biasanya terdapat di bagian atas kanan halaman.</li>
                            <li>Isi formulir pendaftaran dengan informasi yang diperlukan, seperti nama lengkap, alamat email, dan kata sandi.</li>
                            <li>Klik tombol "Daftar" atau "Buat Akun" setelah mengisi formulir.</li>
                            <li>Verifikasi akun melalui email yang dikirimkan oleh website.</li>
                            <li>Setelah verifikasi berhasil, akun Anda akan aktif dan siap digunakan.</li>
                        </ol>
                    </a>
                </div>
            </div>
        </div>

        <div class="FAQ-item">
            <div class="dropdown">
                <button class="faq-button dropdown-toggle" type="button" id="faqDropdown2" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Bagaimana cara mencari jasa PRT yang sesuai dengan kebutuhan saya?
                    <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Dropdown Icon" class="dropdown-icon">
                </button>
                <div class="dropdown-menu" aria-labelledby="faqDropdown2">
                    <a class="dropdown-item" href="#">
                        <strong> Mencari jasa PRT yang sesuai dengan kebutuhan Anda, ikuti langkah-langkah berikut:</strong>
                        <br>
                        <ol>
                            <li>Login ke akun Anda di website.</li>
                            <li>Pada halaman utama, cari kotak pencarian atau opsi "Cari Jasa".</li>
                            <li>Masukkan kata kunci atau spesifikasi jasa yang Anda butuhkan, misalnya "pembantu rumah tangga", "baby sitter", atau "perawat lansia".</li>
                            <li>Tentukan kriteria tambahan, seperti lokasi, jam kerja, atau harga.</li>
                            <li>Klik tombol "Cari" atau ikon pencarian.</li>
                            <li>Website akan menampilkan daftar jasa PRT yang sesuai dengan kriteria Anda.</li>
                            <li>Anda dapat melihat profil dan ulasan jasa PRT tersebut untuk membuat keputusan yang tepat.</li>
                        </ol>
                    </a>
                </div>
            </div>
        </div>

        <div class="FAQ-item">
            <div class="dropdown">
                <button class="faq-button dropdown-toggle" type="button" id="faqDropdown3" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Bagaimana cara memesan jasa PRT melalui website ini?
                    <img src="{{ asset('images/dropdownbantuan.png') }}" alt="Dropdown Icon" class="dropdown-icon">
                </button>
                <div class="dropdown-menu" aria-labelledby="faqDropdown3">
                    <a class="dropdown-item" href="#">
                       <strong> Untuk memesan jasa PRT melalui website ini, ikuti langkah-langkah berikut:</strong>
                        <br>
                        <ol>
                            <li>Cari jasa PRT yang sesuai dengan kebutuhan Anda menggunakan langkah-langkah yang telah dijelaskan sebelumnya.</li>
                            <li>Pilih jasa PRT yang Anda inginkan dengan mengklik tombol "Pesan" atau "Beli" di halaman profil jasa tersebut.</li>
                            <li>Isi formulir pemesanan dengan informasi yang diperlukan, seperti tanggal, waktu, dan durasi pemesanan.</li>
                            <li>Review kembali detail pemesanan Anda dan pastikan semuanya sudah sesuai.</li>
                            <li>Klik tombol "Konfirmasi" atau "Pesan Sekarang".</li>
                            <li>Anda akan menerima konfirmasi pemesanan melalui email atau notifikasi di akun Anda.</li>
                            <li>Jasa PRT yang Anda pesan akan menghubungi Anda untuk mengatur detail lebih lanjut dan menyelesaikan pembayaran.</li>
                        </ol>
                    </a>
                </div>
            </div>
        </div>

    <div class="CallCenter">
        <div class="CallCenter-with-Icon">
            <img src="{{ asset('images/CallCenter.png') }}" alt="Call Center" class="icon">
        </div>
        <div class="CallCenter-items">
            <div class="CallCenter-item">
                <button onclick="window.open('https://wa.me/+6283111111', '_blank')">Telepon Kami</button>
            </div>
            <div class="CallCenter-item">
                <button onclick="window.open('mailto:contoh@gmail.com', '_blank')">Email Kami</button>
            </div>
        </div>
    </div>

 
@endsection

@section('footer')

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/bantuan.css') }}">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.faq-button').click(function() {
    $('.dropdown-menu').not($(this).parent().find('.dropdown-menu')).hide();
    $(this).parent().find('.dropdown-menu').toggle();
  });
});
</script>
@endpush
