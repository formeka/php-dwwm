<?php
require 'models/Database.php';

if ( !isset($_GET['id']) || !is_numeric($_GET['id']) ) :
    abort();
endif;

$id = $_GET['id'];

$note = $connexion->prepare('DELETE FROM note WHERE id = :id');

$note->bindValue(':id', $id, PDO::PARAM_INT);

$note->execute();

header('Location: /admin');
exit();