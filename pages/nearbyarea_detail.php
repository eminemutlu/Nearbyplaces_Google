
<?php

	$latitude  = $_GET["latitude"];
	$longitude = $_GET["longitude"];
	$radius    = $_GET["radius"];
	$typesty   = $_GET["typesty"];
	
	include_once '../config/variables.php'; 
	include_once '../config/database.php';
	include_once '../objects/area.php';

	$database = new Database();
	$db = $database->getConnection();
	$area = new Area($db);
	$area->latitude = $latitude;
	$area->longitude = $longitude;
	$area->radius = $radius;
	$area->typesty = $typesty;

	$results = "";
	$show_arr = array();
	$sonuc="NO"; 

	if(isset($latitude) && isset($longitude) && isset($radius)){
		
		$json_string = $url.'/api/detail_area.php?latitude='.$latitude.'&longitude='.$longitude.'&radius='.$radius.'&typesty='.$typesty;
		$jsondata = @file_get_contents($json_string);
		$arr = (array) json_decode($jsondata,true);
		$count = count($arr);
		
		if($count>0)
		{

			$show_arr = unserialize($arr["nearby_places"]);

		} else {
			
			if($typesty == 'all'){ $typesty = '';}

			$json_google = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$latitude.','.$longitude .'&radius='.$radius.'&types='.$typesty.'&key=AIzaSyCV1dzVyJ_Pdu68SArcca214-gTOsatSt8';
			$jsondatag = @file_get_contents($json_google);
			$arrgoogle = (array) json_decode($jsondatag,true);
			$count_google = count($arrgoogle);

			$api_status = $arrgoogle["status"];
	
			foreach ($arrgoogle["results"] as $key => $value) {
							
				$show_arr[] = array('name' => $value["name"], 'lng' => $value["geometry"]["location"]["lng"], 'lat' => $value["geometry"]["location"]["lat"]);
				
			}
            
            if(count($show_arr)>0){
            	$area->nearby_places = serialize($show_arr);
				if($area->create()){ $sonuc="OK"; }
            }
		}

		$results .='
				<table class="table">
				<thead>
					<tr>
				      <th scope="col">Name</th>
				      <th scope="col">Latitude</th>
				      <th scope="col">Longitude</th>
				      <th scope="col">Google Map</th>
				    </tr>';

		foreach ($show_arr as $key => $value) {
			
			$results .= 
				'<tr>
					<td>'.$value["name"].'</td>
					<td>'.$value["lat"].'</td> 
					<td>'.$value["lng"].'</td>
					<td><a href="https://www.google.com/maps/search/'.$value["lat"].','.$value["lng"].'" target="_blank">Lets Google Map:</a></td>
				</tr>';

		}
			
		$results .='</thead><tbody><table>';

		if($count == 0 && count($show_arr) == 0 ){
			$results=$api_status;
		}
			
		echo $count.'#'.$sonuc.'#'.$results;

	}


?>