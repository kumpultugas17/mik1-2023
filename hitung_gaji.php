<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aplikasi Penggajian Sederhana</title>
</head>

<body>
   <form action="" method="post">
      <fieldset>
         <legend>Data Karyawan</legend>
         <label for="nama_karyawan">Nama Karyawan</label>
         <input type="text" name="nama_karyawan" id="nama_karyawan">
         <br>
         <label for="">Jabatan</label>
         <input type="text" name="jabatan" id="">
         <br>
         <button name="submit" type="submit">Submit</button>
      </fieldset>
   </form>

   <?php if (isset($_POST['submit'])) { ?>
      <fieldset>
         <legend>Output</legend>
         <?php
         $jamker = 17;
         $gaji_perhari = 150000;
         $tunjangan = 350000;
         $total = ($jamker * $gaji_perhari) + $tunjangan;
         echo "Nama Karyawan : {$_POST['nama_karyawan']}<br>";
         echo "Jabatan : {$_POST['jabatan']}<br>";
         echo "Jam Kerja : {$jamker}<br>";
         echo "Gaji Per Hari : {$gaji_perhari}<br>";
         echo "Tunjangan : {$tunjangan}<br>";
         echo "Total Gaji : {$total}<br>";
         ?>
      </fieldset>
   <?php } ?>
</body>

</html>