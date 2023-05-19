    // Menangkap tombol "Batalkan kontrak" dan popup
    var batalkanKontrakBtn = document.getElementById('batalkanKontrakBtn');
    var popup = document.getElementById('popup');
    var cancelBtn = document.getElementById('cancelBtn');

    // Menambahkan event listener untuk menampilkan dan menyembunyikan popup saat tombol diklik
    batalkanKontrakBtn.addEventListener('click', function() {
        popup.classList.add('active');
    });

    confirmBtn.addEventListener('click', function() {
        if (confirmation) {
            // Logika untuk membatalkan kontrak
        }
    });

    confirmBtn.addEventListener('click', function() {
        popup.classList.remove('active');
    });
