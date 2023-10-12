<?php 
require './fonctions.php';

// dbug($_GET);
// dbug($_POST);
// dbug($_SERVER);
// dbug($_REQUEST);

// dbug($_GET['nom']);
// dbug(htmlspecialchars($_GET['nom']));
// dbug(htmlentities($_GET['nom']));

// if (isset($_POST['submitted'])) :
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    echo "Votre nom est : <strong>" . $_POST['nom'] . "</strong>.<br>";
    echo "Votre email est : <strong>" . $_POST['email'] . "</strong>.<br>";
    echo "Votre commentaire est : <strong>" . htmlspecialchars($_POST['commentaire']) . "</strong>.<br>";
    echo "Votre niveau est : <strong>" . $_POST['niveau'] . "</strong>.<br>";
    echo "Vos competences sont : <strong>" . implode(",", $_POST['competence']) . "</strong>.<br>";
endif;
?>