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
            header("location:si.php");
        }
        else{
            header("location:no.php");
        }
    }

    if(isset($_POST["inicio"])){
        $usuario_i=htmlentities($_POST["usuario_inicio"]);
        $contrasena=htmlentities($_POST["clave_inicio"]);

        $consultar=$DB_con->prepare('SELECT * FROM cliente WHERE usuario=:usuario');
        $consultar->bindParam(':usuario', $usuario_i);
        $consultar->execute();

        $verificacion=$consultar->fetch(PDO::FETCH_ASSOC);

        if ($usuario_i==$verificacion["usuario"]) {
            if($contrasena==$verificacion["contrasenia"]){
                session_start();
                $_SESSION["usuario"]=$verificacion["usuario"];
                header("location:sesion.php");
            }
        }
        else {
            header("location:no_sesion.php");
        }
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/login-registrate.css">
    <title>Login</title>
</head>
<body>
        <!-- login y registro -->
<div class="inicio">
    <div class="container" id="main">
        <!-- registrar -->
        <div class="sign-up">
            <form action="" method="post">
                <h1>Crear un Cuenta</h1>
                <div class="div social-container">
                    
                    <a href="" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="" class="social"><i class="fab fa-instagram"></i></a>
                    <a href="" class="social"><i class="fab fa-twitter"></i></a>
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
                <input type="text" name="nombre" placeholder="Nombre Completo" required>
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="text" name="direccion" placeholder="Dirección" required>
                <input type="number" name="telefono" placeholder="Numero Telefonico" required>
                <input type="email" name="email" placeholder="Correo" required>
                <input type="password" name="clave" placeholder="Clave" required>
                <button name="crear" >Crear</button>
            </form>
        </div>
                <!-- iniciar sesion -->
     <div class="sign-in">
         <form action="" method="post" >
          <h1>Iniciar Sesion</h1>
            <div class="div social-container">
                            
              <a href="" class="social"><i class="fa fa-facebook"></i></a>
              <a href="" class="social"><i class="fa fa-instagram"></i></a>
              <a href="" class="social"><i class="fa fa-twitter"></i></a>
             </div>
             <p>Lorem ipsum dolor sit amet.</p>
             <input type="text" name="usuario_inicio" placeholder="Dijite Su Usuario" required>
             <input type="password" name="clave_inicio" placeholder="Dijite Su Clave" required>
             <button name="inicio">Iniciar Sesion</button>
        </form>
    </div>

    <div class="div overlay-container">
        <div class="overlay">
            <div class="overlay-left">
                <h1>Bienvenido</h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <button id="signIn">Iniciar Sesion</button>
            </div>
            <div class="overlay-right">
                <h1>Hola</h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <button id="signUp">Crear Cuenta</button>
            </div>
        </div>
    </div>
    </div>
</div>

<script type="text/javascript">
const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        signUpButton.addEventListener('click', ()=> {
            main.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', ()=> {
            main.classList.remove("right-panel-active");
        });
    </script>

</body>
</html>