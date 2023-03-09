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
        <label for="nombre">Proveedor</label>
        <input type="name" name="proveedor" id="proveedor" placeholder="Nombre del proveedor">
        <br>
        <br>
        <label for="correo">Email</label>
        <input type="email" name="correo" id="correo" placeholder="Correo">
        <br>
        <br>
        <label for="web">Sitio Web</label>
        <input type="text" name="web" id="web" placeholder="Web">
        <br>
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" placeholder="Dirección">
        <br>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>

</html>