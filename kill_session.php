<?php
session_start();

$_SESSION = [];
session_unset();
session_destroy();
setcookie('PHPSESSID', '', -1);

header('Location: session.php');
die();