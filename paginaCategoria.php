<?php
  error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once './database/conexion.php';
  if(isset($_GET['id'])){
    $consulta1=$DB_con->prepare('SELECT * FROM categoria WHERE id_categoria=:id_categoria');
    $consulta1->bindParam(':id_categoria', $_GET['id']);
    $consulta1->execute();
    $categoria=$consulta1->fetch(PDO::FETCH_ASSOC);

    $consulta2=$DB_con->prepare('SELECT * FROM producto WHERE id_categoria=:categoria'); 
    $consulta2->bindParam(':categoria', $_GET['id']);
    $consulta2->execute();
    $productos=$consulta2->fetchAll(PDO::FETCH_ASSOC);
  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Compu Start</title>
</head>
<body>
<header>
    <div class="text-bg-secondary p-3">
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                Logo aquí
            </div>
            <div class="col">
                <h2><?php echo $categoria['categoria'] ?></h2>
            </div>
            <div class="col">
                Cuenta
            </div>
        </div>
    </div>
    </div>
</header>

<br> <br>
    
    <div class="container">
        <div class="row ">
 <!-- card 1 -->
      <?php
          foreach ($productos as $key => $producto) {
            if($key<3){
      ?>
            <div class="col-md-4 mt-md-4 mb-md-4">
                <div class="card">
                    <img src="./imagenes/memoria1.jpg"  height="250px" width="300px" alt="memoriaRAM4gb">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $producto['producto'] ?></h5>
                      <a href="./descripcion.php?id=<?php echo $producto['id_producto'] ?>" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
      <?php
        }
      }
      ?>
<!-- carusel -->

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.muycomputerpro.com/wp-content/uploads/2022/09/computacion-en-paralela.jpg" height="200px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.notonidas.com/wp-content/uploads/2020/10/newegg-tech-pc-component-wallpaper-4-1.jpg" height="200px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://w0.peakpx.com/wallpaper/575/922/HD-wallpaper-technology-circuit.jpg" height="200px" class="d-block w-100" alt="...">
      </div>
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
<!-- card 6 -->
        <?php
            foreach ($productos as $key => $producto) {
              if($key>=3){
              
        ?>
            <div class="col-md-4 mt-md-4">
                <div class="card">
                    <img src="./imagenes/memoria6.webp" height="350px" width="300px" alt="memoriaRAM4gb1Samsung">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $producto['producto'] ?></h5>
                      <a href="./descripcion.php?id=<?php echo $producto['id_producto'] ?>" class="btn btn-primary">Ver más</a>
                      <div class="col-md-6">
                      </div>
                    </div>
                </div>
            </div>
        <?php
            }
          }
        ?>
        </div>
    </div>

    <!--  
    
    
    
    
    -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>