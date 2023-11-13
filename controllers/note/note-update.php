<?php
require 'models/Database.php';

$requete = "SELECT user_id,name FROM user";
$users = $connexion->query($requete)->fetchAll();

if ( !isset($_GET['id']) || !is_numeric($_GET['id']) || empty($_GET['id']) ) :
    abort();
endif;

$id = $_GET['id'];

$noteUpdate = $connexion->prepare('SELECT 
n.id,
u.user_id,
n.title,
n.content,
n.created_at,
n.image,
u.name
FROM note AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id
WHERE n.id = :id');

$noteUpdate->bindParam(':id', $id);
$noteUpdate->execute();
$noteUpdate = $noteUpdate->fetch(); 

if ( empty($noteUpdate) || $noteUpdate === false ) :
    abort();
endif;

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];

    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $author = trim(filter_var($_POST['author'], FILTER_SANITIZE_NUMBER_INT));

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

    if(empty($_POST['author']) || strlen($_POST['author'] === 0)) :
        $errors[] = 'Aucun auteur séléctionné !!!';
    endif;

    //========
    // IMAGE
    //========
    $uploaddir = "uploads/";
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && 
    $imageFileType != "png" && 
    $imageFileType != "jpeg"
    && $imageFileType != "gif"
     ) :
        $errors[] =  "Le fichier téléversé n'est pas autorisé , seul les extensions suivantes sont autorisés :JPG, JPEG, PNG , GIF";
    endif;

    $fileError = $_FILES['image']['error'];

    $phpFileUploadErrors = [
        0 => 'Aucune erreur , le fichier est téléversé avec succés',
        1 => 'Le fichier téléversé  dépasse la taille autorisé par PHP',
        2 => 'Le fichier téléversé dépasse la taille autorisé par le formualire',
        3 => 'Le fichier téléversé a été partiellement téléversé',
        4 => 'Aucun fichier séléctionné',
        6 => 'Dossier temporaire manquant',
        7 => 'Echec d\'ecriture sur le disque dur',
        8 => 'Un extension PHP a arrété le téléversement du fichier',
    ];

    if (array_key_exists($fileError, $phpFileUploadErrors)) :
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile) && $phpFileUploadErrors[0] ) :
            $imageInsert = basename($_FILES['image']['name']);
        else:
            $errors[] =  $phpFileUploadErrors[$fileError];
        endif;
    else:
        $errors[] =  $phpFileUploadErrors[$fileError];
    endif;


    // UPDATE

    if (empty($errors)) :
        $noteNewUpdate = $connexion->prepare('UPDATE note SET title = :title ,content = :content ,user_id = :user_id , image = :image WHERE id = :id');
        
        $noteNewUpdate->bindValue(':title', $title, PDO::PARAM_STR);
        $noteNewUpdate->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNewUpdate->bindValue(':user_id', $author, PDO::PARAM_INT);
        $noteNewUpdate->bindValue(':id', $id, PDO::PARAM_INT);  
        $noteNewUpdate->bindValue(':image', $imageInsert, PDO::PARAM_STR);

        $noteNewUpdate->execute();

        header('Location: /notes');
        exit();

    endif;

endif;

include 'views/note/note-update.view.php';
