<?php
    include("./conexion.php");
    $id = $_GET["id_cliente"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- iconos en fontawesome -->
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <!-- css foote y el header -->
    <link rel="stylesheet" href="../css/footer-header.css">
    <!-- css cuerpo -->
    <link rel="stylesheet" href="../css/style_cuerpo.css"> 
    <link rel="stylesheet" href="./edit.css">
    <title>Actualizar</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro?, se eliminarán los datos');
        }
    </script>
</head>
<header>
   


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="nombre">
            <a class="navbar-brand" href="#">CompuStart</a>
        </div>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../nosotrosinicio.php">Nosotros</a>
                </li>
        </div> 
    </div> 
</header>
<br>
<body>
    <?php
        if(isset($_POST['enviar'])){
            //entra si le da el boton enviar
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $email=$_POST['email'];
            $contrasena=$_POST['contrasena'];
            $imagen=$_POST['imagen'];

            //update
            $sql="update cliente set nombre='".$nombre."',
            apellido='".$apellido."',
            direccion='".$direccion."',
            telefono='".$telefono."',
            email='".$email."',
            contrasenia='".$contrasena."',
            imagen='".$imagen."'
            where id='".$id."'";

            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                alert('Los datos se actualizaron correctamente');
                location.assign('../inicio.php');</script>";

            }else{
                echo "<script language='JavaScript'>
                alert('Los datos NO se actualizaron :(');
                location.assign('../inicio.php');</script>";
            }
            mysqli_close($conexion);


        } else{
            //no le ha dado al boton enviar
            $id=$_GET['id_cliente'];
            $sql="select *from cliente where id='".$id."'";
            $resultado=mysqli_query($conexion,$sql);

            $fila=mysqli_fetch_assoc($resultado);
            $id=$fila["id"];
            $nombre=$fila["nombre"];
            $apellido=$fila["apellido"];
            $direccion=$fila["direccion"];
            $email=$fila["email"]; 
            $telefono=$fila["telefono"];
            $contrasena=$fila["contrasenia"];
            $imagen=$fila["imagen"];
            
            mysqli_close($conexion);
    ?>

<div class="text-start">
    <h1>Editar Perfil</h1>
</div>
<div class="mx-auto" style="width: 200px;">
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <div class="input-group">
        <div class="input-box">
            <label for="">Nombres</label>
            <input type="text" name="nombre" 
            value="<?php echo $nombre;?>">
        </div>
        <div class="input-box">
            <label for="">Apellidos</label>
            <input type="text" name="apellido"
            value="<?php echo $apellido;?>">                 
        </div>
        <div class="input-box">
            <label for="">Dirección</label>
            <input type="text" name="direccion"
            value="<?php echo $direccion;?>">
        </div>

        <div class="input-box">
            <label for="">Numero Telefonico</label>
            <input  type="text" name="telefono" 
            value="<?php echo $telefono;?>">                   
        </div>

        <div class="input-box">
            <label for="">Email</label>
            <input type="email" name="email" 
            value="<?php echo $email;?>">
        </div>

        <div class="input-box">
            <label for="">Contraseña</label>
            <input type="password" name="contrasena"
             value="<?php echo $contrasena;?>">
        </div>
        <div class="input-box">
            <label for="">Cambiar avatar</label>
            <input type="file" name="imagen">
        </div>
            <input type="hidden" name="id" 
            value="<?php echo $id;?>">
    </div>
        <div class="continue-button">
            <button type="submit" name="enviar" value="ACTUALIZAR"> Actualizar</button>
        </div>
           <?php echo "<a href='eliminar_cliente.php?id=".$fila['id']."' onclick='return confirmar()'>Eliminar cuenta</a>";?>
</form>
</div>
<?php
    }
?>
<br> <br> <br>
    <!-- Pie de pagina -->
<footer>
    <?php include("../componentes/footer.php")?>
</footer>

</body>
</html>