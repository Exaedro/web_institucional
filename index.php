<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<title>Escuela de Educación Secundaria Nro1</title>
</head>

<body>
	<div class="wrapper-inicio">
		<?php include_once("navbar.php"); ?>
		<main class="inicio">
			<section class="lateral animate__animated animate__fadeInLeft">
				<h2>Escuela de Educación Secundaria Tecnica Nro°1</h2>
			</section>
			<section class="secciones">
				<article class="especialidades">
					<p>Especialidades</p>
					<div class="botones">
						<a href="#">Electronica</a>
						<a href="#">Programación</a>
					</div>
				</article>
				<article class="celeste" id="inscripciones">
					<p>Inscripciones</p>
				</article>
				<article class="celeste" id="campos">
					<p>Campos</p>
				</article>
				<article class="directivos negro">
					<p>Directivos</p>
				</article>
			</section>
		</main>
	</div>
</body>

<!--hacer que al pasar el mouse por un articulo, cambie la imagen de fondo-->
<script>
	const fondo = document.querySelector(".wrapper-inicio");
	const electronica = document.querySelector(".especialidades a:nth-child(1)");
	const programacion = document.querySelector(".especialidades a:nth-child(2)");
	const inscripciones = document.querySelector(".celeste#inscripciones");
	const campos = document.querySelector(".celeste#campos");
	const directivos = document.querySelector(".directivos");

	//cambiar la imagen de fondo de la seccion especialidades
	electronica.addEventListener("mouseenter", function () {
		fondo.style.backgroundImage = "url('img/sedeuniversidad.jpg')";
	})
	
	electronica.addEventListener("mouseleave", function () {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})
	
	programacion.addEventListener("mouseenter", function () {
		fondo.style.backgroundImage = "url('img/sedeuniversidad.jpg')";
	})

	programacion.addEventListener("mouseleave", function () {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})

	//cambiar la imagen de fondo de la seccion inscripciones
	inscripciones.addEventListener("mouseenter", function () {
		fondo.style.backgroundImage = "url('img/sedeuniversidad.jpg')";
	})

	inscripciones.addEventListener("mouseleave", function () {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})

	//cambiar la imagen de fondo de la seccion campos
	campos.addEventListener("mouseenter", function () {
		fondo.style.backgroundImage = "url('img/sedeuniversidad.jpg')";
	})

	campos.addEventListener("mouseleave", function () {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})

	//cambiar la imagen de fondo de la seccion directivos
	directivos.addEventListener("mouseenter", function () {
		fondo.style.backgroundImage = "url('img/sedeuniversidad.jpg')";
	})

	directivos.addEventListener("mouseleave", function () {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})

	</script>
</html>