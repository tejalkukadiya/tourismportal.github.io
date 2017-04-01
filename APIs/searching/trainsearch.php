<?php

$apikey="mq77t198";

public function getcode($value)
{
	
}
$url_ahed='http://api.railwayapi.com/name_to_code/station//apikey/'.$apikey.'/';

$ch = curl_init();
$timeout=0;
// $url_post=http_build_query($post);
// echo $url_post;		

$url_final= $url_ahed;
//echo $url_final;



curl_setopt($ch, CURLOPT_URL,$url_final);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

	
}
$source=getcode($_GET['source']);
$dest=getcode($_GET['dest']);
$date=$_GET['date'];
// $url_ahed='http://api.railwayapi.com/between/source/'.$stationcode.'/dest/'.$deststationcode.'/date/'.$date.'/apikey/'.$apikey;
$url_ahed ='http://api.railwayapi.com/between/source/'.$source.'/dest/'.$dest.'/date/'.$date.'/apikey/'.$apikey.'/';

$ch = curl_init();
$timeout=0;
// $url_post=http_build_query($post);
// echo $url_post;		

$url_final= $url_ahed;
//echo $url_final;



curl_setopt($ch, CURLOPT_URL,$url_final);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
var_dump($result);
die();
?>
