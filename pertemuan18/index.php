<?php 
session_start();
if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

// ngambil data dari functions
require 'functions.php';


// pagination
// konfigurasi bisa di simpan di functions
$jumlahDataPerHalaman = 3;

// cara lama
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// $jumlahData = mysqli_num_rows($result);

// cara simpel
$jumlahData = count(query( "SELECT * FROM mahasiswa"));
$jmlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

// operator ternary if and else
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

// logika menentukan halaman
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


// query di ambil dari functions
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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

<br>
<!-- vavigasi-->

<!--previous-->
<?php if($halamanAktif > 1) : ?>
  <a href="?halaman=<?= $halamanAktif -1 ; ?>">&laquo;</a>
<?php endif; ?>

<?php  for( $i = 1; $i <= $jmlahHalaman; $i++) : ?>
  <?php if( $i == $halamanAktif) : ?>
  <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;">
    <?= $i; ?>
  </a>
  <?php else : ?>
  <a href="?halaman=<?= $i; ?>"><?= $i; ?>
  </a>
    <?php endif; ?>
<?php endfor; ?>

<!--next-->
<?php if($halamanAktif < $jmlahHalaman ) : ?>
  <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>
<br><br>



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