<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latihan 2</title>
</head>

<body>
   <?php
   // menentukan variabel
   $nim = "224.MIK.001";
   $nama = "M. Iqbal Adenan";
   $umur = 17;
   $sisa_uang = 150000;
   $uang_masuk = 500000;
   $total = $sisa_uang + $uang_masuk;
   $pajak = 0.3 * $total;

   // untuk menampilkan tipe data dan panjang data
   var_dump($nim);
   var_dump($nama);
   var_dump($umur);
   var_dump($sisa_uang);
   var_dump($uang_masuk);
   var_dump($total);

   // untuk menampilkan datanya saja
   echo "<br><br>";
   echo "Nim : " . $nim . "<br>";
   echo "Nama : " . $nama . "<br>";
   echo "Umur : " . $umur . "<br>";
   echo "Sisa Uang : " . $sisa_uang . "<br>";
   echo "Uang Masuk : " . $uang_masuk . "<br>";
   echo "Total Uang : " . $total . "<br>";
   echo "Pajak : " . $pajak;
   ?>
</body>

</html>