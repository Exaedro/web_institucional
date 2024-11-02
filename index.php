<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/indice.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
					<a href="#">
						<p>Inscripciones</p>
					</a>
				</article>

				<article class="celeste" id="campos">
					<a href="#">
						<p>Campos</p>
					</a>
				</article>

				<article class="directivos negro">
					<a href="#">
						<p>Directivos</p>
					</a>
				</article>

			</section>
			
		</main>

	</div>
	<section id="sobre_nosotros">
				<div class="container" id="container">
					<h1>Acerca de nosotros </h1>
					<p>Un poco mas de la Tecnica Nro°1</p>
				</div>
				<div class="cont_text ">
					<img src="./img/nosotros/historia.webp" alt="" class="img">
					<div class="text">
						<h2>Historia de la Escuela</h2>
						<p>El edificio se construyó sobre los terrenos donados por la Sra. Elisa Schulze de Ader y Ana Elisa Ader de Grümbaum, esposa e hija de don Bernardo Ader, ya fallecido, y que fueron aceptados por la Municipalidad mediante la Ordenanza N°644 del año 1934.</p>

					</div>

				</div>
				<div class="cont_text ">
					<div class="text">
						<h2>Fundación y Crecimiento</h2>
						<p>La idea de la construcción de una escuela industrial surgió del integrante del Club de Leones, Ceferino Fernández, al comprobar la necesidad de un establecimiento de este tipo en la zona de Villa Adelina. Así, a fines del año 1983, el Club de Leones de Villa Adelina hizo entrega de la escuela a las autoridades Municipales. La escuela abrió sus puertas el 16 de abril de 1984 en un predio de 800 m², con un total de 72 alumnos.</p>
					</div>
					<img src="./img/nosotros/fundacion.webp" alt="" class="img">
				</div>
				<div class="cont_text reverse">
					<div class="text">
						<h2>Valores de la escuela</h2>
						<p>La escuela de Educación Técnica N°1 "Eduardo Ader" sostiene como ideario la formación en valores, el crecimiento como ciudadanos y, a partir de esa base, acompañar a los alumnos para que logren construir un proyecto de vida personal y profesional.</p>
					</div>
					<img src="./img/nosotros/valores.webp" alt="" class="img">
				</div>
				<div class="cont_text">
					<div class="text">
						<h2>Actualidad</h2>
						<p>Con el correr de los años, la escuela fue creciendo y, en la actualidad, la matrícula es aproximadamente de 700 alumnos que cursan en turno mañana, tarde y noche, distribuidos en catorce divisiones de ciclo básico y once divisiones de ciclo superior secundario. La escuela cuenta, hoy en día, con 20 aulas, de las cuales 9 son para realizar los talleres y las materias de laboratorio.</p>
					</div>
					<img src="./img/nosotros/actualidad.webp" alt="" class="img">
				</div>
				<div class="cont_text reverse">
					<div class="text">
						<h2>Personal y Cooperadora</h2>
						<p>La Asociación Cooperadora, que funciona desde la fundación de la escuela, ha sido de gran ayuda para el mantenimiento edilicio y la provisión de todos los insumos necesarios. El director de la escuela es el Prof. Ezequiel Torres y los vicedirectores son Lic. Prof. Mariana Bonetti, Lic. Prof. Karin Cuervo y Prof. Daniel Segnini.</p>
					</div>
					<img src="./img/nosotros/personal.webp" alt="" class="img">
				</div>
				<div class="cont_text">
					<div class="text">
						<h2>Código de Conducta</h2>
						<p>El Código de Conducta de la escuela define las normas y expectativas para los estudiantes en cuanto al comportamiento, respeto y cumplimiento de las reglas dentro y fuera del establecimiento.</p>
					</div>
					<img src="./img/nosotros/codigo.webp" alt="" class="img">
				</div>
			</section>
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
	electronica.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/fondo-electronica.jpg')";
	})

	electronica.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})

	programacion.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/programacion.png')";
	})

	programacion.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})

	//cambiar la imagen de fondo de la seccion inscripciones
	inscripciones.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/fondo-inscripciones.jpg')";
	})

	inscripciones.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})

	//cambiar la imagen de fondo de la seccion campos
	campos.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/sedeuniversidad.jpg')";
	})

	campos.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})

	//cambiar la imagen de fondo de la seccion directivos
	directivos.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/fondo-directivos.jpg')";
	})

	directivos.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/tecnica.jpg')";
	})
</script>
<script>
	// Selecciona todas las imágenes y el contenedor
	const sections = document.querySelectorAll("img");
	const container = document.querySelector(".container");

	// Combina ambas selecciones en una lista (usando spread operator)
	const elementsToObserve = [...sections, container];

	// Crea el Intersection Observer
	const observer = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.add("img-visible");
				} else {
					entry.target.classList.remove("img-visible");
				}
			});
		}, {
			threshold: 0.5,
		}
	);

	// Observa cada elemento en la lista combinada
	elementsToObserve.forEach((element) => observer.observe(element));
</script>

</html>