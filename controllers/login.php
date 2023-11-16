<?php
require 'models/Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];

    $email = trim(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $motdepasse = $_POST['motdepasse'];

    if (strlen($email) === 0) :
        $errors[] = 'Email vide !!!';
    endif;

    if (strlen($email) >= 20) :
        $errors[] = 'Email trop long !!!';
    endif;

    if (empty($errors)) :
        $loginUser = $connexion->prepare('SELECT * FROM `user` 
        WHERE email = :email AND motdepasse = :motdepasse  AND status = 1');
        
        $loginUser->bindValue(':email', $email, PDO::PARAM_STR);
        $loginUser->bindValue(':motdepasse', $motdepasse, PDO::PARAM_STR);

        $loginUser->execute();
        $loginUser = $loginUser->fetch(); 

        if(!is_array($loginUser)):
            $errors[] = 'Email ou Mot de passe incorrect !';
        else:
            // SESSION
            $_SESSION['isLogged'] = true;
            $_SESSION['userId'] = $loginUser['user_id'];
            $_SESSION['userRole'] = $loginUser['user_role'];


            header('Location: /notes');
            die();

        endif;

    endif;


endif;

require 'views/login.view.php';
