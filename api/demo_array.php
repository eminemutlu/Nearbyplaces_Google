<?php


   
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
            "icon" => "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
            "id" => "664dbd41cade5a5b40d1bfe302d0b926bf8a0065",
            "name" => "Millet Caddesi",
            "place_id" => "ChIJhyso-hDayhQRWvRcpgnGIDk",
            "reference" => "ChIJhyso-hDayhQRWvRcpgnGIDk",
            "scope" => "GOOGLE",
            "types" => array("route")
         ),
         array(
            "geometry" =>  array(
               "location" => array(
                 "lat" => 41.0082376,
                  "lng" => 28.9783589
               ),
               "viewport" => array(
                  "northeast" => array( 
                      "lat" => 41.199239,
                      "lng" => 29.4288049
                  ),
                  "southwest" => array( 
                     "lat" => 40.811404,
                     "lng" => 28.595554
                  )
               )
            ),
               "icon" => "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
               "id" => "f8837dbe3fd95c9dcd9519b75e8a39159c205c3d",
               "name" => "İstanbul",
               "photos" => array( 
                  array(
                  
                     "height" => 1251,
                     "html_attributions" => array(
                        //array(
                        "\u003ca href=\"https://maps.google.com/maps/contrib/114618182700913084001/photos\"\u003eRoon Singh\u003c/a\u003e"
                        //),
                     ),
                     "photo_reference" => "CmRaAAAAqM2I5aABPjYQhwuyw-M3SV_ve-L5kG9LLRI5r3BBh6irvmRm1ZRtxas7oF7bKBXO3_nLbtMbCfaUSOd_j6-qzS-FYBhKqHa9uruOawO1lana2W_Y697fTv-Q-nAQnkXNEhA9y9XUDrUfJ7npKpO2CNFTGhRwYfRKDoW7dn6sDVLl2PfIRPg3Qw",
                     "width" => 1889
                  ),
               ),
               "vicinity" => "İstanbul",
               "place_id" => "ChIJhyso-hDayhQRWvRcpgnGIDk",
               "reference" => "ChIJhyso-hDayhQRWvRcpgnGIDk",
               "scope" => "GOOGLE",
               "types" => array("route")
         )

      ),
   "status" => "OK"
);

//print '<pre>'.print_r($new,true).'</pre>';

print json_encode($new);
/*   
echo '{
   "html_attributions" : [],
   "results" : [
      {
         "geometry" : {
            "location" : {
               "lat" : 40.9277355,
               "lng" : 29.3111358
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 40.9291284802915,
                  "lng" : 29.31266365
               },
               "southwest" : {
                  "lat" : 40.9264305197085,
                  "lng" : 29.30956305
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
         "id" : "664dbd41cade5a5b40d1bfe302d0b926bf8a0065",
         "name" : "Millet Caddesi",
         "place_id" : "ChIJhyso-hDayhQRWvRcpgnGIDk",
         "reference" : "ChIJhyso-hDayhQRWvRcpgnGIDk",
         "scope" : "GOOGLE",
         "types" : [ "route" ]
      },
      {
         "geometry" : {
            "location" : {
               "lat" : 41.0082376,
               "lng" : 28.9783589
            },
            "viewport" : {
               "northeast" : {
                  "lat" : 41.199239,
                  "lng" : 29.4288049
               },
               "southwest" : {
                  "lat" : 40.811404,
                  "lng" : 28.595554
               }
            }
         },
         "icon" : "https://maps.gstatic.com/mapfiles/place_api/icons/geocode-71.png",
         "id" : "f8837dbe3fd95c9dcd9519b75e8a39159c205c3d",
         "name" : "İstanbul",
         "photos" : [
            {
               "height" : 1251,
               "html_attributions" : [
                  "\u003ca href=\"https://maps.google.com/maps/contrib/114618182700913084001/photos\"\u003eRoon Singh\u003c/a\u003e"
               ],
               "photo_reference" : "CmRaAAAAqM2I5aABPjYQhwuyw-M3SV_ve-L5kG9LLRI5r3BBh6irvmRm1ZRtxas7oF7bKBXO3_nLbtMbCfaUSOd_j6-qzS-FYBhKqHa9uruOawO1lana2W_Y697fTv-Q-nAQnkXNEhA9y9XUDrUfJ7npKpO2CNFTGhRwYfRKDoW7dn6sDVLl2PfIRPg3Qw",
               "width" : 1889
            }
         ],
         "place_id" : "ChIJawhoAASnyhQR0LABvJj-zOE",
         "reference" : "ChIJawhoAASnyhQR0LABvJj-zOE",
         "scope" : "GOOGLE",
         "types" : [ "locality", "political" ],
         "vicinity" : "İstanbul"
      }
   ],
   "status" : "OK"
}';
*/
?>