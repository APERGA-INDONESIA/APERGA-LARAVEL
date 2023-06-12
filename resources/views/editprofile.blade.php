@extends('template4')
@section('title', 'Edit Profile')

@section('favicon')

@section('navbar')

@endsection

@section('konten')
<div class="container2">
    <div class="container-fluid" id="edit-box" style="margin-top: -100px;">
        <div class="row">
            <div class="col-lg-12">
                <div id="edit-profil">
                    <a href="javascript:void(0);" onclick="window.history.back();">
                        <img src="{{ asset('images/arrow.png') }}" alt="Arrow" width="20px" height="20px">
                    </a>
                    <p class="edit-title">Pengaturan Akun</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 navbar-main">
                <nav class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" id="profil-saya-nav" href="javascript:void(0);" onclick="showProfile()">Profil Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" id="keamanan-akun-nav" href="javascript:void(0);" onclick="showSecurity()">Keamanan Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" id="histori-nav" href="javascript:void(0);" onclick="showHistori()">Riwayat</a>
                      </li>
                </nav>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12" id="profile-header">
                        <img src="{{ $user->profile_image ? asset('Images/Profile Image/' . $user->profile_image) : asset('images/profil.png') }}" alt="Profile Image" id="profile-img">
                        <img src="{{ $user->header_image ? asset('Images/Header Image/' . $user->header_image) : asset('images/header.png') }}" alt="Profile Image" id="header-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-2">
                <!-- Kosongkan kolom ini agar form input berada di sebelah kanan navbar -->
            </div>
            <div class="col-lg-10">
                <!-- Profil Saya Section -->
                <div id="profile-section">
                    <form action="{{ route('profil.update') }}" enctype="multipart/form-data" id="form-input" method="POST">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="name" class="font-weight-bold">Nama</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama lengkap anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="alamat" class="font-weight-bold">Alamat</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat email lengkap anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="profesi" class="font-weight-bold">Pekerjaan</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="profesi" id="profesi" class="form-control" placeholder="Masukkan nama pekerjaan anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="tanggallahir" class="font-weight-bold">Tanggal Lahir</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="date" name="tanggallahir" id="tanggallahir" class="form-control" placeholder="Masukkan tanggal lahir anda">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="profile_image" class="font-weight-bold">Foto Profil</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="file" name="profile_image" id="profile_image" class="form-control" placeholder="Unggah foto profil anda, ukuran maksimal 2mb">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-2">
                                <label for="header_image" class="font-weight-bold">Foto Header</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="file" name="header_image" id="header_image" class="form-control" placeholder="Unggah foto header anda, ukuran maksimal 2mb">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <a href="" class="btn btn-outline-white mx-2 shadow">Batalkan</a>
                            <button type="submit" class="btn btn-blue shadow">Simpan</button>
                        </div>
                    </form>
                </div>

                <!-- Keamanan Akun Section -->
                <div id="security-section">
                    <form action="{{ route('profil.update') }}" enctype="multipart/form-data" id="form-input" method="POST">
                      @csrf
                      <!-- Bagian lain dari form -->

                      <div class="row mb-2">
                        <div class="col-lg-2">
                          <label for="email" class="font-weight-bold">Alamat Email</label>
                        </div>
                        <div class="col-lg-10">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan alamat email anda">
                        </div>
                      </div>

                      <div class="row mb-2">
                        <div class="col-lg-2">
                          <label for="phone" class="font-weight-bold">Nomor HP</label>
                        </div>
                        <div class="col-lg-10">
                          <input type="tel" name="phone" id="phone" class="form-control" placeholder="Masukkan nomor telepon anda">
                        </div>
                      </div>

                      <div class="row mb-2">
                        <div class="col-lg-2">
                          <label for="new_password" class="font-weight-bold">Kata Sandi</label>
                        </div>
                        <div class="col-lg-10">
                          <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password baru">
                        </div>
                      </div>

                      <div class="d-flex justify-content-end mt-4">
                        <a href="" class="btn btn-outline-white mx-2 shadow">Kembali</a>
                        <button type="submit" class="btn btn-blue shadow">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>

                <div id="histori-section" class="col-lg-10" style="display: none;">
                    <input type="hidden" id="anPageName" name="page" value="tabel" />
                    <div class="tabel screen" data-id="1426:7400">
                      <div class="frame-40787-iNDiJy" data-id="1426:7401">
                        <div class="group-373-gu3O6o" data-id="1426:7402">
                          <header class="header-ZqU4n7" data-id="1426:7403">
                            <div class="frame-40689-Wcxl6i frame-40689" data-id="1426:7404">
                              <div
                                class="no-Eqebz9 valign-text-middle montserrat-semi-bold-white-14px"
                                data-id="1426:7405"
                              >
                                No.
                              </div>
                            </div>
                            <div class="frame-40690-Wcxl6i frame-40690" data-id="1426:7406">
                              <div
                                class="id-transaksi-zDSzi2 valign-text-middle montserrat-semi-bold-white-14px"
                                data-id="1426:7407"
                              >
                                ID Transaksi
                              </div>
                            </div>
                            <div class="frame-40694-Wcxl6i frame-40694" data-id="1426:7408">
                              <div
                                class="tipe-pembyaran-aR7UOT valign-text-middle montserrat-semi-bold-white-14px"
                                data-id="1426:7409"
                              >
                                Tipe Pembyaran
                              </div>
                            </div>
                            <div class="frame-40691-Wcxl6i frame-40691" data-id="1426:7410">
                              <div
                                class="nominal-JQc5Cx valign-text-middle montserrat-semi-bold-white-14px"
                                data-id="1426:7411"
                              >
                                Nominal
                              </div>
                            </div>
                            <div class="group-372-Wcxl6i" data-id="1426:7412">
                              <div class="frame-40692-DRqZRA frame-40692" data-id="1426:7413">
                                <div
                                  class="tanggal-transaksi-Hmy85g valign-text-middle montserrat-semi-bold-white-14px"
                                  data-id="1426:7414"
                                >
                                  Tanggal Transaksi
                                </div>
                              </div>
                            </div>
                            <div class="frame-40695-Wcxl6i frame-40695" data-id="1426:7415">
                              <div
                                class="detail-tim-H8TAVf valign-text-middle montserrat-semi-bold-white-14px"
                                data-id="1426:7416"
                              >
                                Status Transaksi
                              </div>
                            </div>
                          </header>
<div class="halaman=pertama">
                          <!-- Baris Pertama -->
                          <div class="row-1-ZqU4n7" data-id="1426:7417">
                            @php
                              $orderTransaction = App\Models\OrderTransaction::first();
                              $TipePembayaran = isset($orderTransaction->tipe_pembayaran) ? $orderTransaction->tipe_pembayaran : "Belum Memilih";
                              $TanggalBayar = isset($orderTransaction->tanggal_transaksi) ? $orderTransaction->tanggal_transaksi : "Tidak ada";
                              $status = isset($orderTransaction->status_transaksi) ? $orderTransaction->status_transaksi : "Tidak ada";
                              $nomor = 1;
                            @endphp

                            @if ($orderTransaction)
                              <div class="frame-40689-djqGrl frame-40689" data-id="1426:7418">
                                <div class="x1-MgKMpU valign-text-middle montserrat-normal-eerie-black-14px" data-id="1426:7419">
                                  {{ $nomor++ }}
                                </div>
                              </div>
                              <div class="frame-40690-djqGrl frame-40690" data-id="1426:7420">
                                <div class="x123123123123-DCxgz6 valign-text-middle montserrat-normal-eerie-black-14px" data-id="1426:7421">
                                  AP{{ str_pad($orderTransaction->id, 7, '0', STR_PAD_LEFT) }}
                                </div>
                              </div>
                              <div class="frame-40691-djqGrl frame-40691" data-id="1426:7422">
                                <div class="debit-FLxM1a valign-text-middle debit montserrat-normal-eerie-black-14px" data-id="1426:7423">
                                  {{ $TipePembayaran }}
                                </div>
                              </div>
                              <div class="frame-40694-djqGrl frame-40694" data-id="1426:7424">
                                <div class="rp-5200000-hpVx3Z valign-text-middle rp-5200000 montserrat-normal-eerie-black-14px" data-id="1426:7425">
                                  Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                                </div>
                              </div>
                              <div class="frame-40692-djqGrl frame-40692" data-id="1426:7426">
                                <div class="x2023-02-15-5GRgux valign-text-middle x2023-02-15 montserrat-normal-eerie-black-14px" data-id="1426:7427">
                                  {{ $TanggalBayar }}
                                </div>
                              </div>
                              <div class="frame-40695-djqGrl frame-40695" data-id="1426:7428">
                                <div class="status valign-text-middle montserrat-normal-eerie-black-14px" data-id="1426:7593">
                                  {{ $status }}
                                </div>
                              </div>
                            @else

                            @endif
                          </div>

                        <!-- Baris Kedua -->
                          <div class="row-10-ZqU4n7" data-id="1426:7430">
                            @php
                            $orderTransaction = App\Models\OrderTransaction::skip(1)->first();
                            $TipePembayaran = isset($orderTransaction->tipe_pembayaran) ? $orderTransaction->tipe_pembayaran : "Belum Memilih";
                            $TanggalBayar = isset($orderTransaction->tanggal_transaksi) ? $orderTransaction->tanggal_transaksi : "Tidak ada";
                            $status = isset($orderTransaction->status_transaksi) ? $orderTransaction->status_transaksi : "Tidak ada";
                            $nomor = 2;
                            @endphp


                            @if ($orderTransaction)
                            <div class="frame-40689-cjPKrk frame-40689" data-id="1426:7431">
                              <div
                                class="x2-cqQvKi valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7432"
                              >
                              {{ $nomor++ }}
                              </div>
                            </div>
                            <div class="frame-40690-cjPKrk frame-40690" data-id="1426:7433">
                              <div
                                class="x123123123124 valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7434"
                              >
                              AP{{ str_pad($orderTransaction->id, 7, '0', STR_PAD_LEFT) }}
                              </div>
                            </div>
                            <div class="frame-40694-cjPKrk frame-40694" data-id="1426:7435">
                              <div
                                class="debit-3WCMHj valign-text-middle debit montserrat-normal-eerie-black-14px"
                                data-id="1426:7436"
                              >
                              {{ $TipePembayaran }}
                              </div>
                            </div>
                            <div class="frame-40691-cjPKrk frame-40691" data-id="1426:7437">
                              <div
                                class="rp-5200000-hrM4eN valign-text-middle rp-5200000 montserrat-normal-eerie-black-14px"
                                data-id="1426:7438"
                              >
                              Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                              </div>
                            </div>
                            <div class="frame-40692-cjPKrk frame-40692" data-id="1426:7439">
                              <div
                                class="x2023-02-15-B84XnF valign-text-middle x2023-02-15 montserrat-normal-eerie-black-14px"
                                data-id="1426:7440"
                              >
                              {{ $TanggalBayar }}
                              </div>
                            </div>
                            <div class="frame-40695-cjPKrk frame-40695" data-id="1426:7441">
                              <div
                                class="status-XE90vz valign-text-middle status montserrat-normal-eerie-black-14px"
                                data-id="1426:7594"
                              >
                              {{ $status }}
                              </div>
                            </div>
                            @else
                            <p>Data tidak ditemukan.</p>
                            @endif
                          </div>

                          <!-- Baris Ketiga -->
                          <div class="row-18-ZqU4n7" data-id="1426:7443">
                            @php
                            $orderTransaction = App\Models\OrderTransaction::skip(2)->first();
                            $TipePembayaran = isset($orderTransaction->tipe_pembayaran) ? $orderTransaction->tipe_pembayaran : "Belum Memilih";
                            $TanggalBayar = isset($orderTransaction->tanggal_transaksi) ? $orderTransaction->tanggal_transaksi : "Tidak ada";
                            $status = isset($orderTransaction->status_transaksi) ? $orderTransaction->status_transaksi : "Tidak ada";
                            $nomor = 3;
                            @endphp

                            <div class="frame-40689-x9dZAn frame-40689" data-id="1426:7444">
                              <div
                                class="x3-B6XYPm valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7445"
                              >
                              {{ $nomor++ }}
                              </div>
                            </div>
                            <div class="frame-40690-x9dZAn frame-40690" data-id="1426:7446">
                              <div
                                class="x123123123124 valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7447"
                              >
                              AP{{ str_pad($orderTransaction->id, 7, '0', STR_PAD_LEFT) }}
                              </div>
                            </div>
                            <div class="frame-40694-x9dZAn frame-40694" data-id="1426:7448">
                              <div
                                class="debit-38nxI1 valign-text-middle debit montserrat-normal-eerie-black-14px"
                                data-id="1426:7449"
                              >
                              {{ $TipePembayaran }}
                              </div>
                            </div>
                            <div class="frame-40691-x9dZAn frame-40691" data-id="1426:7450">
                              <div
                                class="rp-5200000-uCxZeX valign-text-middle rp-5200000 montserrat-normal-eerie-black-14px"
                                data-id="1426:7451"
                              >
                              Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                              </div>
                            </div>
                            <div class="frame-40692-x9dZAn frame-40692" data-id="1426:7452">
                              <div
                                class="x2023-02-15-1ICwpL valign-text-middle x2023-02-15 montserrat-normal-eerie-black-14px"
                                data-id="1426:7453"
                              >
                              {{ $TanggalBayar }}
                              </div>
                            </div>
                            <div class="frame-40695-x9dZAn frame-40695" data-id="1426:7454">
                              <div
                                class="status-BHX34D valign-text-middle status montserrat-normal-eerie-black-14px"
                                data-id="1426:7600"
                              >
                              {{ $status }}
                              </div>
                            </div>
                          </div>

                          <!-- Baris Keempat -->
                          <div class="row-19-ZqU4n7" data-id="1426:7456">
                            @php
                            $orderTransaction = App\Models\OrderTransaction::skip(3)->first();
                            $TipePembayaran = isset($orderTransaction->tipe_pembayaran) ? $orderTransaction->tipe_pembayaran : "Belum Memilih";
                            $TanggalBayar = isset($orderTransaction->tanggal_transaksi) ? $orderTransaction->tanggal_transaksi : "Tidak ada";
                            $status = isset($orderTransaction->status_transaksi) ? $orderTransaction->status_transaksi : "Tidak ada";
                            $nomor = 4;
                            @endphp

                            <div class="frame-40689-ruPJTC frame-40689" data-id="1426:7457">
                              <div
                                class="x4-0CyYgq valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7458"
                              >
                              {{ $nomor++ }}
                              </div>
                            </div>
                            <div class="frame-40690-ruPJTC frame-40690" data-id="1426:7459">
                              <div
                                class="x123123123124 valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7460"
                              >
                              AP{{ str_pad($orderTransaction->id, 7, '0', STR_PAD_LEFT) }}
                              </div>
                            </div>
                            <div class="frame-40694-ruPJTC frame-40694" data-id="1426:7461">
                              <div
                                class="debit-ynFJc7 valign-text-middle debit montserrat-normal-eerie-black-14px"
                                data-id="1426:7462"
                              >
                              {{ $TipePembayaran }}
                              </div>
                            </div>
                            <div class="frame-40691-ruPJTC frame-40691" data-id="1426:7463">
                              <div
                                class="rp-5200000-3xBVD5 valign-text-middle rp-5200000 montserrat-normal-eerie-black-14px"
                                data-id="1426:7464"
                              >
                              Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                              </div>
                            </div>
                            <div class="frame-40692-ruPJTC frame-40692" data-id="1426:7465">
                              <div
                                class="x2023-02-15-8hz3Xw valign-text-middle x2023-02-15 montserrat-normal-eerie-black-14px"
                                data-id="1426:7466"
                              >
                              {{ $TanggalBayar }}
                              </div>
                            </div>
                            <div class="frame-40695-ruPJTC frame-40695" data-id="1426:7467">
                              <div
                                class="status-bdwRYL valign-text-middle status montserrat-normal-eerie-black-14px"
                                data-id="1426:7601"
                              >
                              {{ $status }}
                              </div>
                            </div>
                          </div>

                          <!-- Baris Kelima -->
                          <div class="row-20-ZqU4n7" data-id="1426:7469">
                            @php
                            $orderTransaction = App\Models\OrderTransaction::skip(4)->first();
                            $TipePembayaran = isset($orderTransaction->tipe_pembayaran) ? $orderTransaction->tipe_pembayaran : "Belum Memilih";
                            $TanggalBayar = isset($orderTransaction->tanggal_transaksi) ? $orderTransaction->tanggal_transaksi : "Tidak ada";
                            $status = isset($orderTransaction->status_transaksi) ? $orderTransaction->status_transaksi : "Tidak ada";
                            $nomor = 5;
                            @endphp

                            <div class="frame-40689-B0qGDj frame-40689" data-id="1426:7470">
                              <div
                                class="x5-Y75bvx valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7471"
                              >
                              {{ $nomor++ }}
                              </div>
                            </div>
                            <div class="frame-40690-B0qGDj frame-40690" data-id="1426:7472">
                              <div
                                class="x123123123124 valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7473"
                              >
                              AP{{ str_pad($orderTransaction->id, 7, '0', STR_PAD_LEFT) }}
                              </div>
                            </div>
                            <div class="frame-40694-B0qGDj frame-40694" data-id="1426:7474">
                              <div
                                class="debit-vhOW9G valign-text-middle debit montserrat-normal-eerie-black-14px"
                                data-id="1426:7475"
                              >
                                {{ $TipePembayaran }}
                              </div>
                            </div>
                            <div class="frame-40691-B0qGDj frame-40691" data-id="1426:7476">
                              <div
                                class="rp-5200000-3XrtYx valign-text-middle rp-5200000 montserrat-normal-eerie-black-14px"
                                data-id="1426:7477"
                              >
                              Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                              </div>
                            </div>
                            <div class="frame-40692-B0qGDj frame-40692" data-id="1426:7478">
                              <div
                                class="x2023-02-15-4jX8Zf valign-text-middle x2023-02-15 montserrat-normal-eerie-black-14px"
                                data-id="1426:7479"
                              >
                                {{ $TanggalBayar }}
                              </div>
                            </div>
                            <div class="frame-40695-B0qGDj frame-40695" data-id="1426:7480">
                              <div
                                class="status-OTVWIa valign-text-middle status montserrat-normal-eerie-black-14px"
                                data-id="1426:7602"
                              >
                                {{ $status }}
                              </div>
                            </div>
                          </div>

                          <!-- Baris Keenam -->
                          <div class="row-21-ZqU4n7" data-id="1426:7482">
                            @php
                            $orderTransaction = App\Models\OrderTransaction::skip(5)->first();
                            $TipePembayaran = isset($orderTransaction->tipe_pembayaran) ? $orderTransaction->tipe_pembayaran : "Belum Memilih";
                            $TanggalBayar = isset($orderTransaction->tanggal_transaksi) ? $orderTransaction->tanggal_transaksi : "Tidak ada";
                            $status = isset($orderTransaction->status_transaksi) ? $orderTransaction->status_transaksi : "Tidak ada";
                            $nomor = 6;
                            @endphp
                            <div class="frame-40689-q4CSOu frame-40689" data-id="1426:7483">
                              <div
                                class="x6-KsxXeT valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7484"
                              >
                              {{ $nomor++ }}
                              </div>
                            </div>
                            <div class="frame-40690-q4CSOu frame-40690" data-id="1426:7485">
                              <div
                                class="x123123123124 valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7486"
                              >
                              AP{{ str_pad($orderTransaction->id, 7, '0', STR_PAD_LEFT) }}
                              </div>
                            </div>
                            <div class="frame-40694-q4CSOu frame-40694" data-id="1426:7487">
                              <div
                                class="debit-Nu1Yqe valign-text-middle debit montserrat-normal-eerie-black-14px"
                                data-id="1426:7488"
                              >
                                {{ $TipePembayaran }}
                              </div>
                            </div>
                            <div class="frame-40691-q4CSOu frame-40691" data-id="1426:7489">
                              <div
                                class="rp-5200000-xJpFV9 valign-text-middle rp-5200000 montserrat-normal-eerie-black-14px"
                                data-id="1426:7490"
                              >
                              Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                              </div>
                            </div>
                            <div class="frame-40692-q4CSOu frame-40692" data-id="1426:7491">
                              <div
                                class="x2023-02-15-btNOxv valign-text-middle x2023-02-15 montserrat-normal-eerie-black-14px"
                                data-id="1426:7492"
                              >
                                {{ $TanggalBayar }}
                              </div>
                            </div>
                            <div class="frame-40695-q4CSOu frame-40695" data-id="1426:7493">
                              <div
                                class="status-908I4p valign-text-middle status montserrat-normal-eerie-black-14px"
                                data-id="1426:7603"
                              >
                                {{ $status }}
                              </div>
                            </div>
                          </div>

                          <!-- Baris Ketujuh -->
                          <div class="row-22-ZqU4n7" data-id="1426:7495">
                            @php
                            $orderTransaction = App\Models\OrderTransaction::skip(6)->first();
                            $TipePembayaran = isset($orderTransaction->tipe_pembayaran) ? $orderTransaction->tipe_pembayaran : "Belum Memilih";
                            $TanggalBayar = isset($orderTransaction->tanggal_transaksi) ? $orderTransaction->tanggal_transaksi : "Tidak ada";
                            $status = isset($orderTransaction->status_transaksi) ? $orderTransaction->status_transaksi : "Tidak ada";
                            $nomor = 7;
                            @endphp

                            <div class="frame-40689-X2y98Y frame-40689" data-id="1426:7496">
                              <div
                                class="x7-SoStia valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7497"
                              >
                              {{ $nomor++ }}
                              </div>
                            </div>
                            <div class="frame-40690-X2y98Y frame-40690" data-id="1426:7498">
                              <div
                                class="x123123123124 valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7499"
                              >
                              AP{{ str_pad($orderTransaction->id, 7, '0', STR_PAD_LEFT) }}
                              </div>
                            </div>
                            <div class="frame-40694-X2y98Y frame-40694" data-id="1426:7500">
                              <div
                                class="debit-gTyhbw valign-text-middle debit montserrat-normal-eerie-black-14px"
                                data-id="1426:7501"
                              >
                              {{ $TipePembayaran }}
                              </div>
                            </div>
                            <div class="frame-40691-X2y98Y frame-40691" data-id="1426:7502">
                              <div
                                class="rp-5200000-f4AqHS valign-text-middle rp-5200000 montserrat-normal-eerie-black-14px"
                                data-id="1426:7503"
                              >
                              Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                              </div>
                            </div>
                            <div class="frame-40692-X2y98Y frame-40692" data-id="1426:7504">
                              <div
                                class="x2023-02-15-ooLffh valign-text-middle x2023-02-15 montserrat-normal-eerie-black-14px"
                                data-id="1426:7505"
                              >
                                {{ $TanggalBayar }}
                              </div>
                            </div>
                            <div class="frame-40695-X2y98Y frame-40695" data-id="1426:7506">
                              <div
                                class="status-GtIpFx valign-text-middle status montserrat-normal-eerie-black-14px"
                                data-id="1426:7604"
                              >
                                {{ $status }}
                              </div>
                            </div>
                          </div>

                          <!-- Baris Kedelapan -->
                          <div class="row-23-ZqU4n7" data-id="1426:7508">
                            @php
                            $orderTransaction = App\Models\OrderTransaction::skip(7)->first();
                            $TipePembayaran = isset($orderTransaction->tipe_pembayaran) ? $orderTransaction->tipe_pembayaran : "Belum Memilih";
                            $TanggalBayar = isset($orderTransaction->tanggal_transaksi) ? $orderTransaction->tanggal_transaksi : "Tidak ada";
                            $status = isset($orderTransaction->status_transaksi) ? $orderTransaction->status_transaksi : "Tidak ada";
                            $nomor = 8;
                            @endphp

                            <div class="frame-40689-UTi0sp frame-40689" data-id="1426:7509">
                              <div
                                class="x8-lLTQZl valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7510"
                              >
                              {{ $nomor++ }}
                              </div>
                            </div>
                            <div class="frame-40690-UTi0sp frame-40690" data-id="1426:7511">
                              <div
                                class="x123123123124 valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7512"
                              >
                              AP{{ str_pad($orderTransaction->id, 7, '0', STR_PAD_LEFT) }}
                              </div>
                            </div>
                            <div class="frame-40694-UTi0sp frame-40694" data-id="1426:7513">
                              <div
                                class="debit-sxZjty valign-text-middle debit montserrat-normal-eerie-black-14px"
                                data-id="1426:7514"
                              >
                            {{ $TipePembayaran }}
                              </div>
                            </div>
                            <div class="frame-40691-UTi0sp frame-40691" data-id="1426:7515">
                              <div
                                class="rp-4000000-uLc1T1 valign-text-middle montserrat-normal-eerie-black-14px"
                                data-id="1426:7516"
                              >
                              Rp {{ number_format($orderTransaction->total_harga, 0, ',', '.') }}
                              </div>
                            </div>
                            <div class="frame-40692-UTi0sp frame-40692" data-id="1426:7517">
                              <div
                                class="x2023-02-15-OG21EC valign-text-middle x2023-02-15 montserrat-normal-eerie-black-14px"
                                data-id="1426:7518"
                              >
                                {{ $TanggalBayar }}
                              </div>
                            </div>
                            <div class="frame-40695-UTi0sp frame-40695" data-id="1426:7519">
                              <div
                                class="status-5vv5bv valign-text-middle status montserrat-normal-eerie-black-14px"
                                data-id="1426:7605"
                              >
                                {{ $status }}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
</div>


                      <!-- pagination -->

                      <div class="paginasi-iNDiJy" data-id="1426:7547">
                        <div
                          class="outline-button-4SO4JS outline-button"
                          data-id="I1426:7547;2656:5766"
                        >
                          <img
                            class="chevron-right-1"
                            data-id="I1426:7547;2656:5769"
                            src="{{ asset('images/panahkiri.png') }}"
                            alt="chevron-right 1"
                          />
                        </div>
                        <div class="outline-button-r6fdjc outline-button" data-id="I1426:7547;2656:5774">
                          <div class="outline-button-siAxuU valign-text-middle outline-button montserrat-medium-pale-sky-16px">
                            1
                          </div>
                        </div>
                        <div
                          class="outline-button-r6fdjc outline-button"
                          data-id="I1426:7547;2656:5775"
                        >
                          <div
                            class="outline-button-siAxuU valign-text-middle outline-button montserrat-medium-pale-sky-16px"
                            data-id="I1426:7547;2656:5775;1:223"
                          >
                            2
                          </div>
                        </div>
                        <div
                          class="outline-button-fkoKwI outline-button"
                          data-id="I1426:7547;2656:5776"
                        >
                          <div
                            class="outline-button-NevxUJ valign-text-middle outline-button montserrat-medium-pale-sky-16px"
                            data-id="I1426:7547;2656:5776;1:223"
                          >
                            3
                          </div>
                        </div>
                        <div
                          class="outline-button-a4HSDT outline-button"
                          data-id="I1426:7547;2656:5777"
                        >
                          <div
                            class="outline-button-3HhKKI valign-text-middle outline-button montserrat-medium-pale-sky-16px"
                            data-id="I1426:7547;2656:5777;1:223"
                          >
                            4
                          </div>
                        </div>
                        <div
                          class="outline-button-XFsV1E outline-button"
                          data-id="I1426:7547;2656:5778"
                        >
                          <div
                            class="outline-button-Qzxeyo valign-text-middle outline-button montserrat-medium-pale-sky-16px"
                            data-id="I1426:7547;2656:5778;1:223"
                          >
                            5
                          </div>
                        </div>
                        <div
                          class="outline-button-TowFrD outline-button"
                          data-id="I1426:7547;2656:5779"
                        >
                          <img
                            class="chevron-right-1"
                            data-id="I1426:7547;2656:5782"
                            src="{{ asset('images/panahkanan.png') }}"
                            alt="chevron-right 1"
                          />
                        </div>
                      </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabel.css') }}">
@endpush

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
  // Ambil elemen-elemen yang diperlukan
  const profilSayaNavItem = document.querySelector(".nav-link#profil-saya-nav");
  const keamananAkunNavItem = document.querySelector(".nav-link#keamanan-akun-nav");
  const historiNavItem = document.querySelector(".nav-link#histori-nav");
  const profilSayaSection = document.querySelector("#profile-section");
  const keamananAkunSection = document.querySelector("#security-section");
  const historiSection = document.querySelector("#histori-section");
  const headerImg = document.querySelector("#header-img");
  const profileImg = document.querySelector("#profile-img");

  // Tampilkan halaman "Profil Saya" secara default
  profilSayaNavItem.classList.add("active");
  keamananAkunSection.style.display = "none";
  historiSection.style.display = "none";
  headerImg.style.display = "block";
  profileImg.style.display = "block";

  // Tambahkan event listener untuk klik pada navbar item
  profilSayaNavItem.addEventListener("click", function() {
    profilSayaNavItem.classList.add("active");
    keamananAkunNavItem.classList.remove("active");
    historiNavItem.classList.remove("active");
    profilSayaSection.style.display = "block";
    keamananAkunSection.style.display = "none";
    historiSection.style.display = "none";
    headerImg.style.display = "block";
    profileImg.style.display = "block";
  });

  keamananAkunNavItem.addEventListener("click", function() {
    keamananAkunNavItem.classList.add("active");
    profilSayaNavItem.classList.remove("active");
    historiNavItem.classList.remove("active");
    profilSayaSection.style.display = "none";
    keamananAkunSection.style.display = "block";
    historiSection.style.display = "none";
    headerImg.style.display = "block";
    profileImg.style.display = "block";
  });

  historiNavItem.addEventListener("click", function() {
    historiNavItem.classList.add("active");
    profilSayaNavItem.classList.remove("active");
    keamananAkunNavItem.classList.remove("active");
    profilSayaSection.style.display = "none";
    keamananAkunSection.style.display = "none";
    historiSection.style.display = "block";
    headerImg.style.display = "none";
    profileImg.style.display = "none";
  });
});

function showSecurity() {
  const profilSayaNavItem = document.querySelector(".nav-link#profil-saya-nav");
  const keamananAkunNavItem = document.querySelector(".nav-link#keamanan-akun-nav");
  const historiNavItem = document.querySelector(".nav-link#histori-nav");
  const profilSayaSection = document.querySelector("#profile-section");
  const keamananAkunSection = document.querySelector("#security-section");
  const historiSection = document.querySelector("#histori-section");
  const headerImg = document.querySelector("#header-img");
  const profileImg = document.querySelector("#profile-img");

  profilSayaNavItem.classList.remove("active");
  keamananAkunNavItem.classList.add("active");
  historiNavItem.classList.remove("active");
  profilSayaSection.style.display = "none";
  keamananAkunSection.style.display = "block";
  historiSection.style.display = "none";
  headerImg.style.display = "block";
  profileImg.style.display = "block";
}

function showHistori() {
  const profilSayaNavItem = document.querySelector(".nav-link#profil-saya-nav");
  const keamananAkunNavItem = document.querySelector(".nav-link#keamanan-akun-nav");
  const historiNavItem = document.querySelector(".nav-link#histori-nav");
  const profilSayaSection = document.querySelector("#profile-section");
  const keamananAkunSection = document.querySelector("#security-section");
  const historiSection = document.querySelector("#histori-section");
  const headerImg = document.querySelector("#header-img");
  const profileImg = document.querySelector("#profile-img");

  profilSayaNavItem.classList.remove("active");
  keamananAkunNavItem.classList.remove("active");
  historiNavItem.classList.add("active");
  profilSayaSection.style.display = "none";
  keamananAkunSection.style.display = "none";
  historiSection.style.display = "block";
  headerImg.style.display = "none";
  profileImg.style.display = "none";
}


    </script>


@endpush
