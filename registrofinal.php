<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registrofinal.css">
</head>
<body>
    <div class="container">
    <?php

include_once 'conexion.php';

// Obtener los datos del formulario

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['telefono'])&& isset($_POST['email']) && isset($_POST['contraseña'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellido = htmlspecialchars($_POST['apellido']);
        $telefono = htmlspecialchars($_POST['telefono']);
        $email = htmlspecialchars($_POST['email']);
        $contrasena = htmlspecialchars($_POST['contraseña']);

        
        // Genera un hash seguro de la contraseña utilizando bcrypt
        $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

        // Inserta el usuario y el hash de la contraseña en la base de datos
        // Escapamos las variables para una protección básica contra inyección SQL
        $nombre_escapado = $conn->real_escape_string($nombre);
        $apellido_escapado = $conn->real_escape_string($apellido);
        $telefono_escapado = (int)$telefono;
        $email_escapado = $conn->real_escape_string($email);

        $sql = "INSERT INTO usuario (nombre, apellido, telefono, email, contraseña) VALUES ('$nombre_escapado', '$apellido_escapado', $telefono_escapado, '$email_escapado','$hash_contrasena')";
        
        $resultado = $conn->query($sql);
        // Se comprueba si ha ido bien la sql
        if ($resultado === TRUE) {
            echo "<p>¡Nuevo registro creado con éxito!</p>";
             echo "<p>Vuelve al inicio para iniciar sesión y ver tus datos.</p>";
        } else {
            echo "<p>Error al crear el registro: " . $conn->error . "</p>";
        }


    } else {
        echo "<p>No se recibieron datos válidos.</p>";
    }
}else {
    echo "<p>No se recibieron datos por el método POST.</p>";
}

echo '<a href="index.php">Volver al Inicio</a>';
// Cerrar conexión
$conn->close();
?>
    </div>


</body>
</html>