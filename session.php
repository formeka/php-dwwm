<?php
session_start();

//echo $_SESSION['CouleurFavorite'];

if($_SESSION['isConnected']):
    echo 'Vous êtes bien connecté.';
else:
    echo 'Vous êtes déconnecté.';
endif;