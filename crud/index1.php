<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CRUD Buku</title>
</head>

<body>
   <form action="" method="post">
      <table>
         <tr>
            <td colspan="3">Aplikasi Data Buku Sederhana</td>
         </tr>
         <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" name="judul_buku"></td>
         </tr>
         <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="penulis"></td>
         </tr>
         <tr>
            <td>Tahun Terbit</td>
            <td>:</td>
            <td><input type="year" name="tahun_terbit"></td>
         </tr>
         <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td><input type="text" name="penerbit"></td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td><button type="submit" name="submit">Submit</button></td>
         </tr>
      </table>
   </form>
</body>

</html>

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
      echo "<script>alert('Data Berhasil Ditambahkan!');</script>";
   } else {
      echo "<script>alert('Data Gagal Ditambahkan!')</script>";
   }
}
?>