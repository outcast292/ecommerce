<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";

$sql = "insert into produit (id_marque , id_categorie , label , prix_produit ) values(?,?, ?,?)";
$stml = $conn->prepare($sql);
$stml->bindValue(1,$_GET['id_marque'], PDO::PARAM_INT);
$stml->bindValue(2, $_GET['id_categorie'], PDO::PARAM_INT);
$stml->bindValue(3, $_GET["label"], PDO::PARAM_STR);
$stml->bindValue(4, $_GET["prix_produit"], PDO::PARAM_STR);

$stml->execute();

$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
?>

