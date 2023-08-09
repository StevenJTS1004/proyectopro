<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <form action="registrar_usuario.php" method="post">

        <h1 class="animate__animated animate__backInLeft">Registro de usuario</h1>

        <p>Nombre <input type="text" placeholder="Ingrese su nombre" name="nombre"></p>

        <p>Usuario <input type="text" placeholder="Ingrese un nombre de usuario" name="usuario"></p>

        <p>Contraseña <input type="password" placeholder="Ingrese una contraseña" name="contraseña"></p>
        <p>Confirmar Contraseña <input type="password" placeholder="Confirme la contraseña" name="confirmar_contraseña"></p>

        <input type="submit" value="Registrarse">

    </form>

    <p>¿Ya tienes una cuenta? <a href="iniciar_sesion.php">Inicia sesión aquí</a></p>

</body>
</html>