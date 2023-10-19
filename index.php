<?php
require './fonctions.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uri);


$routes = [
  '/' => 'controllers/index.php',
  '/contact' => 'controllers/contact.php',
  '/notes' => 'controllers/notes.php'
];

dbug($routes);