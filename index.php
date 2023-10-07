<?php // silent is golden

$toreturn = array(
    "key" => "value",
);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json; charset=utf-8');
echo json_encode($toreturn);