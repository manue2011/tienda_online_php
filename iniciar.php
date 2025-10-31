<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iniciar.css">
    <title>Document</title>
</head>

<body>
    <h1>inicio de sesion</h1>
    <form action="iniciarfinal.php" method="post">
        <label for="nombre">nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña"><br>
        <button id="iniciar" type="submit">Iniciar sesion</button>
    </form>

    <br><a href="index.php">Volver al inicio</a>
</body>

</html>