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

   //$test = "Afbfqf54";
   //$resultat = complex_password($test);
   //if($resultat){
       //echo "mot de passe valide";
   //}
   //if($resultat==false){
       //echo "mot de passe invalide";
   //}
   
   //function complex_password($motdepasse){
   //$majfiltre = "/[A-Z]/";
   //$chiffrefiltre = "/[0-9]/";
   //if(strlen($motdepasse)==8 and preg_match($majfiltre ,$motdepasse)==1 and preg_match($chiffrefiltre ,$motdepasse)==1){
  // }else{
   //    return false;
   //}
   //}
  



//$date = date_create('14-07-2019');
//echo date_format($date, 'Y-m-d-W H//:i:s');

//$dateexo= new DateTime("14-07-2019");
//$semainedate = $dateexo->format("W");//renvoie le nombre de semaine passer depuis le debut de l'année
//echo "le nombre de semaine passer le ".$dateexo->format("d/m/Y")." est : ".$semainedate."<br>";

//$datefinform= new DateTime("06/07/2024 UTC");
//$datedujour= new DateTime(date("Y-m-d"));
//echo $datedujour->format("d/m/Y")."<br>";
//$ecartdejour = $datedujour->diff($datefinform);
//echo "nous somme le : ".date("d/m/Y")." le module ce terminant le : ".$datefinform->format("d/m/Y")." il reste ".$ecartdejour->format("%a")." jour <br>";
//if($datedujour->format("L")){
 //  echo "cette anée est bissextile<br>";
//}
//else{
//   echo "cette anée n'est pas bissextile<br>";
//}

//$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "32/13/2019");

//$errors = DateTime::getLastErrors();

//if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    //echo "ARGHHHH !";
//}

//echo date("H")."h".date("i")."<br>";

//$timestamp = 1000200000;
//$date = new DateTime();
//$date->setTimestamp($timestamp);
//echo $date->format('Y-m-d')





 // On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
 //$myVar = "Bonjour le monde";

// Ouverture en écriture seule 
//fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
//fputs($fp, $myVar); 

// Fermeture du fichier  
//fclose($fp); 




// Ouverture en lecture seule  
//$fp = fopen("essai.txt", "r"); 

// Boucle jusqu'à la fin du fichier
//while (!feof($fp)) 
//{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    //$ligne = fgets($fp, 4096); 
    //echo $ligne."<br>"; 
//} 



//$myVar = "Bonjour le monde";

// Ouverture en écriture seule 
//$fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
//fputs($fp, $myVar); 

// Fermeture du fichier  
//fclose($fp);

//$text = file('liens.txt');
//file('https://ncode.amorce.org/ressources/Pool/NEW_MS_FULL_STACK/WEB_PHP/liens.txt');
//foreach($text as $key => $value){
   //echo '<a href="'.$value.'"\>'.$value.'<\a><br>';
//}
//?>
<table class="table">
<thead>
    <tr>
      <th scope="col">Surname</th>
      <th scope="col">Firstname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
    </tr>
  </thead>
        <tbody>
            <?php 
            $list = file('https://ncode.amorce.org/customers.csv');
                foreach($list as $key => $value){
                    $pieces = explode(",", $value);
                    echo '<tr>';
                    foreach($pieces as $key2 => $value2){
                        echo "<td>".$value2.'</td>';
                    }
                    echo "</tr>";
                    }
            ?>
        </tbody>
        </table>
</body></html> 
</body>
</html>