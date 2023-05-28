// Ambil elemen div "list-prt"
var listPrt = document.querySelector('.list-prt');

// Ambil elemen pagination
var pagination = document.querySelector('.pagination');

// Fungsi untuk menetapkan posisi pagination
function setPaginationPosition() {
  var listPrtHeight = listPrt.offsetHeight;
  var paginationHeight = pagination.offsetHeight;

  pagination.style.top = listPrtHeight + 'px';
}

// Panggil fungsi setPaginationPosition saat halaman berubah
document.addEventListener('DOMContentLoaded', function() {
  setPaginationPosition();
});

// Juga panggil fungsi setPaginationPosition saat halaman berpindah
pagination.addEventListener('click', function() {
  setTimeout(setPaginationPosition, 0);
});

// Fungsi untuk melakukan pencarian
function performSearch() {
  var keyword = document.getElementById('search-input').value.toLowerCase().trim();
  var prtItems = document.getElementsByClassName('prt-item');

  for (var i = 0; i < prtItems.length; i++) {
    var prtItem = prtItems[i];
    var namaPRT = prtItem.getElementsByClassName('nama-prt')[0].textContent.toLowerCase();
    var lokasiPRT = prtItem.getElementsByClassName('lokasi-prt')[0].textContent.toLowerCase();

    if (namaPRT.includes(keyword) || lokasiPRT.includes(keyword)) {
      prtItem.style.display = 'block';
    } else {
      prtItem.style.display = 'none';
    }
  }
}

// Mendapatkan tombol pencarian
var searchButton = document.getElementById('search-button');

// Menambahkan event listener untuk tombol pencarian
searchButton.addEventListener('click', function() {
  performSearch();
  setPaginationPosition();
});
