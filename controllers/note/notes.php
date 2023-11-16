<?php
require 'models/Database.php';

dbug($_SESSION['isLogged']);
dbug($_SESSION['userId']);

if(isset($_SESSION['isLogged']) && isset($_SESSION['userId'])) :

    $notes = $connexion->prepare('SELECT * FROM note as n 
    INNER JOIN user as u ON n.user_id = u.user_id 
    WHERE u.status = 1 AND u.role = `role_user` AND u.user_id = :userid 
    ORDER BY id DESC');

    $notes->bindValue(':userid', $_SESSION['userId'], PDO::PARAM_STR);

    $notes->execute();
    $notes = $notes->fetchAll(); 



else:
    header('Location: /');
    die();
endif;



require 'views/note/notes.view.php';