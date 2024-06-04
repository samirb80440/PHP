<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
<?php

// Boucle while pour afficher les nombres impairs de 1 à 149
$a = 1; 
while ($a < 150) { 
    echo $a; 
    $a=$a+2; 
}

for ($i=0;$i!=501;$i++){//limiter la boucle car flemme des 500 fois
    echo "Je dois faire des sauvegardes régulières de mes fichiers.".$i ."<br>";
 }
 $N =0;
// Tableau des mois de l'année avec leur nombre de jours
$années=array(
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
   
// Tri du tableau par ordre alphabétique
asort($années);

// Affichage du tableau
foreach($années as $cle => $valeur) 
{ 
   echo $cle." : ".$valeur."<br>"; 
}


// Définissez un tableau de capitales, où chaque clé est la ville capitale et chaque valeur est le pays
$capitales = array(
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

// Filtrez le tableau pour ne garder que les capitales qui commencent par la lettre 'B'
$capitales_trie = array_filter($capitales, function ($ville) {
    // Vérifiez si la ville capitale commence par la lettre 'B' (insensible à la casse)
    return strpos(strtolower($ville), 'b') === 0;
}, ARRAY_FILTER_USE_BOTH);

// Affichez le tableau filtré
foreach ($capitales_trie as $key => $value) {
    echo $key. "=>". $value. "<br>";
}

// Triez le tableau original dans l'ordre alphabétique par clé
asort($capitales);

// Obtenez le nombre d'éléments dans le tableau
$nb = count($capitales);

// Affichez le nombre d'éléments dans le tableau
echo "Le tableau contient ". $nb. " éléments.";

// Affichez le tableau trié
foreach ($capitales as $cle => $valeur) {
    echo $cle. " : ". $valeur. "<br>";
}

// Affichez le tableau trié à nouveau
foreach ($capitales as $cle => $ville) {
    echo $cle. " : ". $ville. "<br>";
}



// Définissez un tableau de régions et de leurs départements
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

// Triez le tableau des régions dans l'ordre alphabétique
asort($departements);

// Affichez les régions et leurs départements
foreach ($departements as $key => $value) {
    // Affichez le nom de la région et le nombre de départements
    echo $key . ' (' . count($departements[$key]) . ') : <br>';
    
    // Affichez les départements de la région
    foreach ($value as $valeur) {
        echo ' ' . $valeur . '<br>';
    }
    
    // Ajoutez un saut de ligne entre les régions
    echo '<br>';
}

  // Définissez la fonction pour vérifier si un mot de passe est valide
function complex_password($motdepasse) {
    // Définissez les filtres pour les lettres majuscules et les chiffres
    $majfiltre = "/[A-Z]/";
    $chiffrefiltre = "/[0-9]/";
    
    // Vérifiez si le mot de passe a une longueur de 8 caractères, contient au moins une lettre majuscule et au moins un chiffre
    if (strlen($motdepasse) == 8 && preg_match($majfiltre, $motdepasse) == 1 && preg_match($chiffrefiltre, $motdepasse) == 1) {
        // Si le mot de passe est valide, retournez true
        return true;
    } else {
        // Si le mot de passe est invalide, retournez false
        return false;
    }
}

// Testez le mot de passe
$test = "Afbfqf54";
$resultat = complex_password($test);

// Affichez le résultat
if ($resultat) {
    echo "mot de passe valide";
} else {
    echo "mot de passe invalide";
}
  



// Créez un objet DateTime avec la date donnée
$date = date_create('14-07-2019');
echo date_format($date, 'Y-m-d-W H:i:s');

// Créez un nouvel objet DateTime avec la date donnée
$dateexo = new DateTime("14-07-2019");
// Utilisez la méthode format() pour obtenir le nombre de semaine passées depuis le début de l'année
$semainedate = $dateexo->format("W");
echo "Le nombre de semaine passées le ". $dateexo->format("d/m/Y"). " est : ". $semainedate. "<br>";

// Créez un nouvel objet DateTime avec la date de fin de formation
$datefinform = new DateTime("06/07/2024 UTC");
// Créez un nouvel objet DateTime avec la date du jour
$datedujour = new DateTime(date("Y-m-d"));
echo $datedujour->format("d/m/Y"). "<br>";
// Utilisez la méthode diff() pour obtenir la différence entre les deux dates
$ecartdejour = $datedujour->diff($datefinform);
echo "Nous sommes le : ". date("d/m/Y"). " le module se terminant le : ". $datefinform->format("d/m/Y"). " il reste ". $ecartdejour->format("%a"). " jour(s) <br>";
// Vérifiez si l'année en cours est bissextile
if ($datedujour->format("L")) {
    echo "Cette année est bissextile<br>";
} else {
    echo "Cette année n'est pas bissextile<br>";
}

// Créez un nouvel objet DateTime avec une date incorrecte
$oDate = DateTime::createFromFormat("d/m/Y H:i:s", "32/13/2019");

// Utilisez la méthode getLastErrors() pour vérifier si l'objet DateTime contient des erreurs ou des avertissements
$errors = DateTime::getLastErrors();

// Vérifiez si l'objet DateTime contient des erreurs ou des avertissements
if ($errors["error_count"] > 0 || $errors["warning_count"] > 0) {
    echo "ARGHHHH!";
}

// Affichez l'heure actuelle
echo date("H"). "h". date("i"). "<br>";

// Créez un nouvel objet DateTime avec un timestamp
$timestamp = 1000200000;
$date = new DateTime();
$date->setTimestamp($timestamp);
echo $date->format('Y-m-d');
?>

<?php

 // On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
 $myVar = "Bonjour le monde";

// Ouverture en écriture seule 
$fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp); 



// Ouverture en lecture seule  
$fp = fopen("essai.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} 



$myVar = "Bonjour le monde";

// Ouverture en écriture seule 
$fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp);

$text = file('liens.txt');
file('https://ncode.amorce.org/ressources/Pool/NEW_MS_FULL_STACK/WEB_PHP/liens.txt');
foreach($text as $key => $value){
   echo '<a href="'.$value.'"\>'.$value.'<\a><br>';
}


?>
<?php
// Lecture du fichier liens.txt
$text = file('liens.txt');

// Affichage des liens
foreach ($text as $key => $value) {
    // Échappe les guillemets dans la valeur
    $value = addslashes($value);
    echo '<a href="' . $value . '">' . $value . '</a><br>';
}

// Lecture du fichier customers.csv
$list = file('https://ncode.amorce.org/customers.csv');

// Affichage du tableau
?>
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
        <?php foreach ($list as $key => $value) {
            // Sépare les valeurs de la ligne en un tableau
            $pieces = explode(",", $value);
            echo '<tr>';
            foreach ($pieces as $key2 => $value2) {
                // Échappe les guillemets dans la valeur
                $value2 = addslashes($value2);
                echo "<td>" . $value2 . '</td>';
            }
            echo "</tr>";
        } ?>
    </tbody>
</table>