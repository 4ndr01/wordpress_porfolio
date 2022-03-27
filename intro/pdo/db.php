<?php
require_once 'setting.php';


try{
    $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,  DB_USER , DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);

} catch (PDOException $exception){
    //$exception->getMessage()
    echo "Erreur de connection a la base de données";
    die;

}
function fetchallProducts(string $sort="ASC"):array{
    global $connection;
       $query ="SELECT * FROM produit ORDER BY prix $sort LIMIT 3;";

    $stmt = $connection->prepare($query);
    $stmt-> execute();

    return $stmt->fetchAll();
}
function fetchProduct(int $id):array{
    global $connection;
    $query="SELECT* FROM produit WHERE id =:id";

    $stmt = $connection->prepare($query);
    $stmt->bindValue('id',$id);
    $stmt->execute();
    return $stmt->fetch();

}
function insertProduct(string $title, string $description, float $price, int $quantity):bool{

    global $connection;

    $query = "INSERT INTO produit (titre,descr, prix, qte) VALUES (:title,:description,:price,:quantity)";

    $stmt = $connection->prepare($query);
    $stmt->bindValue('title',$title);
    $stmt->bindValue('description',$description);
    $stmt->bindValue('quantity',$quantity);
    $stmt->bindValue('price',$price);
    return $stmt-> execute();

}
function fetchuser():array{
    global $connection;
    $query="SELECT utilisateur. *, civilite.libelle AS civilite,ville.nom AS ville, ville.cp,count(commande.id)AS nb_commandes, DATE_FORMAT(date_naissance,'%d/%m/%Y') AS date_naissance_format FROM utilisateur INNER JOIN civilite  on utilisateur.civilite_id = civilite.id
    LEFT JOIN ville ON utilisateur.ville_id=ville.id 
    LEFT JOIN commande ON utilisateur.id=utilisateur.id
    GROUP BY utilisateur_id, utilisateur.nom, utilisateur.prenom
    order by nom, prenom
    LIMIT 10";

    $stmt = $connection->prepare($query);

    $stmt->execute();
    return $stmt->fetchAll();


}



