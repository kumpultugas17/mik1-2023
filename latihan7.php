<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   $nama = ['Adenan', 'Rafly', 'Indri', 'Andre', 'Iwan', 'Razan', 'Reza', 'Rahmat', 'Roni'];

   for ($i = 0; $i < count($nama); $i++) {
      echo "<table border=1><tr>
      <td>Nama ke-{$i} : {$nama[$i]}</td>
      </tr></table>";
   }

   for ($i = 0; $i < count($nama); $i++) {
      if ($i === 0) {
         echo "<h5>Kelompok 1<h5>";
      }
      echo "Nama {$nama[$i]}<br>";

      if ($i === 4) {
         echo "<h5>Kelompok 2<h5>";
      }
   }
   ?>
</body>

</html>