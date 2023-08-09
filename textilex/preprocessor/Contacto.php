<!DOCTYPE html>
<html>
<head>
<title>Formulario de Contacto</title>
    
<link rel="stylesheet" href="../stylees/estilocontacto.css">
</head>
<body>
<!-- conexion base de datos -->
<?php
require_once "dbcontroller.php";

$dbController = new DBController();
$conn = $dbController->connectDB();

    

    // Procesar el formulario cuando se envíe
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];

        // Consulta SQL para insertar los datos en la tabla
        $sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "Mensaje enviado correctamente";
        } else {
            echo "Error al enviar el mensaje: " . $conn->error;
        }
    }

    // Cerrar la conexión a la base de datos
  
    ?>

    <h2>Formulario de Contacto</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nombre: <input type="text" name="nombre" required><br>
        Correo: <input type="email" name="correo" required><br>
        Mensaje: <textarea name="mensaje" required></textarea><br>
        <input type="submit" value="Enviar">
    </form>
<!-- Botón para redireccionar a inicio.php -->
<a href="inicio.php" class="redirect-button">Ir a Inicio</a>

<div class="info-form">
            <h2>Contáctanos</h2>
            <p>Si tienes algún problema, no dudes en comunicarte con nosotros</p>
            <a href="#"><i class="fa fa-phone"></i> 313-4679130</a>
            <a href="#"><i class="fa fa-envelope"></i> textilex01@gmail.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Bogotá, Colombia</a>
        </div>
</body>

<!-- ajustes de logo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!DOCTYPE html>
<html>
<head>
  <title>Logo con efecto al presionar y redirección</title>
  <style>
    /* Estilo para el contenedor del logo */
    #logo-container {
      position: absolute;
      top: 20px;
      left: 20px;
      cursor: pointer; /* Agregamos un puntero al cursor para indicar que es interactivo */
      transition: transform 0.2s ease; /* Agregamos una transición para que el cambio de tamaño sea suave */
    }

    /* Estilo para el botón de redirección */
    #redirect-button {
      position: absolute;
      top: 120px;
      left: 20px;
      cursor: pointer;
    }

    /* Estilo para la imagen del logo */
    #logo {
      width: 100px;
      height: auto;
    }
  </style>
</head>
<body>
  <!-- Contenedor para el logo con enlace a inicio.php -->
  <a href="inicio.php" id="logo-container">
    <img id="logo" src="img/logoinicial.png" alt="Logo Inicial" onclick="agrandarLogo()">
  </a>

  <!-- Botón de redirección -->
  <div id="redirect-button" onclick="redirigirInicio()">
    
  </div>

  <!-- Aquí puedes agregar el resto del contenido de tu página -->

  <script>
    function agrandarLogo() {
      var logo = document.getElementById('logo');
      var logoContainer = document.getElementById('logo-container');

      // Cambiar el tamaño del logo al hacer clic
      if (logoContainer.style.transform === 'scale(1.2)') {
        logoContainer.style.transform = 'scale(1)';
      } else {
        logoContainer.style.transform = 'scale(1.2)';
      }
    }

    function redirigirInicio() {
      window.location.href = 'inicio.php'; // Redirigir a la página inicial
    }
  </script>
</body>
</html>
<!-- ajustes de logo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->