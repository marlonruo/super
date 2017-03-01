<?php
try{
    $opts = array(
        'http'=>array(
            'user_agent' => 'PHPSoapClient'
            )
        );
    $context = stream_context_create($opts);
    $client = new SoapClient('http://187.174.212.229:8091/WS_B1_ClientesFrecuentes.asmx?wsdl',
							
                             array('stream_context' => $context,
                                   'cache_wsdl' => WSDL_CACHE_NONE));

    $result = $client->addCliente(array('oCliente' => array(
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
	)));
    //print_r($result);
	//stdClass Object ( [addClienteResult] => E6930FC5 )
	echo ($result->addClienteResult);
}
catch(Exception $e){
    echo getMessage();
}
?>

