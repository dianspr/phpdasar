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

  // upload gambar dulu
  $gambar = upload();
  if(!$gambar) {
    return false;
  }

  // query insert data
  $query = "INSERT INTO mahasiswa
  VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// function upload gambar
function upload() {
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang di upload
  if($error === 4 ) {
    echo "<script>
            alert('pilih gambar dahulu');
        </script>";
        
        return false;
      }
      
      // cek apakah yang di upload adalah gambar
      $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
      $ektensiGambar = explode('.', $namaFile);
      $ektensiGambar = strtolower(end($ektensiGambar));
      if( !in_array($ektensiGambar, $ekstensiGambarValid)) {
        echo "<script>
              alert('yang anda upload bukan gambar');
            </script>";
        
        return false;
      }
      
      // cek jika ukuranya terlalu besar
      if($ukuranFile > 1000000) {
        echo "<script>
              alert('ukuran gambar terlalu besar');
            </script>";
        
        return false;
        
      }

      // lolos pengecekan, gambar siap upload
      // generate nama gambar baru
      $namaFileBaru = uniqid();
      $namaFileBaru .= '.';
      $namaFileBaru .= $ektensiGambar;


      move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

      return $namaFileBaru;
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
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // cek apakah user pilih gambar atau tidak
  if( $_FILES['gambar']['error'] === 4 ) {
    $gambar = $gambarLama;

  } else {
    $gambar = upload();

  }

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

// function pencarian
function cari($keyword) {
  $query = "SELECT * FROM mahasiswa
            WHERE
            nama LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";

  return query($query);
}

// function registrasi
function registrasi($data) {
  global $conn;

  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn,$data["password"]);
  $password2 = mysqli_real_escape_string($conn,$data["password2"]);
  

  //username sudah ada apa belum
  $result = mysqli_query($conn, "SELECT username FROM user
  WHERE username = '$username'");

  if( mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah ada');
          </script>";

    return false;
  }


  //cek konfirmasi password
  if( $password !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai');
          </script>";

    return false;
  }

  //enkripsi password jangan pakai md5
  $password = password_hash($password, PASSWORD_DEFAULT);
  // var_dump($password);
  // die;

  //tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO user VALUES
  ('', '$username', '$password')");

  return mysqli_affected_rows($conn);



}


?>