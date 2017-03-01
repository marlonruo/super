<?php
ini_set('soap.wsdl_cache_enabled', 0);
ini_set('soap.wsdl_cache_ttl', 900);
ini_set('default_socket_timeout', 15);


$params = array('oCliente' => array(
		'NomCli' => 'DK', 
		'RFC' => '123456789012',
		'Email' => '47458714',
		'Anio' => '1982',
		'GenCli' => '47458714',
		'Rfactura' => '47458714',
		'Calle' => '47458714',
		'NumE' => '47458714',
		'NumI' => '47458714',
		'ColCli' => '47458714',
		'DelCli' => '47458714',
		'CiuCli' => '47458714',
		'EdoCli' => '47458714',
		'PaisCli' => '47458714',
		'CpCli' => '47458714'
	));


$wsdl = 'http://187.174.212.229:8091/WS_B1_ClientesFrecuentes.asmx?wsdl';

$options = array(
		'uri'=>'http://schemas.xmlsoap.org/soap/envelope/',
		'style'=>SOAP_RPC,
		'use'=>SOAP_ENCODED,
		'soap_version'=>SOAP_1_1,
		'cache_wsdl'=>WSDL_CACHE_NONE,
		'connection_timeout'=>15,
		'trace'=>true,
		'encoding'=>'UTF-8',
		'exceptions'=>true,
	);
try {
	$soap = new SoapClient($wsdl, $options);
	$data = $soap->addCliente($params);
	echo ($data->addClienteResult);
}
catch(Exception $e) {
	die($e->getMessage());
}
die;
?>