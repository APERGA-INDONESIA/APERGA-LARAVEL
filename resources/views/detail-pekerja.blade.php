@extends('template6')

@section('title', 'Detail Pekerja')

@section('navbar')

@endsection

@section('konten')

<div class="kotak-hitam">
    <div class="detail-pekerja">
        Detail Pekerja
    </div>
</div>

<div class="info-pekerja">
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
        <div class="nama-pekerja">
            {{ $prt->nama ?? 'Nama tidak tersedia' }}
        </div>
        <div class="rating">
            <?php
            $rating = $prt->rating ?? 0;
            $roundedRating = floor($rating); // Rating yang telah dibulatkan ke bawah
            $ratingStars = min(5, max(0, $roundedRating));
            $hasHalfStar = $rating > $roundedRating;
            ?>

            @for ($i = 0; $i < $ratingStars; $i++)
                <img src="{{ asset('images/star.png') }}" alt="Star" class="star-img">
            @endfor



            <span class="rating-text">{{ $rating}}/5</span>
        </div>


        <div class="infopekerja">
            <p class="lokasi"><strong>Lokasi Pekerja:</strong> {{ $prt->lokasi ?? 'Lokasi tidak tersedia' }}</p>
            <p class="gaji"><strong>Besaran Gaji:</strong> {{ $prt->gaji ? 'Rp ' . number_format($prt->gaji, 2, ',', '.') : 'Gaji tidak tersedia' }}</p>
            <p class="umur"><strong>Umur Pekerja:</strong> {{ $prt->umur ? $prt->umur . ' Tahun' : 'Umur tidak tersedia' }}</p>
        </div>

        <div class="deskripsi-pekerja">
            <p class="deskripsi-text"><strong>Deskripsi:</strong></p>
            <p class="isi-deskripsi">{{ $prt->deskripsi ?? 'Deskripsi tidak tersedia' }}</p>
        </div>

        <div class="button-group">
            <button class="WABtn" onclick="openPopup()">
                <span>Whatsapp</span>
            </button>
            <button class="order" onClick="window.location.href = '{{ route('mulaikontrak', ['id' => $prt->id]) }}';">
                <span>Pesan Sekarang</span>
            </button>

        </div>

    </div>
    <div id="overlay" class="overlay" onclick="closePopup()"></div>
    <div class="wa-admin-1 popup">
        <div class="header-wa">
            <img src="{{ asset('images/wamin.png') }}">
            <p class="header-wa-title">Chat Admin Support</p>
            <p class="header-wa-text">Menjawab semua keluhan anda</p>
        </div>
        <p class="admin-support-text">Pilih admin support</p>
        <div class="admin-1">
            <img src="{{ asset('images/admin1.png')}}">
            <p class="nama-admin">Luthfi Hakim</p>
            <p class="title-admin">Support Admin #1</p>
            <div id="admin1" class="kirim-pesan" onclick="showPopup('wa-admin-2')">
                <span>Kirim Pesan</span>
            </div>
        </div>

        <div class="admin-2">
            <img src="{{ asset('images/admin2.png')}}">
            <p class="nama-admin">Ananda Surya</p>
            <p class="title-admin">Support Admin #2</p>
            <div id="admin2" class="kirim-pesan" onclick="showPopup('wa-admin-2')">
                <span>Kirim Pesan</span>
            </div>
        </div>
        <div class="button">
            <span>Batalkan</span>
        </div>
    </div>

    <div class="wa-admin-2 popup">
        <div class="header-wa">
            <img src="{{ asset('images/wamin.png') }}">
            <p class="header-wa-title">Chat Admin Support</p>
            <p class="header-wa-text">Menjawab semua keluhan anda</p>
        </div>
        <div class="adminselect">
            <img src="{{ asset('images/admin.jpg')}}" id="adminSelectImage">
            <p class="namaadmin" id="adminSelectNama">Luthfi Hakim</p>
            <p class="titleadmin" id="adminSelectTitle">Support Admin #1</p>
            <div class="ganti" onclick="openPopup()">
              <span>Ganti Admin</span>
            </div>
          </div>

          <?php
          // Check if the user is authenticated
          if (auth()->check()) {
            $user = auth()->user();
            $userName = $user->name;
          } else {
            $userName = ""; // Set a default value if the user is not authenticated
          }
        ?>
        <p class="namasection">Nama Lengkap</p>
        <input type="text" class="inputnama" id="inputNama" placeholder="Masukkan nama lengkap anda" onclick="fillInputValue2()">

        <p class="prtsection">PRT yang ingin dikontrak</p>
        <input type="text" class="inputprt" placeholder="Masukkan nama lengkap prt anda" onclick="fillInputValue()">

        <p class="pesansection">Pesan anda</p>
        <div class="textarea-container">
            <textarea placeholder="Masukkan teks di sini"></textarea>
          </div>

          <div class="sendbutton" onclick="generateWhatsAppLink()">
            <span>Kirim Pesan</span>
          </div>

    </div>

</div>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/detail-pekerja.css') }}">
@endpush

@push('scripts')
<script>
    function hideAllElements() {
  var overlay = document.getElementById('overlay');
  var popup1 = document.querySelector('.wa-admin-1');
  var popup2 = document.querySelector('.wa-admin-2');

  overlay.style.display = 'none';
  popup1.style.display = 'none';
  popup2.style.display = 'none';
}

var cancelButton = document.querySelector('.button');
cancelButton.addEventListener('click', hideAllElements);

</script>

<script>
    window.onload = function() {
      // Mengatur nilai input menjadi kosong saat halaman dimuat ulang
      document.querySelector('.inputnama').value = "";
      document.querySelector('.inputprt').value = "";
      document.querySelector('.textarea-container textarea').value = "";
    }
    </script>


<script>
var overlay = document.getElementById('overlay');
var popup1 = document.querySelector('.wa-admin-1');
var popup2 = document.querySelector('.wa-admin-2');

function openPopup() {
  overlay.style.display = 'block';
  popup1.style.display = 'block';
  popup2.style.display = 'none'; // Menyembunyikan popup2 jika dibuka melalui tombol "Ganti Admin"
}

function closePopup() {
  overlay.style.display = 'none';
  popup1.style.display = 'none';
  popup2.style.display = 'none';
}

function showPopup(popupId) {
  if (popupId === 'wa-admin-2') {
    popup1.style.display = 'none';
    popup2.style.display = 'block';
  }
}

var gantiAdmin = document.querySelector('.ganti');
gantiAdmin.addEventListener('click', openPopup);

overlay.addEventListener('click', function(event) {
  if (event.target === overlay) {
    closePopup();
  }
});


</script>

<script>
var admin1 = document.getElementById('admin1');
var admin2 = document.getElementById('admin2');
var adminSelectImage = document.getElementById('adminSelectImage');
var adminSelectNama = document.getElementById('adminSelectNama');
var adminSelectTitle = document.getElementById('adminSelectTitle');

admin1.addEventListener('click', function() {
  var admin1Image = document.querySelector('.admin-1 img');
  var admin1Nama = document.querySelector('.admin-1 .nama-admin');
  var admin1Title = document.querySelector('.admin-1 .title-admin');

  adminSelectImage.src = admin1Image.src;
  adminSelectNama.textContent = admin1Nama.textContent;
  adminSelectTitle.textContent = admin1Title.textContent;
});

admin2.addEventListener('click', function() {
  var admin2Image = document.querySelector('.admin-2 img');
  var admin2Nama = document.querySelector('.admin-2 .nama-admin');
  var admin2Title = document.querySelector('.admin-2 .title-admin');

  adminSelectImage.src = admin2Image.src;
  adminSelectNama.textContent = admin2Nama.textContent;
  adminSelectTitle.textContent = admin2Title.textContent;
});


</script>

<script>
function fillInputValue() {
  // Extract the id from the current URL
  var currentURL = window.location.href;
  var id = currentURL.substring(currentURL.lastIndexOf('/') + 1);

  // Set the input field value
  var inputValue = "{{ $prt->nama ?? 'Nama tidak tersedia' }} (PRT-" + id + ")";
  document.querySelector('.inputprt').value = inputValue;
}

function fillInputValue2() {
    var namaPengguna = "<?php echo $userName; ?>";
    document.querySelector('.inputnama').value = namaPengguna;
}


  </script>

<script>
    function generateWhatsAppLink() {
      // Mendapatkan nilai input dari Nama Lengkap
      var namaLengkap = document.querySelector('.inputnama').value;

      // Mendapatkan nilai input dari PRT yang ingin dikontrak
      var prt = document.querySelector('.inputprt').value;

      // Mendapatkan nilai input dari Pesan yang ingin disampaikan
      var pesan = document.querySelector('.textarea-container textarea').value;

      // Format pesan sesuai dengan struktur yang diinginkan
      var message = "*Form Chat APERGA*\n\n" +
                  "*Nama Lengkap:*\n" + decodeURIComponent(namaLengkap) + "\n\n" +
                  "*PRT yang ingin dikontrak:*\n" + decodeURIComponent(prt) + "\n\n" +
                  "*Pesan yang ingin disampaikan:*\n" + decodeURIComponent(pesan);

      // Mendapatkan nomor telepon berdasarkan nilai pada tag <p class="namaadmin">
      var phoneNumber;
      var adminName = document.getElementById('adminSelectNama').textContent;
      if (adminName === "Luthfi Hakim") {
        phoneNumber = "6283192925747";
      } else if (adminName === "Ananda Surya") {
        phoneNumber = "62891222222";
      } else {
        phoneNumber = ""; // Set nomor telepon default jika tidak ada admin yang sesuai
      }

      // Membuat link WhatsApp dengan format yang diinginkan
      var link = "https://api.whatsapp.com/send/?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

      // Mengarahkan ke link WhatsApp
      window.open(link);
    }
    </script>


@endpush
