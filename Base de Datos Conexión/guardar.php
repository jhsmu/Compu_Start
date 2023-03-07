<?php
    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $año = $_POST['año'];

        $query = $connection->prepare("UPDATE libros SET titulo=?, autor=?, año=? WHERE id=?");// Traduzco mi petición
        $guardar = $query->execute([$id, $titulo, $autor, $año]); //Ejecuto mi petición

        if ($guardar) {
            echo "<h2> Formulario modificado <h2>";
        } else {
            echo "<h2> Error al modificar el formulario <h2>";
        }
        echo "<a href='index.php'>Regresar</a>";
    }else {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $año = $_POST['año'];

        $query = $connection->prepare("INSERT INTO libros(titulo, autor, año) VALUES(?, ?, ?)");// Traduzco mi petición
        $guardar = $query->execute([$titulo, $autor, $año]); //Ejecuto mi petición

        if ($guardar) {
            echo "<h2> Libro creado con exito <h2>";
        } else {
            echo "<h2> Error al crear el libro <h2>";
        }
        echo "<a href='index.php'>Regresar</a>";
    }
