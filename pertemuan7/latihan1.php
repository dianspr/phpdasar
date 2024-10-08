<?php 
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilX() {
//   global $x;
//   echo $x;
// }

// tampilX();


// Variabel Superglobals milik PHP
// merupakan Array Associative
/*
  $_GET -> bekerja lewat url 
  - contoh pengisian lewat url "?nama=Dian Supriyadi&NIM=20220050153"
  $_POST -> bekerja lewat form
  $_REQUEST ->
  $_SESSION ->
  $_COOKIE ->
  $_SERVER ->
  $_ENV ->
*/

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SERVER);

// echo $_SERVER["SERVER_NAME"];

$mahasiswa = [
  [
    "nama" => "Dian Supriyadi",
    "NIM" => "20220050153",
    "email" => "supriyadidian@gmail.com",
    "jurusan" => "Sistem Informasi",
    "tugas" => [80,90,100],
    "gambar" => "love1.jpg"
  ],
  [
    "nama" => "Aldo Yogasmara",
    "NIM" => "20220050150",
    "email" => "aldoyoga@gmail.com",
    "jurusan" => "Sistem Informasi",
    "tugas" => [80,90,100],
    "gambar" => "love2.jpg"
  ],
  [
    "nama" => "Rizki Nur Azim",
    "NIM" => "20220050151",
    "email" => "rizkiazim@gmail.com",
    "jurusan" => "Sistem Informasi",
    "tugas" => [80,90,100],
    "gambar" => "love3.jpg"
  ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

<ul>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <li>
      <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&NIM=
      <?= $mhs["NIM"]; ?>&email=<?= $mhs ["email"]; ?>&jurusan=
      <?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
      <?= $mhs["nama"]; ?></a>
    </li>
    
  <?php endforeach; ?>
</ul>
</body>
</html>