<?php
    error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'conexion.php';

    if(isset($_POST["crear"])){
        if(preg_match('/^[a-zñÑ A-Z]+$/',$_POST["nombre"])== 1){
            $nombre = $_POST["nombre"];
        }else{echo '<script>confirm("Porfavor ingrese un nombre valido")</script>';}

        if(preg_match('/^[0-9A-Za-z]+$/',$_POST["usuario"])== 1){        
            $usuario = $_POST["usuario"];
        }else{echo '<script>confirm("Porfavor ingrese un usuario valido")</script>';}

        $direccion= htmlentities($_POST["direccion"]);

        if(preg_match('/^[0-9]+$/',$_POST["telefono"])== 1){
            $telefono = $_POST["telefono"];
        }else{echo '<script>confirm("Porfavor ingrese un número de telefono valido")</script>';}

        if(preg_match("/(^([A-Za-z.]|@|[0-9])+$)/",$_POST["email"])== 1){
            $email = $_POST["email"];
        }else{echo '<script>confirm("Porfavor ingrese un email valido")</script>';}

        if(strlen($_POST["clave"]) > 8){
            if(strlen($_POST["clave"]) < 16){
                if (preg_match('`[a-z]`',$_POST["clave"])){
                    if (preg_match('`[A-Z]`',$_POST["clave"])){
                        if (preg_match('`[0-9]`',$_POST["clave"])){
                            $contrasena=$_POST["clave"];
                            }else
                            {echo '<script>confirm("la clave debe tener al menos un número")</script>';}
                        } else
                        {echo '<script>confirm("La contraseña debe tener al menos una mayuscula")</script>';}              
                    }else
                        {echo '<script>confirm("La contraseña debe tener una minuscula")</script>';} 
                }else
                    {echo '<script>confirm("La contraseña no puede tener mas de 16 caracteres")</script>';}  
            }else 
            {echo '<script>alert("La contraseña debe tener minimo 8 digitos")</script>'; }                           
    }
    if(isset($contrasena)){
        $agregar=$DB_con->prepare('INSERT INTO cliente(usuario, nombre, email, direccion, telefono, contrasenia) VALUES(:usuario, :nombre, :email, :direccion, :telefono, :contrasenia)');
        $agregar->bindParam(':usuario', $usuario);
        $agregar->bindParam(':nombre', $nombre);
        $agregar->bindParam(':email', $email);
        $agregar->bindParam(':direccion', $direccion);
        $agregar->bindParam(':telefono', $telefono);
        $agregar->bindParam(':contrasenia', $contrasena);
            
        if ($agregar->execute()) {
            echo '<script> alert("registro correcto")</script>';
            header("location:login-registro.php");
        }
        else{
            header("location:no.php");
        }
    }