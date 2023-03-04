<?php
    error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once '../database/conexion.php';

    $serial=$_POST["serial"];
    $producto=$_POST["producto"];
    $descripcion=$_POST["descripcion"];
    $cantidad=$_POST["cantidad"];
    $precio=$_POST["precio"];
    $id_categoria=$_POST["categoria"];
    $id_marca=$_POST["marca"];

    $agregar=$DB_con->prepare('INSERT INTO producto(serial, producto, descripcion, cantidad, precio, id_categoria, id_marca) VALUES(:serial, :producto, :descripcion, :cantidad, :precio, :categoria, :marca)');
    $agregar->bindParam(':serial', $serial);
    $agregar->bindParam(':producto', $producto);
    $agregar->bindParam(':descripcion', $descripcion);
    $agregar->bindParam(':cantidad', $cantidad);
    $agregar->bindParam(':precio', $precio);
    $agregar->bindParam(':categoria', $id_categoria);
    $agregar->bindParam(':marca', $id_marca);

    if ($agregar->execute()) {
        echo '<h2> Registro Correcto </h2>';
    } else {
        echo '<h2> Registro Correcto </h2>';
    }

    echo "<a href='./producto.php'>Regresar</a>";
    
