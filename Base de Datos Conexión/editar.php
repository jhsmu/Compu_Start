<?php
    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $id = $_GET["id"];

    // Cuando la conexión está establecida...
    $consulta = $connection->prepare("SELECT * FROM libros WHERE id=:id");// Traduzco mi petición
    $consulta->execute(['id' => $id]); //Ejecuto mi petición

    $libro = $consulta->fetch(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar libro</title>
</head>
<body>
    <form action="guardar.php" method="post">
        <label for="" hidden>Id</label>
        <input type="text" class="id" name="id" id="id" value="<?php echo $libro['id']; ?>" hidden> <br>
        <label for="">Titulo</label>
        <input type="text" class="titulo" name="titulo" id="titulo" value="<?php echo $libro['titulo']; ?>"><br>
        <label for="">Autor</label>
        <input type="text" class="autor" name="autor" id="autor" value="<?php echo $libro['autor']; ?>"><br>
        <label for="">Año</label>
        <input type="text" class="año" name="año" id="año" value="<?php echo $libro['año']; ?>"><br><br>
        <button type="submit">Enviar</button> <br> <br>
        <a href="index.php">Regresar</a>
    </form>
</body>
</html>