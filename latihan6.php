<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Perulangan</title>
</head>

<body>
   <?php
   echo "<h4>Perulangan</h4>";
   echo "Aku berjanji akan mengejakan tugas<br>";
   echo "Aku berjanji akan mengejakan tugas<br>";
   echo "Aku berjanji akan mengejakan tugas<br>";
   echo "Aku berjanji akan mengejakan tugas<br>";
   echo "Aku berjanji akan mengejakan tugas<br>";
   echo "Aku berjanji akan mengejakan tugas<br>";
   echo "Aku berjanji akan mengejakan tugas<br>";
   echo "Aku berjanji akan mengejakan tugas<br>";
   echo "Aku berjanji akan mengejakan tugas<br>";

   echo "<h5>Menggunakan Perulangan For<h5>";
   for ($i = 1; $i <= 10; $i++) {
      echo "{$i}. Aku berjanji akan mengejakan tugas [Ascending]<br>";
   }

   for ($i = 10; $i >= 1; $i--) {
      echo "{$i}. Aku berjanji akan mengejakan tugas[Descending]<br>";
   }

   ?>
</body>

</html>