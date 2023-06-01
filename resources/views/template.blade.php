<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366, maximum-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <title>@yield('title', 'Dashboard')</title>
    <style>


        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 0px;
            z-index: 0;
            margin-bottom: -250px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-dark bg-white sticky-top">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('images/aperga.png') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pencarian') }}">Cari PRT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentangaplikasi') }}">Tentang Aplikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bantuan') }}">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

<div class="container">
@yield('konten')
</div>

<div class="footer">
@yield('footer')

<body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="frame-386" />
    <div class="container-center-horizontal">
      <div class="frame-386 screen" data-id="1072:7237">
        <div class="group-359-BfLgLz" data-id="1072:7194">
          <div class="footer-XvkHiT" data-id="1072:7195"></div>
          <div class="frame-369-XvkHiT" data-id="1072:7196">
            <div class="frame-349-H7Z72H" data-id="1072:7197">
              <div class="frame-354-jyZuck" data-id="1072:7198">
                <div class="frame-370-S3Dfez" data-id="1072:7199">
                  <div class="group-352-Wp9zTc" data-id="1072:7200">
                    <div class="rectangle-66-VQPd2T" data-id="1072:7201"></div>
                    <img
                      class="group-2-1-VQPd2T"
                      data-id="1072:7202"
                      src="{{ asset('images/aperga-footer.png') }}" alt="Logo" class="logo">
                    />
                  </div>
                  <p
                    class="pt-adi-perkasa-guna-tbk-Wp9zTc poppins-bold-white-20px"
                    data-id="1072:7203"
                  >
                    PT Adi Perkasa Guna Tbk
                  </p>
                </div>
                <div class="frame-347-S3Dfez" data-id="1072:7204">
                  <div class="frame-344-LwSrQY" data-id="1072:7205">
                    <div
                      class="hubungi-kami-iyFSkI poppins-bold-white-20px"
                      data-id="1072:7206"
                    >
                      Hubungi kami :
                    </div>
                  </div>
                  <div class="frame-346-LwSrQY" data-id="1072:7207">
                    <div class="frame-345-MMMzeo" data-id="1072:7208">
                      <div
                        class="x24-call-call-phone-S6R7A6"
                        data-id="1072:7209"
                      >
                        <img
                          class="icon-call-FkSn0Y"
                          data-id="I1072:7209;83:9226"
                          src="{{ asset('images/phone.svg') }}" alt="Logo" class="logo"
                          alt="icon-call"
                        />
                      </div>
                    </div>
                    <div class="frame-343-MMMzeo" data-id="1072:7210">
                      <div class="x24-basic-mail-CqL9Lp" data-id="1072:7211">
                        <img
                            class="icon-mail-kilgEo"
                            data-id="I1072:7211;83:6769"
                          src="{{ asset('images/mail.svg') }}" alt="Logo" class="logo">
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <img
                class="vector-12-jyZuck"
                data-id="1072:7212"
                src="{{ asset('images/garisfooter.svg') }}" alt="garis"
              />
              <div class="frame-367-jyZuck frame-367" data-id="1072:7213">
                <div class="frame-365-RD4Byd" data-id="1072:7214">
                  <div
                    class="tentang-kami-hrbFiw poppins-bold-white-20px"
                    data-id="1072:7215"
                  >
                    Tentang Kami
                  </div>
                  <div class="frame-364" data-id="1072:7216">
                    <p
                      class="platform-penyedia-ja-Kyh3yR body"
                      data-id="1072:7217"
                    >
                      Platform penyedia jasa pekerja rumah tangga terpercaya.
                      Berlokasi di Surabaya, Indonesia.
                    </p>
                  </div>
                </div>
                <div class="frame-366-RD4Byd" data-id="1072:7218">
                  <div
                    class="syarat-dan-ketentuan-mFUhqz poppins-bold-white-20px"
                    data-id="1072:7219"
                  >
                    Syarat dan Ketentuan
                  </div>
                  <div class="frame-364" data-id="1072:7220">
                    <div class="pelanggan-XpgcdW body" data-id="1072:7221">
                      Pelanggan
                    </div>
                    <div class="mitra-XpgcdW body" data-id="1072:7222">
                      Mitra
                    </div>
                  </div>
                </div>
                <div class="frame-367-RD4Byd frame-367" data-id="1072:7223">
                  <div
                    class="program-kami-Dylx5u poppins-bold-white-20px"
                    data-id="1072:7224"
                  >
                    Program Kami
                  </div>
                  <div class="frame-364" data-id="1072:7225">
                    <div
                      class="kerja-sama-mitra-YTN0aJ body"
                      data-id="1072:7226"
                    >
                      Kerja Sama Mitra
                    </div>
                    <div class="pencarian-prt-YTN0aJ body" data-id="1072:7227">
                      Pencarian PRT
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p class="copyright-aperga-202-H7Z72H title" data-id="1072:7228">
              © Copyright APERGA 2023. All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
    <script src="launchpad-js/launchpad-banner.js" async></script>
    <script
    defer
    src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"
    ></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('styles')
    @stack('scripts')
</body>

</html>
