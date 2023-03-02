<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/login-registrate.css">
    <link rel="stylesheet" href="./css/headerinicio.css">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css
" rel="stylesheet">
    <title>Login</title>
</head>

<body>

    <?php include(("./componentes/headerlogin.php")); ?>

   

    <!-- login y registro -->
    <div class="inicio">
        <div class="container" id="main">
            <!-- registrar -->
            <div class="sign-up">
                <form action="./validaciones/agregar_clientes.php" method="post">
                    <h1>Crear Una Cuenta</h1>
                    <div class="social-container">

                        <a href="" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                    </div>
                    <p>Digite todos los campos</p>
                    <input type="text" name="nombre" placeholder="Nombres" required>
                    <input type="text" name="apellido" placeholder="Apellidos" required>
                    <input type="text" name="direccion" placeholder="Dirección" required>
                    <input type="number" name="telefono" inputmode="tel" placeholder="Numero Telefonico" required>
                    <input type="email" name="email_registro" placeholder="Correo" required>
                    <input type="password" name="clave" placeholder="Ingresar una clave clave mayor a 8 dígitos" required>
                    <input type="password" name="clave_c" placeholder="Ingresar la clave nuevamente" required>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            Acepto Términos Y Condiciones
                        </label>
                    </div>
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
                    <input type="email" name="email" placeholder="Correo" required>
                    <input type="password" name="clave_inicio" placeholder="Clave" required>
                    <button name="inicio" type="submit">Iniciar Sesión</button>
                    
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        signUpButton.addEventListener('click', () => {
            main.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            main.classList.remove("right-panel-active");
        });
    </script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js
"></script>
</body>

</html>
