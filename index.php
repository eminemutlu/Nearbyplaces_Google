<?php 
    include 'config/variables.php'; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GOOGLE NEARBY IP</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery1.11.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>

  </head> 

  <body>

  <div class="container index">
    <form id="form" name="myForm">
      <div class="row">
        <div class="col-sm-3">
          <input type="text" name="latitude" value="" placeholder="Enter Latitude" class="form-control">
        </div>
        <div class="col-sm-3">
          <input type="text" name="longitude" value="" placeholder="Enter Longitude" class="form-control">
        </div>
        <div class="col-sm-3">
          <input type="text" name="radius" value="" placeholder="Enter Radius" class="form-control">
        </div>
        <div class="col-sm-3">
          <select title="locationtypes" id="types" class="form-control">
            <option value="all">Choose...</option>
            <?php
              foreach ($type_arr as $key => $value) {
                  echo '<option value="'.$value.'">'.ucwords($value).'</option>';
              }
            ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <input type="hidden" name="name" value="test">
          <input type="hidden" name="location" value="test_location">
          <input type="hidden" name="nearby_places" value="nearby_places_test_ediliyor">  
          <button type="button" class="btn btn-lg btn-info" id="button" onclick="submit_data();">Find Nearby Places</button>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 results" id="results">
      </div>
      </div>
    </form>
  </div> 

  <script>
  
    function submit_data()
    {

      var lang   = $("input[name=longitude]").val();
      var lat    = $("input[name=latitude]").val();
      var radius = $("input[name=radius]").val();

      lang = trim(lang);
      lat=trim(lat);
      radius=trim(radius);

      var type = document.getElementById("types");
      var typesty = type.options[type.selectedIndex].value;

      var lang_msg='Longitude is required!';
      var lat_msg='Latitude is required!';
      var radius_msg='Radius is required!';
      
      missinginfo = "";
        if (lang == "") { missinginfo += "\n"+lang_msg;}
        if (lat == "") { missinginfo += "\n"+lat_msg;}
        if (radius == "" ) { missinginfo += "\n"+radius_msg; }

      if (missinginfo != "") {
        alert(missinginfo);
      return false;

      } else {

        $.ajax({
          type: "GET",
          url: '<?php echo $url."/pages/nearbyarea_detail.php";?>',
          data: "longitude=" + lang+ "&latitude=" +  lat + '&radius=' +radius+ '&typesty='+typesty, 
          success : function(result) {

                    $('#results').html(result);
                     
                  },
                  error: function(xhr, textStatus, errorThrown) {
            
            console.log(errorThrown);
            
            }
            
        });

      }

    }

    </script>
    

  </body>
</html>

