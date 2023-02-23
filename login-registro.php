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
            <form action="agregar_cliente.php" method="post">
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
                <input type="number" name="telefono" placeholder="Número Telefonico" required>
                <input type="email" name="email" placeholder="Correo" required>
                <input type="password" name="clave" placeholder="Clave" required>
                <button name="crear" type="submit">Crear</button>
            </form>
        </div>
                <!-- iniciar sesion -->
     <div class="sign-in">
         <form action="inicio_sesion.php" method="post" >
          <h1>Iniciar Sesion</h1>
            <div class="div social-container">
                            
              <a href="" class="social"><i class="fa fa-facebook"></i></a>
              <a href="" class="social"><i class="fa fa-instagram"></i></a>
              <a href="" class="social"><i class="fa fa-twitter"></i></a>
             </div>
             <p>Lorem ipsum dolor sit amet.</p>
             <input type="text" name="usuario_inicio" placeholder="Digite Su Usuario" required>
             <input type="password" name="clave_inicio" placeholder="Digite Su Clave" required>
             <button name="inicio" type="submit">Iniciar Sesion</button>
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