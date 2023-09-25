<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <fieldset>
      <legend>Form</legend>
      <form action="" method="post">
         <div style="margin-bottom: 5px;">
            <label for="jamker">Jam Kerja</label>
            <input type="number" name="jamker" id="jamker">
         </div>
         <button type="submit" name="submit">Submit</button>
      </form>
   </fieldset>
   <?php if (isset($_POST['submit'])) {
      $gaji_mingguan = 900000;
      $jamker = $_POST['jamker'];
      $kerja_normal = 40;
      if ($jamker > $kerja_normal) {
         $lembur = $jamker - $kerja_normal;
         $total_lembur = $lembur * 20000;
      } else {
         $lembur = 0;
         $total_lembur = $lembur * 20000;
      }
      $total = $gaji_mingguan + $total_lembur;
   ?>
      <fieldset>
         <legend>Output</legend>
         <div style="margin-bottom: 5px;">
            <label for="gm">Gaji Mingguan</label>
            <input type="number" value=<?= $gaji_mingguan ?> id="gm">
         </div>
         <div style="margin-bottom: 5px;">
            <label for="lembur">Lembur</label>
            <input type="number" value=<?= $lembur ?> id="lembur">
         </div>
         <div style="margin-bottom: 5px;">
            <label for="total_lembur">Total Lembur</label>
            <input type="number" value=<?= $total_lembur ?> id="total_lembur">
         </div>
         <div style="margin-bottom: 5px;">
            <label for="total">Total Gaji</label>
            <input type="number" value=<?= $total ?> id="total">
         </div>
      </fieldset>
   <?php } ?>

</body>

</html>