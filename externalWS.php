<?php
if(isset($_POST['ticker'])){
	$ticker =$_POST['ticker'];
	$client = new SoapClient("http://www.webservicex.net/stockquote.asmx?WSDL");
	$result = $client->getQuote(array("symbol"=>$ticker));
	$xml_obj = simplexml_load_string($result->GetQuoteResult);
	$return = 'Symbol: '.$xml_obj->Stock[0]->Symbol.'</br>';
	$return .= 'Last: '.$xml_obj->Stock[0]->Last.'</br>';
	$return .= 'Date: '.$xml_obj->Stock[0]->Date.'</br>';
	$return .= 'Time: '.$xml_obj->Stock[0]->Time.'</br>';
	$return .= 'Change: '.$xml_obj->Stock[0]->Change.'</br>';
	$return .= 'Open: '.$xml_obj->Stock[0]->Open.'</br>';
	$return .= 'High: '.$xml_obj->Stock[0]->High.'</br>';
	$return .= 'Low: '.$xml_obj->Stock[0]->Low.'</br>';
	$return .= 'Volume: '.$xml_obj->Stock[0]->Volume.'</br>';
	$return .= 'Market Capital: '.$xml_obj->Stock[0]->MktCap.'</br>';
	$return .= 'Previous Close: '.$xml_obj->Stock[0]->PreviousClose.'</br>';
	$return .= 'Annual Range: '.$xml_obj->Stock[0]->AnnRange.'</br>';
	$return .= 'Earnings: '.$xml_obj->Stock[0]->Earns.'</br>';
	//$return .= 'P-E: '.$xml_obj->Stock[0]->.'</br>';
	$return .= 'Name: '.$xml_obj->Stock[0]->Name.'</br>';
	echo $return;
} else {
	echo 'Ticker is not set';
}

?>
