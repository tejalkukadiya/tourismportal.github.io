<?php
$city=$_POST["city"];
$post =[
'q'=>$city,
// 'cnt'=>'6',
'units'=>'metric',
'mode'=>'json',
'appid'=>'79b8bacc3f81462c88dcc307c2674f5a'

];



$url_ahed="api.openweathermap.org/data/2.5/weather?";
$ch = curl_init();
$timeout=0;
$url_post=http_build_query($post);
// echo $url_post;      

$url_final= $url_ahed.$url_post;
// echo $url_final;



curl_setopt($ch, CURLOPT_URL,$url_final);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

// $xml=simplexml_load_string($result) or die("Error: Cannot create object");
// print_r($xml);

$result=json_decode($result,true);


$imgurl='http://openweathermap.org/img/w/';
  
$maindata=$result["main"];


// speed


	$weather=$result["weather"][0];
	
	
echo '<div>
		<h3>'.$city.'</h3>

		<div class="temp">
			<center>';

echo '<h3>'.$maindata["temp_max"].' °C</h3>
			<img src="'.$imgurl.$weather["icon"].'.png"></img>
								

			<p>'.$weather["description"].'</p>
			</center>
		</div>
		<div class="other">';
			
			
			$wind=$result["wind"];

		echo'<h3>pressure : '.$maindata["pressure"].' mb</h3>';
		
			echo '<h3>Wind:'.$wind["speed"]." m/s  ";

					// echo $wind["deg"];
					if($wind["deg"]>0 && $wind["deg"]<90)
					{
						echo "north";
					}
					else if ($wind["deg"]>90 && $wind["deg"]<180) {
					echo "east";	
					}

					else if ($wind["deg"]>180 && $wind["deg"]<270) {
					echo "south";	
					}
					else if ($wind["deg"]>270 && $wind["deg"]<360) {
					echo "west";	
					}
					echo"</h3>";

			echo '<h3>Humidity : '.$maindata["humidity"].' %</h3>
			
		</div>
	</div>';
?>