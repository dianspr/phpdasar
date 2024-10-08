<?php 
session_start();
if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

// ngambil data dari functions
require 'functions.php';

// query di ambil dari functions
$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari di click
if(isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>
  
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>
<form action="" method="post">

  <input type="text" name="keyword" size="40" autofocus
  placeholder="masukan pencarian" autocomplete="off">
  <button type="submit" name="cari">Cari!</button>
  <br><br>
</form>

<table border="1" cellpadding="10" cellspacing="0">


  <tr>
    <th>NO.</th>
    <th>Action</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($mahasiswa as $row)  : ?>
  <tr>
    <td><?= $i; ?></td>
    <td>
      <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
      <a href="hapus.php?id=<?= $row["id"]; ?>"
      onclick="return confirm('apakah yakin')">Hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"] ?>" width="75"></td>
    <td><?= $row["nrp"] ?></td>
    <td><?= $row["nama"] ?></td>
    <td><?= $row["email"] ?></td>
    <td><?= $row["jurusan"] ?></td>
  </tr>
  <?php $i++; ?>
  <?php endforeach; ?>
</table>


</body>
</html>