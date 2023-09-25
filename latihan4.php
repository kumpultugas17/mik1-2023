<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aplikasi Bonus Sales</title>
</head>

<body>
   <h4>Aplikasi Bonus Sales</h4>
   <hr>
   <?php
   $nama = "Ahmad";
   $penjualan = 5;

   if ($penjualan > 2) {
      $bonus = 1000000;
   } elseif ($penjualan > 1) {
      $bonus = 500000;
   } else {
      $bonus = 0;
   }

   echo "Nama Sales : {$nama}<br>";
   echo "Penjualan : {$penjualan}<br>";
   echo "Bonus : Rp.{$bonus}";
   ?>

</body>

</html>