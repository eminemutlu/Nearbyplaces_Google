<?php

 /*  
   $new = array(
   "html_attributions" => array(),
   "results" => array(
         array(
            "geometry" =>  array(
               "location" => array(
                  "lat" => 40.9277355,
                  "lng" => 29.3111358
               ),
               "viewport" => array(
                  "northeast" => array( 
                     "lat" => 40.9291284802915,
                     "lng" => 29.31266365
                  ),
                  "southwest" => array( 
                     "lat" => 40.9264305197085,
                     "lng" => 29.30956305
                  )
               )
            ),
            "formatted_address" => "Yenişehir Mahallesi, 34912 Pendik/Istanbul, Turkey",
            
            "name" => "Millet Caddesi",
           
         ),
      

      ),
   "status" => "OK"
);

//print '<pre>'.print_r($new,true).'</pre>';

print json_encode($new);

*/



$new = array(
  'results' => 
  array (
    0 => 
    array (
      'address_components' => 
      array (
        0 => 
        array (
          'long_name' => '1600',
          'short_name' => '1600',
          'types' => 
          array (
            0 => 'street_number',
          ),
        ),
        1 => 
        array (
          'long_name' => 'Amphitheatre Pkwy',
          'short_name' => 'Amphitheatre Pkwy',
          'types' => 
          array (
            0 => 'route',
          ),
        ),
        2 => 
        array (
          'long_name' => 'Mountain View',
          'short_name' => 'Mountain View',
          'types' => 
          array (
            0 => 'locality',
            1 => 'political',
          ),
        ),
        3 => 
        array (
          'long_name' => 'Santa Clara County',
          'short_name' => 'Santa Clara County',
          'types' => 
          array (
            0 => 'administrative_area_level_2',
            1 => 'political',
          ),
        ),
        4 => 
        array (
          'long_name' => 'California',
          'short_name' => 'CA',
          'types' => 
          array (
            0 => 'administrative_area_level_1',
            1 => 'political',
          ),
        ),
        5 => 
        array (
          'long_name' => 'United States',
          'short_name' => 'US',
          'types' => 
          array (
            0 => 'country',
            1 => 'political',
          ),
        ),
        6 => 
        array (
          'long_name' => '94043',
          'short_name' => '94043',
          'types' => 
          array (
            0 => 'postal_code',
          ),
        ),
      ),
      'formatted_address' => '1600 Amphitheatre Parkway, Mountain View, CA 94043, USA',
      'geometry' => 
      array (
        'location' => 
        array (
          'lat' => 37.4224764,
          'lng' => -122.0842499,
        ),
        'location_type' => 'ROOFTOP',
        'viewport' => 
        array (
          'northeast' => 
          array (
            'lat' => 37.4238253802915,
            'lng' => -122.0829009197085,
          ),
          'southwest' => 
          array (
            'lat' => 37.4211274197085,
            'lng' => -122.0855988802915,
          ),
        ),
      ),
      'place_id' => 'ChIJ2eUgeAK6j4ARbn5u_wAGqWA',
      'types' => 
      array (
        0 => 'street_address',
      ),
    ),
  ),
  'status' => 'OK',
);


print json_encode($new);
/*
{
   "results" : [
      {
         "address_components" : [
            {
               "long_name" : "1600",
               "short_name" : "1600",
               "types" : [ "street_number" ]
            },
            {
               "long_name" : "Amphitheatre Pkwy",
               "short_name" : "Amphitheatre Pkwy",
               "types" : [ "route" ]
            },
            {
               "long_name" : "Mountain View",
               "short_name" : "Mountain View",
               "types" : [ "locality", "political" ]
            },
            {
               "long_name" : "Santa Clara County",
               "short_name" : "Santa Clara County",
               "types" : [ "administrative_area_level_2", "political" ]
            },
            {
               "long_name" : "California",
               "short_name" : "CA",
               "types" : [ "administrative_area_level_1", "political" ]
            },
            {
               "long_name" : "United States",
               "short_name" : "US",
               "types" : [ "country", "political" ]
            },
            {
               "long_name" : "94043",
               "short_name" : "94043",
               "types" : [ "postal_code" ]
            }
         ],
         "formatted_address" : "1600 Amphitheatre Parkway, Mountain View, CA 94043, USA",
         "geometry" : {
            "location" : {
               "lat" : 37.4224764,
               "lng" : -122.0842499
            },
            "location_type" : "ROOFTOP",
            "viewport" : {
               "northeast" : {
                  "lat" : 37.4238253802915,
                  "lng" : -122.0829009197085
               },
               "southwest" : {
                  "lat" : 37.4211274197085,
                  "lng" : -122.0855988802915
               }
            }
         },
         "place_id" : "ChIJ2eUgeAK6j4ARbn5u_wAGqWA",
         "types" : [ "street_address" ]
      }
   ],
   "status" : "OK"
}*/
?>
