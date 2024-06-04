<?php
// Parcours de toutes les variables de requête et affichage de leurs clés
foreach ($_REQUEST as $key) {
    echo $key. "<br>";
}
// Affichage du contenu du tableau $_FILES["fichier"]
var_dump($_FILES["fichier"]);
// Vérification s'il y a des erreurs dans le tableau $_FILES["fichier"]["error"]
if (sizeof($_FILES["fichier"]["error"]) > 0) {
    echo "yop";
    echo $_FILES["fichier"]["error"];
}
echo "<br>";
// Définition d'un tableau de types MIME autorisés (ici pour une image)
$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// Extraction du type MIME du fichier à l'aide de FILE_INFO
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

// Vérification si le type MIME est dans le tableau de types MIME autorisés
if (in_array($mimetype, $aMimeTypes)) {
    /* Le type MIME est parmi les autorisés, donc c'est bon, on peut déplacer et renommer le fichier */
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "images/photo.jpg");
    echo "<br>";
} else {
    // Le type MIME n'est pas autorisé, donc ERREUR

    echo "Type de fichier non autorisé";
    exit;
}
?>