<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/login-registrate.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/Logo/favicon-16x16.png">
    <title>Login</title>
</head>
<body>


        <!-- login y registro -->
<div class="inicio">
    <div class="container" id="main">
        <!-- registrar -->
        <div class="sign-up">
            <form action="./validaciones/agregar_clientes.php" method="post">
                <h1>Crear Una Cuenta</h1>
                <div class="div social-container">
                    
                    <a href="" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="" class="social"><i class="fab fa-instagram"></i></a>
                    <a href="" class="social"><i class="fab fa-twitter"></i></a>
                </div>
                <p>Digite todos los campos</p>
                <input type="text" name="nombre" placeholder="Nombre Completo" required>
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="text" name="direccion" placeholder="Dirección" required>
                <input type="number" name="telefono" placeholder="Numero Telefonico" required>
                <input type="email" name="email" placeholder="Correo" required>
                <input type="password" name="clave" placeholder="Clave" required>
                <input type="password" name="clave_c" placeholder="Confirmar Clave" required>
                <button name="crear" type="submit">Crear</button>
            </form>
        </div>
                <!-- iniciar sesion -->
     <div class="sign-in">
         <form action="./validaciones/iniciosesion.php" method="post">
            <div class="logo">
            <img class="avatar" src="./img/logo/logo.jfif" alt="logo">
            </div>
          <h1>Iniciar Sesión</h1>
            <div class="div social-container">
                            
              <a href="" class="social"><i class="fa fa-facebook"></i></a>
              <a href="" class="social"><i class="fa fa-instagram"></i></a>
              <a href="" class="social"><i class="fa fa-twitter"></i></a>
             </div>
             <p>Digite todos los campos</p>
             <input type="text" name="usuario_inicio" placeholder="Usuario" required>
             <input type="password" name="clave_inicio" placeholder="Clave" required>
             <button name="inicio" type="submit" >Iniciar Sesión</button>
        </form>
    </div>

    <div class="div overlay-container">
        <div class="overlay">
            <div class="overlay-left">
                <h1>Bienvenido</h1>
                <p>Si ya estas registrado inicia sesión</p>
                <button id="signIn">Iniciar Sesión</button>
            </div>
            <div class="overlay-right">
                <h1>Hola</h1>
                <p>¿Aún no te has Registrado?</p>
                <button id="signUp">Crear Una Cuenta</button>
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