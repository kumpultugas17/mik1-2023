<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Variabel GET</title>
</head>

<body>
   <h4>Variabel $_GET</h4>
   <form action="output_get.php" method="get">
      NIM : <input type="text" name="nim"><br>
      Nama : <input type="text" name="nama"><br>
      Asal Sekolah : <input type="text" name="asal_sekolah"><br>
      Alamat : <input type="text" name="alamat"><br>
      Telepon : <input type="text" name="telepon"><br>
      E-Mail : <input type="text" name="email"><br>
      <button type="submit">Submit</button>
   </form>
   <?php

   $nama = $_GET['nama'];
   $usia = $_GET['usia'];
   echo "<br>Hasil Output<br>";

   echo "Nama Saya {$nama}, usia {$usia}";
   ?>
</body>

</html>