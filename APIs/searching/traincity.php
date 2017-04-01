<?php
$apikey="mq77t198";

$q=$_GET['q'];
echo "reachrd";
// $url_ahed='http://api.railwayapi.com/between/source/'.$stationcode.'/dest/'.$deststationcode.'/date/'.$date.'/apikey/'.$apikey;

$url_ahed ='http://api.railwayapi.com/suggest_station/name/'.$q.'/apikey/'.$apikey.'/';



$ch = curl_init();
$timeout=0;
// $url_post=http_build_query($post);
// echo $url_post;		

$url_final= $url_ahed;
//echo $url_final;




curl_setopt($ch, CURLOPT_URL,$url_final);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
if (curl_errno($ch)) {
	// echo 'Error:' . curl_error($ch);
	echo "<div class='center'><center><p>Problem occured please try again</P></center></div>";


}
else {
	$new=json_decode($result,true);
var_dump($new);
die();

foreach ($new['station'] as $key) {
echo "<p>" . $key['fullname']."</p>";
	# code...
}

}

	curl_close ($ch);

?>
