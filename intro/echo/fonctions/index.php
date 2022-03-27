<?php

function moyenne(array $tab):float{

    $tab2= array_sum($tab);

    $result= $tab2/count($tab);

    return $result;

}



echo moyenne([5,15,10]);



