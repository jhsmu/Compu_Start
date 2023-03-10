<?php
		require('../database/basededatos.php');

		//Creamos un objeto del tipo Database
		$db = new Database();
		$connection = $db->connect(); //Creamos la conexión a la BD
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Proveedor</title>

</head>

<body>
    <h1> Registrar proveedor</h1>

    <form action="./guardarProveedor.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="name" name="nombre" id="nombre" placeholder="Nombre del nuevo Admi">
        <br>
        <br>
        <label for="correo">Apellido</label>
        <input type="email" name="apellido" id="apellido" placeholder="Apellido del Admi">
        <br>
        <br>
        <label for="web">Email</label>
        <input type="text" name="email" id="email" placeholder="Ingrese su correo">
        <br>
        <br>
        <label for="direccion">Contraseña</label>
        <input type="text" name="contrasenia" id="contrasenia" placeholder="Contraseña">
        <br>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>

</html>