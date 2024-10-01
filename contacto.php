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

        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea>

        <input type="submit" value="Enviar">
    </form>
</div>	
</div>

	</main>

	<footer>

	</footer>
</body>

</html>

