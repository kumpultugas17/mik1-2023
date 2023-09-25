<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Menentukan Bilangan Ganjil dan Genap</title>
</head>

<body>
   <?php
   $nilai = 5;
   if ($nilai % 2 == 0) {
      echo "{$nilai} bilangan genap";
   } else {
      echo "{$nilai} bilangan ganjil";
   }
   ?>
</body>

</html>