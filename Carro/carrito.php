<?php
    session_start();

    if (isset($_POST['botonAdd'])) {
        switch ($_POST['botonAdd']) {
            case 'agregar':
                if (is_numeric($_POST['id'])) {
                    $id_producto=$_POST['id'];
                }else {
                    $mensaje="El id esta mal";
                }

                if (is_string($_POST['producto'])) {
                    $nombre_producto=$_POST['producto'];
                }else {
                    $mensaje="El producto esta mal";
                }

                if (is_numeric($_POST['precio'])) {
                    $precio_producto=$_POST['precio'];
                }else {
                    $mensaje="El precio esta mal";
                }

                if (!isset($_SESSION['carrito'])) {
                    $carro_pro=array(
                        'id'=>$id_producto,
                        'producto'=>$nombre_producto,
                        'precio'=>$precio_producto
                    );
                    $_SESSION['carrito'][0]=$carro_pro;
                }else {
                    $numero_productos=count($_SESSION['carrito']);
                    $carro_pro=array(
                        'id'=>$id_producto,
                        'producto'=>$nombre_producto,
                        'precio'=>$precio_producto
                    );
                    $_SESSION['carrito'][$numero_productos]=$carro_pro;
                }

                $mensaje=print_r($_SESSION, true);
                break;
            
            default:
                # code...
                break;
        }
    }