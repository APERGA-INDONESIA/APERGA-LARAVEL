@extends('template5')
@section('title', 'Tentang Aplikasi')

@section('navbar')
@endsection

@section('konten')
<div class="tentangaplikasi">
    <a href="javascript:void(0);" onclick="window.history.back();">
    <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
    </a>
    <div class="tentangaplikasi-title">Tentang Aplikasi</div>
</div>

<img src="{{ asset('images/bigaperga.png') }}" class="bigaperga-img" alt="Big APERGA">

<div class="bgtentangaplikasi"></div>

<div class="tentangaplikasiputih">
    <div class="tentangaplikasiputih-text">
        <strong>APERGA</strong>, solusi ideal untuk pekerja rumah tangga terjangkau! Temukan keberagaman pekerja terampil dari bersih-bersih hingga memasak. Transaksi aman dengan penilaian dan ulasan yang memuaskan. Layanan pelanggan responsif, pemilihan pekerja mudah berdasarkan lokasi dan keahlian. Ciptakan kenyamanan dalam rumah tangga Anda dengan <strong>APERGA!</strong>
    </div>
</div>

<div class="VersiAplikasi">
    <img src="{{ asset('images/globe.png') }}" class="globe-img" alt="Globe">
    <div class="versi-aplikasi-text">Versi Aplikasi: 1.1.2</div>
</div>

<div class="Guidebook">
    <img src="{{ asset('images/guidebook.png') }}" class="guidebook-img" alt="Guidebook">
    <div class="guidebook-text">Guidebook</div>
    <div id="pdf-container"></div>
    <a href="{{ asset('pdf/guidebook.pdf') }}" class="download-button" target="_blank">Download Disini</a>
</div>






@endsection

@section('footer')
@endsection

@push('scripts')
<script src="{{ asset('pdfjs/build/pdf.js') }}"></script>
<script src="{{ asset('js/viewer.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const pdfUrl = "{{ asset('pdf/guidebook.pdf') }}";
        const pdfContainer = document.getElementById("pdf-container");

        const viewer = new Viewer(pdfContainer, {
            toolbar: {
                zoomIn: 1,
                zoomOut: 1,
                oneToOne: 1,
                reset: 1,
                rotateLeft: 1,
                rotateRight: 1,
                prev: 1,
                play: {
                    show: 1,
                    size: 'large',
                },
                next: 1,
                download: 0,
            },
            url: pdfUrl,
        });
    });
</script>




@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/tentangaplikasi.css') }}">
@endpush
