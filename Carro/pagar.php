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

            $consulta=$DB_con->prepare('SELECT * FROM producto WHERE id_producto=:id');
            $consulta->bindParam(':id', $producto['id']);
            $consulta->execute();

            $cantidad=$consulta->fetch(PDO::FETCH_ASSOC);

            $sustraccion=$cantidad['cantidad']-$producto['cantidad'];

            $resto=$DB_con->prepare('UPDATE producto SET cantidad=:cantidad WHERE id_producto=:id');
            $resto->bindParam(':cantidad', $sustraccion);
            $resto->bindParam(':id', $producto['id']);
            $resto->execute();
        } 
        unset($_SESSION['carrito']);
        $_SESSION['compra']=true;
        header("location:../inicio.php");


        //current_timestamp()
    }

?>
