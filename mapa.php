<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mapa.css" />
    <link rel="stylesheet" href="css/style.css" />
	<title>Escuela de Educación Secundaria Nro1 - Mapa</title>
</head>
<body>
    <?php include_once("navbar.php"); ?>
    <h1>Mapa de la institucion</h1>
    <div class="contenedor">
        <div class="planta">
            <img src="img/mapa_plantabaja.png" alt="Planta baja">
        </div>
        <div class="planta">
            <img src="img/primer_planta.png" alt="Planta baja">
        </div>
        <div class="planta">
            <img src="img/segunda_planta.png" alt="Planta baja">
        </div>
    </div>
    <script>
        const plantas = document.querySelectorAll('.planta');
        plantas.forEach(planta => {
            planta.addEventListener('mouseenter', () => {
                planta.classList.add('active');
                plantas.forEach(otherPlanta => {
                    if (otherPlanta !== planta) {
                        otherPlanta.classList.add('inactive');
                    }
                });
            });

            planta.addEventListener('mouseleave', () => {
                planta.classList.remove('active');
                plantas.forEach(otherPlanta => {
                    otherPlanta.classList.remove('inactive');
                });
            });
        });

    </script>
</body>
</html>