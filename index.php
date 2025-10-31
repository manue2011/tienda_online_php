<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Videojuegos</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div id="sesion">

        <a id="registro" href="registro.php">crear cuenta</a>
        <a id="iniciar" href="iniciar.php">iniciar secion</a>

    </div>


    <div class="header-texto">
        <h1>Bienvenido a la Tienda de Videojuegos</h1>
        <h2>Explora nuestra colección de consolas, ordenadores y videojuegos, encuentra tus favoritos.</h2>
        <p>¡Bienvenido a nuestra tienda de videojuegos! Somos tu centro neurálgico para todo lo relacionado con
            el gaming. Nos especializamos en ofrecerte el hardware más potente, desde las consolas de
            última generación hasta los ordenadores y portátiles listos para la batalla. Por supuesto,
            también contamos con un catálogo masivo de videojuegos para todas las plataformas.</p>
    </div>

    <div class="product-container">

        <div class="product-box">
            <h3>Videojuegos</h3>
            <a href="tienda.php?categoria=3">
                <img src="img/juegos.webp" alt="videojuegos" width="300" height="200">
            </a>
        </div>

        <div class="product-box">
            <h3>Ordenadores</h3>
            <a href="tienda.php?categoria=2">
                <img src="img/ordenador.webp" alt="Ordenadores Gaming" width="300" height="200">
            </a>
        </div>

        <div class="product-box">
            <h3>Consolas</h3>
            <a href="tienda.php?categoria=1">
                <img src="img/consolas.webp" alt="Consolas de videojuegos" width="300" height="200">
            </a>
        </div>

    </div>

    <div class="busqueda">
        <h2>Busqueda Avanzada</h2>
        <form action="buscar_productos.php" method="GET">
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria">
                <option value="Todas">Todas</option>
                <option value="ordenadores">Ordenadores</option>
                <option value="consolas">Consolas</option>
                <option value="videojuegos">Video juegos</option>
            </select>

            <label for="precio_min">Precio mínimo:</label>
            <input type="number" name="precio_min" id="precio_min" step="0.01" min="0" required>

            <label for="precio_max">Precio máximo:</label>
            <input type="number" name="precio_max" id="precio_max" step="0.01" min="0">

            <button type="reset">Eliminar</button>
            <button type="submit">Buscar</button>
        </form>
    </div>





    </div>


</body>

</html>