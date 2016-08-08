<?php  
error_reporting(0);
require_once('/lib/nusoap.php');
$objClienteSOAP= new soapclient('http://footballpool.dataaccess.eu/data/info.wso?WSDL','wsdl');

$param=array();
$param=[
"iTopN"=>10
];

$resultado=$objClienteSOAP->call('TopGoalScorers',$param);

if($resultado->fault){
	$error=$resultado->getError();
	if(error){
		echo 'Error: '.$resultado->faultstring;
	}
	die();
}
 /*echo'<pre>';
 print_r($resultado);	
 echo '</pre>';
*/



?>