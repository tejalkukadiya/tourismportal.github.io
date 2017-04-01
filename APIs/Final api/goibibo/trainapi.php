<?php

$apikey="mq77t198";

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



<!DOCTYPE html>
<html>
<head>
	<title>train search</title>
	http://api.railwayapi.com/suggest_station/name//apikey/mq77t198/


<script type="text/javascript">
	$(document).ready(
    function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(".search-box  .result");       
        if(inputVal.length){
            $.get("apis/traincity.php", {q: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    })});



    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
    </script>
</head>
<body>

<div class="train">

	<form class="form-control" autocomplete="off"> 
		<input type="text" name="source" class="form-control">
		<input type="text" name="dest" class="form-control">
		<input placeholder="Select date of Journey" class="form-control col-md-6" type="text" id="datepicker3" name="tdate">
		<input type="submit" name="search">
	</form>	
</div>
</body>
</html>