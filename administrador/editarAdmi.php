<?php
    //Para poder usar la clase Database y su función connect
    require('../database/basededatos.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $id = $_GET["id"];

    // Cuando la conexión está establecida...
    $consulta = $connection->prepare("SELECT * FROM administrador WHERE id_administrador=:id");// Traduzco mi petición
    $consulta->execute(['id' => $id]); //Ejecuto mi petición

    $administradores = $consulta->fetch(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor</title>
</head>
<body>
    <form action="actualizarAdmi.php" method="post">
        <label for="" hidden>Id_administrador</label>
        <input type="text" class="id" name="id" id="id" value="<?php echo $administradores['id_administrador']; ?>" hidden> <br>
        <label for="">Nombre</label>
        <input type="text" class="nombre" name="nombre" id="nombre" value="<?php echo $administradores['nombre']; ?>"><br>
        <label for="">Apellido</label>
        <input type="text" class="apellido" name="apellido" id="apellido" value="<?php echo $administradores['apellido']; ?>"><br>
        <label for="">Correo</label>
        <input type="text" class="email" name="email" id="email" value="<?php echo $administradores['email']; ?>"><br><br>
        <label for="">Contraseña</label>
        <input type="text" class="contrasenia" name="contrasenia" id="contrasenia" value="<?php echo $administradores['contrasenia']; ?>"><br><br>
        <button type="submit">Enviar</button> <br> <br>
        <a href="consultarAdmi.php">Regresar</a>
    </form>
</body>
</html>