<?php
// Print a greeting message with the user's first and last name
echo "bonjour " . $_REQUEST['prenom'] . " " . $_REQUEST['nom'] . "<br>";

// Loop through all request variables and print their keys
foreach($_REQUEST as $key){
    echo $key."<br>";
}

// Print a message about the user's web surfing habits
echo "Tu surfes sur le web en semaine plutôt le : ";

// Loop through the "jours" array and print each day
foreach ($_REQUEST["jours"] as $jour)   
{
    echo  $jour." - <br>";
}

// Check if the "update" button was clicked
if ( isset( $_POST['update'])) {
    echo "mise a jour";
}
// Check if the "delete" button was clicked
elseif ( isset($_POST['delete'])) {
    echo "suppression";
}
// Check if the "create" button was clicked
elseif ( isset($_POST['create'])) {
    echo "Création";
}

// Print a line break
echo"<br>";
?>