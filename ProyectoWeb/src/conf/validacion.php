<?php
require_once "db.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = $conexion->real_escape_string($_POST['correo']);
    $password = $conexion->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();
        $_SESSION['usuario'] = $usuario['nombre'];
        echo "<script>
                alert('Inicio de sesión exitoso. Bienvenido, {$usuario['nombre']}');
                window.location.href = '../index.php';
              </script>";
    } else {
        echo "<script>
                alert('Correo o contraseña incorrectos');
                window.location.href = '../index.php';
              </script>";
    }
}
?>
