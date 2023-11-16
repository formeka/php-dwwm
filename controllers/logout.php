<?php
$_SESSION = [];
session_unset();
session_destroy();
setcookie('PHPSESSID', '', -1);

header('Location: /');
die();