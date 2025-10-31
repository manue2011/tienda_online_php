<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Filtrados</title>
    <link rel="stylesheet" href="css/busqueda.css">
</head>
<body>
    <div class="container">

        <h2>Productos Filtrados</h2>

        <?php
        // Incluir el archivo que contiene la configuración y conexión a la base de datos
        include 'conexion.php';
        //echo var_dump($_GET);
        // Obtener los parámetros enviados por el usuario a través de la URL (método GET)
        $categoria = $_GET['categoria'];   // Categoría seleccionada por el usuario
        $precio_min = $_GET['precio_min']; // Precio mínimo ingresado en el filtro
        $precio_max = $_GET['precio_max']; // Precio máximo ingresado en el filtro

        // Construir la consulta SQL inicial sin filtros específicos
        $sql = "SELECT * FROM Producto WHERE 1"; // WHERE 1 permite añadir condiciones dinámicamente

        // Si se seleccionó una categoría específica (y no 'Todas')
        if ($categoria !== 'Todas') {
            // Usamos una subconsulta para obtener el ID de la categoría por su nombre
            $sql .= " AND categoria_id = (SELECT categoria_id FROM categoria WHERE nombre = '$categoria')";
        }

        // Agregar filtro por precio mínimo si el usuario ingresó un valor
        if (!empty($precio_min)) {
             $sql .= " AND precio >= $precio_min"; // Filtrar productos con precio mayor o igual al mínimo
        }

        // Agregar filtro por precio máximo si el usuario ingresó un valor
        if (!empty($precio_max)) {
             $sql .= " AND precio <= $precio_max"; // Filtrar productos con precio menor o igual al máximo
        }

        // Ejecutar la consulta en la base de datos
        $result = $conn->query($sql);

        // Verificar si la consulta devolvió resultados
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Mostrar la información del producto en un párrafo
                echo "<p><span class='nombre'>{$row['nombre']}</span><span class='precio'>{$row['precio']} €</span></p>";
            }
        } else {
            // Mostrar un mensaje si no se encontraron productos que coincidan con los filtros
            echo "No se encontraron productos con los criterios seleccionados.";
        }

        // Cerrar la conexión con la base de datos para liberar recursos
        $conn->close();
        ?>

    </div>
            <a href="index.php">Volver a inicio</a>
</body>
</html>
