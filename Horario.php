<?php
session_start();
if (empty($_SESSION['carnet'])) {
    header("Location: index.html");

}
?>
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
				<li class="prim"><a href="salir.php" class="navi">Salir<a/></li>
			</ul>
		</nav>
		<div id="imgcont">
			<img src="images/derecho.png" id="drcho">
			<img src="images/izquierdo.png" id="izq">
		</div>
        <article id="Mihorario">
        <table>
            <tr>
                <td class="line">Horas</td>
                <td class="line">Lunes</td>
                <td class="line">Martes</td>
                <td class="line">Miercoles</td>
                <td class="line">Jueves</td>
                <td class="line">Viernes</td>
                <td class="line">Sabado</td>
                <td class="line">Domingo</td>
            </tr>
               <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
             <tr>
                <td>6:45am-7:35am</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
                <td>Hora Libre</td>
            </tr>
        </table>
        </article>
	</div>
</body>
</html>