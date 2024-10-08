<?php 
$mahasiswa = [
              ["Dian Supriyadi", "20220050153", "Sistem Informasi",
              "supriyadidian@gmail.com"],
              ["Aldo Yogasmara", "20220050150", "Sistem Informasi",
              "aldoyoga@gmail.com"],
              // hati2 penggunaan array numeric pada contoh kasus di bawah ini
              // karena PHP tidak menganggap ini salah
              ["20220050151","Rizki Nur Azim", "Sistem Informasi",
              "rizkiazim@gmail.com"]
];



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

<?php foreach($mahasiswa as $mhs) : ?>

  <ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NIM : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
  </ul>
  
<?php endforeach; ?>



</body>
</html>