<?php
require_once "../../connection/db.php";
if (isset($_GET["adresse"])) {
    $query = "update adresse set adresse = :adresse , code_postal = :code_postal , nom_complet=:nom_complet, tel_adresse_client =:tel_adresse_client  where id_adresse= :id_adresse;";
    $sql = $conn->prepare($query);
    $sql->execute(array(
        "id_adresse" => $_GET["id_adresse"],
        "adresse" => $_GET["adresse"],
        "code_postal" => $_GET["code_postal"],
        "nom_complet" => $_GET["nom_complet"],
        "tel_adresse_client" => $_GET["tel"]


    ));
    $msg["code"] = 200;
    $msg["msg"] = "ok";
}


$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json ;
