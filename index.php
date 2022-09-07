<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyectoamor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Logo</a>
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link  aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#productos">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-success" href="views/login.php">Ingresar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-info" href="views/registro.php" >Registrarse</a>
                  </li>
                  
                </ul>
              </div>
            </div>
        </nav>

        <div id="carouselHeaderCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselHeaderCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselHeaderCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselHeaderCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/resizer.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/GettyImages-1057154458-1-591x447.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/Travel-makeup-kit-essentials.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeaderCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHeaderCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


    </header>
    <main>
    <section id="productos">
        <div class="container">
            <h2>PRODUCTOS</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card-producto">
                        <img src="img/3346470424401_G042440_KK-MAT-17-FALL-LIPSM330SPI_5-591x447.jpg" class="w-100" alt="labiales de distintos colores x3">
                        <div class="card-infop">
                            <h3>NOMBRE PRODUCTO</h3>
                            <P>$15.000-</P>
                            <a href="#">Ver Más</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-producto">
                        <img src="img/ima1.jpg" class="w-100" alt="Paleta de sombra sencilla">
                        <div class="card-infop">
                            <h3>NOMBRE PRODUCTO</h3>
                            <P>$55.000</P>
                            <a href="#">Ver Más</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-producto">
                        <img src="img/ima2.jpg" class="w-100" alt="Paleta de sombras con rubor y caja desplegable">
                        <div class="card-infop">
                            <h3>NOMBRE PRODUCTO</h3>
                            <P>$135.000</P>
                            <a href="#">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-producto">
                        <img src="img/tonos-de-labiales.jpg" class="w-100" alt="labial de un solo tono">
                        <div class="card-infop">
                            <h3>NOMBRE PRODUCTO</h3>
                            <P>5.000</P>
                            <a href="#">Ver Más</a>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
            
        </div>
        
        

    </section>

    </main>
    <footer>
        <p>© Todos los dererchos reservados -nibra A</p>
    </footer>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/functions.js"></script>
</body>
</html>