<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Variabel POST</title>
</head>

<body>
   <h4>Variabel $_POST</h4>
   <form action="output_post.php" method="post">
      NIM : <input type="number" name="nim" required><br>
      Nama : <input type="text" name="nama" required><br>
      Asal Sekolah : <input type="date" name="asal_sekolah" required><br>
      Alamat : <input type="password" name="alamat" required><br>
      Telepon : <input type="text" name="telepon" required><br>
      E-Mail : <input type="email" name="email"><br>
      <button type="submit">Submit</button>
   </form>
   <?php

   $nim = $_POST['nim'];
   $nama = $_POST['nama'];
   $asal_sekolah = $_POST['asal_sekolah'];
   $alamat = $_POST['alamat'];
   $telepon = $_POST['telepon'];
   $email = $_POST['email'];
   echo "<br>Hasil Output<br>";

   echo "NIM {$nim} dan Nama {$nama}";
   var_dump($_POST['asal_sekolah']);
   ?>
</body>

</html>