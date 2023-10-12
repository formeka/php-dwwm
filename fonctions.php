<?php
declare(strict_types=1);

function dbug($value)
{
    echo '<pre style="background-color:black;color:white;overflow: auto;padding: 10px;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

function dd($value)
{
    dbug($value);
    die('Script php arrété !!!');
}

//////////////////////////////////////////////////

// function calcul($a , $b)
// {
//     // $c = $a + $b;
//     // return $c;
//     // echo 'Calcul';
//     return $a + $b;
// }

// echo calcul(10,12);

// function calcul($a , $b=12)
// {
//     return $a + $b;
// }

// echo calcul(10,12);
// echo calcul(10);

// Creer une fonction qui calcul le prix TTC en lui passant un prix HT et la TVA
// function calculPrixTTC($prixHT, $tva)
// {
//     return $prixHT + ($prixHT * $tva) / 100;
// }
// echo calculPrixTTC(34,10);

// Creer une fonction qui calcul l'age d'une personne en lui donnant sa date de naissance
// function calculAge($anneNaissance)
// {
//     $anneeEnCours = date("Y");
//     return $anneeEnCours - $anneNaissance;
// }
// echo calculAge(1990);

// $calcul = function ($nb) {
//     return $nb + 1;
// };

// echo $calcul(25);


// function calcul(int | float $a , int | float $b): int | float
// function calcul(int | float $a , int | float $b): mixed
// {
//     return $a + $b;
// }

// echo calcul(2.6,5);