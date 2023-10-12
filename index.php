<?php 
require './fonctions.php'; 

// dbug($_GET);
// dbug($_POST);
/* Afficher des phrase avec les informations du formulaire :
    Votre nom est : 
    Votre email est : 
    ....
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Formulaire</title>
</head>

<body>
    <h1>Formulaire</h1>
    <form action="" method="POST">
        <label for="nom">Nom :
        <input type="text" name="nom" placeholder="Votre nom">
        </label>
        <label for="email">Email :
        <input type="email" name="email">
        </label>
        <label for="commentaire">Commentaire :
            <textarea name="commentaire" id="commentaire" cols="30" rows="10"></textarea>
        </label>
        <label for="niveau">
            Niveau:
            <input type="radio" name="niveau" value="debutant">Débutant
            <input type="radio" name="niveau" value="intermediaire">Intermediaire
            <input type="radio" name="niveau" value="expert">Expert
        </label>
        <label for="competence">
            Competence:
            PHP <input type="checkbox" name="competence[]" value="php">
            Python <input type="checkbox" name="competence[]" value="python">
            CSS <input type="checkbox" name="competence[]" value="css">
            Javascript <input type="checkbox" name="competence[]" value="javascript">
        </label>
        <input type="submit" name="submitted" value="Valider">
    </form>
</body>

</html>