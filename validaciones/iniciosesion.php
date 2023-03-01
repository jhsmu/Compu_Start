<?php
    error_reporting( ~E_NOTICE ); // avoid notice
        
    require '../database/conexion.php';

    if(isset($_POST["inicio"])){
        $email_i=$_POST["email"];
        $contrasena=md5(htmlentities($_POST["clave_inicio"]));

        $consultar=$DB_con->prepare('SELECT * FROM cliente WHERE email=:email');
        $consultar->bindParam(':email', $email_i);
        $consultar->execute();

        $verificacion=$consultar->fetch(PDO::FETCH_ASSOC);

        if ($email_i==$verificacion["email"] and $contrasena==$verificacion["contrasenia"] ) {
                session_start();
                $_SESSION["usuario"]=$verificacion["nombre"].' '.$verificacion['apellido'];
                header("location: ../sesion.php");
        }
        else {
            header("location:../login-registro.php");
            echo '<script> alert("Inicio de sesión incorrecto, por favor verifique sus datos")</script>';
        }
    }


?>