//pengetesan javascript
  // console.log('ok'); lihat di browser->inspect->console 

// ambil elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');


//menjalankan ajax memerlukan trigger di javascript(event)

// contoh // tombolCari.addEventListener('click', function() {
          //   alert('berhasil!!');
          // });

// tambahkan event ketika keyword di tulis
keyword.addEventListener('keyup', function() {

  // buat object ajax
  var xhr = new XMLHttpRequest();

  // mengecek kesiapan ajax
  xhr.onreadystatechange = function() {
    if( xhr.readyState == 4 && xhr.status == 200 ) {
      // console.log(xhr.responseText);
      container.innerHTML = xhr.responseText;
    }
  }

  // eksekusi ajax
  xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
  xhr.send();
  
  //testing // xhr.open('GET', 'ajax/coba.txt', true);
            // xhr.send();
});