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
               <form action="insert.php" method="POST">
                  <div class="mb-3">
                     <label for="judul" class="form-label">Judul Buku</label>
                     <input type="text" class="form-control" name="judul_buku" placeholder="Masukkan judul buku">
                  </div>
                  <div class="mb-3">
                     <label for="judul" class="form-label">Penulis</label>
                     <input type="text" class="form-control" name="penulis" placeholder="Masukkan penulis buku">
                  </div>
                  <div class="mb-3">
                     <label for="judul" class="form-label">Penerbit</label>
                     <input type="text" class="form-control" name="penerbit" placeholder="Masukkan penerbit buku">
                  </div>
                  <div class="mb-3">
                     <label for="judul" class="form-label">Tahun Terbit</label>
                     <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukkan tahun terbit">
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary" name="submit">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>