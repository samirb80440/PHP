<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
<?php

/*$a = 1; 
while ($a < 150) { 
    echo $a; 
    $a=$a+2; 
} */
/*$sauvegarde = 1; 
while ($sauvegarde < 501) { 
    echo $sauvegarde="Je dois faire des sauvegardes régulières de mes fichiers"; A réparer la boucle
 
} 
/*    
/*$NbrCol = 9;
$NbrLigne = 9;
echo '<table border="1" width="400">';

   echo '<tr>';
   echo '<td>0</td>';
   for ($j=1; $j<=$NbrCol; $j++) {
      echo '<td">'.$j.'</td>';
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
*/
/*$années=array(
   "Janvier"=> "31",
   "Février"=> "28",
   "Mars"=> "31",
   "Avril"=> "30",
   "Mai"=> "31",
   "Juin"=> "30",
   "Juillet"=> "31",
   "Août"=> "31",
   "Septembre"=> "30",
   "Octobre"=> "31",
   "Novembre"=> "30",
   "Décembre"=> "31");
   
   asort($années);

   foreach($années as $cle => $valeur) 
   { 
      echo $cle ." : ".$valeur."<br>"; 
   }
*/


/*$capitales = array(
   "Bucarest" => "Roumanie",
   "Bruxelles" => "Belgique",
   "Oslo" => "Norvège",
   "Ottawa" => "Canada",
   "Paris" => "France",
   "Port-au-Prince" => "Haïti",
   "Port-d'Espagne" => "Trinité-et-Tobago",
   "Prague" => "République tchèque",
   "Rabat" => "Maroc",
   "Riga" => "Lettonie",
   "Rome" => "Italie",
   "San José" => "Costa Rica",
   "Santiago" => "Chili",
   "Sofia" => "Bulgarie",
   "Alger" => "Algérie",
   "Amsterdam" => "Pays-Bas",
   "Andorre-la-Vieille" => "Andorre",
   "Asuncion" => "Paraguay",
   "Athènes" => "Grèce",
   "Bagdad" => "Irak",
   "Bamako" => "Mali",
   "Berlin" => "Allemagne",
   "Bogota" => "Colombie",
   "Brasilia" => "Brésil",
   "Bratislava" => "Slovaquie",
   "Varsovie" => "Pologne",
   "Budapest" => "Hongrie",
   "Le Caire" => "Egypte",
   "Canberra" => "Australie",
   "Caracas" => "Venezuela",
   "Jakarta" => "Indonésie",
   "Kiev" => "Ukraine",
   "Kigali" => "Rwanda",
   "Kingston" => "Jamaïque",
   "Lima" => "Pérou",
   "Londres" => "Royaume-Uni",
   "Madrid" => "Espagne",
   "Malé" => "Maldives",
   "Mexico" => "Mexique",
   "Minsk" => "Biélorussie",
   "Moscou" => "Russie",
   "Nairobi" => "Kenya",
   "New Delhi" => "Inde",
   "Stockholm" => "Suède",
   "Téhéran" => "Iran",
   "Tokyo" => "Japon",
   "Tunis" => "Tunisie",
   "Copenhague" => "Danemark",
   "Dakar" => "Sénégal",
   "Damas" => "Syrie",
   "Dublin" => "Irlande",
   "Erevan" => "Arménie",
   "La Havane" => "Cuba",
   "Helsinki" => "Finlande",
   "Islamabad" => "Pakistan",
   "Vienne" => "Autriche",
   "Vilnius" => "Lituanie",
   "Zagreb" => "Croatie"
);
$capitales_trie= array_filter($capitales, function ($ville) {
   
   return strpos(strtolower($ville) ,'b')===0;
},
ARRAY_FILTER_USE_BOTH);
foreach($capitales_trie as $key=>$value){
   echo $key."=>".$value."<br>";
};


// asort($capitales);
// $nb = count($capitales);
// echo"Le tableau contient ".$nb." éléments."; 
// foreach($capitales as $cle => $valeur) 
// { 
//    echo $cle ." : ".$valeur."<br>"; 
// }

/*foreach($capitales as $cle => $ville) 
{ 
   echo $cle ." : ".$ville."<br>"; 

}
*/


//$departements = array(
//   "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
   //"Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
   //"Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
   //"Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
//);


//asort($departements);

//foreach( $departements as $key => $value )
//{
//echo $key .count($departements[$key]). ': <br>';

//foreach( $value as $valeur )
//echo ' ' . $valeur . '<br>';

//echo '<br>';
//}

   $test = "Afbfqf54";
   $resultat = complex_password($test);
   if($resultat){
       echo "mot de passe valide";
   }
   if($resultat==false){
       echo "mot de passe invalide";
   }
   
   function complex_password($motdepasse){
   $majfiltre = "/[A-Z]/";
   $chiffrefiltre = "/[0-9]/";
   if(strlen($motdepasse)==8 and preg_match($majfiltre ,$motdepasse)==1 and preg_match($chiffrefiltre ,$motdepasse)==1){//check si toute est en ordre
       return true;
   }else{
       return false;
   }
   }
   


?>
</body></html> 
</body>
</html>