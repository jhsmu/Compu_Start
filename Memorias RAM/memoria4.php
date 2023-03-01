<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Vista ampliada memoria RAM 8gb</title>
</head>
<body>
    
    <div class="container">

    <div class=" mb-3" style="width: 100%; height: 600px;">
        <div class="row g-0">
        <div class="col-md-4">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <br> <br> <br> <br>
                <div class="carousel-item active">
                    <img src="./imagenes/memoria4.webp" class="d-block w-100" alt="" width="600" height="300">
                </div>
                <br> <br> <br> <br>
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
              <h2 class="card-title" style="margin: 70px 10px ;" name="memoriaRAM4gb" id="nombre">Memoria RAM 4gb</h5>
              <p name="precio" id="precio">Precio aquí</p>
              <h3>Características</h3>
              <p class="card-text">
                <li> Optimiza el rendimiento de tu máquina con la tecnología DDR4 SDRAM.</li>
                <li> Memoria con formato SODIMM.</li>
                <li> Alcanza una velocidad de 2666 MHz.</li>
                <li> Cuenta con una tasa de transferencia de 21300 MB/s.</li>
                </p>
                <br>
                <label for="int">Cantidad:</label>
                <input type="int" id="cantidad">
                <button type="submit" class="btn btn-success btn-lg">Comprar</button>
                <button type="button" class="btn btn-outline-secondary"> <a href="./memoriasRAM.php"> Atrás</a></button>
                <br> <br> <br>
                <h5><a href="#caracteristicas">Ver más características...</a> </h5>
                <br> <br> <br> <br>

                <section id="caracteristicas">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item"> <b>Marca</b> </li>
                        <li class="list-group-item"> Samsung</li>
                    </ul>
                    <ul class="list-group list-group-horizontal-sm">
                        <li class="list-group-item"> <b>Capacidad</b> </li>
                        <li class="list-group-item">8 GB</li>
                    </ul>
                    <ul class="list-group list-group-horizontal-sm">
                        <li class="list-group-item"> <b>Velocidad</b> </li>
                        <li class="list-group-item">2666 MHz</li>
                    </ul>
                    <ul class="list-group list-group-horizontal-sm">
                        <li class="list-group-item"> <b>Tecnología</b></li>
                        <li class="list-group-item">DDR4 SDRAM</li>
                    </ul>
                    <ul class="list-group list-group-horizontal-sm">
                        <li class="list-group-item"> <b>Formato</b></li>
                        <li class="list-group-item">SODIMM</li>
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