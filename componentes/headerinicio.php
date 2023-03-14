<?php
    require './database/conexion.php'; 
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
        <nav class="navbar navbar-expand-md border-bottom border-primary">
        <div class="container-fluid">
            <a href="./inicio.php" class="navbar-brand">Compu Start</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target ="#MenuNavegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="MenuNavegacion" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto" id="nav1">
                    <li class="nav-item"><a href="./inicio.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="./nosotrosinicio.php" class="nav-link">Nosotros</a></li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorías
                    </a>
                    <div class="transparente">
                            <div class="dropdown-menu">
                            <?php
                                foreach ($categorias as $key => $categoria) {
                            ?>
                                <ul>
                                <li><a class="dropdown-item"
                                        href="./paginaCategoria.php?id=<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['categoria'] ?></a>
                                </li>
                                </ul>
                                <?php
                                }
                            ?>
                        
                            </div> 
                            </div>
                    </li>
                    <li class="nav-item"><a href="./login-registro.php" class="nav-link">Carrito</a></li>

                </ul>
                <ul class="navbar-nav ms-auto">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <label for="" class="centro"><?php echo $_SESSION["usuario"] ?></label>
                         </a>
                         <div class="transparentes">
                        <ul class="dropdown-menu" id="menu">
                            <li class="nav-item">
                                <a class="nav-link dropdown-item" href="./editar/edit.php?id_cliente=<?php echo $_SESSION["id_usuario"];?>"><i class="fas fa-edit"></i>Editar Perfil</a>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-item" href="./Carro/mostrarCarrito.php"><i class="bi bi-cart"></i>Mis Compras</a></li>
                            <li class="nav-item"><a class="nav-link dropdown-item" href="./validaciones/cerrarSesion.php"><i class="fa fa-door-open"></i>Cerrar sesión</a></li>
                        </ul>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </div>
        </nav>
        </header> 
