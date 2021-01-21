<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
$query = 'SELECT  cat.id_categorie, cat.nom_categorie, count(pr.id_produit) as prod_count from categorie cat left join produit pr on cat.id_categorie = pr.id_categorie  group by cat.id_categorie';
$sql = $conn->prepare($query);
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_ASSOC);
$msg["data"] = $results;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
