<?php
    error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once '../database/conexion.php';

    $categoria=$_POST["categoria"];

    $agregar=$DB_con->prepare('INSERT INTO categoria(categoria) VALUES(:categoria)');
    $agregar->bindParam(':categoria', $categoria);

    if ($agregar->execute()) {
        echo '<script> confirm("registro correcto")</script>';
        header("location:categoria.php");
    } else {
        echo '<script> alert("registro incorrecto")</script>';
        header("location:categoria.php");
    }
    