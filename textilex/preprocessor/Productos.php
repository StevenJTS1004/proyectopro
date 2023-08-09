<?php
require_once("dbcontroller.php");
$db_handle = new DBController();

$product_array = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");

// foreach($product_array as $key=>$value){
//     echo $product_array[$key]["name"];
//     echo "<br>";
// }
//     $product_array = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");

// foreach($product_array as $key=>$value){
//     echo $product_array[$key]["code"];
//     echo "<br>";
// }

?>
<div

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../stylees/productos.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="../javascripts/botoncomprar.js"></script>
    
</head>
<body>

<h1 class="volver-link" onclick="redireccionar()">Volver</h1>
<script>
        function redireccionar() {
            // Redirigir a la página inicio.php
            window.location.href = 'inicio.php';
        }
    </script>

    <header>
        <h1>Productos</h1>

        <div class="container-icon"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>
            <div class="count-products">
                <span id="contador-productos">0</span>
            </div>

            <div class="container-cart-products hidden-cart">
                <div class="cart-product">
                    <div class="info-cart-product">
                        <span class="cantidad-producto-carrito">1</span>
                        <p class="titulo-producto-carrito">Zapatos Nike</p>
                        <span class="precio-producto-carrito">$80</span>                           
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="cart-total">
                    <h3>Total:</h3>
                    <span class="total-pagar">$500</span>
                </div>
            </div>
        
        </div>
    </header>
    
    <div class="container-items">
    
        
        <?php
        // Replace the URLs and other dynamic content with PHP variables as needed
        $products = array();
        foreach($product_array as $key=>$value){
            array_push($products, array("name"=>$product_array[$key]["name"], "price"=>$product_array[$key]["price"], "image"=>$product_array[$key]["image"]));
            
            // echo "['name' => '".$product_array[$key]["name"].", 'price' => '.$product_array[$key]["price"]']";
        }

        // $products = [
            
        //     // ['name' => 'Zapatos Nike', 'price' => '$80', 'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80'],
        //     ['name' => 'Zapatos Nike', 'price' => '$80', 'image' => 'img1/zapatosnike.jpg'],
        //     ['name' => 'Pantalon', 'price' => '$50', 'image' => 'https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=697&q=80'],
        //     ['name' => 'Camisa', 'price' => '$70', 'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80'],
        //     ['name' => 'Chaqueta', 'price' => '$90', 'image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80'],
        //     ['name' => 'Gorra', 'price' => '$40', 'image' => 'https://images.unsplash.com/photo-1560774358-d727658f457c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80']
        // ];


        foreach ($products as $product) {
            echo '<div class="item">';
            echo '<figure>';
            echo '<img src="' . $product['image'] . '" alt="producto"/>';
            echo '</figure>';
            echo '<div class="info-product">';
            echo '<h2>' . $product['name'] . '</h2>';
            echo '<p class="price">' . $product['price'] . '</p>';
            echo '<button onclick="agregarAlCarrito(\'' . $product['name'] . '\', \'' . $product['price'] . '\')">añadir al carrito</button>';
            echo '<button onclick="mostrarMediosDePago(\'' . $product['name'] . '\', \'' . $product['price'] . '\')">comprar</button>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <script src="indez.js"></script>

</body>
</html>
<div id="background">
  <video autoplay muted loop>
    <source src="../videos/comercial.mp4" type="video/mp4">
  </video>
</div>


