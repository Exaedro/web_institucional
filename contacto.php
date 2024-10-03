<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<title>Escuela de Educación Secundaria Nro1</title>
	<link rel="stylesheet" href="./css/contactos.css">
</head>
<body>
	<header>
		<?php include_once("./navbar.php"); ?>
	</header>

	<main>
		<h1>Envía un Email</h1>
		<form action="guardar_mensaje.php" method="post">
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre" required>

			<label for="mail">Asunto:</label>
			<input type="email" id="mail" name="mail" required>

			<label for="mensaje">Mensaje:</label>
			<textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea>

			<input type="submit" value="Enviar">
		</form>

		<div class="cuadro_contacto">
			<h1>agregamos las cosas de contacto</h1>

		</div>
		
		<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=eest%20n1%20vicente%20lopez&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 420px; height: 420px;"></iframe><style>.mapouter{display:table;}.gmap_canvas{overflow:hidden;position:relative;height:420px;width:420px;background:#fff;}</style><a href="https://www.taxuni.com/ffcra-extension/">FFCRA Extension</a><style>.gmap_canvas iframe{position:relative !important;z-index:2 !important;}.gmap_canvas a{color:#fff !important;position:absolute !important;top:0 !important;left:0 !important;z-index:0 !important;}</style></div></div>
	</main>

	<footer>

	</footer>
</body>

</html>

