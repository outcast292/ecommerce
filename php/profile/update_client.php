<?php
session_start();
require_once "../connection/db.php";
if (isset($_GET["nom"])) {
    if($_GET["sexe"]=="Homme"){
        $sexe='m';
    }else{
        $sexe='f';
    }
    $query = "update client set nom_client = :nom_client ,date_naissance= :date_naissance, prenom_client = :prenom_client ,email= :email,  sexe = :sexe , tel_client = :tel_client  where id_client= :id_client;";
    $sql = $conn->prepare($query);
    $sql->execute(array(
        "id_client" => $_SESSION["id_client"],
        "nom_client" => $_GET["nom"],
        "prenom_client" => $_GET["prenom"],
        "sexe" => $sexe,
        "email" => $_GET["email"],
        "tel_client" => $_GET["tel"],
        "date_naissance" => $_GET["date"],


    ));
    $query = "update adresse set adresse = :adresse ,code_postal= :code_postal  where id_client= :id_client;";
    $sql = $conn->prepare($query);
    $sql->execute(array(
        "id_client" => $_SESSION["id_client"],
        "adresse" => $_GET["adresse"],
        "code_postal" => $_GET["zipcode"],
        

    ));
    $msg["code"] = 200;
    $msg["msg"] = "ok";
}


$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
