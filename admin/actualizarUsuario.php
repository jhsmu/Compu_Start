<?php
    include("../editar/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Css -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/all.css">
            <!-- iconos en fontawesome -->
            <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Actualizar Usuario</title>
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
                alert('Los datos NO se actualizaron :(');
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

<!--Container -->
<div class="mx-auto bg-grey-lightest">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <div class="flex">

                </div>
                <ul class="list-reset flex flex-col">
                    <?php include("../componentes/barralateralAdmin.php") ?>
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Editar perfil del usuario
                            </div>
                            <div class="p-3">
                    <form class="w-full" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3" hidden>
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                               for="grid-password">
                            Id Cliente
                        </label>
                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                        name="id" value="<?php echo $id; ?>">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            >
                            Nombre(s)
                        </label>
                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                        type="text" name="nombre" id="nombre" onchange="nombre1()" required value="<?php echo $nombre; ?>" placeholder="<?php echo $nombre; ?>">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for="grid-last-name">
                            Apellido(s)
                        </label>
                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                        type="text" name="apellido" id="apellido" onchange="apellido1()" required value="<?php echo $apellido; ?>" placeholder="<?php echo $apellido; ?>">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            >
                            Direcci??n
                        </label>
                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                        type="text" name="direccion" id="direccion" onchange="direccion1()" required value="<?php echo $direccion; ?>" placeholder="<?php echo $direccion; ?>">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for="grid-last-name">
                            N??mero Tel??fonico
                        </label>
                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                        type="text" name="telefono" id="telefono" onchange="telefono1()" required value="<?php echo $telefono; ?>" placeholder="<?php echo $telefono; ?>">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                            >
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                        type="text" name="email" id="correo" onchange="ValidacionCorreo()" required value="<?php echo $email; ?>" placeholder="<?php echo $email; ?>">
                    </div>
                
                </div>
                <div class="mt-5">
                    <button class='bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded'
                    type="submit" name="enviar" value="ACTUALIZAR"> Actualizar</button>
                    <button class='close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded' type="button"> <a href="./usuario.php">Volver</a>
                        
                    </button>
                </div>
                        </div>
                    </div>
                    <!--/Grid Form-->
                </div>
            </main>
            <!--/Main-->
        </div>

    </div>
</div>
        </form>
            <?php
                }
            ?>

<script src="../js/main.js"></script>

<!-- VALIDACIONES Y ALERTAS -->
<script src="../js/validaciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js"></script>

</body>

</html>