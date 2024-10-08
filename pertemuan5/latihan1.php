<?php 
// array
// variabel yang dapat memiliki banyak nilai
// tiap element boleh beda misal string dan integer atau boolean yang dipisahkan oleh koma(,)
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dai nol[0]

// membuat array cara lama didalamnya adalah element
$hari = array("Senin", "Selasa", "Rabu");

// array cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilakn array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan 1 element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


?>