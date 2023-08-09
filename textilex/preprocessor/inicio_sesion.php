<?php
require_once "dbcontroller.php";

$dbController = new DBController();
$conn = $dbController->connectDB();

session_start();

// Procesar el formulario de inicio de sesión
if (isset($_POST['iniciar_sesion'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $consulta = "SELECT id, nombre, contrasena FROM usuarios WHERE correo='$correo'";
    $resultado = $conn->query($consulta);

    if ($resultado->num_rows === 1) {
        $fila = $resultado->fetch_assoc();
        if (password_verify($contrasena, $fila['contrasena'])) {
            $_SESSION['usuario_id'] = $fila['id'];
            $_SESSION['usuario_nombre'] = $fila['nombre'];
            header("Location: inicio.php"); // Redirigir a la página de inicio después del inicio de sesión exitoso
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "El usuario no existe.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../stylees/estiloregistro.css">
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form method="post" action="">
        Correo: <input type="email" name="correo" required><br>
        Contraseña: <input type="password" name="contrasena" required><br>
        <input type="submit" name="iniciar_sesion" value="Iniciar sesión">
    </form>
</body>
</html>

<?php
// Procesar el formulario de registro
if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Hash de la contraseña para mayor seguridad

    $consulta = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";
    
    if ($conn->query($consulta)) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de usuario</title>
</head>
<body>
    <h2>Registrate para poder iniciar sesion</h2>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre" required><br>
        Correo: <input type="email" name="correo" required><br>
        Contraseña: <input type="password" name="contrasena" required><br>
        <input type="submit" name="registrar" value="Registrar">
    </form>
</body>
</html>
