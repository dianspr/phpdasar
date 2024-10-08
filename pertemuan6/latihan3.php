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

$mobil = [
  [
    "nama" => "Lamborgini Orange",
    "jenis" => "Dua Pintu",
    "warna" => "Orange",
    "kelas" => "Sport",
    "harga" => [80,90,100],
    "gambar" => "mobil1.jpg"
  ],
  [
    "nama" => "Ferrari Abu Orange",
    "jenis" => "Dua Pintu",
    "warna" => "Abu Orange",
    "kelas" => "Sport",
    "harga" => [80,90,100],
    "gambar" => "mobil2.jpg"
  ],
  [
    "nama" => "Lamborgini Hijau",
    "jenis" => "Dua Pintu",
    "warna" => "Hijau",
    "kelas" => "Sport",
    "harga" => [80,90,100],
    "gambar" => "mobil3.jpeg"
  ],
];

// echo $mahasiswa[0]["tugas"][1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mobil</title>
</head>
<body>
  <h1>Daftar Mobil</h1>


  <?php foreach ($mobil as $mbl) : ?>
    <ul>
      <li><img src="img/<?= $mbl["gambar"]; ?>" width=100 ></li>
      <li>Nama : <?= $mbl["nama"]; ?></li>
      <li>Jenis : <?= $mbl["jenis"]; ?></li>
      <li>Warna : <?= $mbl["warna"]; ?></li>
      <li>Class : <?= $mbl["kelas"]; ?></li>    
      <li>Dollar : <?= $mbl["harga"][1]; ?></li>    
    </ul>
  <?php endforeach; ?>

</body>
</html>