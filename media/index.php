<?php

spl_autoload_register(function (string $className){
    var_dump($className);
    require_once str_replace("\\", "/", $className). ".php";

});

use \Media\media;

$img =new \Media\Picture\Picture();
$img->setUrl("https://via.plaeholder.com/150");
$img->setAlt("placeholder");


$img->render();