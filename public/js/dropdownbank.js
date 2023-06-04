document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.getElementById('bankDropdown');
    var dropdownItems = dropdown.getElementsByClassName('dropdown-item');
    var bankText = document.querySelector('.bank-text');
    var arrowIcon = document.querySelector('.arrow');
    var bankOption = document.querySelector('.bankoption');
    var bankProfile = document.querySelector('.bankprofile');
    var totalPembayaran = document.querySelector('.total-pembayaran');
    var timerText = document.querySelector('.timer-text');
    var instruksi = document.querySelector('.instruksi');
    var timerSplit = document.querySelector('.timersplit');
    var timerSplitAlt = document.querySelector('.timer-split');
    var timerHour = document.querySelector('.timer-hour');
    var timerMinute = document.querySelector('.timer-minute');
    var timerSecond = document.querySelector('.timer-second');
    var timerDesc = document.querySelector('.timer-desc');
    var timerDesc1 = document.querySelector('.timer-desc-1');
    var timerDesc2 = document.querySelector('.timer-desc-2');
    var lanjutkanPembayaranButton = document.querySelector('.button-group button.lanjutkan-pembayaran');

    // Menyembunyikan elemen-elemen sebelum tombol dropdown diklik
    bankProfile.style.display = 'none';
    totalPembayaran.style.display = 'none';
    timerText.style.display = 'none';
    instruksi.style.display = 'none';
    timerSplit.style.display = 'none';
    timerSplitAlt.style.display = 'none';
    timerHour.style.display = 'none';
    timerMinute.style.display = 'none';
    timerSecond.style.display = 'none';
    timerDesc.style.display = 'none';
    timerDesc1.style.display = 'none';
    timerDesc2.style.display = 'none';

    // Memeriksa apakah ada pilihan yang tersimpan di local storage
    var selectedBank = localStorage.getItem('selectedBank');

    // Mengatur ulang pilihan dropdown saat halaman direfresh atau direload
    if (selectedBank) {
      bankText.innerHTML = selectedBank;
      if (selectedBank === 'PILIH BANK ANDA') {
        bankProfile.style.display = 'none';
        lanjutkanPembayaranButton.style.top = '300px';
      } else {
        bankProfile.style.display = 'flex';
        lanjutkanPembayaranButton.style.top = '1480px';
      }
      totalPembayaran.style.display = 'block';
      timerText.style.display = 'block';
      instruksi.style.display = 'block';
      timerSplit.style.display = 'block';
      timerSplitAlt.style.display = 'block';
      timerHour.style.display = 'block';
      timerMinute.style.display = 'block';
      timerSecond.style.display = 'block';
      timerDesc.style.display = 'block';
      timerDesc1.style.display = 'block';
      timerDesc2.style.display = 'block';
      lanjutkanPembayaranButton.style.display = 'block';
    }

    // Mengatur event listener untuk tombol "PILIH BANK ANDA"
    bankOption.addEventListener('click', function(event) {
      dropdown.classList.toggle('show');
      arrowIcon.classList.toggle('rotate');
      event.stopPropagation();

      // Sembunyikan atau tampilkan bank profile berdasarkan pilihan dropdown saat ini
      var selectedBank = bankText.innerHTML;
      if (selectedBank === 'PILIH BANK ANDA') {
        bankProfile.style.display = 'none';
        lanjutkanPembayaranButton.style.top = '300px';
      } else {
        bankProfile.style.display = 'flex';
        lanjutkanPembayaranButton.style.top = '1480px';
      }
    });

    // Mengatur event listener untuk setiap dropdown item
    for (var i = 0; i < dropdownItems.length; i++) {
      dropdownItems[i].addEventListener('click', function(event) {
        var radio = this.querySelector('input[type="radio"]');
        var selectedBank = radio.value;

        // Memeriksa apakah dropdown item sebelumnya sudah dipilih
        if (radio.checked) {
          // Jika sudah dipilih, batalkan pilihan
          radio.checked = false;
          selectedBank = "PILIH BANK ANDA";
        } else {
          // Jika belum dipilih, simpan pilihan di local storage
          localStorage.setItem('selectedBank', selectedBank);
          bankProfile.style.display = 'block';
          totalPembayaran.style.display = 'block';
          timerText.style.display = 'block';
          instruksi.style.display = 'block';
          timerSplit.style.display = 'block';
          timerSplitAlt.style.display = 'block';
          timerHour.style.display = 'block';
          timerMinute.style.display = 'block';
          timerSecond.style.display = 'block';
          timerDesc.style.display = 'block';
          timerDesc1.style.display = 'block';
          timerDesc2.style.display = 'block';
          lanjutkanPembayaranButton.style.top = '1480px';
          lanjutkanPembayaranButton.style.display = 'block';
        }

        // Perbarui teks pada span bankText
        bankText.innerHTML = selectedBank;

        // Sembunyikan dropdown setelah memilih
        dropdown.classList.remove('show');
        arrowIcon.classList.remove('rotate');

        // Sembunyikan atau tampilkan komponen berdasarkan pilihan dropdown
        if (selectedBank === "PILIH BANK ANDA") {
          bankProfile.style.display = 'none';
          totalPembayaran.style.display = 'none';
          timerText.style.display = 'none';
          instruksi.style.display = 'none';
          timerSplit.style.display = 'none';
          timerSplitAlt.style.display = 'none';
          timerHour.style.display = 'none';
          timerMinute.style.display = 'none';
          timerSecond.style.display = 'none';
          timerDesc.style.display = 'none';
          timerDesc1.style.display = 'none';
          timerDesc2.style.display = 'none';
          lanjutkanPembayaranButton.style.top = '300px';
          lanjutkanPembayaranButton.style.display = 'block';
        }

        event.stopPropagation();
      });
    }

    // Menambahkan event listener pada tombol "Konfirmasi Pembayaran"
    var konfirmasiButton = document.querySelector('.button-group button.lanjutkan-pembayaran');
    konfirmasiButton.addEventListener('click', function() {
      // Memeriksa posisi top tombol "Lanjutkan Pembayaran"
      var topPosition = parseInt(getComputedStyle(konfirmasiButton).top);
      if (topPosition === 300) {
        alert('Belum Memilih Bank. Silahkan Pilih Dahulu');
      } else {
        // Lakukan logika atau tindakan yang sesuai saat tombol diklik setelah memilih dropdown item
        alert('Anda telah mengkonfirmasi pembayaran');
      }
    });
  });
