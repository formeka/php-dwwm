<?php
session_start();

//$_SESSION['CouleurFavorite'] = 'vert';
$_SESSION['isConnected'] = true;


?>
<p><a href="./session.php">Lire la variable session</a></p>
<p><a href="./kill_session.php">Tuer la session</a></p>
<p><a href="./test.php">Test session</a></p>