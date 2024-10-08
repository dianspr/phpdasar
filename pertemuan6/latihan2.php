<?php 
// $mahasiswa = [
//   ["Dian Supriyadi", "20220050153",
//   "supriyadidian@gmail.com", "Sistem Informasi"],
//   ["Aldo Yogasmara", "20220050150",
//   "aldoyoga@gmail.com", "Sistem Informasi"]

// ];

// Array Associative
// definisinya sama dem]ngan array numeric, kecuali
// key-nya adalah string yang kita buat sendiri
// yang besar array indexnya numeric, yang dalam associative

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

// echo $mahasiswa[0]["tugas"][1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>


  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><img src="imglove/<?= $mhs["gambar"]; ?>" width=100 ></li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["NIM"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>    
      <li>Nilai : <?= $mhs["tugas"][1]; ?></li>    
    </ul>
  <?php endforeach; ?>

</body>
</html>