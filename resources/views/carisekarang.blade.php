@extends('template2')

@section('title', 'Pencarian PRT')

@section('navbar')
@endsection

@section('konten')
    <div class="kotak-hitam">
        <div class="carikan">
            <a href="javascript:void(0);" onclick="window.history.back();">
                <img src="{{ asset('images/arrowwhite.png') }}" class="arrows-img" alt="Arrow">
            </a>
            <div class="cari-title">Pencarian PRT</div>
        </div>

        <div class="kotakpencarian">
            <img src="{{ asset('images/searchblack.png') }}" class="search-img" alt="Search Icon">
            <form method="GET" action="{{ route('pencarian') }}">
                <input type="text" class="search-bar" id="search-input" name="keyword"
                    placeholder="Ketikkan pencarian PRT" value="{{ session('keyword', '') }}">
                <div class="tombolcari">
                    <button type="submit" class="tombolcari-button" id="search-button">Search</button>
                </div>
            </form>
        </div>

        <button class="filter-button" onclick="window.location.href='/dashboard'">
            <img src="{{ asset('images/filterr.png') }}" class="filter-img" alt="Filter Icon">
        </button>

    </div>

    <div class="list-prt">
        <div class="row">
        </div>
    </div>
<div class="popup-filter">
        <body style="margin: 0; background: #ffffff00">
            <input type="hidden" id="anPageName" name="page" value="frame-387" />
            <div class="container-center-horizontal">
                <div class="frame-387 screen" data-id="1085:7202">
                    <div class="filter-popup-SaCktt" data-id="1085:7203">
                        <div class="kotakputih-h7LbzO" data-id="1085:7204"></div>
                        <p class="temukan-prt-yang-kamu-mau-berdasarkan-h7LbzO body" data-id="1085:7205">
                            Temukan PRT yang kamu mau berdasarkan:
                        </p>
                        <h1 class="title-h7LbzO" data-id="1085:7206">Filter Pencarian PRT</h1>
                        <div class="group-364-h7LbzO" data-id="1085:7207">
                            <div class="rating-pembantu-rumah-tangga-JEr4fS poppins-semi-bold-log-cabin-16px"
                                data-id="1085:7208">
                                Rating Pembantu Rumah Tangga
                            </div>
                            <div class="group-363-JEr4fS group-363" data-id="1085:7209">
                                <div class="rectangle-67" data-id="1085:7210"></div>
                                <p class="pilih-rating-yang-kamu-mau-DRbp9n poppins-normal-log-cabin-16px" data-id="1085:7211">
                                    Pilih rating yang kamu mau
                                </p>
                            </div>
                        </div>
                        <img class="arrow-down-sign-to-navigate-1-h7LbzO" data-id="1085:7212"
                            src="{{ asset('images/dropdown.png') }}" alt="arrow-down-sign-to-navigate 1" />
                        <div class="group-367-h7LbzO" data-id="1085:7213">
                            <div class="group-365-RleJMF" data-id="1085:7214">
                                <div class="gaji-pembantu-rumah-tangga poppins-semi-bold-log-cabin-16px" data-id="1085:7215">
                                    Gaji Pembantu Rumah Tangga
                                </div>
                                <div class="group-363-pYorlK group-363" data-id="1085:7216">
                                    <div class="rectangle-67" data-id="1085:7217"></div>
                                    <p class="pilih-kondisi-gaji-yang-kamu-mau poppins-normal-log-cabin-16px"
                                        data-id="1085:7218">
                                        Pilih kondisi gaji yang kamu mau
                                    </p>
                                </div>
                            </div>
                            <div class="group-366-RleJMF group-366" data-id="1085:7219">
                                <div class="gaji-pembantu-rumah-tangga poppins-semi-bold-log-cabin-16px" data-id="1085:7220">
                                    Gaji Pembantu Rumah Tangga
                                </div>
                                <div class="group-363-cTywxZ group-363" data-id="1085:7221">
                                    <div class="rectangle-67" data-id="1085:7222"></div>
                                    <p class="pilih-kondisi-gaji-yang-kamu-mau poppins-normal-log-cabin-16px"
                                        data-id="1085:7223">
                                        Pilih kondisi gaji yang kamu mau
                                    </p>
                                </div>
                            </div>
                            <img class="arrow-down-sign-to-navigate-2-RleJMF" data-id="1085:7224"
                                src="{{ asset('images/dropdown.png') }}" alt="arrow-down-sign-to-navigate 2" />
                        </div>
                        <div class="usiafilter-h7LbzO" data-id="1085:7225">
                            <div class="group-kqA5tN" data-id="1085:7226">
                                <div class="usia-pembantu-rumah-tangga-cWLXyO poppins-semi-bold-log-cabin-16px"
                                    data-id="1085:7227">
                                    Usia Pembantu Rumah Tangga
                                </div>
                                <div class="group-363-cWLXyO group-363" data-id="1085:7228">
                                    <div class="rectangle-67" data-id="1085:7229"></div>
                                    <p class="pilih-kondisi-gaji-yang-kamu-mau poppins-normal-log-cabin-16px"
                                        data-id="1085:7230">
                                        Pilih kondisi gaji yang kamu mau
                                    </p>
                                </div>
                            </div>
                            <div class="group-366-kqA5tN group-366" data-id="1085:7231">
                                <div class="group-363-UWchDE group-363" data-id="1085:7232">
                                    <div class="rectangle-67" data-id="1085:7233"></div>
                                    <p class="pilih-kondisi-usia-yang-kamu-mau-LJfcZ2 poppins-normal-log-cabin-16px"
                                        data-id="1085:7234">
                                        Pilih kondisi usia yang kamu mau
                                    </p>
                                </div>
                            </div>
                            <img class="arrow-kqA5tN" data-id="1085:7235" src="{{ asset('images/dropdown.png') }}"
                                alt="arrow-down-sign-to-navigate 2" />
                        </div>
                        <div class="cari-prt-h7LbzO" data-id="1085:7236">
                            <div class="cari-prt-sekarang-4xB6e1" data-id="1085:7237">
                                Cari PRT Sekarang
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endsection

    @section('footer')
        <div class="space"></div>
    @endsection

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cari.css') }}">
    @endpush

    @push('scripts')
    @endpush
