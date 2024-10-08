<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//   echo "Hello World! <br>";
// }

// $i = 0;
// while($i < 5 ) {
//   echo "Hello World! <br>";
// $i++; // Jangan lupa kasih increment agar tidak looping forever
// }
// keterangan ketika kondisi bernilai false, while tidak menjalankan perintah

// $i = 0;
// do{
//   echo "Hello World! <br>";
// $i++;
// } while( $i < 5 );
//keterangan ketika kondisi bernilai false do.. whlie menjalankan perintah 1 kali


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
  <style>
    .warna-baris{
      background-color: silver;
    }
  </style>
</head>
<body>

  <table border="2" cellpadding="10" cellsapcing="0">


  <?php // cara yang efektif, karena html tetap berada di luar PHP ?>
  <?php for( $i = 1; $i <= 5; $i++) : ?>
    <?php if($i % 2 == 0) : ?>
    <tr>
      <tr class="warna-baris">
    <?php else : ?>
      <tr>
    <?php endif; ?>
      <?php for( $j = 1; $j <= 5; $j++) : ?>
        <td><?= "$i, $j"; ?></td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>
  
  <?php  // cara yang kurang efektif, karena sintaks html berada di dalam PHP
  /*
    for($i = 1; $i <= 3; $i++ ) {
      echo "<tr>";
      for( $j = 1; $j <= 5; $j++ ) {
        echo "<td> $i, $j </td>";
      }
      echo "</tr>";
    }
  */ 
  ?>

  </table>
</body>
</html>