<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aplikasi Hitung Gaji Karyawan</title>
</head>

<body>
   <!-- INPUT -->
   <fieldset>
      <legend>Form Input</legend>
      <form action="" method="POST">
         <label for="nama">Nama</label>
         <input type="text" name="nama" id="nama">
         <br>
         <label for="status">Status</label>
         <input type="radio" name="status" value="Menikah" id="status"> Menikah
         <input type="radio" name="status" value="Belum Menikah" id="status"> Belum Menikah
         <br>
         <label for="gol">Golongan</label>
         <select name="golongan" id="gol">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
         </select>
         <br>
         <label for="gp">Gaji Pokok</label>
         <input type="number" name="gp" id="gp">
         <button type="submit" name="submit">Submit</button>
      </form>
   </fieldset>

   <!-- PROSES -->
   <?php
   $nama = @$_POST['nama'];
   $status = @$_POST['status'];
   $golongan = @$_POST['golongan'];
   $gp = @$_POST['gp'];

   // Cek status
   if ($status == 'Menikah') {
      $t_keluarga = 0.25 * $gp;
   } else {
      $t_keluarga = 0;
   }

   // Cek jabatan
   switch ($golongan) {
      case 'A':
         $t_jabatan = 0.30 * $gp;
         break;
      case 'B':
         $t_jabatan = 0.25 * $gp;
         break;
      default:
         $t_jabatan = 0.15 * $gp;
         break;
   }

   $total = $gp + $t_keluarga + $t_jabatan;
   ?>

   <!-- OUTPUT -->
   <?php if (isset($_POST['submit'])) { ?>
      <fieldset>
         <legend>Output</legend>
         Nama Karyawan : <?php echo $nama ?> <br>
         Status : <?= $status ?> <br>
         Golongan : <?= $golongan ?> <br>
         Gaji Pokok : <?= $gp ?> <br>
         Tunjangan Keluarga : <?= $t_keluarga ?> <br>
         Tunjangan Jabatan : <?= $t_jabatan ?> <br>
         Gaji Bersih : <?= $total ?> <br>
      </fieldset>
   <?php } ?>

</body>

</html>