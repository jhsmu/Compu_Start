<?php
		require('../database/basededatos.php');

		//Creamos un objeto del tipo Database
		$db = new Database();
		$connection = $db->connect(); //Creamos la conexión a la BD
	
		// Cuando la conexión está establecida...
		$query = $connection->prepare("SELECT * FROM administrador");// Traduzco mi petición
		$query->execute(); //Ejecuto mi petición
	
		$administradores = $query->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
	<h1>Proveedores</h1>
	<br><br>
	<a href="nuevoProveedor.php">Agregar nuevo proveedor</a>
	<br><br>
	<table>
		<th>
			<tr>
				<td>id_administrador</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Email</td>
				<td>Contraseña</td>
			</tr>
			<tbody>
				<?php foreach($administrador as $key => $administrador){ ?>
					<tr>
						<td><?php echo $administrador["id_administrador"]."<br>"; ?></td>
                        <td><?php echo $administrador["nombre"]."<br>"; ?></td>
                        <td><?php echo $administrador["apellido"]."<br>"; ?></td>
                        <td><?php echo $administrador["email"]."<br>"; ?></td>
						<td><?php echo $administrador["contrasenia"]."<br>"; ?></td>
                        <td> <a href="editarAdmi.php?id=<?php echo $administrador["id_administrador"]; ?>">Editar</a> </td>
					</tr>
				<?php } ?>
			</tbody>
		</th>
	</table>
</body>
</html>