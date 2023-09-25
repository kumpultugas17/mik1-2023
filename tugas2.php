<?php
echo "<h4>Percabangan If</h4>";
$lulus = true;

echo 'Memeriksa variable $lulus <br>';

if ($lulus) {
   echo "Variabel lulus bernilai true <br>";
}

echo "<h4>Pengecualian menggunakan else</h4>";
$nilai = 60;

echo 'Memeriksa variable $nilai <br>';
echo "Nilai: {$nilai} <br>";

if ($nilai >= 70) {
   echo "Selamat, siswa !";
} else {
   echo "Mohon maaf, siswa tidak lulus";
}

echo "<br>";

echo "<h4>Pengecualian menggunakan else</h4>";
$nilai = 60;

echo 'Memeriksa variable $nilai <br>';
echo "Nilai: {$nilai} <br>";

if ($nilai >= 85) {
   echo "Sangat mengesankan!";
} elseif ($nilai >= 70) {
   echo "Selamat anda lulus!";
} else {
   echo "Jangan menyerah, anda pasti bisa!";
}

echo "<br>";

echo "<h4>Contoh Menampilkan Nilai Huruf Menggunakan If</h4>";
$nilai = 56;

echo "Nilai: {$nilai} <br>";

if ($nilai >= 85 and $nilai <= 100) {
   echo "Predikat: A";
} elseif ($nilai >= 75) {
   echo "Predikat: B";
} elseif ($nilai >= 60) {
   echo "Predikat: C";
} elseif ($nilai >= 50) {
   echo "Predikat: D";
} elseif ($nilai >= 0) {
   echo "Predikat: E";
} else {
   echo "Nilai tidak valid.";
}

echo "<br>"; # untuk membuat baris baru pada HTML

echo "<h4>Bilangan numeric selain 0 dianggap true</h4>";
$nilai = 0;
if ($nilai) {
   echo "nilai: {$nilai} dianggap true";
} else {
   echo "nilai: {$nilai} dianggap false";
}

echo "<h4>String yang tidak kosong dianggap true</h4>";
$nama = "";

if ($nama) {
   echo "dianggap true";
} else {
   echo "dianggap false";
}

echo "<h4>Nilai null dianggap false</h4>";
$nilai = null;

if ($nilai) {
   echo "dianggap true";
} else {
   echo "dianggap false";
}
echo "<br>";
if (@$namaLengkap) {
   echo "Jika variabel namaLengkap telah didefinisikan sebelumnya dan ia bukan 0 atau string kosong atau null";
} else {
   echo "Jika variabel namaLengkap tidak pernah didefinisikan sebelumnya. Tanda @ membuatnya bernilai NULL jika belum didefinisikan sebelumnya";
}

echo "<br>";

echo "<h4>Percabangan Switch Case</h4>";
$url = '/about';

switch ($url) {
   case '/':
      echo 'Selamat datang di dashboard.';
      break;
   case '/about':
      echo 'Selamat datang di halaman about.';
      break;
   case '/contact':
      echo 'Selamat datang di halaman kontak.';
      break;
   default:
      echo 'Maaf halaman yang anda cari tidak ditemukan.';
}

echo '<br>';

echo "<h4>Jika tanpa Break</h4>";
$url = '/about';

switch ($url) {
   case '/':
      echo 'Selamat datang di dashboard.';
   case '/about':
      echo 'Selamat datang di halaman about.';
   case '/contact':
      echo 'Selamat datang di halaman kontak.';
   default:
      echo 'Maaf halaman yang anda cari tidak ditemukan.';
}

echo '<br>';

echo "<h4>Ternary</h4>";
$nilai = 50;

echo $nilai > 70 ? "Selamat, anda lulus!" : "Mohon maaf, anda harus mengulang";
