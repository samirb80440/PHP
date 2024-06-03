<?php
// Définir le nombre de colonnes et de lignes
$NbrCol = 9;
$NbrLigne = 9;

// Commencer à créer le tableau
echo '<table border="1" width="400">';

// Créer la première ligne avec les en-têtes de colonne
echo '<tr>';
echo '<td>0</td>'; // Première cellule est 0
for ($j=1; $j<=$NbrCol; $j++) {
   echo '<td>'.$j.'</td>'; // En-têtes de colonne de 1 à 9
}
echo '</tr>';

// Créer le reste du tableau
for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>'; // Nouvelle ligne
   for ($j=1; $j<=$NbrCol; $j++) {
      // Première cellule de chaque ligne est le numéro de ligne
      if ($j==1) {
         echo '<td>'.$i.'</td>'; 
      }
      // Si c'est une cellule diagonale, la laisser vide
      if ($i==$j) {
         echo '<td>';
      } else {
         echo '<td>'; // Cellule normale
      }
      // Calculer et afficher le résultat de la multiplication
      echo $i*$j;
      echo '</td>';
   }
   echo '</tr>'; // Fin de la ligne
   // Réinitialiser le compteur de colonne (non nécessaire dans ce cas, mais bonne pratique)
   $j=1;
}
echo '</table>'; // Fin du tableau
?>