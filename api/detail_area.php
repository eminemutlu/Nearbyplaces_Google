<?php
/*
if(!isset($_GET['latitude']) || !isset($_GET['longitude']) || !isset($_GET['radius'])) : 
    die();
endif;*/


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../objects/area.php';
 
$database = new Database();
$db = $database->getConnection();
 
$area = new Area($db);
 
$area->latitude = isset($_GET['latitude']) ? $_GET['latitude'] : die();
$area->longitude = isset($_GET['longitude']) ? $_GET['longitude'] : die();
$area->radius = isset($_GET['radius']) ? $_GET['radius'] : die();
$area->typesty = isset($_GET['typesty']) ? $_GET['typesty'] : die();

$area->readOne();
 
if($area->latitude!=null && $area->longitude!=null && $area->typesty!=null && $area->radius!=null){
  
    $area_arr = array(
        "id" => $area->id,
        "latitude" => $area->latitude,
        "longitude" => $area->longitude,
        "radius" => $area->radius,
        "typesty" => $area->typesty,
        "nearby_places" => $area->nearby_places
    );
 
    http_response_code(200);

    echo json_encode($area_arr);
}
 
else{
  
    http_response_code(404);
 
    echo json_encode(array("message" => "Data does not exist."));
}


?>