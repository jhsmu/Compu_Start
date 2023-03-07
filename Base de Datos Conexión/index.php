<?php
    //Para poder usar la clase Database y su función connect
    require('./Database.php');

    //Creamos un objeto del tipo Database
    $db = new Database();
    $connection = $db->connect(); //Creamos la conexión a la BD

    // Cuando la conexión está establecida...
    $query = $connection->prepare("SELECT * FROM libros");// Traduzco mi petición
    $query->execute(); //Ejecuto mi petición

    $libros = $query->fetchAll(PDO::FETCH_ASSOC); //Me traigo los datos que necesito

    //Esta es la "PRUEBA" de que hicimos bien la conexión
    // foreach($libros as $key => $libro){
    //     echo $libro["id"]."<br>";
    //     echo $libro["titulo"]."<br>";
    //     echo $libro["autor"]."<br>";
    //     echo $libro["año"]."<br>";
    // }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <a href="nuevo.php">Crear nuevo</a>
    <table>
        <th>
            <tr>
                <td>id</td>
                <td>Titulo</td>
                <td>Autor</td>
                <td>año</td>
            </tr>
            <tbody>
                <?php foreach($libros as $key => $libro){ ?>
                    <tr>
                        <td><?php echo $libro["id"]."<br>"; ?></td>
                        <td><?php echo $libro["titulo"]."<br>"; ?></td>
                        <td><?php echo $libro["autor"]."<br>"; ?></td>
                        <td><?php echo $libro["año"]."<br>"; ?></td>
                        <td> <a href="./editar.php?id=<?php echo $libro["id"]; ?>">Editar</a> </td>
                        <td> <a href="./eliminar.php?id=<?php echo $libro["id"]; ?>">Eliminar</a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </th>
    </table>
</body>
</html>