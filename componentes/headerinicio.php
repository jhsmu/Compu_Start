<?php
    require "./database/conexion.php"; 
    $consulta=$DB_con->prepare('SELECT * FROM categoria');
    $consulta->execute();
    $categorias=$consulta->fetchAll(PDO::FETCH_ASSOC);
?>
<header>
    <?php
        include("./editar/conexion.php");
        $id = "SELECT * FROM cliente WHERE id= $_SESSION[id_usuario]";
        $usuarios = "SELECT * FROM cliente";
    ?>
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
                    <a class="nav-link " aria-current="page" href="./inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorías</a>
        <div class="transparente">
        <div class="dropdown-menu">
            <?php
                foreach ($categorias as $key => $categoria) {
            ?>
            <ul>
                <li>
                    <a class="dropdown-item"href="./categoriaPagina.php?id=<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['categoria'] ?></a>
                </li>
            </ul>
            <?php
                }
            ?>
        </div> 
        </div> 
            </ul>

    <ul class="navbar-nav ms-auto mb-lg-0">
        <ul class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <label for=""><?php echo $_SESSION["usuario"] ?></label>
            </a>
        <ul class="dropdown-menu">
            <li>
                <?php $resultado = mysqli_query($conexion, $usuarios);
                        $row=mysqli_fetch_assoc($resultado);{ ?>
                <a href="./editar/edit.php?id_cliente=<?php echo $_SESSION["id_usuario"];?>" class="table__item__link">Editar</a>
            </li>
            <?php
                } mysqli_free_result($resultado);?>
                <li><a class="dropdown-item" href="#">Mis Compras</a></li>
                <li><a class="nav-link dropdown-item" href="./validaciones/cerrarSesion.php">Cerrar sesión</a></li>
        </ul>
        </ul>

    </ul>            
</nav>
</header>
