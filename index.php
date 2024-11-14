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
						<a href="especialidades.php">Electronica</a>
						<a href="especialidades.php">Programación</a>
					</div>
				</article>

				<article class="celeste" id="inscripciones">
					<a href="contacto.php">
						<p>Inscripciones</p>
					</a>
				</article>

				<article class="celeste" id="campos">
					<a href="sedes.php">
						<p>Sedes</p>
					</a>
				</article>

				<article class="directivos negro">
					<a href="directivos.php">
						<p>Autoridades</p>
					</a>
				</article>

			</section>
			
		</main>

	</div>
	<section id="sobre_nosotros">
				<div class="container" id="container">
					<h1>Acerca de nosotros </h1>
					<p>Un poco mas de la Técnica Nro°1</p>
				</div>
				<div class="cont_text ">
					
					<img src="./img/nosotros/historia.webp" alt="" class="img">
					
					<div class="text">
						<h2>Historia de la Escuela</h2>
						<p>
						El edificio fue construido sobre terrenos donados generosamente por la señora Elisa Schulze de Ader y su hija, Ana Elisa Ader de Grümbaum, esposa e hija de don Bernardo Ader, quien ya había fallecido para entonces. Esta donación fue aceptada oficialmente por la Municipalidad mediante la Ordenanza N°644 en el año 1934. </p>
						<p>Gracias a este gesto, la comunidad pudo contar con el espacio necesario para desarrollar un proyecto que beneficiaría a los habitantes de la zona, consolidando un legado de compromiso y contribución social que continuaría durante los años siguientes.</p>

					</div>

				</div>
				<div class="cont_text reverse">
				<img src="./img/nosotros/fundacion.webp" alt="" class="img">
				
				<div class="text">
						<h2>Fundación y Crecimiento</h2>
						<p>La idea de construir una escuela industrial en Villa Adelina surgió de Ceferino Fernández, miembro del Club de Leones, al notar la necesidad de un establecimiento de educación técnica en la zona. Con el apoyo del Club de Leones, el proyecto tomó forma, y en 1983 la escuela fue entregada a las autoridades municipales.</p>
						<p>El 16 de abril de 1984, la escuela industrial de Villa Adelina abrió sus puertas en un predio de 800 m², recibiendo a sus primeros 72 estudiantes. Se ha convertido en un referente de educación técnica y una oportunidad de formación para los jóvenes.</p>
					</div>
				
				</div>
				<div class="cont_text ">
				<img src="./img/nosotros/valores.webp" alt="" class="img">
					<div class="text">
						<h2>Valores de la escuela</h2>
						<p>La Escuela de Educación Técnica N°1 "Eduardo Ader" se enfoca en la formación integral de sus estudiantes, promoviendo valores como la responsabilidad, el respeto y la solidaridad.</p>
						<p>Ofrece una educación técnica de calidad que no solo imparte conocimientos específicos, sino que también apoya a los alumnos en la construcción de un proyecto de vida personal y profesional. Su objetivo es formar egresados con habilidades técnicas, preparados para enfrentar los desafíos del mundo moderno y contribuir positivamente a la comunidad.</p>
					</div>
				</div>
				<div class="cont_text reverse">
				<img src="./img/nosotros/actualidad.webp" alt="" class="img">
					<div class="text">
						<h2>Actualidad</h2>
						<p>La Escuela de Educación Técnica N°1 "Eduardo Ader" ha crecido significativamente a lo largo de los años, alcanzando una matrícula de aproximadamente 750 alumnos distribuidos en turnos de mañana, tarde y noche.</p>
						<p>Actualmente, cuenta con catorce divisiones de ciclo básico y once de ciclo superior secundario, La institución dispone de 20 aulas en total, de las cuales 9 son para realizar los talleres y las materias de laboratorio.</p>

					</div>
					
				</div>
				<div class="cont_text reverse">
					<div class="text">
						<h2>Personal y Cooperadora</h2>
						<p>El director de la escuela es el Prof. Ezequiel Torres y los vicedirectores son Lic. Prof. Mariana Bonetti, Lic. Prof. Karin Cuervo y Prof. Daniel Segnini.</p>
						<p>La Asociación Cooperadora, presente desde los inicios de la escuela, ha desempeñado un rol esencial en el desarrollo y sostenimiento de la institución. Gracias a su apoyo constante, el edificio se ha mantenido en buen estado, la escuela cuenta con los insumos, materiales necesarios para el trabajo diario en las aulas y talleres.</p>
			
					</div>
					<img src="./img/nosotros/personal.webp" alt="" class="img">
				</div>
				<div class="cont_text">
					<div class="text">
						<h2>Código de Conducta</h2>
						<p>El Código de Conducta de la escuela, es una guía en el desarrollo de los estudiantes, establece las normas y expectativas claras para el comportamiento, el respeto y el cumplimiento de las reglas tanto dentro como fuera del recinto escolar.</p>
						<p>	Elaborado con el objetivo de fomentar un ambiente de aprendizaje seguro y respetuoso, busca promover valores como la responsabilidad, la empatía y la tolerancia entre todos los miembros de la comunidad educativa. La escuela busca crear un entorno en el que cada estudiante pueda desarrollar sus habilidades.</p>
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
	const secciones = document.querySelector(".secciones")

	//cambiar la imagen de fondo de la seccion especialidades
	electronica.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/fondo-electronica.jpg')";
	})

	electronica.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/fondos/|jpg')";
	})

	programacion.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/programacion.png')";
	})

	programacion.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/fondos/fondo5.webp')";
	})

	//cambiar la imagen de fondo de la seccion inscripciones
	inscripciones.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/fondo-inscripciones.jpg')";
	})

	inscripciones.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/fondos/fondo5.webp')";
	})

	//cambiar la imagen de fondo de la seccion campos
	campos.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/sedeuniversidad.jpg')";
	})

	campos.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/fondos/fondo5.webp')";
	})

	//cambiar la imagen de fondo de la seccion directivos
	directivos.addEventListener("mouseenter", function() {
		fondo.style.backgroundImage = "url('img/fondo-directivos.jpg')";
	})

	directivos.addEventListener("mouseleave", function() {
		fondo.style.backgroundImage = "url('img/fondos/fondo5.webp')";
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