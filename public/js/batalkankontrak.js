// Mendapatkan tombol batalkanKontrakBtn
var batalkanKontrakBtn = document.getElementById('batalkanKontrakBtn');

// Mendapatkan elemen overlay
var overlay = document.getElementById('overlay');

// Mendapatkan elemen popup
var popup = document.getElementById('popup');

// Mendapatkan elemen popup success
var successPopup = document.getElementById('successPopup');

// Menambahkan event listener untuk klik pada tombol batalkanKontrakBtn
batalkanKontrakBtn.addEventListener('click', function() {
    // Menampilkan overlay dan popup
    overlay.style.display = 'block';
    popup.style.display = 'block';
});

// Menambahkan event listener untuk klik pada tombol cancelBtn di dalam popup
cancelBtn.addEventListener('click', function() {
    // Mendapatkan pekerja id dari atribut data-pekerja-id
    var pekerjaId = batalkanKontrakBtn.getAttribute('data-pekerja-id');

    // Mengirim permintaan HTTP POST ke endpoint yang mengubah user_id menjadi 0
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/update-pekerja', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Sukses mengubah user_id menjadi 0
                console.log('Kontrak dibatalkan.');
                // Menampilkan popup success
                successPopup.style.display = 'block';
                // Menutup overlay dan popup
                overlay.style.display = 'none';
                popup.style.display = 'none';
            } else {
                // Gagal mengubah user_id menjadi 0
                console.log('Gagal membatalkan kontrak.');
                // Menampilkan popup success
                successPopup.style.display = 'block';
                // Mengatur teks popup success menjadi pesan kesalahan
                var successText = document.getElementById('successText');
                successText.textContent = 'Gagal membatalkan kontrak.';
                // Menghapus class successPopup dan menambahkan class errorPopup
                successPopup.classList.remove('successPopup');
                successPopup.classList.add('errorPopup');
                // Menutup overlay dan popup
                overlay.style.display = 'none';
                popup.style.display = 'none';
            }
        }
    };

    // Mengirim data pekerja id sebagai payload
    var params = 'pekerjaId=' + encodeURIComponent(pekerjaId);
    xhr.send(params);
});

// Menambahkan event listener untuk klik pada tombol confirmBtn di dalam popup
confirmBtn.addEventListener('click', function() {
    // Menutup overlay dan popup tanpa melakukan apa pun
    overlay.style.display = 'none';
    popup.style.display = 'none';
});

// Menambahkan event listener untuk klik pada tombol OKBtn di dalam popup success
OKBtn.addEventListener('click', function(event) {
    event.preventDefault(); // Menghentikan tindakan default dari tombol OKBtn
    // Mengarahkan halaman ke localhost:8000/daftarpekerja setelah menekan tombol OKBtn
    window.location.href = 'http://localhost:8000/daftarpekerja';
});
