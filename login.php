<?php
session_start();
include 'PHP/conexion.php';
$carne = $_POST["carne"];
$_SESSION['carnet']=$carne;
$alu='"alumno"';
$query="SELECT carnet, nombres FROM ".$alu." where carnet = '".$carne."';";
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$arr = pg_fetch_array($result, 0, PGSQL_NUM);

if ($carne=$arr[0]) {
header("Location: inicio.php");

}else{
	
	header("Location: index.html");
}

pg_close($conect);


?>