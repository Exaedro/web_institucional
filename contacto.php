<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<title>Escuela de Educación Secundaria Nro1</title>
	<link rel="stylesheet" href="css/contactos.css">
</head>
<body>
<header>
    <?php include_once("./navbar.php"); ?>
</header>

<main class="container">
    <div class="contact-box">
        <!-- Información de contacto -->
        <div class="contact-info">
            <h1>Contacto</h1>
            <p><i class="fas fa-envelope"></i> inscripcion@tecnica1vl.org</p>
            <p><i class="fas fa-map-marker-alt"></i> Cerrito 3966, villa Adelina</p>
            <p><i class="fas fa-phone"></i> (011) 4735-0174</p>
            <br>

            <!-- Redes sociales -->
            <div class="social-icons">
               <a class="social" href="https://www.facebook.com/tecnicauno.vicentelopez/?locale=es_LA" target="_blank"><i class="fab fa-facebook-f">    Facebook</i></a> 
            </div>

            <div class="social-icons">
                <a href="https://www.instagram.com/tecnica_para_las_primaveras?utm_source=qr&igshid=OGU0MmVlOWVjOQ%3D%3D" target="_blank"><i class="fab fa-instagram">  Instagram</i></a>   
            </div>

           
        </div>

        <!-- Formulario de contacto -->
        <div class="contact-form">
            <form action="guardar_mensaje.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Escribe tu nombre">

                <label for="mail">Correo electrónico:</label>
                <input type="email" id="mail" name="mail" required placeholder="Escribe tu correo">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required placeholder="Escribe tu mensaje"></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <!-- Sección del mapa debajo del formulario -->
    <div class="map-section">
        <div class="map-container">
            <iframe src="https://maps.google.com/maps?q=eest%20n1%20vicente%20lopez&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 100%; height: 300px;"></iframe>
        </div>
        <br>
        <div class="map-description">
            <h2>Establecimiento del Colegio</h2>
            <p>Este es el mapa de nuestra sede, ubicada en Vicente López. Aquí es donde se llevan a cabo todas las clases y  nuestras actividades escolares.</p>
            <p><strong>Dirección:</strong> Cerrito 3966, Vicente López, Buenos Aires.</p>
            <p><strong>Teléfono:</strong> (011) 4735-0174</p>
        </div>
    </div>
</main>

<footer>
   <br><br><br><br><br><br><br><br>
</footer>


</body>

</html>


