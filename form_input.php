<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latihan Form</title>
</head>

<body>
   <form action="hasil.php" method="post">
      <table border="1" cellspacing="0" cellpadding="5">
         <tr>
            <td colspan="2" align="center">
               <b><u>Form Input Data Karyawan</u></b>
            </td>
         </tr>
         <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
         </tr>
         <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="nama"></td>
         </tr>
         <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
         </tr>
         <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tgl_lahir"></td>
         </tr>
         <tr>
            <td>Jenis Kelamin</td>
            <td>
               <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
               <input type="radio" name="jk" value="Perempuan"> Perempuan
            </td>
         </tr>
         <tr>
            <td>Hobi</td>
            <td>
               <input type="checkbox" name="hobi[]" value="Main Game"> Main Game <br>
               <input type="checkbox" name="hobi[]" value="Tidur"> Tidur <br>
               <input type="checkbox" name="hobi[]" value="Nyanyi"> Nyanyi <br>
               <input type="checkbox" name="hobi[]" value="Ngoding"> Ngoding
            </td>
         </tr>
         <tr>
            <td>Telepon</td>
            <td><input type="number" name="telepon"></td>
         </tr>
         <tr>
            <td>E-Mail</td>
            <td><input type="email" name="email"></td>
         </tr>
         <tr>
            <td>Status</td>
            <td>
               <select name="status">
                  <option value="Menikah">Menikah</option>
                  <option value="Belum Menikah">Belum Menikah</option>
               </select>
            </td>
         </tr>
         <tr>
            <td></td>
            <td><button type="submit">Submit</button></td>
         </tr>
      </table>
   </form>
   <hr>

   <!-- Hasil Output Form -->
   <table border="1" cellspacing="0" cellpadding="5">
      <tr>
         <td colspan="2" align="center">
            <b><u>Form Input Data Karyawan</u></b>
         </td>
      </tr>
      <tr>
         <td>NIM</td>
         <td><?= @$_POST['nim'] ?></td>
      </tr>
      <tr>
         <td>Nama Lengkap</td>
         <td><?= @$_POST['nama'] ?></td>
      </tr>
      <tr>
         <td>Tempat Lahir</td>
         <td><input type="text" name="tempat_lahir"></td>
      </tr>
      <tr>
         <td>Tanggal Lahir</td>
         <td><input type="date" name="tgl_lahir"></td>
      </tr>
      <tr>
         <td>Jenis Kelamin</td>
         <td>
            <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
            <input type="radio" name="jk" value="Perempuan"> Perempuan
         </td>
      </tr>
      <tr>
         <td>Hobi</td>
         <td>
            <input type="checkbox" name="hobi[]" value="Main Game"> Main Game <br>
            <input type="checkbox" name="hobi[]" value="Tidur"> Tidur <br>
            <input type="checkbox" name="hobi[]" value="Nyanyi"> Nyanyi <br>
            <input type="checkbox" name="hobi[]" value="Ngoding"> Ngoding
         </td>
      </tr>
      <tr>
         <td>Telepon</td>
         <td><input type="number" name="telepon"></td>
      </tr>
      <tr>
         <td>E-Mail</td>
         <td><input type="email" name="email"></td>
      </tr>
      <tr>
         <td>Status</td>
         <td>
            <select name="status">
               <option value="Menikah">Menikah</option>
               <option value="Belum Menikah">Belum Menikah</option>
            </select>
         </td>
      </tr>
      <tr>
         <td></td>
         <td><img src="ttd.png" alt="" width="100pt"></td>
      </tr>
   </table>
   <table border="1" cellspacing="0" cellpadding="5">
      <thead>
         <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Tempat & Tgl Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Telepon</th>
            <th>E-Mail</th>
            <th>Status</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><?= @$_POST['nim'] ?></td>
            <td><?= @$_POST['nama'] ?></td>
            <td><?= @$_POST['tempat_lahir'] . ', ' . @$_POST['tgl_lahir'] ?></td>
            <td><?= @$_POST['jk'] ?></td>
            <td><?= @$_POST['hobi']['0'] . ', ' . @$_POST['hobi'][1] . ', ' . @$_POST['hobi'][2] . ', ' . @$_POST['hobi'][3] ?></td>
            <td><?= @$_POST['telepon'] ?></td>
            <td><?= @$_POST['email'] ?></td>
            <td><?= @$_POST['status'] ?></td>
         </tr>
      </tbody>
   </table>
</body>

</html>