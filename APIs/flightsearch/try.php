<?php

// $post = [
//     'username' => 'user1',
//     'password' => 'passuser1',
//     'gender'   => 1,
// ];


function getiata($value)
{
include 'connection.php';
$validcode= $value;
$sql="select code from airports where cityName='$validcode'";
$result1 = mysqli_query($con, $sql);
$code='';
while ($row = mysqli_fetch_array($result1)) {
  $code=$row['code'];
}
return $code;
}

    
function dateconvert($d){
  $dateObj = DateTime::createFromFormat('Y-m-d', $d);
  return $dateObj->format('Ymd');
}

 if (isset($_GET['returndate'])) {
  $returndate=dateconvert($_GET['returndate']);
 }
 else
 {
  $returndate='';
 }


$source=getiata($_GET['source']);
$destination=getiata($_GET['destination']);
$dateofdeparture=dateconvert($_GET['dateofdeparture']);
$seatingclass=$_GET['seatingclass'];
$adults=1;
$children=0;
$infants=0;

$post =[
'source'=>$source,
'destination'=>$destination,
'dateofdeparture'=>$dateofdeparture,   
'seatingclass'=>$seatingclass,
'adults'=>$adults,
'children'=>$children,
'infants'=>$infants,
'counter'=>'100',
'app_id' =>'0df5e0c4',
'app_key'=>'3e03e50ac09366d029d34b22bd144647',
'format'=>'json',
];

// $url_post='source=MAA&destination=BLR&dateofdeparture=20170417&seatingclass=E&adults=1&children=0&infants=0&counter=100&app_key=3e03e50ac09366d029d34b22bd144647&app_id=0df5e0c4&format=json';
$ch = curl_init();
$timeout=0;
$url_post=http_build_query($post);
// echo $url_post;    
$url_ahed="http://developer.goibibo.com/api/search/?";
$url_final= $url_ahed.$url_post;
// echo $url_final;



curl_setopt($ch, CURLOPT_URL,$url_final);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
  // echo $result;
if (curl_errno($ch)) {
  // echo 'Error:' . curl_error($ch);
  echo "<div class='center'><center><p>Problem occured please try again</P></center></div>";


}
else {

  
  // echo $result;  
  $new=$result;
    // print_r($result);
  $new=json_decode($result,true);



  $returnflights=$new['data']['returnflights'];
  $onwardflights=$new['data']['onwardflights'];
// var_dump($onwardflights);
// die();
echo "reach";
  $countonward=count($onwardflights);
  foreach ($onwardflights as $f) {
    
        echo '<div class="container card">
         <div class="row plane-logo">
                <div class="col-md-2 plane-img">
                   <img src="img/ico/'.$f["airline"].'.gif">';
                    echo '<h3>'.$f["airline"].'</h3>
                </div>
                <div class="col-md-10">
                        <h3 class="text-center"> Flight Code: <span>'.$f["flightcode"].'</span></h3>
                    <div class="row flight-detail">
                            <div class="col-md-4 detail-col">
                                  <h3>Origin</h3>
                                  <p>'.$f["origin"] .'  </p>
                                  <p> Departure Time: <b>' .$f["deptime"].' </b></p>
                            </div>
                            <div class="col-md-4 detail-col">
                                    <h3>
                                  <i class="fa fa-long-arrow-right"></i></h3>
                                  <p> Duration:'.$f["duration"].' Hours</p>
                                  <p> ';
                                  if($f["stops"]==""){
                                    echo "Non-stop";
                                  }
                                  else{
                                    echo  $f["stops"].'Stops (Via)';
                                          foreach ($f["onwardflights"] as $q) {
                                            # code...
                                    echo $q["origin"].',';
                                          }
                                  }
                                  echo '</p>
                            </div> 
                            <div class="col-md-4 detail-col"> 
                                  <h3>Destination</h3>
                                  <p>   ';
                                  if($f["stops"]==""){
                                  	echo $f["destination"];
                                  	$dept=$f["arrtime"];}
                                  	else{
                                  		foreach ($f["onwardflights"] as $q) {
                                  					
                                  	$dest= $q["destination"];

                                  	$dept=$q["arrtime"];
                                  				}
                                  				echo $dest;
                                  	}
                                  	echo' </p>
                                  <p> Arrival time: <b> '.$dept.' </b></p>
                            </div>  
                    </div>
                    <div class="row cost">
                       <div class="btn btn-primary">details</div>
                       <p>&#8377;'.$f["fare"]["grossamount"].'</p>
                    </div>
                </div>
            </div></div> ';

     }











		// var_dump($f);
	// echo "<pre>";

	// 	echo "<br/>Flight: ".$count++;
	// 	echo "<br/>Origin: ". $f["origin"];
	// 	echo "<br/> destination".$f["destination"]; 
	// 	echo "<br/>DepartureTime: ". $f["DepartureTime"];
	// 	echo "<br/>duration: ". $f["duration"];
	// 	echo "<br/>flight code:".$f["journeysellkey"];
	// 	echo "<br/>Seats available".$f["seatsavailable"];
	// 	echo "<br/>Air-line".$f["airline"];
	// 		$fare=$f["fare"];
	// 			echo "Total Fair():".$fare["grossamount"];
	// 			echo "Bsae fare	:".$fare["totalbasefare"];
	// 			echo "Surcharge	:".$fare["totalsurcharge"];
	// 			echo "Taxes	:".$fare["totaltaxes"];
	// 			echo "Total:".$fare["adulttotalfare"];
		


	// 	if ($f['stops']!="") {
	// 	echo "<br/>Stops ". $f["stops"];
	// 		foreach ($f["onwardflights"] as $k) {
	// 			echo "<br/> connecting Flight: ";
	// 	echo "<br/>Origin: ". $k["origin"];
	// 	echo "<t/>duration: ". $k["duration"];
	// 	echo "<t/> destination".$k["destination"]; 

	// 	echo "Seats available".$k["seatsavailable"];
	// 		}
	// 	}
	// 	else{

	// 	}
	// 		echo "<hr/>";
	// }



	curl_close ($ch);

}
// public function flightdetail($fd)
// {
// 	# code...
// }



	        	?>
