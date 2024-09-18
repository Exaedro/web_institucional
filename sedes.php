<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />
	<title>Escuela Tecnica</title>
</head>

<body>
	<div class="wrapper-sedes">
		<?php include_once("navbar.php"); ?>
		<main class="sedes-container">
			<aside>
				<h2>Horarios escolares</h2>
				<ul>
					<li><strong>Turno Mañana:</strong> 07:35 a 11:55 hs</li>
					<li><strong>Turno Tarde:</strong> 12:55 a 17:15 hs</li>
					<li><strong>Turno Vespertino:</strong> 17:35 a 21:45</li>
				</ul>
			</aside>
			<section class="sedes">
				<h2>Sedes</h2>
				<div>
					<article class="sede">
						<picture>
							<img
								src="img/sedeuniversidad.jpg"
								alt="Universidad de Munro" />
						</picture>
						<p>
							Universidad de munro (Programación 6°3), Carlos
							villate 4480
						</p>
					</article>
					<article class="sede">
						<picture>
							<img
								src="img/sedetecnica.jpg"
								alt="Escuela Tecnica Nro1" />
						</picture>
						<p>
							Técnica 1 Vicente López “Eduardo Ader”, Cerrito 3966
						</p>
					</article>
				</div>
			</section>
		</main>
	</div>
</body>

</html>