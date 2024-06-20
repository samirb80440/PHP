<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MORSE</title>
</head>
<body>
<?php
  // Définition de la chaîne de caractères à traduire
  $string = "SALUT9";

  // Fonction pour traduire une chaîne de caractères en code Morse
  function stringToMorse($string) {
    // Tableau de correspondance entre les caractères et leur équivalent en code Morse
    $morsetradu = array(
      "A" => " .- ",
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

    // Initialisation du compteur
    $i = 0;

    // Nettoyage de la chaîne de caractères pour ne garder que les lettres, les chiffres et les espaces
    $string = preg_replace('/[^a-zA-Z0-9 ]/', '', $string);

    // Boucle pour traduire chaque caractère de la chaîne
    while ($i != strlen($string)) {
      $N = strtoupper(substr($string, $i, 1));
      $concat = $concat . $morsetradu[$N];
      echo substr($string, $i, 1) . '=>' . $morsetradu[$N] . '<br>';
      $i++;
    }

    // Affichage du résultat
    echo '<br>' . $string . ' : traduit en morse ça donne : ' . $concat;
  }

  // Appel de la fonction pour traduire la chaîne de caractères
  stringToMorse($string);
?>
</body>
</html>