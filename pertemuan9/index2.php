<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil dari tabel mahasiswa / query
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
// var_dump($result);



// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan aray numeric dari index 0 (nol)
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[1]);

// mysqli_fetch_assoc() // mengembalikan array associative
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["nama"]);

// mysqli_fetch_array() // mengembalikan array  keduanya (numeric dan associative)
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);

// mysqli_fetch_object() // mengambil dari object yang spesifik
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);


// while($mhs = mysqli_fetch_assoc($result)) {
// var_dump($mhs);
// }


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  
<h1>Daftar Mahasiswa</h1>

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
  <?php while($row = mysqli_fetch_assoc($result))  : ?>
  <tr>
    <td><?= $i; ?></td>
    <td>
      <a href="">Ubah</a> |
      <a href="">Hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"] ?>" width="75" alt=""></td>
    <td><?= $row["nrp"] ?></td>
    <td><?= $row["nama"] ?></td>
    <td><?= $row["email"] ?></td>
    <td><?= $row["jurusan"] ?></td>
  </tr>
  <?php $i++; ?>
  <?php endwhile; ?>
</table>


</body>
</html>