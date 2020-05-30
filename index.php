<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/login.php");
    exit;
}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<meta charset="UTF-8">

    <style type="text/css">
        	{
			color:#160FB4;
			font-style: comic sans;
			font-size: 20px;
			border: #FCFF26 5px dotted;
		}
		.button{
            background-color: #00BCD3;
            color: black;
            padding: 8px 8px;
            margin: 8px 0px;
            border: solid;
            cursor: pointer;
            width: 20%;
            border-radius:20px;
        }
    </style>
	</head>
	<body>

		<div class="page-header">
        <h1><center><cc>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a nuestro sitio.</cc></center></h1>
        
    </div>
    <p><center>
        <button class="button"><a href="login/reset-password.php" class="btn btn-warning">Cambia tu contraseña</a></button>
        <button class="button"><a href="login/logout.php" class="btn btn-danger">Cierra la sesión</a></button>
  
    </center></p>

	<figure class="contenedor">
    <table class="tbl">

		<div id="principal">
			<header>
				<div id="logo">
					<h2 class="titulo">CETis No.64</h2>
					<p class="sub-titulo">Proyecto de entrevistas</p>
				</div>

				<nav class="menu">
					<ul>
						<li><a href="php/Formulario.php">Usuario</a></li>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="html/contacto.html">Contacto</a></li>
						
					</ul>
				</nav>
			</header>

			<section id="slide">
				<img src="img/cetis.jpg" width="900" height="250">
			</section>
            
            <section id="info">
				<section id="izq">
					
						<img src="img/DGTI.jpg" align="left" width="150" class="img">
						<h2 class="h2">Nuestra Escuela CETis No. 64</h2>
					<p class="parrafo">
						En ésta página hablaremos acerca de las  carreras/especialidades a elegir que nos proporciona nuestra escuela Centro de Estudios Tecologicos industrial y de servicios No.64 Gral Lázaro Cárdenas del Río.
						<br><br>
						El Centro de Estudios Tecnológicos, industrial y de servicios No. 64, fue fundado en el mes de octubre de 1980, iniciando sus actividades en las Instalaciones de la Escuela Primaria Estatal “Juan Escutia”, de la Población de San Mateo Oxtotitlán, Toluca, México.
					</p>
				</section>
				
			</section>
			<section id="categorias">
				<section class="uno">
					<img src="img/cons.jpg" width="250" height="150" >
					<h2 class="h2">CONSTRUCCIÓN</h2>
					<p class="parrafo">
						La construcción es el arte o técnica de fabricar edificios e infraestructuras. En un sentido más amplio, se denomina construcción a todo aquello que exige, antes de hacerse, disponer de un proyecto y una planificación predeterminada.<br>
                        A partir de 2° semestre empezarás a trabajar en proyectos.
					</p>
                    <a href="html/Construccion.html" class="leer-mas">Leer más</a><br><br>
				</section>
				<section class="uno dos">
					<img src="img/pro.jpg" width="250" height="150">
					<h2 class="h2">PROGRAMACIÓN</h2>
					<p class="parrafo">
						Al estudiar Programación y Análisis de Sistemas estaras capacitado para realizar el ciclo de desarrollo de software y web, incorporando en ello el análisis de requerimientos, diseño, construcción, pruebas e implementación de soluciones.<br> A partir de 2° semestre empezarás a trabajar en proyectos.
					</p>
				    <a href="html/Programacion.html" class="leer-mas">Leer más</a><br><br>
				</section>
				<section class="uno">
					<img src="img/tb.jpg" width="250" height="150" >
					<h2 class="h2">TRABAJO SOCIAL</h2>
					<p class="parrafo">
						Al estudiar trabajo social apoyarás a las demás personas por medio de actividades y servicios sociales enfocados en integrar a las personas, familias, grupos, organizaciones y comunidades en el trabajo hacia el bien común.<br> 
                        A partir de 2° semestre empezarás a trabajar en proyectos.
					</p>
					<a href="html/TSocial.html" class="leer-mas">Leer más</a><br><br>
				</section>
                <section class="uno">
					<img src="img/mec.jpg" width="250" height="150">
					<h2 class="h2">MECÁNICA</h2>
					<p class="parrafo">
						La ingeniería mecánica es la rama que estudia y desarrolla las máquinas, equipos e instalaciones, considerando siempre los aspectos ecológicos y económicos para el beneficio de la sociedad; Dibujo técnico, diseño mecánico, diseño y fabricación asistida por computadora.<br> 
                        A partir de 2° semestre empezarás a trabajar en proyectos.
					</p>
					<a href="html/Mecanica.html" class="leer-mas">Leer más</a><br><br>
				</section>
				<section class="uno dos">
					<img src="img/elec.jpg" width="250" height="150">
					<h2 class="h2">ELECTRICIDAD</h2>
					<p class="parrafo">
						La carrera de Electricidad estudia el diseño, organización, control, operación y mantenimiento en sistemas de generación, transporte, distribución y consumo eficiente de la energía eléctrica; desde una visión científica/tecnológica para la transformación de la sociedad.<br> 
                        A partir de 2° semestre empezarás a trabajar en proyectos.
					</p>
					<a href="html/Electricidad.html" class="leer-mas">Leer más</a><br><br>
				</section>
			</section>
			
			<footer>
				<p><b><i><h2>
				   ¡GRACIAS POR TU ATENCIÓN!
				</h2></i></b></p>
			</footer>
		</div>


    </table>    
    </figure>

	</body>
</html>