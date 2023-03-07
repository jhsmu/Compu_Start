<?php
    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $id = $_GET["id"];

    // Cuando la conexión está establecida...
    $query = $connection->prepare("DELETE FROM libros WHERE id=?");// Traduzco mi petición
    $resultado = $query->execute([$id]); //Ejecuto mi petición
    
    if ($resultado) {
        echo "<h2 style='text-align:center, font-family:Minimalust Regular; color:black;> Registro eliminado <h2>";
    } else {
        echo "<h2> Error al eliminar el registro <h2>";
    }

    echo "<a href='index.php'>Regresar</a>";

    