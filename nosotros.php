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
    <link rel="stylesheet" href="./css/footer-header.css">
    <!-- css cuerpo -->
    <link rel="stylesheet" href="./css/style_cuerpo.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<header>
<!-- encabezado -->
    <?php include("./componentes/headerinicio.php"); ?>
    </header>


    <div class="container">
        <div class="row">
            <div class="col mt-3 mb-4">
            <div class="d-flex position-relative " style="width: 70rem;">
            <img src="./img/logo/images.png" height="200px" class="flex-shrink-0 me-3" alt="...">
            <div>
            <h1 style="text-align: center;">Techno Solution</h1>
            <p>La empresa TECNO SOLUCTIONS tiene una empresa de ventas de componentes de computadores como lo son monitores,CPU,tarjetas graficas etc.Pero esta empresa los ultimos meses ha tenido un bajon en usu ventas asi que les propusimos crear una pagina wed para que asi puedan impulsar sus ventas.</p>
            </div>
            <div>
            <img src="./img/pruebas/6.jpg" height="350px" alt="">
            <p>Nombre del dueño</p>
            </div>
        </div>
            </div>
        </div>
        <div class="row">
            <!-- Mision -->
        <div class="col-sm-6 mb-3">
        <div>
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;">Misión</h2>
        <p class="card-text">La mision principal de este software es ayudar a esta empresa a ser mas reconocida y que sus ventas incrementen. Además, buscar un lugar en el mundo digital por medio de la realización de una pagina web, que facilite la interación Usuario/Cliente con la empresa.</p>
      </div>
    </div>
            </div>
    <!-- Vision -->
            <div class="col-sm-6 mb-3">
        <div>
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;">Visión</h2>
        <p class="card-text">Visualizar el objetivo a largo plazo en el que la empresa tecnosolutions sea más conocida con su primer software llamado Compu_Start para así posicionarse en el mercado como una de las empresas con más altos  estándares de calidad y eficacia a la hora  desarrollar el software propuesto por el cliente.</p>
     
      </div>
    </div>
            </div>
        </div>
    </div>



    <!-- Pie de pagina -->
    <footer>
        <?php include("./componentes/footer.php")?>
        </footer>

</body>
</html>