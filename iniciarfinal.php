<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/iniciarfinal.css">
</head>

<body>
    <div class="container">
        <?php

        include_once 'conexion.php';

        // Obtener los datos del formulario

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificar si se recibieron los datos de nombre y apellido.
            // Es buena práctica hacerlo para todos los valores que se usen
            if (isset($_POST['nombre']) && isset($_POST['contraseña'])) {
                //evito ataque 
                $nombre = htmlspecialchars($_POST['nombre']);

                $contrasena_introducida = htmlspecialchars($_POST['contraseña']);

                // Consulta SQL para verificar el nombre y la contraseña
                $sql = "SELECT * FROM usuario WHERE nombre='$nombre'";
                $resultado = $conn->query($sql);
                // Verificar si se encontraron resultados
                if ($resultado->num_rows > 0) {
                    //recupero el hash almacenado
                    $row = $resultado->fetch_assoc();
                    $hash_almacenado = $row["contraseña"];

                    //vemos si el hash de la contraseña introducida coindice con el almacenado
                    if (password_verify($contrasena_introducida, $hash_almacenado)) {
                        // Login exitoso: Mostrar todos los datos del usuario
                        echo "<h2>Bienvenido, " . htmlspecialchars($row['nombre']) . "</h2>";
                        echo "<p>¡Inicio de sesión exitoso!</p>";
                        echo "<h3>Tus Datos Registrados:</h3>";
                        echo "<ul>";
                        echo "<li>Nombre: " . htmlspecialchars($row['nombre']) . "</li>";
                        echo "<li>Apellido: " . htmlspecialchars($row['apellido']) . "</li>";
                        echo "<li>Teléfono: " . htmlspecialchars($row['telefono']) . "</li>";
                        echo "<li>Email: " . htmlspecialchars($row['email']) . "</li>";
                        echo "</ul>";

                        echo '<h2>Actualizar datos de perfil</h2>';

                        // Formulario para actualizar los datos del usuario aprovechando que el if ya que el usuario fue autenticado
                        echo '<form action="actualizar.php" method="post">';

                        echo 'ID (no modificable): ' . htmlspecialchars($row['id']) . '<br>';
                        echo '<input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">';
                        echo 'Nuevo nombre: <input type="text" name="nombre" required ><br>';
                        echo 'Nuevo apellido: <input type="text" name="apellido"><br>';
                        echo 'Nuevo teléfono: <input type="number" name="telefono"><br>';
                        echo 'Nuevo email: <input type="email" name="email"><br>';
                        echo '<button type="submit">Actualizar</button>';
                        echo '</form>';
                    } else {
                        //los hash no coindicen
                        echo "<h2>Error: Usuario o contraseña incorrectos</h2>";
                    }
                } else {
                    // Inicio de sesión fallido
                    echo "<h2>Error: Usuario o contraseña incorrectos</h2>";
                }
            } else {
                echo "<p>No se recibieron datos válidos.</p>";
            }
        } else {
            echo "<p>No se recibieron datos de POST.</p>";
        }

        echo "<br>";
        echo "<br>";
        echo '<a href="index.php">Volver al Inicio</a>';
        // Cerrar conexión
        $conn->close();
        ?>

    </div>
</body>


</html>