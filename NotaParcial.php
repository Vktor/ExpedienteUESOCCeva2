<?php
$carne= $_SESSION['carnet'];
include 'PHP/conexion.php';



$query="SELECT codigo_grupo, codigo_carrera, codigo_materia, notas, porcentajes FROM notas where carnet ='".$carne."';
";
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
//$arr = pg_fetch_array($result, 0, PGSQL_NUM);
$prom=0;
while($arr = pg_fetch_array($result)) 
{
	$nota = explode("%", $arr[3]);
	$porcent = explode("%", $arr[4]);
echo '<tr>';
echo '<td></td>';
echo '<td><td/>';
	for ($i=0; $i<10 ; $i++) { 
		
				echo '<td>'.$porcent[$i].'</td>';

		}
echo '<td colspan="4"></td>';
echo  '</tr>';


for ($i=0; $i<10 ; $i++) { 
		
}



echo '<tr>';
echo   '<td>'.$arr[2].'</td>';
echo        '<td>matricula</td>';
echo         '<td>materia</td>';
for ($i=0; $i<10 ; $i++) { 
echo         '<td>'.$nota[$i].'</td>';
//$prom=$prom+$nota[$i];
}
echo         '<td>'.$prom.'</td>';
echo         '<td>- -</td>';
echo         '<td>8</td>';
echo         '<td>Aprobada</td>';
echo  '</tr>';
}
?>