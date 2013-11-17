<?php	
require_once('nusoap/lib/nusoap.php');
//session_start();
//$carne=$_SESSION['carnet'];
$URL='http://localhost/ExpedienteUESOCCeva2/WS';
$server= new soap_server();
$server->configureWSDL('IPIWebSservice',$URL);
$server->wsdl->schemaTargetNamespace=$URL;




//metodo saludar
$server->register('MostrarAlumno',array('carnet'=>'xsd:string'), array('return'=>'xsd:string'), $URL);

function MostrarAlumno(){
include ('../PHP/conexion.php');
$query="SELECT carnet, codigo_carrera, nombres, apellidos FROM alumno";
$result=pg_query($query);
$arr = pg_fetch_array($result);
for ($i=0; $i<4 ; $i++) { 
	$resultado=$resultado+$arr[$i];
}

if ($result) {
	return new soapval('return','xsd:string', $resultado);
}
	return new soapval('return','xsd:string',"ERROR ALMOSTRAR DATOS DEL ALUMNO");

}

if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
$server->service($HTTP_RAW_POST_DATA);
?>