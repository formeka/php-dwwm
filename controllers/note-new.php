<?php
require 'models/Database.php';

$users = $connexion->query('SELECT user_id,name FROM user')->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $noteNew = $connexion->prepare('
    INSERT INTO note (title,content,user_id)
    VALUES (:title , :content , :user_id)
    ');
    $noteNew->bindValue(':title', $_POST['title']);
    $noteNew->bindValue(':content', $_POST['content']);
    $noteNew->bindValue(':user_id', $_POST['user']);
    $noteNew->execute();

    header('Location: /notes');
    exit();

endif;

include 'views/note-new.view.php';
