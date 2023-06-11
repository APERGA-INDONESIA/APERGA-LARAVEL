document.getElementById('dropdownMenuButton').addEventListener('change', function() {
    var selectedOption = this.value;
    document.getElementById('bayarForm').setAttribute('action', selectedOption);
});

document.getElementById('bayarForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var form = document.getElementById('bayarForm');
    var action = form.getAttribute('action');
    var totalHargaInput = document.querySelector('input[name="total_harga"]');
    var totalHargaValue = totalHargaInput.value;
    var statusTransaksiInput = document.querySelector('input[name="status_transaksi"]');
    var statusTransaksiValue = statusTransaksiInput.value;
    window.location.href = action + '?total_harga=' + totalHargaValue + '&status_transaksi=' + statusTransaksiValue;
});

document.getElementById('kembaliBtn').addEventListener('click', function() {
fetch('/pembayaran/batal/{{ $orderTransaction->id }}', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({
        status_transaksi: 'Pembayaran'
    })
})
.then(function(response) {
    if (response.ok) {
        // Redirect ke halaman dashboard setelah berhasil memperbarui
        window.location.href = '/dashboard';
    } else {
        // Tampilkan pesan atau tangani jika ada kesalahan dalam pembaruan
        console.error('Terjadi kesalahan saat memperbarui status transaksi.');
    }
})
.catch(function(error) {
    console.error('Terjadi kesalahan saat memperbarui status transaksi.', error);
});
});


</script>

<script>
document.getElementById('saldoApergaBtn').addEventListener('click', function() {
    window.location.href = "{{ $saldoApergaRoute }}";
});
</script>

<script>
function batalTransaksi() {
fetch('/pembayaran/batal/{{ $orderTransaction->id }}', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({
        status_transaksi: 'Transaksi Dibatalkan'
    })
})
.then(function(response) {
    if (response.ok) {
        // Redirect ke halaman dashboard setelah berhasil memperbarui
        window.location.href = '/dashboard';
    } else {
        // Tampilkan pesan atau tangani jika ada kesalahan dalam pembaruan
        console.error('Terjadi kesalahan saat memperbarui status transaksi.');
    }
})
.catch(function(error) {
    console.error('Terjadi kesalahan saat memperbarui status transaksi.', error);
});
}
