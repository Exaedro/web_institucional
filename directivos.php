<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/directivos.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Lista de directivos</title>
</head>
<body>
<?php include_once("navbar.php"); ?>
    <div class="container">
        <h2>Lista de directivos</h2>
        <?php
            $conn = new mysqli("localhost", "root", "", "adminDB");


            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
            
            
            $sql = "SELECT nombre, img_url, cargo, descripcion FROM directivos";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
               
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='directivo'>";
                    echo "<div class='directivo-header'>";
                    echo "<div class='avatar'></div>";
                    echo "<h2 class='nombre'>" . htmlspecialchars($row['nombre']) .  "</h2>";
                    echo "<h2 class='info-preview'>" . htmlspecialchars($row['cargo']) .  "</h2>";
                    echo "</div>"; 
                    echo "<div class='informacion'>";
                    echo "<p>" . htmlspecialchars($row['descripcion']) . "</p>";
                    echo "</div>"; 
                    echo "</div>";
                }
            } else {
                echo "<li>No hay datos disponibles.</li>";
            }
            echo "</ul>";
            echo "</div>";

            $conn->close();
        ?>
    
    </div>
    
    <script>
        document.querySelectorAll('.directivo').forEach(function(directivo) {
            directivo.addEventListener('mouseover', function() {
                // Mover el avatar más hacia arriba y asegurar que quede por fuera
                const avatar = this.querySelector('.avatar');
                avatar.style.transform = 'translateY(-80%)';
                avatar.style.zIndex = '2'; // Elevar para que el avatar quede por encima de la caja

                // Mover el nombre hacia la izquierda para que quede a la misma altura de la foto en el eje X (Horizontal)
                const nombre = this.querySelector('.nombre');
                nombre.style.transform= 'translateX(-100px)';

                //agrandar el directivo
                const directivo = this.querySelector('.directivo')
                director.style.transform = 'scale(1.4)';

                // Ocultar la previsualización
                this.querySelector('.info-preview').style.display = 'none';

                // Ajustar la altura automáticamente en base al contenido
                let fullHeight = this.scrollHeight;
                this.style.height = `${fullHeight}px`;
            });

            directivo.addEventListener('mouseout', function() {
                // Restaurar el avatar a su posición original
                const avatar = this.querySelector('.avatar');
                avatar.style.transform = 'translateY(0)';
                avatar.style.zIndex = '1'; // Restaurar el z-index
                
                const nombre = this.querySelector('.nombre');
                nombre.style.transform= 'translateX(0)';
                
                const directivo = this.querySelector('.directivo')
                director.style.transform = 'scale(1)';

                // Mostrar la previsualización cuando no esté en hover
                this.querySelector('.info-preview').style.display = 'block';

                // Restaurar la altura original de la caja
                this.style.height = '120px'; // Vuelve a la altura original
            });
        });
    </script>
</body>
</html>
