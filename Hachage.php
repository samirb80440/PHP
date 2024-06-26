<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hachage</title>
</head>
<body>
<?php
// Définition du même mot de passe à hacher (pour démonstration)
$password = 'on_mot_de_passe';

// Génération d'un nouveau hachage du mot de passe à l'aide de l'algorithme Bcrypt
// Notez que ce hachage sera différent du précédent, même avec le même mot de passe
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Affichage du nouveau hachage généré
echo $hashed_password;









?>
</body>
</html>