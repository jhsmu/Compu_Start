<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista perfil</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro?, se eliminarán los datos');
        }
    </script>
</head>
<body>
    <?php
    include("./conexion.php");

    $sql = "select * from cliente";
    $resultado=mysqli_query($conexion,$sql);
    ?>

    <h1>Su perfil</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $filas['id']?></td>
                <td><?php echo $filas['nombre']?></td>
                <td><?php echo $filas['apellido']?></td>
                <td><?php echo $filas['direccion']?></td>
                <td><?php echo $filas['email']?></td>
                <td><?php echo $filas['telefono']?></td>
                <td><?php echo $filas['contrasenia']?></td>
                <td>
                    <?php echo "<a href='actualizar.php?id=".$filas['id']."'>Editar</a>";?>
                    <?php echo "<a href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'>Eliminar</a>";?>
                </td>
            </tr>
            <br>
            <a href="../index.php">Volver</a>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>