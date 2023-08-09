<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Pago</title>
    <link rel="stylesheet" href="../stylees/procesar_pago.css"> <!-- Ruta al archivo CSS -->
</head>
<body>
    <h1>Procesar Pago</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["product"]) && isset($_POST["price"]) && isset($_POST["payment_method"])) {
        // Obtener los datos del producto y el método de pago seleccionado
        $productName = $_POST["product"];
        $productPrice = $_POST["price"];
        $paymentMethod = $_POST["payment_method"];

        // Aquí puedes implementar la lógica real para procesar el pago con el método seleccionado.
        // Por ejemplo, puedes utilizar una pasarela de pago o integrar con un servicio de pago real.
        // Como esto es solo un ejemplo, simplemente mostraremos un mensaje de pago exitoso.

        echo '<p>Pago realizado con éxito:</p>';
        echo '<p>Producto: ' . $productName . '</p>';
        echo '<p>Precio: ' . $productPrice . '</p>';
        echo '<p>Método de Pago: ' . $paymentMethod . '</p>';
    } else {
        echo '<p>Error: No se recibieron los datos de pago.</p>';
    }
    ?>
<a href="productos.php" class="volver-button">Volver</a>
</body>
</html>
