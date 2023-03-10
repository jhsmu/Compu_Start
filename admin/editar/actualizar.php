<?php
    include("./conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            //entra si le da el boton enviar
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $direccion=$_POST['direccion'];
            $email=$_POST['email'];
            $telefono=$_POST['telefono'];

            //update
            $sql="update cliente set nombre='".$nombre."',
            apellido='".$apellido."',
            direccion='".$direccion."',
            email='".$email."',
            telefono='".$telefono."'
            where id='".$id."'";

            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                alert('Los datos se actualizaron correctamente');
                location.assign('usuario.php');</script>";

            }else{
                echo "<script language='JavaScript'>
                alert('Los datos no se actualizaron :(');
                location.assign('usuario.php');</script>";
            }
            mysqli_close($conexion);


        } else{
            //no le ha dado al boton enviar
            $id=$_GET['id'];
            $sql="select *from cliente where id='".$id."'";
            $resultado=mysqli_query($conexion,$sql);

            $fila=mysqli_fetch_assoc($resultado);
            $nombre=$fila["nombre"];
            $apellido=$fila["apellido"];
            $direccion=$fila["direccion"];
            $email=$fila["email"]; 
            $telefono=$fila["telefono"]; 
            
            mysqli_close($conexion);
    ?>
    <h1> Editar </h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" 
        value="<?php echo $nombre;?>">
        <br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" 
        value="<?php echo $apellido;?>">
        <br>
        <label for="">Dirección</label>
        <input type="text" name="direccion" 
        value="<?php echo $direccion; ?>">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" 
        value="<?php echo $email;?>">
        <br>
        <label for="">Telefono</label>
        <input type="text" name="telefono" 
        value="<?php echo $telefono;?>">
        <br>

        <input type="hidden" name="id"
        value="<?php echo $id; ?>">


        <input type="submit" name="enviar" value="ACTUALIZAR">
        <a href="usuario.php">Regresar</a>
    </form>
    <?php
        }
    ?>
    
</body>
</html>