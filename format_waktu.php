<?php
date_default_timezone_set("Asia/Jakarta") . '<br>';
$tanggal_hari_ini = new DateTime();
$tglHariIni = date('d-m-Y');

echo "Hasil : <br>";
echo "{$tanggal_hari_ini->format('d-m-Y')}<br>";
echo "{$tglHariIni}<br><br>";

echo "Menampilkan Tanggal atau Hari saja : <br>";
echo date('d') . "<br>";
echo date('D') . "<br>";
echo date('j') . "<br>";
echo date('l') . "<br><br>";

echo "Menampilkan Bulan : <br>";
echo date('m') . "<br>";
echo date('n') . "<br>";
echo date('M') . "<br>";
echo date('F') . "<br><br>";

echo "Menampilkan Tahun : <br>";
echo date('y') . "<br>";
echo date('Y') . "<br><br>";

$jatuhTempo = date('31-08-2023');
$hutang = 900000;
echo "Perhitungan Denda :<br>";
if (strtotime($tglHariIni) > strtotime($jatuhTempo)) {
   $denda = 500000;
} else {
   $denda = 0;
}

echo "Total Dibayarkan : Rp." . number_format($hutang + $denda, 2, ',', '.');
