<?php
    require("..\..\database\basededatos.php");

    $db = new Database();
    $connection = $db->connect();
    $codigo = $_GET["id"];

    $consulta = $connection->prepare("DELETE FROM proveedor WHERE id_proveedor=?");
    $resultado = $consulta->execute([$codigo]);

    if ($resultado) {
        echo "<script languaje='JavaScript'>
            alert('Los datos fueron eliminados exitosamente');
            location.assign('../proveedor.php');</script>";
    } else {
        echo "<script languaje='JavaScript'>
            alert('Los datos fueron NO se eliminaron');
            location.assign('../proveedor.php');</script>";
    }
