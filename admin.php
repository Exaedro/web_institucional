<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "adminDB");

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar la base de datos
$sql = "SELECT nombre, asunto, mensaje FROM mail";
$result = $conn->query($sql);

// Mostrar los resultados en una lista
echo "<h2>Datos de la tabla mail</h2>";
echo "<ul>";
if ($result->num_rows > 0) {
    // Obtenemos cada fila y la imprimimos como una lista desordenada
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "<strong>Nombre:</strong> " . htmlspecialchars($row['nombre']) . "<br>";
        echo "<strong>Asunto:</strong> " . htmlspecialchars($row['asunto']) . "<br>";
        echo "<strong>Mensaje:</strong> " . htmlspecialchars($row['mensaje']) . "<br>";
        echo "</li>";
    }
} else {
    echo "<li>No hay datos disponibles.</li>";
}
echo "</ul>";

// Cerrar la conexión a la base de datos
$conn->close();
?>
