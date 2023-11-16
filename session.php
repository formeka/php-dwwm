<?php
session_start();

//echo $_SESSION['CouleurFavorite'];

if(isset($_SESSION['isConnected'])):
    echo 'Vous êtes bien connecté.';
else:
    echo 'Vous êtes déconnecté.';
endif;

?>
<p><a href="./index.php">Retour acceuil</a></p>