<?php
if(isset($_POST['dep_city'])){
	$dep_city =$_POST['dep_city'];
	$client = new SoapClient(null,array("location"=>"http://localhost/Server.php","uri"=>"http://localhost/Server.php"));
	$result = $client->getFlights($dep_city);
	echo $result;
} else {
	echo 'Departure City is not set';
}

?>
