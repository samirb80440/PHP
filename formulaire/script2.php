<?php
// Affichage d'un message de bienvenue avec le prénom et le nom de l'utilisateur
echo "bonjour ". $_REQUEST['prenom']. " ". $_REQUEST['nom']. "<br>";

// Parcours de toutes les variables de requête et affichage de leurs clés
foreach ($_REQUEST as $key) {
    echo $key. "<br>";
}

// Affichage d'un message sur les habitudes de navigation sur le web de l'utilisateur
echo "Tu surfes sur le web en semaine plutôt le : ";

// Parcours du tableau "jours" et affichage de chaque jour
foreach ($_REQUEST["jours"] as $jour) {
    echo $jour. " - <br>";
}

// Vérification si le bouton "update" a été cliqué
if (isset($_POST['update'])) {
    echo "mise a jour";
}
// Vérification si le bouton "delete" a été cliqué
elseif (isset($_POST['delete'])) {
    echo "suppression";
}
// Vérification si le bouton "create" a été cliqué
elseif (isset($_POST['create'])) {
    echo "Création";
}

// Affichage d'un saut de ligne
echo "<br>";
?>