<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Nilai</title>
</head>

<body>
   <h4>Nilai Mata Kuliah Bahasa Inggris</h4>
   <hr>
   <?php
   $nama = "M. IQBAL ADENAN";
   $nilai_tugas = 90;
   $nilai_uts = 90;
   $nilai_uas = 20;
   $nilai_akhir = ($nilai_tugas * 0.2) + ($nilai_uts * 0.3) + ($nilai_uas * 0.5);

   if ($nilai_akhir >= 70) {
      $keterangan = "Lulus";
   } else {
      $keterangan = "Remedial";
   }

   if ($nilai_akhir >= 86) {
      $nilai_huruf = "A";
   } elseif ($nilai_akhir >= 70) {
      $nilai_huruf = "B";
   } elseif ($nilai_akhir >= 60) {
      $nilai_huruf = "C";
   } elseif ($nilai_akhir >= 40) {
      $nilai_huruf = "D";
   } else {
      $nilai_huruf = "E";
   }

   // Hasil
   echo "Nama : {$nama}<br>";
   echo "Nilai Tugas : {$nilai_tugas}<br>";
   echo "Nilai UTS : {$nilai_uts}<br>";
   echo "Nilai UAS : {$nilai_uas}<br>";
   echo "Nilai Akhir : {$nilai_akhir}<br>";
   echo "Keterangan : {$keterangan}<br>";
   echo "Nilai Huruf : {$nilai_huruf}";
   ?>
</body>

</html>