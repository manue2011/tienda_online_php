<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tienda.css">
</head>

<body>
    <div class="page-container">
        <?php
        include 'conexion.php'; // Incluye el archivo de conexión a la base de datos
        $categoria_id = intval($_GET['categoria'] ?? 0); // Obtiene el ID de la categoría desde la URL

        if ($categoria_id > 0) {
            // Consulta la categoría (nombre e imagen)
            $cat_result = $conn->query("SELECT nombre, imagen_url FROM categoria WHERE categoria_id=$categoria_id");
            $cat = $cat_result->fetch_assoc();

            echo "<h1>Categoría: {$cat['nombre']}</h1>"; // Muestra el nombre de la categoría
            echo "<img src='{$cat['imagen_url']}' alt='{$cat['nombre']}' class='category-image'><h2>Productos:</h2>"; // Muestra la imagen de la categoría

            // Consulta los productos de la categoría
            $res = $conn->query("SELECT nombre, precio, stock FROM producto WHERE categoria_id=$categoria_id");

            $productos = $res->fetch_all(MYSQLI_ASSOC); // Obtenemos todos los productos en un array

            echo "<div class='product-container'>";
            // Usamos un bucle for para recorrer el array de productos
            for ($i = 0; $i < count($productos); $i++) {
                echo "<div class='product-box'>
            <h3>{$productos[$i]['nombre']}</h3>
            <p>Precio: {$productos[$i]['precio']} €</p>
            <p>Stock: {$productos[$i]['stock']}</p>
        </div>";
            }
            echo "</div>";
        } else {
            echo "<h1>Categoría no válida.</h1>";
        }

        echo "<a href='index.php' class='back-link'>Volver</a>"; // Enlace para volver a la página principal

        $conn->close(); // Cierra la conexión a la base de datos
        ?>
    </div>
</body>

</html>