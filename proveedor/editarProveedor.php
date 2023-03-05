<?php
    //Para poder usar la clase Database y su función connect
    require('../database/basededatos.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $id = $_GET["id"];

    // Cuando la conexión está establecida...
    $consulta = $connection->prepare("SELECT * FROM proveedor WHERE id_proveedor=:id");// Traduzco mi petición
    $consulta->execute(['id' => $id]); //Ejecuto mi petición

    $proveedor = $consulta->fetch(PDO::FETCH_ASSOC); 
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
    <form action="actualizarProveedor.php" method="post">
        <label for="" hidden>Id_proveedor</label>
        <input type="text" class="id" name="id" id="id" value="<?php echo $proveedor['id_proveedor']; ?>" hidden> <br>
        <label for="">Proveedor</label>
        <input type="text" class="proveedor" name="proveedor" id="proveedor" value="<?php echo $proveedor['proveedor']; ?>"><br>
        <label for="">Correo</label>
        <input type="text" class="correo" name="correo" id="correo" value="<?php echo $proveedor['correo']; ?>"><br>
        <label for="">Web</label>
        <input type="text" class="web" name="web" id="web" value="<?php echo $proveedor['web']; ?>"><br><br>
        <label for="">Dirección</label>
        <input type="text" class="direccion" name="direccion" id="direccion" value="<?php echo $proveedor['direccion']; ?>"><br><br>
        <button type="submit">Enviar</button> <br> <br>
        <a href="consultaProveedor.php">Regresar</a>
    </form>
</body>
</html>