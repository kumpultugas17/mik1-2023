<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UJIAN TENGAH SEMESTER 1 - 2023</title>
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
   <div class="container"> 
      <div class="row">
         <form action="" method="post">
            <div class="mb-3">
               <label for="" class="form-label">Nama</label>
               <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
               <label for="" class="form-label">Golongan</label>
               <select name="golongan" id="" class="form-select">
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
               </select>
            </div>
            <div class="mb-3">
               <label for="" class="form-label">Tahun Masuk Kerja</label>
               <input type="text" class="form-control" name="tahun_masuk">
            </div>
            <div class="mb-3">
               <label for="" class="form-label">Jumlah Anak</label>
               <input type="text" class="form-control" name="jumlah_anak">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm mb-3">Submit</button>
         </form>
         <!-- Hasil -->
         <?php
         $nama = $_REQUEST['nama'];
         $golongan = $_REQUEST['golongan'];
         $tahun_masuk = $_REQUEST['tahun_masuk'];
         $jumlah_anak = $_REQUEST['jumlah_anak'];
         $tahun_skg = 2023;

         switch ($golongan) {
            case 'A':
               $gaji = 3500000;
               break;
            case 'B':
               $gaji = 2750000;
               break;
            case 'C':
               $gaji = 2200000;
               break;
            default:
               $gaji = 1500000;
               break;
         }

         $masa_kerja = $tahun_skg - $tahun_masuk;
         if ($masa_kerja >= 5) {
            $bonus = 2000000;
         } else {
            $bonus = 750000;
         }

         if ($jumlah_anak > 3) {
            $t_anak = 200000 * 3;
         } else {
            $t_anak = 200000 * $jumlah_anak;
         }

         $total = $gaji + $bonus + $t_anak;
         ?>

         <hr>
         Nama : <?= $nama ?><br>
         Golongan : <?= $golongan ?><br>
         Tahun Masuk : <?= $tahun_masuk ?><br>
         Jumlah Anak : <?= $jumlah_anak ?><br>
         Gaji Pokok : <?= $gaji ?><br>
         Bonus : <?= $bonus ?><br>
         Tunjangan Anak : <?= $t_anak ?><br>
         Gaji Bersih : <?= $total ?>
      </div>
   </div>
   <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>