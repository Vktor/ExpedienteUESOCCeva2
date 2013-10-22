<?php
session_start();
if (empty($_SESSION['carnet'])) {
	header("Location: index.html");

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administración Académica - Facultad Multidisciplinaria de Occidente</title>
	<link rel="stylesheet" type="text/css" href="inicioCss.css">
	<link type="image/x-icon" href="images/favicon.ico" rel="icon"/>
</head>
<body>
	<div id="contenedor">
		<header>
			<img src="images/minip.png" id="minervaH">
			<article>
				<p>UNIVERSIDAD DE EL SALVADOR <br> FACULTAD MULTIDISCIPLINARIA DE OCCIDENTE <br> ADMINISTRACION ACADEMICA</p>
				<div id="linea"></div>
                <img src="images/photo_alumno2.png" id="photo"/>
                    <section>
                    <?php
                    include 'inicioMuestra.php';
                    ?>
                    </section>
            </article>
		</header>
		<nav>
			<ul id="principales">
				<li class="prim"><a href="inicio.php" class="navi">Inicio<a/></li>
				<li class="prim"><a href="Inscribir.php" class="navi">Inscripcion<a/></li>
				<li class="prim" id="exp"><a href="#" class="navi">Expediente<a/>
					<ul id="list">
						<li class="second"><a href="Horario.php" class="navi">Horarios</a></li>
						<li class="second"><a href="NotasPArciales.php" class="navi">Notas Parciales</a></li>
						<li class="second"><a href="Record.php" class="navi">Record de Notas</a></li>
						<li class="second" id="last"><a href="#" class="navi">Pagos</a></li>
					</ul>
				</li>
				<li class="prim"><a href="Horario.php" class="navi">Mi Horario<a/></li>
				<li class="prim"><a href="#" class="navi">Contactenos<a/></li>
				<li class="prim"><a href="salir.php" class="navi" >Salir<a/></li>
			</ul>
		</nav>
		<div id="imgcont">
			<img src="images/derecho.png" id="drcho">
			<img src="images/izquierdo.png" id="izq">
		</div>
        <article id="inscribir">
           <form method="POST" action="incribirMateria.php">
           		<table>
           			<tr> 
           				<td colspan="11" class="line2">Materias A inscribir</td>
           			</tr>
           			<tr>
           				<td class="line"></td>
           				<td class="line">Codigo</td>
           				<td class="line">UV</td>
           				<td class="line">Ciclo</td>
           				<td class="line">Prerequisito</td>
           				<td class="line">Nombre de Asignatura</td>
           				<td class="line">Matricula</td>
           				<td class="line">GT</td>
           				<td class="line">GL</td>
           				<td class="line">GD</td>
           				<td class="line">Est</td>
           			</tr>

          <?php
          include 'inscripcionMuestra.php';
          ?>

           		
              <tr>
              	<td colspan="11" class="line2">
              	<input type="submit" value="Inscribir" name="btnInscribir">
              	</td>
              </tr>
			</table>	

              </form>
           </div>

        </article>
	</div>
</body>
</html>