<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CRUD Buku</title>
</head>

<body>
   <form action="insert.php" method="post">
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