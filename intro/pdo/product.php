<?php
require_once 'header.php';
require_once 'db.php';

$id = $_GET['id'];//fait référence a product.php,id=nb
$product = fetchProduct($id);

?>

<h1>Nom du produit: <?= $product['titre']; ?> </h1>
<h1><?= $product['descr']; ?></h1>





<?php require_once 'footer.php'?>