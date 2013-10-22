<?php
session_start();
include 'PHP/conexion.php';
$selectGT = $_POST['listGT'];
$carne= $_SESSION['carnet'];

$alu='"alumno"';
$queryM="SELECT codigo_carrera FROM ".$alu." where carnet = '".$carne."';";
$resultM = pg_query($queryM) or die('La consulta fallo: ' . pg_last_error());
$arrM = pg_fetch_array($resultM, 0, PGSQL_NUM);

$mat='"materia"';
$query2M = "SELECT * FROM ".$mat." where codigo_carrera = '".$arrM[0]."';";
$result2M = pg_query($query2M) or die('La consulta fallo: ' . pg_last_error());
$arr2M = pg_fetch_array($result2M);

$matricula = "SELECT COUNT(codigo_materia) FROM expediente WHERE codigo_materia='".$arr2M[0]."';";
$resultMat =pg_query($matricula) or die('La consulta fallo: ' . pg_last_error());
$matr = pg_fetch_array($resultMat, 0, PGSQL_NUM);
//echo "el carnet: ".$carne."primer cosa: ".$arrM[0]." esta es otra cosa: ".$arr2M[0]."y esta es otra:".$matr[0];

//echo var_dump()

for ($i=0; $i<$_SESSION['cantMat']; $i++) { 


if (!empty($_POST['checkM'.$i])) {

	$query = "INSERT INTO expediente(carnet, codigo_grupo, codigo_carrera, codigo_materia, numero_matricula) VALUES ('".$carne."', ".$selectGT.", '".$arrM[0]."', '".$_SESSION['codyNum'.$i]."', ".($matr[0]+1).")";
	$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
	//$arr = pg_fetch_array($result, 0, PGSQL_NUM);
	echo '<meta http-equiv="REFRESH" content="0,url=inscribir.php">';

	}
}

?>
