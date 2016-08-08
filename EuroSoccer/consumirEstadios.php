<?php  
error_reporting(0);
require_once('/lib/nusoap.php');
$objClienteSOAP= new soapclient('http://footballpool.dataaccess.eu/data/info.wso?WSDL','wsdl');

$param=array();

$resultado=$objClienteSOAP->call('AllStadiumInfo',$param);

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

$imagenesEstadios=[
"1"=>"img/estadio1.jpg",
"2"=>"img/estadio2.jpg",
"3"=>"img/estadio3.jpg",
"4"=>"img/estadio4.jpg",
"5"=>"img/estadio5.jpg",
"6"=>"img/estadio6.jpg",
"7"=>"img/estadio7.jpg",
"8"=>"img/estadio8.jpg",
"9"=>"img/estadio9.jpg",
"10"=>"https://upload.wikimedia.org/wikipedia/commons/9/9f/StadiumToulouse3.JPG?download"
];





?>