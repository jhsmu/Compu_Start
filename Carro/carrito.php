<?php
    session_start();

    if (isset($_POST['botonAdd'])) {
        switch ($_POST['botonAdd']) {

            //Esto es si la persona oprime el boton agregar al carrito
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

                if(is_numeric($_POST['cantidad'])){
                    $cantidad=$_POST['cantidad'];
                } else{
                    $mensaje="La cantidad esta mal";
                }

                if (!isset($_SESSION['carrito'])) {
                    $carro_pro=array(
                        'id'=>$id_producto,
                        'producto'=>$nombre_producto,
                        'precio'=>$precio_producto,
                        'cantidad'=>$cantidad
                    );
                    $_SESSION['carrito'][0]=$carro_pro;
                    $mensaje="Producto agregado al carrito";
                }else {
                    $idsProductos=array_column($_SESSION['carrito'], 'id');

                    if (in_array($id_producto, $idsProductos)) {
                        echo '<script> alert("Este producto ya ha sido seleccionado.."); </script>';
                    } else{

                        $numero_productos=count($_SESSION['carrito']);
                        $carro_pro=array(
                            'id'=>$id_producto,
                            'producto'=>$nombre_producto,
                            'precio'=>$precio_producto,
                            'cantidad'=>$cantidad
                        );
                        $_SESSION['carrito'][$numero_productos]=$carro_pro;
                        $mensaje="Producto agregado al carrito";
                    }
                }
            break;

            case 'eliminar':
                if (is_numeric($_POST['id'])) {
                    $id_producto=$_POST['id'];
                    foreach ($_SESSION['carrito'] as $indice => $producto) {
                        if ($producto['id']==$id_producto) {
                            unset($_SESSION['carrito'][$indice]);
                            echo '<script> alert("Producto borrado.."); </script>';
                        }
                    }
                }else {
                    $mensaje="El id esta mal";
                }
            break;
        }
    }