<?php
    //Para poder usar la clase Database y su función connect
    require('../database/basededatos.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    $proveedor = $_POST['proveedor'];
    $correo = $_POST['correo'];
    $web = $_POST['web'];
    $direccion = $_POST['direccion'];

    $query = $connection->prepare("INSERT INTO proveedor(proveedor, correo, web, direccion) VALUES(?, ?, ?, ?)");// Traduzco mi petición
    $guardar = $query->execute([$proveedor, $correo, $web, $direccion]); //Ejecuto mi petición

    if ($guardar) {
        echo "<h2> Proveedor creado <h2>";
    } else {
        echo "<h2> Error al crear el proveedor <h2>";
    }
    echo "<a href='consultaProveedor.php'>Regresar</a>";