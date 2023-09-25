<?php
echo "<table border=1 cellpadding=5 cellspacing=0>";
for ($i = 1; $i <= 10; $i++) {
   if ($i % 2 == 0) {
      echo "<tr align=center>
         <td>{$i}</td>
         <td bgcolor=yellow width=400pt><marquee direction=right>Genap</marquee></td>
      </tr>";
   } else {
      echo "<tr align=center>
         <td>{$i}</td>
         <td bgcolor=red><marquee behavior=alternate>Ganjil</marquee></td>
      </tr>";
   }
}
echo "</table>";
