<?php
    //Para poder usar la clase Database y su función connect
    require('../database/basededatos.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $proveedor = $_POST['proveedor'];
        $correo = $_POST['correo'];
        $web = $_POST['direccion_web'];
        $direccion = $_POST['direccion'];

        $query = $connection->prepare("UPDATE proveedor SET proveedor=?, correo=?, direccion_web=?, direccion=? WHERE id_proveedor=?");// Traduzco mi petición
        $actualizar = $query->execute([$proveedor, $correo, $web, $direccion, $id]); //Ejecuto mi petición

        if ($actualizar) {
            session_start();
            $_SESSION['actualizar'] = 'registro';
            header("location: ../admin/proveedor.php");
        } else {
            echo "<h2> Error al Actualizar <h2>";
        }
        echo "<a href='consultaProveedor.php'>Regresar</a>";
    }
?>