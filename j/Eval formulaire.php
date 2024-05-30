<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="Media.css">
</head>

<body>
    <header>
        <div class="tete">
            <img class="Logo" src="images/jarditou_logo.jpg" alt="Logo Jarditou" title="Logo Jarditou" width="200">
            <span class="jardin">Tout le jardin</span>
        </div>
    </header>
    <nav>
        <ul type="disc">
            <li><a href="PageAcceuil.html">Acceuil</a></li>
            <li><a href="Tableau.html">Tableau</a></li>
            <li><a href="Contact.html">Contact</a></li>
        </ul>
    </nav>
    <img class="promotion" src="/images/promotion.jpg" alt="Promotion" title="Promotion sur Lames de terrasse">
    <div class="paragraphe">
        <div class="texte">
            <h1><sup>*</sup>Contact</h1>
            <form id="formulaire" action="script.php" method="POST" enctype="multipart/form-data>
                <p>*Ces zones sont obligatoires</p>
                <fieldset>
                    <legend>Vos Coordonées</legend>
                    <br><label for="nom">Votre nom* :</label><input type="text" name="nom" id="nom" >
                    <br><label for="prenom">Votre prénom*: </label><input type="text" name="prenom" id="prenom">
                    <br><label for="Sexe">Sexe* :</label><input  id="Sexe" type="radio" name="Sexe" value="Féminin">Féminin
                    <input type="radio" name="Sexe" value="Masculin" id="Sexe2">Masculin
                    <br><label for="date">Date de naissance*: </label><input type="date" name="ddn" id="date">
                    <br><label for="Codepostal">Code postal*: </label><input type="text" name="Codepostal"
                        id="Codepostal">
                    <br><label for="Adresse">Adresse :</label><input type="text" name="Adresse" id="Adresse">
                    <br><label for="Ville">Ville :</label><input type="text" name="Ville" id="Ville">
                    <br><label for="Email">Email* :</label><input type="text" name="Email" id="email">
                </fieldset>
                <fieldset>
                    <legend>Votre demande</legend>
                    <label for="Sujet">Sujet*:</label>
                    <select id="Sujet">
                        <option value="" id="sujet1" selected>Veuillez séléctionner un sujet</option>
                        <option value="Mes commandes">Mes commandes</option>
                        <option value="Question sur un produit">Question sur un produit</option>
                        <option value="Réclamation">Réclamation</option>
                        <option value="Autres">Autres</option>
                    </select>
                    <br><label for="VotreQuestion">Votre Question*:</label><textarea name="Votre Question" rows="4"
                        cols="25" id="VotreQuestion" ></textarea>
                </fieldset>
                <input type="checkbox" name="case" id="validation"><label>*J'accepte le traitement informatique de ce formulaire</label><br>
                <br><input type="submit" value="Envoyer" >
                <input type="submit" value="Annuler">
            </form>
        </div>
        <div class="colonne">[COLONNE DROITE]</div>
    </div>
    <footer>
        <ul type="disc">
            <li><a href="PageAcceuil.html">Mention légales</a></li>
            <li><a href="PageAcceuil.html">Horaires</a></li>
            <li><a href="PageAcceuil.html">plan du site</a></li>
        </ul>
    </footer>
    <script src="eval formulaire.js"></script>
</body>
</html>