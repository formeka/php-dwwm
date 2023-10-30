<?php
require 'models/Database.php';

if ( !isset($_GET['id']) || !is_numeric($_GET['id']) || empty($_GET['id']) ) :
    abort();
endif;

$id = $_GET['id'];

$note = $connexion->prepare('SELECT 
n.id,
u.user_id,
n.title,
n.content,
n.created_at,
u.name
FROM note AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id
WHERE n.id = :id');

$note->bindParam(':id', $id);

$note->execute();

$note = $note->fetch(); 

if ( empty($note) || $note === false ) :
    abort();
endif;

require 'views/note.view.php';
