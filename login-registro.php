<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link de iconos en fontawesome -->
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <!-- link de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- estilos de login y registro -->
    <link rel="stylesheet" type="text/css" href="./css/login-registrate.css">
    <!-- validaciones de java script -->
    <script type='text/javascript' src=".\js\validaciones.js"></script>
    <!-- link de sweetalert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>

<body>
    <!-- login y registro -->
    <div class="inicio">
        <div class="container" id="main">
            <!-- registrar -->
            <div class="sign-up">
                <form action="./validaciones/agregarClientes.php" method="post">
                    <h1>Crear Una Cuenta</h1>
                    <div class="social-container">
                        <a href="" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                    </div>
                    <p>Digite todos los campos</p>
                    <input autocomplete="on" onchange="nombre1()" type="text" name="nombre" id="nombre" placeholder="Nombres" required>
                    <input autocomplete="on" onchange="apellido1()" type="text" name="apellido" id="apellido" placeholder="Apellidos" required>
                    <input autocomplete="on" onchange="direccion1()" type="text" name="direccion" id="direccion" placeholder="Direcci??n" required>
                    <input autocomplete="on" onchange="telefono1()" type="number" name="telefono" id="telefono" inputmode="tel" placeholder="Numero Telefonico" required>
                    <input autocomplete="on" onchange="ValidacionCorreo()" type="email" name="email_registro" id="correo" placeholder="Correo" required>
                    <input onchange="contrase??a()" type="password" name="clave" id="clave" placeholder="Ingresar una clave clave mayor a 8 d??gitos" required>
                    <input onchange="verificarContrase??a()" type="password" name="clave_c" id="clave_c" placeholder="Ingresar la clave nuevamente" required>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            Acepto T??rminos Y Condiciones
                        </label>
                    </div>
                    <button name="crear" type="submit" onclick="comprobar1()">Crear</button>
                </form>
            </div>

            <!-- iniciar sesion -->
            <div class="sign-in">
                <form action="./validaciones/iniciosesion.php" method="post">
                    <h1>Compu start</h1>
                    <h3>Iniciar Sesi??n</h3>
                    <div class="div social-container">
                        <a href="" class="social"><i class="fa fa-facebook"></i></a>
                        <a href="" class="social"><i class="fa fa-instagram"></i></a>
                        <a href="" class="social"><i class="fa fa-twitter"></i></a>
                    </div>
                    <p>Digite todos los campos</p>
                    <input type="email" name="email" placeholder="Correo" required>
                    <input type="password" name="clave_inicio" placeholder="Clave" required>
                    <button name="inicio" type="submit">Iniciar Sesi??n</button>
                    <a href="./index.php" class="sesion">Iniciar Sin Cuenta</a>
                </form>
            </div>

            <div class="div overlay-container">
                <div class="overlay">
                    <div class="overlay-left">
                        <h1>Bienvenido</h1>
                        <p>Si ya estas registrado inicia sesi??n</p>
                        <button id="signIn">Iniciar Sesi??n</button>
                    </div>
                    <div class="overlay-right">
                        <h1>Hola</h1>
                        <p>??A??n no te has Registrado?</p>
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
    <?php
    if (isset($_SESSION["registro"])) {
        echo ('<script>Swal.fire({
            title: "Registro exitoso",
            text: "Ahora puedes iniciar tu sesi??n",
            icon: "success" 
        });
        </script>');
        session_destroy();
    } else {
        session_destroy();
    }
    ?>

    <script>
        function comprobar1() {
            let nombre = document.getElementById("nombre").value;
            let apellido = document.getElementById("apellido").value;
            let direccion = document.getElementById("direccion").value;
            let telefono = document.getElementById("telefono").value;
            let correo = document.getElementById("email_registro").value;
            let contrase??a = document.getElementById("clave").value;
            let contrase??a_c = document.getElementById("clave_c").value;

            if ((nombre == "") || (apellido == "") || (direccion == "") || (telefono == "") || (correo == "") || (contrase??a == "") || (contrase??a_c == "")) {
                event.preventDefault();
                Swal.fire({
                    title: "Por favor",
                    text: "llene el formulario completamente",
                    icon: "error"
                });
            } else {
                return
            }
        }
    </script>
</body>

</html>