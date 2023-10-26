<?php
require 'models/Database.php';

$users = $connexion->query('SELECT user_id,name FROM user')->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];
    //$errors = '';

    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $user = trim(filter_var($_POST['user'], FILTER_SANITIZE_NUMBER_INT));

    if (strlen($title) === 0) :
        $errors[] = 'Titre vide !!!';
    endif;

    if (strlen($title) >= 100) :
        $errors[] = 'Titre trop long !!!';
    endif;

    if (strlen($content) === 0) :
        $errors[] = 'Contenu vide !!!';
    endif;

    if (strlen($content) >= 1000) :
        $errors[] = 'Contenu supérieur à 1000 caratéres !!!';
    endif;

/*     if (strlen($title) >= 100 || strlen($title) === 0) :
        $errors[] = 'Titre trop long !!!';
    endif; */

/*     if (strlen($title) >= 100 || strlen($title) === 0) :
        $errors[] = 'Titre trop long !!!';
    endif;

    if (strlen($content) >= 100 || strlen($content) === 0) :
        $errors[] = 'Contenue trop long bouuuu !!!';
    endif; */

/*     if (strlen($title) >= 100 || strlen($title) === 0 || strlen($content) >= 1000 || strlen($content) === 0) :
        $errors = 'Le titre ou le contenue de votre note est incorrect !!!';
    endif; */

    if (empty($errors)) :
        $noteNew = $connexion->prepare('INSERT INTO note (title,content,user_id) VALUES (:title , :content , :user_id)');
        $noteNew->bindValue(':title', $title);
        $noteNew->bindValue(':content', $content);
        $noteNew->bindValue(':user_id', $user);
        $noteNew->execute();

        header('Location: /notes');
        exit();
    endif;

endif;

include 'views/note-new.view.php';
