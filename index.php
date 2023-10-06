<?php
require './fonctions.php';

$titre = "Condtions";

$user = [
    'nom' => 'Doupet Lucien',
    'email' => 'ldoupe@yaya.com',
    'competence' => ['php', 'react', 'python']
];

// if/else/elseif
/*
>
<
>=
<=
== : comparaison d'egalite en valeur
=== : comparaison d'egalite en valeur et en type
!=
!==
*/
$age = 20;
// if($age >= 18) {
//     echo 'Peut voter.';
// } else {
//     echo 'Ne peut pas voter !';
// }

/* if ($age >= 18) :
    echo 'Peut voter.';
else :
    echo 'Ne peut pas voter !!!';
endif; */

// $heure = 15;
// $heure = date('H');
// dd($heure);

/* if($heure <= 12):
    echo "On est le matin.";
elseif($heure >= 18):
    echo "On est le soir.";
else:
    echo "On est l'apres-midi.";
endif; */

$a = 20;
$b = '5';

// if($b != 3):
//     echo 'La variable $b n\' est pas égale à 3';
// endif;

if($b === '5'):
    echo 'La variable $b égale à 5';
endif;


// require './index.view.php';