@extends('template5')

@section('title', 'Topup Saldo')

@section('navbar')
@endsection

@section('konten')
<div class="topup">
    <a href="javascript:void(0);" onclick="window.history.back();">
        <img src="{{ asset('images/arrow.png') }}" class="arrow-img" alt="Arrow">
    </a>
    <div class="topup-title">Topup Saldo</div>

    <div class="paymentmethod">
        <div class="transferbank" onclick="toggleDropdown('Bank')">
            <img src="{{ asset('images/transfer.png') }}" alt="Transfer Bank">
            <p>Transfer Bank</p>
        </div>
        <div class="e-wallet" onclick="toggleDropdown('Ewallet')">
            <img src="{{ asset('images/wallet.png') }}" alt="Dompet Digital">
            <p>Dompet Digital</p>
        </div>
        <div class="othermethode" onclick="toggleDropdown('Other')">
            <img src="{{ asset('images/othermethode.png') }}" alt="Metode Lain">
            <p>Metode Lain</p>
        </div>
    </div>
    <div class="shadow1"></div>
    <div class="shadow2"></div>
    <div class="shadow3"></div>

    <div class="pilih-topup">
        <p class="pilih-bank">Pilih Bank Kamu</p>

        <div class="bankoption">
            <p class="placeholder">Klik tombol di atas untuk pilih kanal pembayaran</p>
            <div class="dropdown-menu">
                <!-- Item dropdown akan diisi oleh script -->
            </div>
        </div>

        <div class="nominalinput">
            <input type="text" placeholder="Klik disini untuk memasukkan nominal isi ulang" onblur="formatCurrency(this)">
        </div>

        <p class="pilih-nominal">Masukkan Nominal Kamu</p>
        <div class="shortcutnominal">
            <div class="nominal1">
                <p>Rp 50.000</p>
            </div>
            <div class="nominal2">
                <p>Rp 100.0000</p>
            </div>
            <div class="nominal3">
                <p>Rp 200.000</p>
            </div>
            <div class="nominal4">
                <p>Rp 350.000</p>
            </div>
            <div class="nominal5">
                <p>Rp 500.000</p>
            </div>
            <div class="nominal6">
                <p>Rp 1.000.000</p>
            </div>
        </div>
    </div>
    <div class="shadow4"></div>

    <div class="informasi-pembayaran">
        <p class="info-bayar">Informasi Pembayaran</p>

        <div class="logo-bayar">
            <img src="{{ asset('images/ilust.png') }}" alt="Logo Bayar">
        </div>

        <p class="no-bayar">Nomor Pembayaran</p>

        <div class="nomor-bayar">
            <p class="no-bayar-text" id="nomorRekening">Pilih metode</p>
            <button class="salin-button" onclick="salinNomorRekening()">Salin</button>
        </div>

        <p class="transfernow">Nominal Pembayaran</p>

        <div class="nominal-bayar">
            <p class="no-bayar-text" id="nominalPembayaran">Masukkan Nominal</p>
            <button class="salin-button" onclick="salinNominalPembayaran()">Salin</button>
        </div>

        <form id="topupForm" action="{{ route('topup.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="kanal_pembayaran" id="kanalPembayaran">
            <input type="hidden" name="total_saldo" id="totalSaldo">
            <input type="hidden" name="status" value="sukses">
            <input type="hidden" name="tanggal_transaksi" value="{{ date('Y-m-d') }}">
            <input type="hidden" name="created_at" value="{{ now() }}">
            <input type="hidden" name="updated_at" value="{{ now() }}">
            <button class="konfirmasi-button" type="submit">Konfirmasi Pembayaran</button>
        </form>
        <button class="batalkan-button" onclick="BatalkanTransaksi()">Batalkan Transaksi</button>
    </div>

</div>

@endsection

@section('footer')

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/topup.css') }}">
@endpush

@push('scripts')
<script>
function formatCurrency(input) {
  let value = input.value;
  value = value.replace(/\D/g, '');
  if (value.length > 0) {
    let amount = parseInt(value);
    let formattedAmount = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
    input.value = formattedAmount;

    // Mengubah nilai nominal pembayaran
    const nominalPembayaran = document.getElementById('nominalPembayaran');
    nominalPembayaran.textContent = formattedAmount;
  }
}

const transferBank = document.querySelector('.transferbank');
const eWallet = document.querySelector('.e-wallet');
const otherMethod = document.querySelector('.othermethode');
const bankOption = document.querySelector('.bankoption');
const dropdownMenu = document.querySelector('.dropdown-menu');
const placeholder = document.querySelector('.placeholder');
const nomorRekening = document.getElementById('nomorRekening');
const nominalPembayaran = document.getElementById('nominalPembayaran');
const kanalPembayaranInput = document.getElementById('kanalPembayaran');
const totalSaldoInput = document.getElementById('totalSaldo');
const topupForm = document.getElementById('topupForm');
const infoPaymentsData = <?php echo json_encode($infoPaymentsData); ?>;

function fillDropdownMenu(data) {
  dropdownMenu.innerHTML = '';

  data.forEach(item => {
    const menuItem = document.createElement('div');
    menuItem.classList.add('dropdown-item');
    menuItem.textContent = item.tipe_pembayaran;
    menuItem.addEventListener('click', function () {
      placeholder.textContent = item.tipe_pembayaran;
      nomorRekening.textContent = item.nomor_pembayaran;
      kanalPembayaranInput.value = item.tipe_pembayaran;
    });
    dropdownMenu.appendChild(menuItem);
  });
}

function toggleDropdown() {
  dropdownMenu.classList.toggle('show');
}

transferBank.addEventListener('click', function (event) {
  const bankData = infoPaymentsData.filter(item => item.kanal_pembayaran === 'Bank');
  fillDropdownMenu(bankData);
  placeholder.textContent = 'Klik disini untuk memilih metode pembayaran';
  event.stopPropagation();
});

eWallet.addEventListener('click', function (event) {
  const ewalletData = infoPaymentsData.filter(item => item.kanal_pembayaran === 'Ewallet');
  fillDropdownMenu(ewalletData);
  placeholder.textContent = 'Klik disini untuk memilih metode pembayaran';
  event.stopPropagation();
});

otherMethod.addEventListener('click', function (event) {
  const otherData = infoPaymentsData.filter(item => item.kanal_pembayaran === 'Other');
  fillDropdownMenu(otherData);
  placeholder.textContent = 'Klik disini untuk memilih metode pembayaran';
  event.stopPropagation();
});

document.addEventListener('click', function (event) {
  if (!event.target.closest('.bankoption')) {
    dropdownMenu.classList.remove('show');
  }
});

const nominal1 = document.querySelector('.nominal1');
const nominal2 = document.querySelector('.nominal2');
const nominal3 = document.querySelector('.nominal3');
const nominal4 = document.querySelector('.nominal4');
const nominal5 = document.querySelector('.nominal5');
const nominal6 = document.querySelector('.nominal6');
const nominalInput = document.querySelector('.nominalinput input');

nominal1.addEventListener('click', function () {
  nominalInput.value = 'Rp 50.000';
  formatCurrency(nominalInput);
});

nominal2.addEventListener('click', function () {
  nominalInput.value = 'Rp 100.000';
  formatCurrency(nominalInput);
});

nominal3.addEventListener('click', function () {
  nominalInput.value = 'Rp 200.000';
  formatCurrency(nominalInput);
});

nominal4.addEventListener('click', function () {
  nominalInput.value = 'Rp 350.000';
  formatCurrency(nominalInput);
});

nominal5.addEventListener('click', function () {
  nominalInput.value = 'Rp 500.000';
  formatCurrency(nominalInput);
});

nominal6.addEventListener('click', function () {
  nominalInput.value = 'Rp 1.000.000';
  formatCurrency(nominalInput);
});

// Event listener untuk setiap item dropdown
dropdownMenu.addEventListener('click', function (event) {
  const target = event.target;
  if (target.classList.contains('dropdown-item')) {
    // Mengubah nilai nominal pembayaran
    const nominalPembayaran = document.getElementById('nominalPembayaran');
    nominalPembayaran.textContent = nominalInput.value;
  }
});

function salinNomorRekening() {
  navigator.clipboard.writeText(nomorRekening.textContent);
}

function salinNominalPembayaran() {
  navigator.clipboard.writeText(nominalPembayaran.textContent);
}

function BatalkanTransaksi() {
  // Implementasikan logika untuk membatalkan transaksi di sini
}

topupForm.addEventListener('submit', function (event) {
  event.preventDefault();

  const totalSaldoValue = nominalInput.value.replace(/\D/g, '');
  totalSaldoInput.value = totalSaldoValue;

  // Mengirim permintaan AJAX menggunakan Fetch
  fetch('{{ route('topup.submit') }}', {
    method: 'POST',
    body: new FormData(topupForm),
    headers: {
      'X-CSRF-Token': '{{ csrf_token() }}'
    }
  })
  .then(response => response.json())
    .then(data => {
      // Tanggapan sukses dari server
      if (data.status === 'success') {
        alert('Isi Ulang Saldo APERGA Anda Telah Berhasil'); // Menampilkan pesan sukses sebagai popup
        // Lakukan tindakan setelah transaksi berhasil dilakukan
      } else {
        alert(data.message); // Menampilkan pesan error sebagai popup
        // Lakukan tindakan jika terjadi kesalahan saat melakukan transaksi
      }
    })
    .catch(error => {
      alert('Terjadi kesalahan saat melakukan transaksi.'); // Menampilkan pesan kesalahan jaringan atau tanggapan error dari server sebagai popup
      // Lakukan tindakan jika terjadi kesalahan saat melakukan transaksi
    });
});


function setTotalSaldo() {
  var nominalPembayaran = document.getElementById("nominalPembayaran").innerText;
  var totalSaldoInput = document.getElementById("totalSaldo");
  totalSaldoInput.value = nominalPembayaran;
}

function setKanalPembayaran() {
  var kanalPembayaran = document.querySelector(".placeholder").innerText;
  var kanalPembayaranInput = document.getElementById("kanalPembayaran");
  kanalPembayaranInput.value = kanalPembayaran;
}

// Panggil fungsi setTotalSaldo saat halaman dimuat
window.onload = function () {
  setTotalSaldo();
  setKanalPembayaran();
};

</script>
@endpush
