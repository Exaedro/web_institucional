<?php
$conn = new mysqli("localhost", "root", "", "adminDB");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin_user WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (isset($row["password"]) && $row["password"]==$password && isset($username) && $row["user_name"]==$username) {
        $_SESSION['usuario'] = $row;
        header("Location: admin.php");
        $_SESSION['status'] = "logued";
        exit();
    } else {
        echo "<p class='error'>Nombre de usuario o contraseña incorrectos.</p>";

    }
}

$conn->close();
?>

<form method="post" action="">
    <div class="form-element">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>
    </div>
    
    <div class="form-element">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
    </div>
    
    <button type="submit" name="login">Iniciar sesión</button>
</form>
