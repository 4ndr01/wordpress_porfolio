<?php

/**
 * Créer une fonction "moreOrLess" indiquant si la valeur saisie est plus grande, plus
 * petite ou égale à la valeur recherchée.
 *
 * Exemples :
 * (20, 50) => "+"
 * (70, 50) => "-"
 * (50, 50) => "="
 * (-5.2, 3.4) => "+"
 */



function moreOrLess($cible, $saisi)
{

    if ($saisi < $cible) {
        return("plus petit");
    }

    if ($saisi > $cible) {
        return("plus grande");
    }

    if ($saisi == $cible) {
        return("égale");
    }
}