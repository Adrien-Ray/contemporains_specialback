<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('./db_connect.php');

$toreturn = array(
    "idfrom" => (int)$_GET['idfrom'],
    "idto" => (int)$_GET['idto'],
);

// print_r($toreturn);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json; charset=utf-8');
echo json_encode($toreturn);