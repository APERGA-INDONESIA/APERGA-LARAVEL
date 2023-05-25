document.addEventListener('DOMContentLoaded', function() {
    var batalkanKontrakBtn = document.getElementById('batalkanKontrakBtn');
    var popup = document.getElementById('popup');
    var cancelBtn = document.getElementById('cancelBtn');

    batalkanKontrakBtn.addEventListener('click', function() {
        popup.classList.add('active');
    });

    cancelBtn.addEventListener('click', function() {
        popup.classList.remove('active');
    });

    var confirmBtn = document.getElementById('confirmBtn');
    confirmBtn.addEventListener('click', function() {
        var pekerjaId = confirmBtn.dataset.pekerjaId;

        // Mengirim permintaan AJAX ke backend untuk membatalkan kontrak
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/kontrak/batalkan/' + pekerjaId);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Kontrak berhasil dibatalkan, lakukan tindakan setelah pembatalan
                    window.location.reload();
                } else {
                    // Gagal membatalkan kontrak, lakukan tindakan yang sesuai
                    popup.classList.remove('active');
                }
            }
        };

        xhr.send();
    });
});
