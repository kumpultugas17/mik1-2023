<?php
echo "<h4>Array Asosiatif!</h4>
<p>Array Asosiatif adalah suatu array di mana key atau kuncinya bukan berupa indeks integer yang dimulai dari 0, akan tetapi yang menjadi key-nya adalah suatu teks bertipe data string. Oleh karena itu ia dinamakan array asosiatif.</p>
";
$array_asosiatif1 =
   [
      "nama_barang" => "PC",
      "jumlah" => 6,
      "kategori" => "Personal Computer"
   ];

echo "Nama Barang : {$array_asosiatif1['nama_barang']}<br>";
echo "Jumlah : {$array_asosiatif1['jumlah']}<br>";
echo "Kategori : {$array_asosiatif1['kategori']}<br>";

$array_asosiatif2 = array(
   [
      "mata_kuliah" => "Web Programming",
      "jurusan" => 'MIK',
      "sks" => 2
   ],
   [
      "mata_kuliah" => "Web Desain",
      "jurusan" => 'MIK',
      "sks" => 2
   ],
   [
      "mata_kuliah" => "Accurate",
      "jurusan" => 'AKP',
      "sks" => 2
   ]
);

echo $array_asosiatif2[1]['mata_kuliah'];
echo "<table border=1 cellspacing=0 cellpadding=5>
   <tr>
      <th>No</th>
      <th>Mata Kuliah</th>
      <th>Jurusan</th>
      <th>SKS</th>
   </tr>
";
$no = 1;
foreach ($array_asosiatif2 as $data) {
   echo "<tr>
      <td>" . $no++ . "</td>
      <td>{$data['mata_kuliah']}</td>
      <td>{$data['jurusan']}</td>
      <td>{$data['sks']}</td>
   </tr>";
}
echo "</table>";
