<?php  
error_reporting(0);
require_once('/lib/nusoap.php');
$objClienteSOAP= new soapclient('http://footballpool.dataaccess.eu/data/info.wso?WSDL','wsdl');

$param=array();
$grupos=array();

$resultado=$objClienteSOAP->call('AllGames',$param);

if($resultado->fault){
	$error=$resultado->getError();
	if(error){
		echo 'Error: '.$resultado->faultstring;
	}
	die();
}

?>