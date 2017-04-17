<?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/demak.json");   
    $json_a = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/forecast10day/q/ID/demak.json");   
    $json_b = json_decode($json_string);

        //pencarian variabel
    $lokasi = $json_a->{"current_observation"}->{"display_location"}->{"city"};
    $tempf  = $json_a->{"current_observation"}->{"temp_f"};


  
    $kondisi0 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
	$kondisi1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"conditions"};
	$kondisi2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"conditions"};
	$kondisi3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"conditions"};
	$kondisi4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"conditions"};
	$kondisi5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"conditions"};
	$kondisi6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"conditions"};
	$kondisi7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"conditions"};
	$kondisi8 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"conditions"};
	$kondisi9 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[9]->{"conditions"};
	
	$suhu1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"high"}->{"celsius"};
	$suhu2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"high"}->{"celsius"};
	$suhu3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"high"}->{"celsius"};
	$suhu4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"high"}->{"celsius"};
	$suhu5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"high"}->{"celsius"};
	$suhu6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"high"}->{"celsius"};
	$suhu7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"high"}->{"celsius"};
	$suhu8 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"high"}->{"celsius"};
	$suhu9 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"high"}->{"celsius"};
	
	$suhu1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"low"}->{"fahrenheit"};
	$suhu2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"low"}->{"fahrenheit"};
	$suhu3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"low"}->{"fahrenheit"};
	$suhu4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"low"}->{"fahrenheit"};
	$suhu5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"low"}->{"fahrenheit"};
	$suhu6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"low"}->{"fahrenheit"};
	$suhu7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"low"}->{"fahrenheit"};
	$suhu8 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"low"}->{"fahrenheit"};
	$suhu9 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"low"}->{"fahrenheit"};
	
	$angin1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"maxwind"}->{"mph"};
	$angin2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"maxwind"}->{"mph"};
	$angin3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"maxwind"}->{"mph"};
	$angin4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"maxwind"}->{"mph"};
	$angin5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"maxwind"}->{"mph"};
	$angin6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"maxwind"}->{"mph"};
	$angin7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"maxwind"}->{"mph"};
	$angin8 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"maxwind"}->{"mph"};
	$angin9 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"maxwind"}->{"mph"};
	
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[1]->{"icon"};
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[2]->{"icon"};
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[3]->{"icon"};
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[4]->{"icon"};
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[5]->{"icon"};
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[6]->{"icon"};
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[7]->{"icon"};
	$image = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[8]->{"icon"};
    
    

        //eksekusi variabel
   
	
	
  
 

   
    
	

?>