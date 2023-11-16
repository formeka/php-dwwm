<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];

    $email = trim(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));


endif;

require 'views/login.view.php';
