<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falló la conexión: " . $conn->connect_error);
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$asunto = isset($_POST['asunto']) ? $_POST['asunto'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';


$sql = "INSERT INTO mail (nombre, asunto, mensaje)
VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $nombre, $asunto, $mensaje);
$result = $stmt->execute();

if ($result) {
    echo "<script>alert('Datos insertados con éxito');</script>";
} else {
    echo "<script>alert('Error al insertar datos');</script>";
}

header('Location: contacto.php');
$conn->close();
?>
