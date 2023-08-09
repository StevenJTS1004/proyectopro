<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Medios de Pago</title>
    
    <link rel="stylesheet" href="../stylees/seleccionar_medios_pago.css"> <!-- Ruta al archivo CSS -->
</head>
<body>
    <h1>Seleccione el medio de pago</h1>
    
    <?php
    // Verificar si se recibieron los parámetros del producto y precio
    if (isset($_GET['product']) && isset($_GET['price'])) {
        $productName = $_GET['product'];
        $productPrice = $_GET['price'];

        // Puedes mostrar la información del producto seleccionado
        echo '<p>Producto: ' . $productName . '</p>';
        echo '<p>Precio: ' . $productPrice . '</p>';

        // Aquí puedes implementar la lógica para mostrar opciones de medios de pago.
        // Por ejemplo, puedes mostrar un formulario con opciones de tarjeta de crédito, PayPal, transferencia bancaria, etc.
        // Si deseas procesar pagos reales, necesitarás integrar un servicio de pagos seguro y confiable.

        // Aquí hay un ejemplo simple de opciones de medios de pago (Solo para demostración):
        echo '<form action="procesar_pago.php" method="post">';
        echo '    <input type="hidden" name="product" value="' . $productName . '">';
        echo '    <input type="hidden" name="price" value="' . $productPrice . '">';
        echo '    <label><input type="radio" name="payment_method" value="credit_card"> Tarjeta de Crédito</label><br>';
        echo '    <label><input type="radio" name="payment_method" value="paypal"> PayPal</label><br>';
        echo '    <label><input type="radio" name="payment_method" value="bank_transfer"> Transferencia Bancaria</label><br>';
        echo '    <input type="submit" value="Realizar Pago">';
        echo '</form>';
    } else {
        echo '<p>Error: No se recibieron los parámetros del producto y precio.</p>';
    }
    ?>
</body>
</html>
