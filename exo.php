<?php
$NbrCol = 9;
$NbrLigne = 9;
echo '<table border="1" width="400">';

   echo '<tr>';
   echo '<td>0</td>';
   for ($j=1; $j<=$NbrCol; $j++) {
      echo '<td>'.$j.'</td>';
   }
   echo '</tr>';


for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
      
      if ($j==1) {
         echo '<td>'.$i.'</td>';
      }
         if ($i==$j) {
            echo '<td>';
         } else {
            echo '<td>';
         }
      echo $i*$j;
      echo '</td>';
   }
   echo '</tr>';
   $j=1;
}
echo '</table>';
?>