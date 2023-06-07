document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.getElementById('dompetDropdown');
    var dropdownItems = dropdown.getElementsByClassName('dropdown-item');
    var dompetText = document.querySelector('.dompet-text');
    var arrowIcon = document.querySelector('.arrow');
    var dompetOption = document.querySelector('.dompetoption');
    var dompetProfile = document.querySelector('.dompetprofile');
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
    dompetProfile.style.display = 'none';
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

    // Mengatur ulang pilihan dropdown saat halaman direfresh atau direload
    dompetText.innerHTML = 'PILIH DOMPET ANDA';
    dompetProfile.style.display = 'none';
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

    // Mengatur event listener untuk tombol "PILIH DOMPET ANDA"
    dompetOption.addEventListener('click', function(event) {
      dropdown.classList.toggle('show');
      arrowIcon.classList.toggle('rotate');
      event.stopPropagation();

      // Sembunyikan atau tampilkan dompet profile berdasarkan pilihan dropdown saat ini
      var selectedDompet = dompetText.innerHTML;
      if (selectedDompet === 'PILIH DOMPET ANDA') {
        dompetProfile.style.display = 'none';
        lanjutkanPembayaranButton.style.top = '300px';
      } else {
        dompetProfile.style.display = 'flex';
        lanjutkanPembayaranButton.style.top = '1430px';
      }
    });

    // Mengatur event listener untuk setiap dropdown item
    Array.from(dropdownItems).forEach(function(item) {
      item.addEventListener('click', function(event) {
        var radio = this.querySelector('input[type="radio"]');
        var selectedDompet = radio.value;

        // Memeriksa apakah dropdown item sebelumnya sudah dipilih
        if (radio.checked) {
          // Jika sudah dipilih, batalkan pilihan
          radio.checked = false;
          selectedDompet = "PILIH DOMPET ANDA";
        } else {
          // Jika belum dipilih, simpan pilihan di local storage
          localStorage.setItem('selectedDompet', selectedDompet);
        }

        // Perbarui teks pada span dompetText
        dompetText.innerHTML = selectedDompet;

        // Sembunyikan atau tampilkan komponen berdasarkan pilihan dropdown
        if (selectedDompet === "PILIH DOMPET ANDA") {
          dompetProfile.style.display = 'none';
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
        } else {
          dompetProfile.style.display = 'block';
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
          lanjutkanPembayaranButton.style.top = '1430px';
        }

        // Sembunyikan dropdown setelah memilih
        dropdown.classList.remove('show');
        arrowIcon.classList.remove('rotate');

        event.stopPropagation();
      });
    });

    const dropdownItems2 = document.querySelectorAll('.dropdown-item');
    const dompetText2 = document.querySelector('.dompet-text');
    const dompetProfile2 = document.querySelector('.dompetprofile');
    const paymentNumber = document.querySelector('.payment-number');
    const paymentOwner = document.querySelector('.payment-owner');
    const instruksiPembayaran = document.querySelector('.deskripsi-pembayaran');

    dropdownItems2.forEach(function(item) {
      item.addEventListener('click', function() {
        const selectedDompetId = this.querySelector('input[type="radio"]').id;
        const selectedDompetData = JSON.parse(document.getElementById('dompet-' + selectedDompetId).value);
        const selectedDompetText = this.querySelector('input[type="radio"]').getAttribute('value');

        dompetText2.textContent = 'DOMPET ' + selectedDompetText;
        paymentNumber.textContent = selectedDompetData.nomor_pembayaran;
        paymentOwner.textContent = 'A/N: ' + selectedDompetData.nama_pemilik;
        instruksiPembayaran.innerHTML = selectedDompetData.instruksi_pembayaran;
      });
    });

    // Menambahkan event listener untuk reset dropdown item saat diklik dua kali
    dropdownItems2.forEach(function(item) {
      item.addEventListener('click', function() {
        if (this.classList.contains('selected')) {
          // Jika item dropdown sudah dipilih sebelumnya, reset ke "PILIH BANK ANDA"
          dompetText2.textContent = 'PILIH DOMPET ANDA';
          dompetProfile2.style.display = 'none';
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
        } else {
          // Jika item dropdown belum dipilih sebelumnya, tandai sebagai dipilih
          Array.from(dropdownItems2).forEach(function(item) {
            item.classList.remove('selected');
          });
          this.classList.add('selected');
        }
      });
    });
  });


  function startCountdown() {
    var hourElement = document.querySelector('.timer-hour');
    var minuteElement = document.querySelector('.timer-minute');
    var secondElement = document.querySelector('.timer-second');

    var hour = parseInt(hourElement.textContent);
    var minute = parseInt(minuteElement.textContent);
    var second = parseInt(secondElement.textContent);

    var timer = setInterval(function() {
      if (hour === 0 && minute === 0 && second === 0) {
        clearInterval(timer);
        // Lakukan tindakan setelah waktu berakhir
        console.log('Waktu telah berakhir');
      } else {
        if (second === 0) {
          if (minute === 0) {
            hour--;
            minute = 58;
          } else {
            minute--;
          }
          second = 59;
        } else {
          second--;
        }

        hourElement.textContent = hour < 10 ? '0' + hour : hour;
        minuteElement.textContent = minute < 10 ? '0' + minute : minute;
        secondElement.textContent = second < 10 ? '0' + second : second;
      }
    }, 1000);
  }

  // Panggil fungsi startCountdown untuk memulai countdown
  startCountdown();

  // Menambahkan event listener pada setiap dropdown item
  dropdownItems2.forEach(function(item) {
    item.addEventListener('click', function() {
      // ...
      // Logika lain yang Anda tambahkan untuk mengupdate informasi pembayaran

      // Memeriksa apakah countdown sudah dimulai sebelumnya
      if (!countdownStarted) {
        // Panggil fungsi startCountdown untuk memulai countdown
        startCountdown();
        countdownStarted = true;
      }
    });
  });
