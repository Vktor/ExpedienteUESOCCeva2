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
						<li class="second"><a href="#" class="navi">Horarios</a></li>
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
            <table>
               
                <tr>
                    <td class="line">Codigo</td>
                    <td class="line">Matricula</td>
                    <td class="line">Nombre Asignatura</td>
                    <td class="line">1</td>
                    <td class="line">2</td>
                    <td class="line">3</td>
                    <td class="line">4</td>
                    <td class="line">5</td>
                    <td class="line">6</td>
                    <td class="line">7</td>
                    <td class="line">8</td>
                    <td class="line">9</td>
                    <td class="line">10</td>
                    <td class="line">Prom</td>
                    <td class="line">Suf</td>
                    <td class="line">Nota</td>
                    <td class="line">Estado</td>
                </tr>
                <?php
                include 'NotaParcial.php';
                ?>

                    

                   

          
            </table>
        </article>
	</div>
</body>
</html>
