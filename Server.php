<?php
function getFlights($y){
	$dep_city = $y;
	$pdo= new PDO('mysql:host =localhost;dbname=db1;','root','student');
	$sql = "SELECT DISTINCT air_num,dep_city, dest_city, cur_price FROM flight WHERE dep_city LIKE :dep_city";
	$stm = $pdo->prepare($sql);
	$stm->bindParam(":dep_city",$dep_city);
	$stm->execute();
	$return = '<table class="table">';
	$return .= '<tr><th>Airline Number</th><th>Departure City</th><th>Destination City</th><th>Price</th></tr>';
	while($result = $stm->fetch(PDO::FETCH_OBJ)){
		$return .= '<tr><td>'.$result->air_num.'</td><td>'.$result->dep_city.'</td><td>'.$result->dest_city.'</td><td>$'.$result->cur_price.'</td></tr>';	
	}
	$return .= '</table>';
	return $return;
}
$server = new SoapServer(null, array("uri"=>"http://localhost/Server.php"));
$server->addFunction('getFlights');
$server->handle();
?>
