<?php
    //Para poder usar la clase Database y su función connect
    require('../database/basededatos.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];

    $query = $connection->prepare("INSERT INTO administrador(nombre, apellido, email, contrasenia) VALUES(?, ?, ?, ?)");// Traduzco mi petición
    $guardar = $query->execute([$nombre, $apellido, $email, $contrasenia]); //Ejecuto mi petición

    if ($guardar) {
        session_start();
        $_SESSION['administrador'] = 'registro';
        header("location: ../admin/actualizaciones.php");
        
    } else {
        echo "<script> alert 'Error al crear el proveedor' </script>";
    }
