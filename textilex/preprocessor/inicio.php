
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
    <link rel="stylesheet" href="../stylees/estiloinicio.css">
    <title>Pagina web</title>
</head>
<body>

<!-- conexion base de datoso///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->




</body>
<!-- conexion base de datoso///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: inicio_sesion.php");
    exit();
}

// Mostrar el nombre del usuario
$nombre = $_SESSION['usuario_nombre'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
</head>
<body>
    
   
    
</body>
</html>

 
   <?php
    // Definir variables dinámicas para el sitio
    
    $siteName = "Textilex";
    $baseURL = "/"; // Cambia esto según la ruta base de tu sitio web
    ?>

    <div class="head">
<!-- ajustes de logo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!DOCTYPE html>
<html>
<head>
  <title>Logo con efecto al presionar</title>
  <style>
    /* Estilo para el contenedor del logo */
    #logo-container {
      position: absolute;
      top: 20px;
      left: 20px;
      cursor: pointer; /* Agregamos un puntero al cursor para indicar que es interactivo */
      transition: transform 0.2s ease; /* Agregamos una transición para que el cambio de tamaño sea suave */
    }
    
    /* Estilo para la imagen del logo */
    #logo {
      width: 100px;
      height: auto;
    }
  </style>
</head>

<body>
  


<!-- Contenedor para el logo -->
  <div id="logo-container">
    <img id="logo" src="img/logoinicial.png" alt="Logo Inicial" onclick="agrandarLogo()">
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
  </script>
</body>
</html>
<!-- ajustes de logo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="logo">
            <a href="<?php echo $baseURL; ?>"><?php echo $siteName; ?></a>
         </div>

         <nav class="navbar">
         <!-- <a href="<?php echo $baseURL; ?>inicioss.php">Inicio de sesion</a> -->
         <a href="<?php echo $baseURL; ?>index.php">Inicio</a>
            <a href="<?php echo $baseURL; ?>Nosotros.php">Nosotros</a>
            
             <!-- <a href="<?php echo $baseURL; ?>Contacto.php">Producto</a> -->
            <!-- <a href="<?php echo $baseURL; ?>Productos.php">Productos</a> -->
            <a href="cerrar_sesion.php">Cerrar sesión</a>
           
            <a href="registro.php">Registro</a>
            <a href="Contacto.php">Contacto</a>
            <a href="Productos.php">Productos</a>
            <a href="#">Precio</a>
         </nav>

    
    </div>

    <header class="content header">
        <h2 class="title">Inicio</h2>
        <p>
            Ropa y productos al mejor precio del mercado
        </p>

        <div class="btn-home">
            <a href="#" class="btn">Saber mas</a>
            <a href="#" class="btn">Saber mas</a>
        </div>
    </header>
      
    <section class="content sau">
       
</body> 
        
        <button id="productosButton">Ir a Productos</button>
        <script>
    // Obtenemos una referencia al botón y agregamos un evento 'click' para redirigir al archivo productos.php
    document.getElementById('productosButton').addEventListener('click', function() {
      // Reemplaza "productos.php" con la ruta correcta si está en una carpeta específica.
      window.location.href = 'productos.php';
    });
  </script>
        <p>
           Acá tenemos algunos de los productos que ofrecemos</p>

        <div class="box-container">
            <div class="box">
                <i class="fab fa-angular"></i>
                <h3>CAMISA</h3>
                <img src="img1/camisa.jpg" alt="Cámara">
                <p>natus minima qui id cum.</p>
                <style>
    .box img {
        max-width: 100%;
        max-height: 100%;
    }
</style>
              </div>
            <div class="box">
            <i class="fab fa-apple"></i>
                <h3>GORRA</h3>
                <img src="img1/gorra.jpg" alt="Cámara">
                <p>natus minima qui id cum.</p>
            </div>
            <div class="box">
                <i class="fab fa-apple"></i>
                <h3>PANTALON</h3>
                <img src="img1/pantalon.jpg" alt="Cámara">
                <p>natus minima qui id cum.</p>
            </div>
            <div class="box">
                <i class="fab fa-apple"></i>
                <h3>Lorem</h3>
                <p>natus minima qui id cum.</p>
                <style>
    .box img {
        max-width: 100%;
        max-height: 100%;
    }
</style>
              </div>
          </div>

    </section>

    <section class="content about">

        <h2 class="title">Nosotros</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Doloremque, sed voluptatibus voluptas similique commodi
            voluptatem eveniet modi quibusdam vel distinctio debitis 
            dignissimos, deserunt asperiores. Adipisci eligendi repudiandae
            dolores temporibus deleniti.
        </p>

        <a href="<?php echo $baseURL; ?>Nosotros.html" class="btn">Saber mas</a>

    </section>

    <section class="content price">

        <article class="contain">
            <h2 class="title">Precio</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Doloremque, sed voluptatibus voluptas similique commodi
                voluptatem eveniet modi quibusdam vel distinctio debitis 
                dignissimos, deserunt asperiores. Adipisci eligendi repudiandae
                dolores temporibus deleniti.
            </p>

            <a href="#" class="btn">Saber precio</a>

        </article>

    </section>

    <selection>

</body>



</html>

<!-- video de comercial/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<body>

   

<div class="video-container">
    <video controls width="640" height="360">
        <!-- Reemplaza "ejemplo.mp4" con el nombre real de tu archivo de video -->
        <source src="../preprocessor/videos/comercial.mp4" type="video/mp4">
        <!-- Agrega más elementos <source> con diferentes formatos de archivo para una compatibilidad entre navegadores -->
        <!-- Por ejemplo, puedes agregar una versión WebM del video de la siguiente manera:
             <source src="videos/ejemplo.webm" type="video/webm"> -->
        Tu navegador no admite la etiqueta de video.
    </video>
</div>
<!-- video de comercial//////////////////////////////////////////////////////////////////////////////////////////// ////////////-->
    

<body>
  
 
