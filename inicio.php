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
                    <section >
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
        <article id="c_Inicio">
            <div id="cont_images">
                <div id="mascara">
                    <ul>
                        <li id="img1" class="animacion1">
                            <div id="bar1" class="baner"> IMAGE1</div>
                        </li>
                        <li id="img2" class="animacion2">
                            <div id="bar2"class="baner"> IMAGE2 </div>
                        </li>
                        <li id="img3" class="animacion3">
                            <div id="bar3" class="baner"> IMAGE3</div>
                        </li>
                        <li id="img4" class="animacion4">
                            <div id="bar4" class="baner"> IMAGE4</div>
                        </li>
                        <li id="img5" class="animacion5">
                            <div id="bar5" class="baner"> IMAGE5</div>
                        </li>
                    </ul>
                </div>
            </div>


        </article>
	</div>
</body>
</html>