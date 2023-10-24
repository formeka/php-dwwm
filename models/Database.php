<?php
$user = 'root';
$pass = '';
$connexion = new PDO('mysql:host=localhost;dbname=notes', $user, $pass);

$notes = $connexion->query('SELECT * FROM note')->fetchAll(PDO::FETCH_ASSOC);

