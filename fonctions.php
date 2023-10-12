<?php

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

function calcul($a , $b)
{
    // $c = $a + $b;
    // return $c;
    // echo 'Calcul';
    return $a + $b;
}

echo calcul(10,12);

