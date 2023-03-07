<?php

    require("Database.php");

    $db = new Database();
    $connection = $db->connect();

    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $ano = $_POST["año"];

        $query = $connection->prepare("UPDATE libros SET titulo=:titulo, autor=:autor, año=:año WHERE id=:id");
        $resultado = $query->execute(['id'=>$id,'titulo'=>$titulo,'autor'=>$autor,'año'=>$ano]);
        if ($resultado) {
            echo "<h2>Registro EDITAR!</h2>";
        } else {
            echo "<h2>Error al eliminar el registro</h2>";
        }
        echo "<a href='index.php'>Regresar</a>";
    } else {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $ano = $_POST["año"];
        $query = $connection->prepare("INSERT INTO libros(autor,titulo,año) VALUES (:autor, :titulo, :año)");
        $resultado = $query->execute(['titulo'=>$titulo,'autor'=>$autor,'año'=>$ano]);
        if ($resultado) {
            echo "<h2>Libro creado con exito</h2>";
        } else {
            echo "<h2>Error al eliminar el registro</h2>";
        }
        echo "<a href='index.php'>Regresar</a>" ;
    }