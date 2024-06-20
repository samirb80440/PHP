<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morse</title>
</head>
<body>
    <?php
    // Définition de la chaîne de caractères à traduire en morse
    $string="SALUT9";

    // Fonction pour traduire une chaîne de caractères en morse
    function stringToMorse($string){
        // Tableau de correspondance des lettres et des chiffres avec leur équivalent en morse
        $morsetradu = array(
            "A" => ".-",
            "B" => "-...",
            "C" => "-.-.",
            "D" => "-..",
            "E" => ".",
            "F" => "..-.",
            "G" => "--.",
            "H" => "....",
            "I" => "..",
            "J" => ".---",
            "K" => "-.-",
            "L" => ".-..",
            "M" => "--",
            "N" => "-.",
            "O" => "---",
            "P" => ".--.",
            "Q" => "--.-",
            "R" => ".-.",
            "S" => "...",
            "T" => "-",
            "U" => "..-",
            "V" => "...-",
            "W" => ".--",
            "X" => "-..-",
            "Y" => "-.--",
            "Z" => "--..",
            "0" => "-----",
            "1" => ".----",
            "2" => "..---",
            "3" => "...--",
            "4" => "....-",
            "5" => ".....",
            "6" => "-....",
            "7" => "--...",
            "8" => "---..",
            "9" => "----.",
            " " => " "
        );
        
        // Initialisation d'un compteur pour parcourir la chaîne de caractères
        $i=0;
        
        // Suppression des caractères non alphabétiques et non numériques de la chaîne de caractères
        $string = preg_replace('/[^a-zA-Z0-9 ]/', '', $string);
        
        // Boucle pour parcourir chaque caractère de la chaîne de caractères
        while($i!= strlen($string)){
            // Récupération du caractère courant en majuscule
            $N = strtoupper(substr($string,$i,1));
            
            // Ajout de la traduction en morse du caractère courant à la variable $concat
            $concat = $concat.$morsetradu[$N];
            
            // Affichage du caractère courant et de sa traduction en morse
            echo substr($string,$i,1).'=>'.$morsetradu[$N].'<br>';
            
            // Incrémentation du compteur
            $i++;
        }
        
        // Affichage de la chaîne de caractères originale et de sa traduction en morse
        echo    '<br>'.$string.' : traduit en morse ça donne : '.$concat;
    }

    // Appel de la fonction pour traduire la chaîne de caractères
    stringToMorse($string);
?>
</body>
</html>