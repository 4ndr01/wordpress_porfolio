<?php

/**
 * Créer une fonction "average" prenant en paramètre un tableau
 * et retournant la moyenne des valeurs de celui-ci.
 *
 * Exemples :
 * ([2, 3, 4]) => 3
 * ([-10, 5, -4]) => -3,
 * ([3.5]) => 3.5
 */

function average($tab):array
{

    $nbvalue = array_sum($tab);
    $nbarray = count($tab);



    $moyenne = $nbvalue / $nbarray;
    var_dump($tab);
    echo($moyenne);
    return($tab);
    }

