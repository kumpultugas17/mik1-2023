<?php
$conn = mysqli_connect("localhost", "root", "", "db_buku_iqbal");
// Check connection
if ($conn->connect_errno) {
   echo "Gagal tersabung ke database: " . $conn->connect_error;
   exit();
}

if (isset($_POST['submit'])) {
   $judul_buku = $_POST['judul_buku'];
   $penulis = $_POST['penulis'];
   $tahun_terbit = $_POST['tahun_terbit'];
   $penerbit = $_POST['penerbit'];

   $query = $conn->query("INSERT INTO buku (judul_buku, penulis, tahun_terbit, penerbit) VALUES ('$judul_buku', '$penulis', '$tahun_terbit', '$penerbit')");

   if ($query) {
      header('location:data.php');
   } else {
      echo "<script>alert('Data Gagal Ditambahkan!')</script>";
   }
}
