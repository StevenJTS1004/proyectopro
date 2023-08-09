// Variable global para almacenar los productos en el carrito
let carritoProductos = [];

// Función para agregar un producto al carrito
function agregarAlCarrito(productName, productPrice) {
    // Aquí puedes implementar la lógica para agregar el producto al carrito.
    // Por ejemplo, puedes crear un objeto con la información del producto y luego agregarlo al array 'carritoProductos'.
    carritoProductos.push({ name: productName, price: productPrice });

    // Actualizar el contador de productos en el carrito
    actualizarContadorCarrito();

    // Opcional: mostrar una notificación o mensaje al usuario para indicar que el producto se agregó al carrito.
}

// Función para mostrar los productos en el carrito
function mostrarCarrito() {
    // Aquí puedes implementar la lógica para mostrar los productos en el carrito.
    // Por ejemplo, puedes recorrer el array 'carritoProductos' y mostrar los nombres y precios de los productos en la interfaz.
    // Además, puedes calcular el total del carrito sumando los precios de los productos.

    // Opcional: Puedes utilizar una ventana emergente o una sección en la página para mostrar el carrito de compras.

    // Ejemplo de cómo mostrar el contenido del carrito en la consola (para fines de depuración):
    console.log("Carrito de compras:");
    console.log(carritoProductos);
}

// Función para actualizar el contador de productos en el carrito
function actualizarContadorCarrito() {
    const contadorProductos = document.getElementById("contador-productos");
    contadorProductos.textContent = carritoProductos.length;
}

// Función para redireccionar a la página de selección de medios de pago
function mostrarMediosDePago(productName, productPrice) {
    // Aquí puedes implementar la lógica para redireccionar a la página de selección de medios de pago.
    // Puedes utilizar los parámetros 'productName' y 'productPrice' para enviar información del producto seleccionado a la página.

    // Ejemplo de redirección a otra página donde los usuarios pueden seleccionar medios de pago:
    window.location.href = 'seleccionar_medios_pago.php?product=' + productName + '&price=' + productPrice;
}
