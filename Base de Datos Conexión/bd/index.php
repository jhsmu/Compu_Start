<?php 
    require('Database.php');

    $db = new Database();
    $connection = $db->connect();
    
    $query = $connection->prepare("SELECT * FROM libros");
    $query->execute();

    $libros = $query->fetchAll(PDO::FETCH_ASSOC);

    // foreach($libros as $key => $libro){
    //     echo $libro["id"]."<br>";
    //     echo $libro["titulo"]."<br>";
    //     echo $libro["autor"]."<br>";
    //     echo $libro["ano"]."<br>"."<br>";
    // }
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
    <a href="nuevo.php">Crear nuevo</a>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Titulo</td>
                <td>Autor</td>
                <td>Año</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $key => $libro) { ?>
                <tr>
                    <td><?php echo $libro["id"] ?></td>
                    <td><?php echo $libro["titulo"] ?></td>
                    <td><?php echo $libro["autor"] ?></td>
                    <td><?php echo $libro["año"] ?></td>
                    <td><a href="eliminar.php?id=<?php echo $libro["id"]?>">Eliminar</a></td>
                    <td><a href="editar.php?id=<?php echo $libro["id"]?>">Editar</a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
<!-- http://localhost/php-oa/bd/index.php -->