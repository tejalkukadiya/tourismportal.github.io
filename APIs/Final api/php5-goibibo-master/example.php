<?php

echo "hry";
require_once("GoIbibo.php");

$api =  new GoIbibo("0df5e0c4", "3e03e50ac09366d029d34b22bd144647");

$flights = $api->searchFlights("MAA", "BLR", "20170417");

	var_dump($flights);

?>