<?php
echo "<h4>Array Terindeks!</h4>
<p>Array terindeks adalah array yang setiap itemnya terbedakan dengan indeks tertentu. Indeks tersebut bertipe data integer dan selalu dimulai dari angka 0</p>
";
$data_barang = ["PC", "Monitor", "Speaker", "Keyboard", "Mouse", "Kursi", "Meja"];

echo "$data_barang[0]<br>";
echo "$data_barang[1]<br>";
echo "$data_barang[2]<br>";
echo "$data_barang[3]<br>";

echo "<hr>";

for ($i = 0; $i < count($data_barang); $i++) {
   echo "$data_barang[$i]<br>";
}

echo "<hr>";

foreach ($data_barang as $barang) {
   echo "$barang<br>";
}
