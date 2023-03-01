<?php
    error_reporting( ~E_NOTICE ); // avoid notice
	
    require_once './database/conexion.php';

    if (isset($_GET['id'])) {
        $consulta=$DB_con->prepare('SELECT * FROM producto WHERE id_producto=:producto');
        $consulta->bindParam(':producto', $_GET['id']);
        $consulta->execute();

        $producto=$consulta->fetch(PDO::FETCH_ASSOC);

        $consulta2=$DB_con->prepare('SELECT * FROM marca WHERE id_marca=:marca');
        $consulta2->bindParam(':marca', $producto['id_marca']);
        $consulta2->execute();

        $marca=$consulta2->fetch(PDO::FETCH_ASSOC);

        $consulta3=$DB_con->prepare('SELECT * FROM imagenes WHERE id_producto=:producto');
        $consulta3->bindParam('producto', $_GET['id']);
        $consulta3->execute();

        $imagenes=$consulta3->fetchAll(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Compu_start</title>
</head>
<body>
    
    <div class="container">

    <div class=" mb-3" style="width: 100%; height: 600px;">
        <div class="row g-0">
        <div class="col-md-4">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <br> <br> <br> <br> <br>
              <?php
                $contador=1;
                foreach ($imagenes as $key => $imagen) {
                  if ($contador==1) {
              ?>
                <div class="carousel-item active">
                    <img src="./imagenes/<?php echo $imagen['url'] ?>" class="d-block w-100" alt="" width="600" height="350">
                </div>
              <?php
                  }else{
              ?>
                <div class="carousel-item">
                     <img src="./imagenes/<?php echo $imagen['url'] ?>" class="d-block w-100" alt="" width="600" height="350">
                </div>
              <?php
                  }
                $contador++;
                }
              ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title" style="margin: 70px 10px ;" name="monitorAOC24" id="nombre"><?php echo $producto['producto'] ?></h2>
              <p name="precio" id="precio"><?php echo '$'.$producto['precio'] ?></p>
              <h3>Características</h3>
              <p class="card-text"><?php echo $producto['descripcion'] ?></p>
                <br>
                <label for="int">Cantidad:</label>
                <input type="int" id="cantidad">
                <button type="submit" class="btn btn-success btn-lg">Comprar</button>
                <button type="button" class="btn btn-outline-secondary"> <a href="./pagina_categoria.php?id=<?php echo $producto['id_categoria'] ?>"> Atrás</a></button>
                <br> <br> <br>
                <h5><a href="#caracteristicas">Ver más características...</a> </h5>

                <br> <br> <br> <br>

                <section id="caracteristicas">
                  <ul class="list-group list-group-horizontal">
                    <li class="list-group-item"> <b>Marca</b> </li>
                    <li class="list-group-item"><?php echo $marca['marca'] ?></li>
                    </ul>
                  <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item"> <b>Modelo</b> </li>
                    <li class="list-group-item">24B2XH</li>
                  </ul>
                  <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item"> <b>Color</b> </li>
                    <li class="list-group-item">Negro</li>
                  </ul>
                  <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item"> <b>Voltaje</b></li>
                    <li class="list-group-item">100V/240V</li>
                  </ul>
                  <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item"> <b>Conexiones</b></li>
                    <li class="list-group-item">HDMI 1.4, VGA/D-Sub, Jack 3.5 mm</li>
                  </ul>
                  <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item"> <b> Resolución de la pantalla </b></li>
                    <li class="list-group-item">1920 px x 1080 px</li>
                  </ul>
                  <ul class="list-group list-group-horizontal-sm">
                    <li class="list-group-item"> <b> Brillo</b></li>
                    <li class="list-group-item">250 cd/m²</li>
                  </ul>
                </section>
                    <p class="card-tex"> </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>