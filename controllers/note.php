<?php
require 'models/Database.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) :
    abort();
endif;

$id = $_GET['id'];

$note = $connexion->prepare('SELECT * FROM note AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id
WHERE n.id = :id');
$note->bindParam(':id', $id);
$note->execute();
$note = $note->fetch(PDO::FETCH_ASSOC);


require 'views/note.view.php';
