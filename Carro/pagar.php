<?php
    include '../database/conexion.php';
    include './carrito.php';

    if ($_POST) {
        $total=0;
        foreach ($_SESSION['carrito'] as $indice => $producto) {
            $total+=$producto['precio']*$producto['cantidad'];
        } 

        $insertar=$DB_con->prepare('INSERT INTO venta(cliente,total) VALUES(:cliente, :total) ');
        $insertar->bindParam(':cliente', $_SESSION["id_usuario"]);
        $insertar->bindParam(':total', $total);
        $insertar->execute();

        $idVenta=$DB_con->lastInsertId();

        foreach ($_SESSION['carrito'] as $indice => $producto) {
            $total_producto=$producto['precio']*$producto['cantidad'];
            $insertar=$DB_con->prepare('INSERT INTO detalle_venta(id_venta,id_producto,cantidad_venta,precio_producto,monto_total)
                                        VALUES(:id_venta, :id_producto, :cantidad, :precio, :total)');
            $insertar->bindParam(':id_venta', $idVenta);
            $insertar->bindParam(':id_producto', $producto['id']);
            $insertar->bindParam(':cantidad', $producto['cantidad']);
            $insertar->bindParam(':precio', $producto['precio']);
            $insertar->bindParam(':total', $total_producto);
            $insertar->execute();
        } 
        session_destroy();

        header("location:../index.php");


        //current_timestamp()
    }

?>