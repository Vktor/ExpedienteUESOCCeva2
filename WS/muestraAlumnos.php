<?php
include ('nusoap/lib/nusoap.php');

$cliente = new nusoap_client('http://localhost/ExpedienteUESOCCeva2/WS/webservice.php?wsdl');

$error = $cliente->call('MostrarAlumno');
echo $error;


?>