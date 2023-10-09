<?php
$conn = mysqli_connect("localhost", "root", "", "db_buku_iqbal");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CRUD DENGAN BOOTSTRAP</title>
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
   <div class="container">
      <div class="row">
         <h5 class="alert alert-primary my-3">Aplikasi Data Buku Sederhana</h5>
         <div class="card">
            <div class="card-body">
               <table class="table table-bordered table-hover table-stiped table-sm">
                  <thead class="table-primary">
                     <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 1;
                     $query = $conn->query("SELECT * FROM buku");
                     foreach ($query as $data) :
                     ?>
                        <tr>
                           <td><?= $no++ ?></td>
                           <td><?= $data['judul_buku'] ?></td>
                           <td><?= $data['penulis'] ?></td>
                           <td><?= $data['penerbit'] ?></td>
                           <td><?= $data['tahun_terbit'] ?></td>
                        </tr>
                     <?php
                     endforeach
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>