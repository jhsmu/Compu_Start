<?php
    //Para poder usar la clase Database y su función connect
    require('../database/basededatos.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contrasenia = $_POST['contrasenia'];

        $query = $connection->prepare("UPDATE administrador SET nombre=?, apellido=?, email=?, contrasenia=? WHERE id_proveedor=?");// Traduzco mi petición
        $actualizar = $query->execute([$nombre, $apellido, $email, $contrasenia, $id]); //Ejecuto mi petición

        if ($actualizar) {
            session_start();
            $_SESSION['actualizar'] = 'registro';
            header("location: ../admin/provedor.php");
        } else {
            echo "<h2> Error al Actualizar <h2>";
        }
        echo "<a href='consultarAdmi.php'>Regresar</a>";
    }
?>