<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//Fonction pour générer un mot de passe aléatoire
function generateRandomPassword($length = 12) {
  // Définition de la chaîne de caractères à utiliser pour générer le mot de passe
  // Cette chaîne contient des lettres majuscules et minuscules, des chiffres et des caractères spéciaux
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-={}:<>?';
  
  // Initialisation d'une chaîne vide pour stocker le mot de passe généré
  $randomString = '';
  
  // Boucle pour générer le mot de passe
  // La boucle itère $length fois pour générer un mot de passe de la longueur demandée
  for ($i = 0; $i < $length; $i++) {
    // Sélection d'un caractère aléatoire dans la chaîne $characters
    // La fonction rand génère un nombre aléatoire entre 0 et la longueur de la chaîne $characters - 1
    // Ce nombre est utilisé comme index pour sélectionner un caractère dans la chaîne $characters
    $randomString.= $characters[rand(0, strlen($characters) - 1)];
  }
  
  // Retourne le mot de passe généré
  return $randomString;
}

// Exemple d'utilisation de la fonction generateRandomPassword
// Génère un mot de passe aléatoire de 12 caractères
$password = generateRandomPassword(12);

// Affichage du mot de passe généré
echo "Mot de passe généré : $password";

?>
</body>
</html>