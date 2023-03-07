<?php
//Para poder usar la clase Database y su función connect
require('./Database.php');

//Creamos un objeto del tipo Database
$db = new Database();
$connection = $db->connect(); //Creamos la conexión a la BD

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo libro</title>
</head>
<body>
    <form action="guardar.php" method="post">
    <label for="">Titulo</label>
        <input type="text" name="titulo"><br>
        <label for="">Autor</label>
        <input type="text" name="autor"><br>
        <label for="">Año</label>
        <input type="text" name="año"><br> <br>
        <button type="submit">Crear libro</button>
    </form>
</body>
</html>