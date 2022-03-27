<?php

require_once 'db.php';
require_once 'header.php';
$utilisateurs=fetchuser();



?>

<table>
    <thead>
    <tr>
       <th>Civilité</th>
       <th>Nom</th>
       <th>Prénom</th>
       <th>Email</th>
       <th>Date de naissance</th>
       <th>Adresse</th>
       <th>Ville</th>
       <th>Code postal</th>
       <th>Nombre de commandes</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($utilisateurs as $utilisateur ):?>
    <tr>

        <td><?=$utilisateur['civilite'];?></td>
        <td><?=$utilisateur['nom'];?></td>
        <td><?=$utilisateur['prenom'];?></td>
        <td><?=$utilisateur['email'];?></td>
        <td><?=$utilisateur['date_naissance_format'];?></td>
        <td><?=$utilisateur['adresse'];?></td>

    </tr>

    </tbody>
    <?php endforeach;?>

</table>

<?php require_once 'footer.php'?>


















