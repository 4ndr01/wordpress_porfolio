<?php
require_once 'header.php';
require_once 'db.php';
$sort='DESC';
$produits=fetchallProducts($sort);
$nb_produits=count($produits);



/*var_dump($produits);
*/

?>

<h1>Les <?=  count($produits); ?> les plus qualitatifs</h1>

<fieldset>Ajouter un produit</fieldset>
<form action="insert_product.php" method="post">
    <input  type="text" name="titre" placeholder="Titre">
    <input type="file" name="image" accept="image/*">
    <textarea name="description" placeholder="Description"></textarea>
    <input name="prix" type="number" min="0" placeholder="Prix">
    <input name="quantite" type="number" min="0" placeholder="Quantité">
    <input type="submit">

</form>
<ul>
    <?php foreach ($produits as $produit):?>
    <li>
        <?php echo $produit['titre']; ?> (<?= $produit['prix']; ?>$)
        <a href="product.php?id=<?= $produit['id']?>">Voir plus</a>
    </li>
    <?php endforeach; ?>
</ul>

<?php require_once 'footer.php';?>