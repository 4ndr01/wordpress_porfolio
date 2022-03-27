<?php

/**
 * Créer une fonction "getUrlParameters" permettant de récupérer sous forme de tableau
 * la liste des paramètres passés dans une URL.
 *
 * Exemples :
 * ("http://www.php.net?param=test") => ["param" => "test"]
 * ("http://www.php.net?param1=val1&param2=val2") => ["param1" => "val1", "param2" => "val2"]
 * ("http://www.php.net?params[]=val1&params[]=val2") => ["params" => ["val1", "val2"]]

 **/



    function getUrlParameters(string $URL){
        parse_str(parse_url(PHP_URL_QUERY, $URL),
            $tab);
        return $tab;

    }











