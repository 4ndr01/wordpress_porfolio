<?php

spl_autoload_register(function(string $class_name) {
    var_dump($class_name);
    require_once str_replace("\\", "/", $class_name) . ".php";
});
use \MyApp\Person;
use MyApp\student;
$john=new MyApp\Teacher("john", "Doe");




$pierre =new MyApp\Teacher("pierre","eds" );

echo $john->getFullname();



