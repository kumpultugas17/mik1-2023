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
         <label>Jabatan</label>
         <input type="text" name="jabatan">
         <br>
         <label for="jamker">Jam Kerja</label>
         <input type="number" name="jamker" id="jamker">
         <br>
         <label for="gaji">Gaji Perhari</label>
         <input type="number" name="gaji" id="gaji">
         <br>
         <label for="tunjangan">Tunjangan</label>
         <input type="number" name="tunjangan" id="tunjangan">
         <br>
         <button name="submit" type="submit">Submit</button>
      </fieldset>
   </form>

   <?php if (isset($_POST['submit'])) { ?>
      <fieldset>
         <legend>Output</legend>
         <?php
         $jamker = $_POST['jamker'];
         $gaji_perhari = $_POST['gaji'];
         $tunjangan = $_POST['tunjangan'];
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