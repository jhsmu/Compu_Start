<?php

    require("Database.php");

    $db = new Database();
    $connection = $db->connect();
    $id = $_GET["id"];
    
    $consulta = $connection->prepare("SELECT * FROM libros WHERE id=:id");
    $consulta->execute(["id"=>$id]);

    $libro = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guarda.php" method="POST">
        <label for="id" hidden>Id</label>
        <input type="text" id="id" name="id" value="<?php echo $libro["id"] ?>" hidden>
        <label for="titulo">Título</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo $libro["titulo"] ?>">
        <br>
        <br>
        <label for="autor">Autor</label>
        <input type="text" id="autor" name="autor" value="<?php echo $libro["autor"] ?>">
        <label for="ano">Año</label>
        <input type="text" name="año" id="año" value="<?php echo $libro["año"] ?>">
        <button type="submit">Editar</button>
    </form>
</body>
</html>