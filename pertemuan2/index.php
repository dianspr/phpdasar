<?php 
// Pertemuan 2 - PHP dasar
// Sintaks PHP

// Standart Outout
// echo, print
// print_r
// var_dump


// echo "Hello World";
// var_dump ("Hello World");

//Penulisan sintaks PHP
// 1. PHP dalam HTML
// 2. HTML dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka

// $nama = "Dian";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / concatenation /concat
// .
// $nama_depan = "Dian";
// $nama_belakang = "Supriyadi";
// echo $nama_depan ." ". $nama_belakang;

// Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Dian";
// $nama .= " ";
// $nama .= "Supriyadi";
// echo $nama;

// Perbandingan  (tidak membedakan jenis type data (int atau string))
// <, >, <=, >=, ==, != (menghasilkan boolean(false atau true))
// var_dump(1 == "1");

// identitas   (membedakan type data)
// ===, !== (menghasilkan boolean(false atau true)
// var_dump(1 === "1");

// Logika
// && (and), || (or), ! (not)
// $x = 10;
// var_dump($x < 20 && $x % 2 == 0);
// $x = 30;
// var_dump($x < 20 && $x % 2 == 0); /* (kedua kondisi harus sama dapat menghasilkan true) */
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);  /* (salah satu kondisi sama dapat menghasilkan true) */

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Selamat Datang <?php /* echo $nama; */?> </h1>
  <p><?php /* echo "ini adalah paragraf"; */?></p>
</body>
</html> -->