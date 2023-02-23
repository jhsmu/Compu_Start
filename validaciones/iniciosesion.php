<?php
    error_reporting( ~E_NOTICE ); // avoid notice
        
    require '../database/conexion.php';

    if(isset($_POST["inicio"])){
        $usuario_i=$_POST["usuario_inicio"];
        $contrasena=$_POST["clave_inicio"];

        $consultar=$DB_con->prepare('SELECT * FROM cliente WHERE usuario=:usuario');
        $consultar->bindParam(':usuario', $usuario_i);
        $consultar->execute();

        $verificacion=$consultar->fetch(PDO::FETCH_ASSOC);

        if ($usuario_i==$verificacion["usuario"] and $contrasena==$verificacion["contrasenia"] ) {
                session_start();
                $_SESSION["usuario"]=$verificacion["usuario"];
                header("location: ../inicio.php");
                echo '<script> alert("registro incorrecto")</script>';
        }
        else {
            header("location: ../no_sesion.php");
            echo '<script> alert("a")</script>';
        }
    }


?>
