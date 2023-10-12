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
// $age = 10;
// if($age >= 18) {
//     echo 'Peut voter.';
// } else {
//     echo 'Ne peut pas voter !';
// }
// echo ($age >= 18) ? 'Peut voter' : 'Ne peut pas voter !';

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

// $a = 20;
// $b = '5';

// if($b != 3):
//     echo 'La variable $b n\' est pas égale à 3';
// endif;

// if($b === '5'):
//     echo 'La variable $b égale à 5';
// endif;

 $vrai = true;
// $vrai = null;
// if($vrai):
//     echo 'Vrai';
// else:
//     echo 'Faux';
// endif;
// if ($vrai) {
//     echo 'Vrai';
// } else {
//     echo 'Faux';
// }

// echo $vrai ? 'Vrai' : 'Faux';
// echo $vrai ?: 'Vrai';
// echo $truc ?? 'a is not set'; 
//echo $vrai ?? 'Faux'; 

// $votes = 7500;
// dbug($votes);
// $votesPrecedents = 1254;
// ($votes > $votesPrecedents) ? $votes-- : $votes++;
// dbug($votes);

// $couleur = 'violet';
// switch ($couleur) {
//     case 'rouge':
//         echo 'Votre couleur favorite est le rouge';
//         break;
//     case 'bleue':
//         echo 'Votre couleur favorite est le bleue';
//         break;
//     case 'vert':
//         echo 'Votre couleur favorite est le vert';
//         break;
//     default:
//         echo 'Votre couleur favorite est ni le rouge,ni le blue,ni le vert';
// }

// $return_value = match($couleur) {
//     'rouge' => 'Votre couleur favorite est le rouge',
//     'bleue' => 'Votre couleur favorite est le blue',
//     'vert' => 'Votre couleur favorite est le vert',
//     default => 'Votre couleur favorite est ni le rouge,ni le blue,ni le vert'
// };

// echo $return_value;