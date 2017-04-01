<?php
include_once 'railpnrapi.php';

$response = getPnrStatus("1234567890");
//$response = getRoute(12004);
//$response = getAvailability(12004, 'NDLS', 'CNB', '30-09-2014', 'CC', 'GN');
//$response = getTrainsBetweenStations('NDLS', 'CNB');
// $response = getFare(12004, 'NDLS', 'CNB', 'CC');

var_dump($response);
?>