<?php

    require("Database.php");

    $db = new Database();
    $connection = $db->connect();
    $id = $_GET["id"];
    
    $consulta = $connection->prepare("DELETE FROM libros WHERE id=?");
    $resultado = $consulta->execute([$id]);

    if ($resultado) {
        echo "<h2>Registro Eliminado!</h2>";
    } else {
        echo "<h2>Error al eliminar el registro</h2>";
    }
    echo "<a href='index.php'>Regresar</a>";
    // header("Location:index.php");
