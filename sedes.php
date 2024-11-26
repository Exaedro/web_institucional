<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedes</title>
    <link rel="stylesheet" href="css/sedes.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<?php include_once("navbar.php"); ?>


    <main>
        <section class="sedes">
            <h1 id="titulo">SEDES</h1>
            <div class="sedes-container">
                <div class="sede">
                    <img src="img/fondos/fondo7.webp" alt="Técnica 1 Vicente López">
                    <h2>Sede 1: Técnica 1 Vicente López</h2>
                    <p>La sede principal: alberga exclusivamente las actividades académicas de todos los cursos, excepto 6°3, que alterna con el Centro Universitario.</p>
                    <p><i class="bx bxs-map"></i><a class="gmaps" href="https://maps.app.goo.gl/HBeJV1LXDPM1Cvaa6">Cerrito 3966</a> </p>
                    <p><i class="bx bxl-gmail"></i> cooperadoraet1@gmail.com</p>
                </div>
                <div class="sede">
                    <img src="img/Centro-Universitario-Vicente-Lopez.webp" alt="Centro Universitario">
                    <h2>Sede 2: Centro Universitario</h2>
                    <p>En esa sede, únicamente el curso 6°3 realiza sus actividades durante el turno tarde. Al finalizar dicho turno, los estudiantes se trasladan a la escuela técnica para completar el turno restante.
                    </p>
                    <p><i class="bx bxs-map"></i> <a class="gmaps" href="https://maps.app.goo.gl/r7cD8PCW8qsLn7C59">Carlos Villate 4480</a></p>
                    <p><i class="bx bxl-gmail"></i> centro.universitario@mvl.edu.ar</p>
                </div>
                <div class="sede">
                    <img src="img/polideportivo.webp" alt="Polideportivo">
                    <h2>Sede 3: Polideportivo</h2>
                    <p>En dicha sede, los estudiantes llevan a cabo la materia de Educación Física.</p>
                    <p><i class="bx bxs-map"></i><a class="gmaps" href="https://maps.app.goo.gl/5Bowze6TkYVKEy7r8"> Av. Bernardo Ader 4057</a></p>
                    <p><i class="bx bxl-gmail"></i>  delegacion.adelina@vicentelopez.gov.ar </p>
                </div>
            </div>
        </section>
        
    </main>

    <script>// Script para abrir y cerrar el menú lateral
// Script para abrir y cerrar el menú lateral con animación
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('open');
});

// Cerrar el menú cuando se haga clic fuera del menú
document.addEventListener('click', (e) => {
    if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
        navMenu.classList.remove('open');
    }
});

        </script>
      
    
</body>
</html>
