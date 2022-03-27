<?php

require_once 'db.php';

//Les index de $_post sont liés aux attributs name du formulaire html
insertProduct($_POST['titre'],$_POST['description'],$_POST['prix'],$_POST['quantite']);

header('Location: index.php');//redirection vers la page d'acceuil