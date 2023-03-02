<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/footer-header.css">
    <link rel="stylesheet" href="./css/style_cuerpo.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include("./componentes/headerCliente.php"); ?>
    </header>

    <div class="container ">
        <div class="row mt-4 mb-4">
            <!-- card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="./img/inicio/monitor gamers asus.jpg" height="200px" class="card-img-top" alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">Monitor Gamers Asus|</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="./img/inicio/combo teclado + mouse gamer.jpg" height="200px" class="card-img-top"
                            alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">Combo Teclado + Mouse Gamers</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
            <!-- card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="./img/inicio/memoria ram spectrix D60G.png" height="200px" class="card-img-top"
                            alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">Memoria Ram Spectrix</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
            <!-- carusel -->
            <div id="carouselExampleAutoplaying" class="carousel slide mt-3 mb-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/4893391_15899281063797455_origin.jpg"
                            height="250px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://hardzone.es/app/uploads-hardzone.es/2022/02/Intel-vs-AMD-2022.jpg"
                            height="250px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/Intel_Xeon_Roadmap_Ice_Lake_Sapphire_Rapids_Granite_Rapids_5_2060x1159.png"
                            height="250px" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- card 4 -->
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="./img/inicio/Tarjeta-Grafica-ASUS-TUF-RTX-3070-Ti-OC16572985441.png" height="200px"
                            class="card-img-top" alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">Tarjeta Grafica Asus Rtx 3070</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
            <!-- card 5 -->
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="./img/inicio/computador de mesa.jpg" height="200px" class="card-img-top" alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">Computador De Mesa</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
            <!-- card 6 -->
            <div class="col-md-4">
                <div class="card">
                    <figure>
                        <img src="./img/inicio/Lenovo-IdeaPad-3-14IIL05.jpg" height="200px" class="card-img-top"
                            alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">Lenovo IdeaPad</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include("./componentes/footer.php")?>
    </footer>


</body>

</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="/js/app.js"></script>