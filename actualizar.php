<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actualizar Usuario</title>
     <link rel="stylesheet" href="css/actulizar.css">
</head>

<body>
    <div class="container">
        <h1>Resultado de la Actualización de Datos</h1>

    <?php
    //  Incluir el archivo de conexión a la base de datos.
    include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //  Verificar que se recibieron los datos del formulario.
    if (isset($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['email'])) {


        $id = $_POST['id'];

        // Se recorre cada campo: si no está vacio, se añade a un array de "actualizaciones"
        // De esta forma, si un campo opcional se deja en blanco, no se incluirá en la consulta
        // y la basee de datos conservara su valor antiguo.

        $updates = []; // Un array para guardar las partes a actualizar.


        $nombre = $_POST['nombre'];
        $updates[] = "nombre = '$nombre'";  // el nombre es obligatorio para la actulizacion ya que se pone en el formulario un required


        if (isset($_POST['apellido']) && $_POST['apellido'] !== '') {
            $apellido = $_POST['apellido'];
            $updates[] = "apellido = '$apellido'";
        }

        if (isset($_POST['telefono']) && $_POST['telefono'] !== '') {
            $telefono = $_POST['telefono'];
            $updates[] = "telefono = $telefono";
        }

      
        if (isset($_POST['email']) && $_POST['email'] !== '') {
            $email = $_POST['email'];
            $updates[] = "email = '$email'";
        }

        // 5. Unir las partes y construir la consulta final.
        $sql = "UPDATE usuario SET " . implode(', ', $updates) . " WHERE ID = $id"; // implode fusiona las partes de la consulta y realizar la actulizacion 

        if ($conn->query($sql) === TRUE) {
            if ($conn->affected_rows > 0) {
                echo "Los datos del usuario han sido actualizados correctamente.";
            } else {
                echo "No se realizó ninguna actualización (los datos introducidos eran los mismos que ya estaban registrados).";
               
            }
        } else {
            echo "Error al actualizar el usuario: " . $conn->error;
        }
    } else {
        echo "Error: Faltan datos del formulario para realizar la actualización.";
    }
}
    ?>

        
    </div>
    <br><a href="index.php">Volver al inicio</a>
</body>

</html>