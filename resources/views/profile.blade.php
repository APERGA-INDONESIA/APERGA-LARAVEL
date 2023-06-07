@extends('template3')

@section('title', 'Profile Saya')

@section('navbar')
@endsection

@section('konten')

<body style="margin: 0; background: #ffffff">
    <div class="profil">
        <a href="javascript:void(0);" onclick="window.history.back();">
        <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
        </a>
        <div class="profil-title">Profil Saya</div>
    </div>

    <input type="hidden" id="anPageName" name="page" value="tentang-aplikasi" />
    <div class="container-center-horizontal">
      <div class="tentang-aplikasi screen" data-id="1326:7363">
        <div class="group-377-f7Eucv" data-id="1329:7527">
          <div class="rectangle-69-Ck4Xlj" data-id="1328:7491"></div>
          <div class="group-376-Ck4Xlj" data-id="1328:7485">
            <div class="adhitya-pratama-mp-L2jF5G" data-id="1328:7486">
              {{ $user->name }}
            </div>
            <p class="bergabung-pada-12-mei-2023-L2jF5G" data-id="1328:7487">
              Bergabung pada {{ $user->created_at->format('d F Y') }}
            </p>
          </div>
          <img
            class="rectangle-55-Ck4Xlj"
            data-id="1328:7489"
            src="{{ $user->header_image ? asset('Images/Header Image/' . $user->header_image) : asset('images/headerbg.png') }}" style="border-top-left-radius: 50px; border-top-right~-radius: 50px;"
            />
          <img
            class="profile-2-Ck4Xlj"
            data-id="1328:7493"
            src="{{ $user->profile_image ? asset('Images/Profile Image/' . $user->profile_image) : asset('images/profil.png') }}"
            style="border-radius: 100px"
          />
          <h1 class="title-Ck4Xlj" data-id="1328:7495">Informasi Akun Saya</h1>
          <p
            class="profesi-pekerjaan-Ck4Xlj nunitosans-bold-black-24-7px"
            data-id="1328:7499"
          >Profesi / Pekerjaan
          </p>
          <p
            class="alamat-Ck4Xlj nunitosans-bold-black-24-7px"
            data-id="1328:7501"
          >Alamat
          </p>
          <p
            class="tanggal-lahir-Ck4Xlj nunitosans-bold-black-24-7px"
            data-id="1328:7502"
          >Tanggal Lahir
          </p>
          <p
            class="nomor-telepon-Ck4Xlj nunitosans-bold-black-24-7px"
            data-id="1329:7510"
          >Nomor Telepon
          </p>
          <p
            class="alamat-email-Ck4Xlj nunitosans-bold-black-24-7px"
            data-id="1329:7513"
          >Alamat Email
          </p>
          <div
            class="karyawan-swasta-Ck4Xlj nunitosans-semi-bold-eerie-black-24-7px"
            data-id="1328:7500"
          >:  {{ $user->profesi ?: 'Data pekerjaan tidak tersedia' }}
          </div>
          <div
            class="jalan-gebang-wetan-5-b-Ck4Xlj nunitosans-semi-bold-eerie-black-24-7px"
            data-id="1329:7505"
          >:  {{ $user->alamat ?: 'Data alamat tidak tersedia' }}
          </div>
          <div
            class="x16-februari-2003-Ck4Xlj nunitosans-semi-bold-eerie-black-24-7px"
            data-id="1329:7508"
          >:  {{ $user->tanggal_lahir ?: 'Data tanggal lahir tidak tersedia' }}
          </div>
          <div
            class="x083192925747-Ck4Xlj nunitosans-semi-bold-eerie-black-24-7px"
            data-id="1329:7511"
          >:  {{ $user->phone ?: 'Data nomor telepon tidak tersedia' }}
          </div>
          <div
            class="adminapid-Ck4Xlj nunitosans-semi-bold-eerie-black-24-7px"
            data-id="1329:7515"
          >:  {{ $user->email ?: 'Data alamat email tidak tersedia' }}
          </div>
          <div class="button-Ck4Xlj" data-id="1329:7525" onclick="window.location.href = '{{ route('profil.edit') }}'">
            <div class="text-only-lxfNaY" data-id="I1329:7525;83:6698">
                Edit Profile
            </div>
        </div>

        </div>
      </div>
    </div>
</body>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
@endpush

@push('scripts')
<script>


</script>
@endpush
