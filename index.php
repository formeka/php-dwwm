<?php

// include './header.php';
// include_once './header.php';
require './fonctions.php';
require './header.php';

// Un commentaire
/* 
un
commentaire
sur plusieurs
lignes
*/

// echo "<h1>Ceppic PHP</h1>";

/* $variable = 'une variable';
$Variable = 'Une Variable'; */

// echo $variable , $Variable;
// echo $variable . $Variable;
// echo $variable . " " . $Variable;
// echo $variable . ' ' . $Variable;
// echo "$variable";
// echo '$variable';
// echo "$variable . $Variable";
// echo '$variable . $Variable';

/* $camelCase = 'une variable en camel case';
$snake_case = 'une variable en snake case';
// $kebab-case = 'une variable en kebab case';
$PascalCase = 'une variable en pascal case'; */

/* $nombre = 45;
$nombreDecimale = 10.5;
$booleen = false; */

// print_r($nombre);
// var_dump($nombre);
// var_dump($nombreDecimale);
// var_dump($booleen);
// var_dump($variable);
// print_r($variable);

/* $fruit1 = 'pomme';
$fruit2 = 'banane';

echo "<p>$fruit1 <br> $fruit2</p>";
echo "<p>$fruit1" . "<br>" . "$fruit2</p>";
echo '<p>' . $fruit1 . '<br>' . $fruit2 .'</p>'; */

//Aujourd'hui il fait beau
// echo "Aujourd'hui il fait beau";
// echo 'Aujourd\'hui il fait beau';

/* $resultat = '';
$resultat .= '<h1>';
$resultat .= 'Cours PHP';
$resultat .= '</h1>';
echo $resultat; */

// echo $titre;

// $tableau = array();
$tableau = [
    'groupe',
    23,
    4.5,
    false,
    [1, 2, 3,true]
];

dd($tableau);
dbug($titre);
?>
<!-- <h3><?//= $titre ?></h3> -->

<?php

require './footer.php';
// echo $titre;
