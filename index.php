<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('./db_connect.php');

// request project
$idfrom = $_GET['idfrom'];
$query_caracters_from = $db->query("SELECT * FROM characters WHERE id LIKE $idfrom");
$query_caracters_from->execute();
$result_caracters_from = $query_caracters_from->fetchAll(PDO::FETCH_ASSOC);

// request project
$idto = $_GET['idto'];
$query_caracters_to = $db->query("SELECT * FROM characters WHERE id LIKE $idto");
$query_caracters_to->execute();
$result_caracters_to = $query_caracters_to->fetchAll(PDO::FETCH_ASSOC);

$toreturn = array(
    "idfrom" => (int)$_GET['idfrom'],
    "idto" => (int)$_GET['idto'],
    "objectfrom" => $result_caracters_from,
    "objectto" => $result_caracters_to,
);

// print_r($toreturn);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json; charset=utf-8');
echo json_encode($toreturn);