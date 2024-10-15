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
                    <img src="img/tecnica1vl.webp" alt="Técnica 1 Vicente López">
                    <h2>Sede 1: Técnica 1 Vicente López</h2>
                    <p>Sede principal, ahí van todos los cursos a cursar, a excepción de 6°3 que alterna.</p>
                    <p><i class="bx bxs-map"></i><a href="https://maps.app.goo.gl/HBeJV1LXDPM1Cvaa6">Cerrito 3966</a> </p>
                    <p><i class="bx bxl-gmail"></i> cooperadoraet1@gmail.com</p>
                </div>
                <div class="sede">
                    <img src="img/Centro-Universitario-Vicente-Lopez.webp" alt="Centro Universitario">
                    <h2>Sede 2: Centro Universitario</h2>
                    <p>En esa sede solo transcurre 6°3 durante el turno tarde, pasado el turno los estudiantes
                        se desplazan hasta la técnica a cursar el turno restante.
                    </p>
                    <p><i class="bx bxs-map"></i> <a href="https://maps.app.goo.gl/r7cD8PCW8qsLn7C59">Carlos Villate 4480</a></p>
                    <p><i class="bx bxl-gmail"></i> centro.universitario@mvl.edu.ar</p>
                </div>
                <div class="sede">
                    <img src="img/polideportivo.webp" alt="Polideportivo">
                    <h2>Sede 3: Polideportivo</h2>
                    <p>Allí los estudiantes vienen a realizar educación física.</p>
                    <p><i class="bx bxs-map"></i><a href="https://maps.app.goo.gl/5Bowze6TkYVKEy7r8"> Av. Bernardo Ader 4057</a></p>
                    <p><i class="bx bxl-gmail"></i>  delegacion.adelina@vicentelopez.gov.ar </p>
                </div>
            </div>
        </section>
        
    </main>
    <footer>
        <div class="footer-rectangles">
            <div class="rectangle rect1"></div>
            <div class="rectangle rect2"></div>
            <div class="rectangle rect3"></div>
            <div class="rectangle rect4"></div>
            <div class="rectangle rect5"></div>
            <div class="rectangle rect6"></div>
            <div class="rectangle rect7"></div>
            <div class="rectangle rect8"></div>
            <div class="rectangle rect9"></div>
            <div class="rectangle rect10"></div>
        </div>
    </footer>
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
