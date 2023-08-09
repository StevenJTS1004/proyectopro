
<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "usuario");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Procesar el formulario de registro
if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Hash de la contraseña para mayor seguridad

    $consulta = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";
    
    if (mysqli_query($conexion, $consulta)) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de usuario</title>
</head>
<body>
    <h2>Registro de usuario</h2>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre" required><br>
        Correo: <input type="email" name="correo" required><br>
        Contraseña: <input type="password" name="contrasena" required><br>
        <input type="submit" name="registrar" value="Registrar">
    </form>
</body>
</html>