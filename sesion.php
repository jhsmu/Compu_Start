<?php
    session_start();

    if(isset($_POST["cerrar"])){
        session_destroy();
        header("location:login-registro.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola <?php echo $_SESSION["usuario"] ?></h1>
    <form action="" method="post">
        <button name="cerrar">Cerrar Sesión</button>    
    </form>
    
</body>
</html>