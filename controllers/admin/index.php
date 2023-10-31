<?php
require 'models/Database.php';

$requete = 'SELECT 
n.id,
u.user_id,
n.title,
n.content,
n.created_at,
u.name
FROM note AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id
ORDER BY n.id DESC';

$notes = $connexion->query($requete)->fetchAll();

require 'views/admin/index.view.php';