<?php
    error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once '../database/conexion.php';

    $consulta1=$DB_con->prepare('SELECT * FROM categoria');
    $consulta1->execute();
    $categorias=$consulta1->fetchAll(PDO::FETCH_ASSOC);

    $consulta2=$DB_con->prepare('SELECT * FROM marca');
    $consulta2->execute();
    $marcas=$consulta2->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    <h1>Agregar Producto</h1>
    <form action="./agregar_producto.php" method="post">
        <input type="text" name="serial" placeholder="Ingrese el serial">
        <br>
        <br>
        <input type="text" name="producto" placeholder="Ingrese el producto">
        <br>
        <br>
        <textarea name="descripcion" cols="30" rows="10" placeholder="Ingrese descripción"></textarea>
        <br>
        <br>
        <input type="number" name="cantidad" placeholder="Ingrese cantidad">
        <br>
        <br>
        <input type="number" name="precio" placeholder="Ingrese el precio">
        <br>
        <br>
        <select name="categoria">
            <option selected>Elige una categoria</option>
        <?php
            foreach ($categorias as $key => $categoria) {
        ?>
            <option value="<?php echo $categoria["id_categoria"] ?>"><?php echo $categoria["categoria"] ?></option>
        <?php
            }
        ?>
        </select>
        <br>
        <br>
        <select name="marca">
            <option selected>Elige una marca</option>
        <?php 
            foreach ($marcas as $key => $marca) {
        ?>
            <option value="<?php echo $marca["id_marca"] ?>"><?php echo $marca["marca"] ?></option>
        <?php
            }
        ?>
        </select>
        <br>
        <br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>