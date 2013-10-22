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
				<li class="prim"><a href="salir.php" class="navi">Salir<a/></li>
			</ul>
		</nav>
		<div id="imgcont">
			<img src="images/derecho.png" id="drcho">
			<img src="images/izquierdo.png" id="izq">
		</div>
   <article>
        <div id="tablacompleta">
            <div class="caja">
                <div id="til">I30515: INGENIERIA DE SISTEMAS INFORMATICOS Plan: 1998 </div>
                <div id="impr">
                    <div id="checks">
                                        <input type="checkbox"/> <h6>Con Foto</h6>
                                        <input type="checkbox"/> <h6>Con Acuerdos</h6>
                                        <input type="checkbox"/> <h6>Ciclo del Curso</h6>
                        </div>
                    <input type="button" value="Imprimir" id="imprimir"/>
                </div>
            </div>
                <div class="anio">
                    <div class="dAnio">Año academico: 2011. Ciclo:I</div>
                     <div class="cMatr2">Matricula</div>
                    <div class="cUV2">U.V.</div>
                    <div class="cNot2">Nota</div>
                    <div class="cUM2">U.M.</div>
                    <div class="cEst2">Estado</div>
                    <div class="cCur2">Curso</div>
                    <div class="cRef2">Ref</div>
                </div>

            <div class="titu">
                <div class="cNum">1</div>
                <div class="cMate">Historia Social Economica y politica de el Salvador</div>
                <div class="cMatr">2</div>
                <div class="cUV">4</div>
                <div class="cNot">10</div>
                <div class="cUM">29</div>
                <div class="cEst">Aprobada</div>
                <div class="cCur">Normal</div>
                <div class="cRef">Ref</div>
            </div>

            <div class="titu">
                <div class="cNum">1</div>
                <div class="cMate">Otra materia</div>
                <div class="cMatr">5</div>
                <div class="cUV">4</div>
                <div class="cNot">9</div>
                <div class="cUM">30</div>
                <div class="cEst">Reprobada</div>
                <div class="cCur">Normal</div>
                <div class="cRef">Ref</div>
            </div>

            <div class="titu">
                <div class="cNum">1</div>
                <div class="cMate">Otra materia</div>
                <div class="cMatr">5</div>
                <div class="cUV">4</div>
                <div class="cNot">9</div>
                <div class="cUM">30</div>
                <div class="cEst">Reprobada</div>
                <div class="cCur">Normal</div>
                <div class="cRef">Ref</div>
            </div>

             <div class="anio">
                    <div class="dAnio">Año academico: 2011. Ciclo:I</div>
                     <div class="cMatr2">Matricula</div>
                    <div class="cUV2">U.V.</div>
                    <div class="cNot2">Nota</div>
                    <div class="cUM2">U.M.</div>
                    <div class="cEst2">Estado</div>
                    <div class="cCur2">Curso</div>
                    <div class="cRef2">Ref</div>
                </div>

            <div class="titu">
                <div class="cNum">1</div>
                <div class="cMate">Historia Social Economica y politica de el Salvador</div>
                <div class="cMatr">2</div>
                <div class="cUV">4</div>
                <div class="cNot">10</div>
                <div class="cUM">29</div>
                <div class="cEst">Aprobada</div>
                <div class="cCur">Normal</div>
                <div class="cRef">Ref</div>
            </div>

            <div class="titu">
                <div class="cNum">1</div>
                <div class="cMate">Otra materia</div>
                <div class="cMatr">5</div>
                <div class="cUV">4</div>
                <div class="cNot">9</div>
                <div class="cUM">30</div>
                <div class="cEst">Reprobada</div>
                <div class="cCur">Normal</div>
                <div class="cRef">Ref</div>
            </div>

            <div class="titu">
                <div class="cNum">1</div>
                <div class="cMate">Otra materia</div>
                <div class="cMatr">5</div>
                <div class="cUV">4</div>
                <div class="cNot">9</div>
                <div class="cUM">30</div>
                <div class="cEst">Reprobada</div>
                <div class="cCur">Normal</div>
                <div class="cRef">Ref</div>
            </div>

        </div>
   </article>
	</div>
</body>
</html>