<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
         <link rel="stylesheet" href="css/registro.css">
    <title>registro</title>

</head>

<body>
    <h1>Registro</h1>
    <form action="registrofinal.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">apellido:</label>
        <input type="text" id="apellido" name="apellido"><br>
        <label for="telefono">telefono:</label>
        <input type="number" id="telefono" name="telefono"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña"><br>
        <button id="registrar" type="submit">Registrarse</button>

    </form>

    <br><a href="index.php">Volver al inicio</a>
</body>

</html>