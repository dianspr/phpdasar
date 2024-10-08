<?php 
//pertemuan19 lanjut dari pertemuan17 tanpa materi PAGINATION
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

  <style>
    .loader{
      width: 100px;
      position: absolute;
      top: 120px;
      left: 310px;
      z-index: -1;
      display: none;
    }

    @media print{
      .logout, .tambah, .form-cari, .action {
        display: none;
      }
    }
  </style>

  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/script.js"></script>
</head>
<body>

<a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>
  
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
<br><br>
<form action="" method="post" class="form-cari">

  <input type="text" name="keyword" size="40" autofocus
  placeholder="masukan nama atau jurusan" autocomplete="off"
  id="keyword">
  <button type="submit" name="cari" id="tombol-cari">Cari!</button>

  <img src="img/loader.gif" class="loader" alt="">

  <br><br>

</form>

<!--implementasi ajax-->
<div id="container">
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>NO.</th>
      <th class="action">Action</th>
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
      <td class="action">
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
</div>


</body>
</html>