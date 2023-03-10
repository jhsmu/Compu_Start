<?php
    require './database/conexion.php'; 
    $consulta=$DB_con->prepare('SELECT * FROM categoria');
    $consulta->execute();
    $categorias=$consulta->fetchAll(PDO::FETCH_ASSOC);
?>

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
                            <a class="nav-link " aria-current="page" href="./inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./nosotrosinicio.php">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorías</a>
                 
                            <div class="transparente">
                            <div class="dropdown-menu">
                            <?php
                                foreach ($categorias as $key => $categoria) {
                            ?>
                                <ul>
                                <li><a class="dropdown-item"
                                        href="./categoriaPagina.php?id=<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['categoria'] ?></a>
                                 </li>
                                </ul>
                                <?php
                                }
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="./Carro/mostrarCarrito.php">Carrito(<?php echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']); ?>)</a> 
                            </li>
                         </li>
                            </div> 
                            </div>

                            <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <div class="socia-container ">
                            <a class="nav-link" href="" id="socia"><i class="fa fa-user"></i></a>
                             </div>
                        </li>   
                    </ul> 
                    
                    <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <label for="" class="centro"><?php echo $_SESSION["usuario"] ?></label>
                         </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="" href=" ./edit.php"><i class="fas fa-edit"></i>Editar Perfil</a>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-item" href="./Carro/mostrarCarrito.php"><i class="bi bi-cart"></i>Mis Compras</a></li>
                            <li class="nav-item"><a class="nav-link dropdown-item" href="./validaciones/cerrarSesion.php"><i class="fa fa-door-open"></i>Cerrar sesión</a></li>
                        </ul>
                    </li>
                   
                    </ul>

                



            

        </nav>
    </header>