<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../objects/area.php';

$database = new Database();
$db = $database->getConnection();

$area = new Area($db);

$data = json_decode(file_get_contents("php://input"));


if(
    !empty($data->radius)
){ 
 
    $area->latitude = $data->latitude;
    $area->longitude = $data->longitude;
    $area->radius = $data->radius;
    $area->typesty = $data->typesty;
    $area->nearby_places = $data->nearby_places;
    
    if($area->create()){
        
        http_response_code(201);
 
        echo json_encode(array("message" => "OK"));
    }
    else{
 
        http_response_code(503);
 
        echo json_encode(array("message" => "Unable to create data."));
    }
}
 
else{
    
    http_response_code(400);
 
    echo json_encode(array("message" => "Unable to create area. Data is incomplete."));
}


?>