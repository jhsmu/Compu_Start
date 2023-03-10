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
                            <a class="nav-link " aria-current="page" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./nosotros.php">Nosotros</a>
                        </li>
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
                            <li class="nav-item">
                                <a class="nav-link" href="./login-registro.php">Carrito</a> 
                            </li>
                            </div> 
                            </div>
                    </ul>

                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <div class="socia-container ">
                            <a class="nav-link" href="./login-registro.php" id="socia"><i class="fa fa-user"></i></a>
                            <label for="">Iniciar Sesión</label>
                             </div>
                        </li>   
                    </ul>
             </div>

        </nav>
    </header>