<?php
require 'models/Database.php';

if ( !isset($_GET['id']) || !is_numeric($_GET['id']) ) :
    abort();
endif;

$id = $_GET['id'];

$note = $connexion->prepare('DELETE FROM note where id = :id');
$note->bindParam(':id', $id);
$note->execute();

header('Location: /notes');
exit();