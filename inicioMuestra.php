<?php		
$carne= $_SESSION['carnet'];
//echo 'si se esta enviando';
include 'PHP/conexion.php';
$alu='"alumno"';
$query="SELECT * FROM ".$alu." where carnet = '".$carne."';";
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
$arr = pg_fetch_array($result, 0, PGSQL_NUM);

$query2="SELECT codigo_carrera FROM ".$alu." where carnet = '".$carne."';";
$result2 = pg_query($query2) or die('La consulta fallo: ' . pg_last_error());
$arr2 = pg_fetch_array($result, 0, PGSQL_NUM);



$query3 ="SELECT  nombre_carrera FROM carrera Where codigo_carrera ='".$arr2[1]."';";
$result3 = pg_query($query3) or die('La consulta fallo: ' . pg_last_error());
$arr3 = pg_fetch_array($result3);



echo '<b>CARNET: </b>'.$arr[0].'<br>';
echo '<b>ESTUDIANTE: </b>'.$arr[2].', '.$arr[3].'<br>';
echo '<b>CODIGO DE CARRERA: </b>'.$arr[1].'<br>';
echo '<b>CARRERA: </b>'.$arr3[0];
?>