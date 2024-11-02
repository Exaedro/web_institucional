<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/directivos.css?v=1.0" />
    <title>Lista de directivos</title>
</head>
<body>
<?php include_once("navbar.php"); ?>
    <div class="container">
        <h2>Lista de directivos</h2>
        <?php
            $conn = new mysqli("192.168.12.123", "user", "kQfBEnCE2s3NmeR", "adminDB");

            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
            
            $sql = "SELECT nombre, img_url, cargo, descripcion FROM directivos";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='directivo'>";
                        echo "<div class='directivo-header'>";
                            echo "<div class='avatar' style='background-image: url(" . htmlspecialchars($row['img_url']) . ");'></div>";
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
            
            $conn->close();
        ?>    
    </div>
</body>
</html>
