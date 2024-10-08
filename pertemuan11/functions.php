<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// function ke query yang ada di halaman index
function query($query) {
  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

//function tambah data mahasiswa
function tambah($data) {
  global $conn;

  // ambil data dari tiap element dalam form
  $nama = htmlspecialchars($data["nama"]);
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  // query insert data
  $query = "INSERT INTO mahasiswa
  VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// function hapus id
function hapus($id) {
  global $conn;
  
  // hapus dari id
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

  return mysqli_affected_rows($conn);
}

// function ubah data
function ubah($data) {
  global $conn;

  // ambil data dari tiap element dalam form
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  // query insert data
  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id = $id
          ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


?>