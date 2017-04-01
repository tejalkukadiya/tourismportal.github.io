<?php
include_once 'hmac_helper.php';
include_once 'config.php';

/**
 * Given the 10 digit PNR number, returns the pnr status as the response in the JSON or XML format.
 * Response format can be changed from config.php
 * @param unknown_type $pnr, 10 digit PNR number.
 */
function getPnrStatus($pnr){
	//We are not validating any param. Thats left for you :)
	$params = array();
	$params["pnr"] = $pnr;
	$params["format"] = FORMAT;

	$end_point = "http://railpnrapi.com/api/check_pnr";

	$hmac = generateHmacSHA1($params, PUBLIC_KEY, PRIVATE_KEY);
	$full_url = getFullUrl($end_point, $params, PUBLIC_KEY, $hmac);
	//echo $full_url;
	return get_response_from_url($full_url);
}

/**
 * Given the train number, returns the route as the response in the JSON or XML format.
 * Response format can be changed from config.php
 * @param unknown_type $trainNum, trainnumber.
 */
function getRoute($trainNum){
	//We are not validating any param. Thats left for you :)
	$params = array();
	$params["train"] = $trainNum;
	$params["format"] = FORMAT;

	$end_point = "http://railpnrapi.com/api/route";

	$hmac = generateHmacSHA1($params, PUBLIC_KEY, PRIVATE_KEY);
	$full_url = getFullUrl($end_point, $params, PUBLIC_KEY, $hmac);
	//echo $full_url;
	return get_response_from_url($full_url);
}

/**Returns the availability.
 * @param unknown_type $tnum, Train number.
* @param unknown_type $fscode, From station code.
* @param unknown_type $tscode, To station code
* @param unknown_type $date, travel date in DD-MM-YYYY format.
* @param unknown_type $class, 2 digit class code.
* @param unknown_type $quota, Quota code.
* @return Ambigous <string, mixed>
*/
function getAvailability($tnum, $fscode, $tscode, $date, $class, $quota){
	//We are not validating any param. Thats left for you :)
	$params = array();
	$params["tnum"] = $tnum;
	$params["fscode"] = $fscode;
	$params["tscode"] = $tscode;
	$params["date"] = $date;
	$params["class"] = $class;
	$params["quota"] = $quota;

	$params["format"] = FORMAT;

	$end_point = "http://railpnrapi.com/api/check_avail";

	$hmac = generateHmacSHA1($params, PUBLIC_KEY, PRIVATE_KEY);
	$full_url = getFullUrl($end_point, $params, PUBLIC_KEY, $hmac);
	//echo $full_url;
	return get_response_from_url($full_url);
}


/**Returns the availability.
 * @param unknown_type $tnum, Train number.
* @param unknown_type $fscode, From station code.
* @param unknown_type $tscode, To station code
* @param unknown_type $class, 2 digit class code.
* @return Ambigous <string, mixed>
*/
function getFare($tnum, $fscode, $tscode, $class){
	//We are not validating any param. Thats left for you :)
	$params = array();
	$params["tnum"] = $tnum;
	$params["fscode"] = $fscode;
	$params["tscode"] = $tscode;
	$params["class"] = $class;
	$params["format"] = FORMAT;

	$end_point = "http://railpnrapi.com/api/fare";

	$hmac = generateHmacSHA1($params, PUBLIC_KEY, PRIVATE_KEY);
	$full_url = getFullUrl($end_point, $params, PUBLIC_KEY, $hmac);
	//echo $full_url;
	return get_response_from_url($full_url);
}



/**Returns trains running between two stations.
* @param unknown_type $fscode, From station code.
* @param unknown_type $tscode, To station code
* @return Ambigous <string, mixed>
*/
function getTrainsBetweenStations($fscode, $tscode){
	//We are not validating any param. Thats left for you :)
	$params = array();
	$params["fscode"] = $fscode;
	$params["tscode"] = $tscode;
	$params["format"] = FORMAT;

	$end_point = "http://railpnrapi.com/api/trains_between_stations";

	$hmac = generateHmacSHA1($params, PUBLIC_KEY, PRIVATE_KEY);
	$full_url = getFullUrl($end_point, $params, PUBLIC_KEY, $hmac);
	//echo $full_url;
	return get_response_from_url($full_url);
}





/*############################################################################*/
function getFullUrl($endPoint, $params, $public_key, $hmac){

	$fullUrl = $endPoint;
	foreach($params as $param => $value){
		$fullUrl .= "/${param}/${value}";
	}
	$fullUrl .= "/pbapikey/${public_key}/pbapisign/${hmac}";
	return $fullUrl;
}

function get_response_from_url($url, $curl = true)
{
	$responseString = '';
	if (!$curl)
	{
		/*
		 *  if !$curl, use 'file_get_contents' method
		*  to get response string
		*/
		$responseString = file_get_contents($url);
	}
	else
	{
		/*
		 *  if $curl, use 'curl' method
		*  to get response string
		*/

		// Initializing curl
		$ch = curl_init( $url );

		// Configuring curl options
		$options = array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
				//Could be xml
		);

		// Setting curl options
		curl_setopt_array( $ch, $options );

		// Getting JSON encoded string
		$responseString =  curl_exec($ch);
	}
	return $responseString;
}

function generateHmacSHA1($requestParams, $publicKey, $privateKey){
	// Here we are assuming that you are not passing public key in the $requestParams array.
	$requestParams['pbapikey'] = $publicKey;

	//Sorting the params in ASC order
	ksort($requestParams);
	$requestStr = '';

	foreach ($requestParams as $key => $val) {
		// We are concatenating the param values in the asc order of their names.
		$requestStr .= $val;
	}
	//Converting to lower case.
	$requestStr = strtolower($requestStr);
	//Genarating the hmac.
	$hmacGenerate = hmac_sha1($privateKey, $requestStr);
	return $hmacGenerate;
}
