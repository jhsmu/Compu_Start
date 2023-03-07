<?php
		require('../database/basededatos.php');

		//Creamos un objeto del tipo Database
		$db = new Database();
		$connection = $db->connect(); //Creamos la conexión a la BD
	
		// Cuando la conexión está establecida...
		$query = $connection->prepare("SELECT * FROM proveedor");// Traduzco mi petición
		$query->execute(); //Ejecuto mi petición
	
		$proveedores = $query->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor</title>
</head>
<body>
	<h1>Proveedores</h1>
	<br><br>
	<a href="nuevoProveedor.php">Agregar nuevo proveedor</a>
	<br><br>
	<table>
		<th>
			<tr>
				<td>id_proveedor</td>
				<td>Proveedor</td>
				<td>Correo</td>
				<td>Web</td>
				<td>Dirección</td>
			</tr>
			<tbody>
				<?php foreach($proveedores as $key => $proveedor){ ?>
					<tr>
						<td><?php echo $proveedor["id_proveedor"]."<br>"; ?></td>
                        <td><?php echo $proveedor["proveedor"]."<br>"; ?></td>
                        <td><?php echo $proveedor["correo"]."<br>"; ?></td>
                        <td><?php echo $proveedor["direccion_web"]."<br>"; ?></td>
						<td><?php echo $proveedor["direccion"]."<br>"; ?></td>
                        <td> <a href="editarProveedor.php?id=<?php echo $proveedor["id_proveedor"]; ?>">Editar</a> </td>
					</tr>
				<?php } ?>
			</tbody>
		</th>
	</table>
</body>
</html>