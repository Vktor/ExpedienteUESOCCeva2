<?php		
//session_start();
//busco carrera en base al carnet ingresado
$carne= $_SESSION['carnet'];
include 'PHP/conexion.php';

//$carne="HC09006";
$alu='"alumno"';
$query="SELECT codigo_carrera FROM ".$alu." where carnet = '".$carne."';";
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
$arr = pg_fetch_array($result, 0, PGSQL_NUM);

//una ves que obtengo el carnet busco las materias disponibles para ese carnet
$mat='"materia"';
$query2 = "SELECT * FROM ".$mat." where codigo_carrera = '".$arr[0]."';";
$result2 = pg_query($query2) or die('La consulta fallo: ' . pg_last_error());
//$arr2 = pg_fetch_array($result2);

$inc=0;
while($arr2 = pg_fetch_array($result2)) 
{
	echo '<tr>';
	echo '<td><input type="checkbox" name="checkM'.$inc.'"></td>';
	echo '<td>'.$arr2[0].'</td>';
	echo '<td>'.$arr2[3].'</td>';
	//$_SESSION['codyNum']=$arr2[0].'('.$inc.')';
	$_SESSION['codyNum'.$inc]=$arr2[0];
	echo '<td>1</td>';
	echo '<td>Bachillerato</td>';
	echo '<td>'.$arr2[2].'</td>';
	echo '<td>1</td>';
	echo '<td> <select name="listGT">';
	$queryG ="SELECT codigo_grupo FROM grupo where codigo_materia='".$arr2[0]."';";
	$resultG = pg_query($queryG) or die('La consulta fallo: ' . pg_last_error());
	while ($arrG = pg_fetch_array($resultG)) 
	{
		echo '<option>'.$arrG[0].'</option>';		
	}	
	echo '</select></td>';
	echo '<td>GL</td>';
	echo '<td>GD</td>';
	echo '<td>NA</td>';
	echo '</tr>';
	$inc++;
}
$_SESSION['cantMat']=$inc;


/*
//saco el total de materias disponibles para ese carnet
$mat='"materia"';
$query3 = "SELECT count(codigo_carrera) FROM ".$mat." where codigo_carrera = '".$arr[0]."';";
$result3 = pg_query($query3) or die('La consulta fallo: ' . pg_last_error());
$arr3 = pg_fetch_array($result3, 0, PGSQL_NUM);
echo $arr3[0];
$i=0;
*/

?>