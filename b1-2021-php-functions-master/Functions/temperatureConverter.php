



<?php

function temperatureConverter($temp, $saisi, $convert)
{

    if ($temp == "celsius" and $convert == "farenheigh")

        return ((($saisi * 9) / 5) + 32);

    if ($temp == "farenheigh" and $convert == "celsius")

        return ((($saisi - 32) * 5) / 9);

    if ($temp == "kalvin" and $convert == "celsius")
        return (((($saisi - 273.15) * 9) / 5) + 32);

    if ($temp == "farenheigh" and $convert == "farenheigh")
        return $saisi;

}