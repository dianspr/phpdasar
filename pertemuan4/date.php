<?php 

// BUILT IN FUNCTION

// Date untuk menampilkan tanggal dalam format tertentu
  // echo date("l, d-M-Y"); // mengelola waktu tanggal hari ini

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
  // echo time();

  // echo date("l, d M Y", time()+60*60*24*100); // cek 100 hari kedepan
  // echo date("l, d M Y", time()-60*60*24*100); // cek 100 hari kebelakang

  //mktime
  //membuat sendiri detik
  // mktime(0,0,0,0,0,0)
  //jam, menit, detik, bulan, tanggal, tahun
  // echo date("l", mktime(0,0,0,2,2,1991));

//strtotime
// echo date("l", strtotime("2 feb 1991"));

// penggunaan function
// Date / Time

// String
// - strlen() menghitung panjang dari sebuah string
// - strcmp() membandingkan dari sebuah string
// - explode() memceah string menjadi array
// - htmlspecialchars() menjaga sesuatu dari skrip yang tidak di inginkan 

// Utillity
// - var_dump() mencetak dari variabel , array, object untuk debugging
// - isset() mengecek apakah sebuah variabel sudah pernah dibikin atau belum menghasilan boolean (true atau false)
            // ketika belum pernah bikin variabel maka isset menghasilkan boolean false
// - empty() mengecek variabel kosong atau tidak
// - die() memberhentikan program, yang mana program dibawahnya tidak akan dieksekusi
// - sleep() memberhentikan program sementara dalam hitungan detik


// USER-DEFINED FUNCTION
// harus didefisinikan terlebih dahulu baru bisa di panggil
?>