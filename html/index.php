
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/index1.css">
    <link rel="stylesheet" href="../css/headerr.css">
    <link rel="stylesheet" href="../css/pie.css">
    <!--Fin tipografia-->

    <title>ESFLY</title>
</head>
<body>
<?php 
include("header-log.php");
?>    
    <!-- imagenes de la pagina-->
    <div class="contenedor">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="../imagen/index/fondo1.png" class="d-block w-100 h-200" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="../imagen/index/fondo2.png" class="d-block w-100 h-200" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="../imagen/index/fondo4.png" class="d-block w-100 h-200" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"  data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    
            <div class="texto-superpuesto">
                <p>"Más que una aerolínea, somos tu puente al mundo."</p>
            </div>
    </div>
    <!--Seccion de vuelos de pagina web-->

<!--IMAGENES DE PROMOCION DE VIAJES-->
<div class=" texto-titulo container mt-5 ">
    <h5>Algunas ofertas ></h5>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <div class="image-container">
                <img src="../imagen/index/colombia.png" alt="Imagen 1">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Colombia</h4>
                        <h6>Palmas de cera del Valle del Cocora</h6>
                        <a href="../html/.html"  class="btn btn-primary">Tomar viaje</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="image-container">
                <img src="../imagen/index/belice.png" alt="Imagen 2">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Belice</h4>
                        <h6>The Split: ¡La playa más hermosa de Belice!</h6>
                        <a href="../html/belice.html"  class="btn btn-primary">Tomar viaje</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="image-container">
                <img src="../imagen/index/guatemala.png" alt="Imagen 3">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Guatemala</h4>
                        <h6>Barrio de antigua Guatemala</h6>
                        <a href="../html/guatemala.html"  class="btn btn-primary">Tomar viaje</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="image-container">
                <img src="../imagen/index/fondo1.png" alt="Imagen 4">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Brazil</h4>
                        <h6>Río de Janeiro</h6>
                        <a href="../html/brazil.html"  class="btn btn-primary">Tomar viaje</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--TERMINAN IMAGENES DE PROMOCION

<div class="container-fluid">
    <div class=" texto-titulo container mt-5 ">
        <h5> Información ></h5>
    </div>

    <div class="row w-75 mx-auto text-white text-center my-5">
        <div class="col-12 col-md-4  bg-white"><img src="../imagen/index/equipaje.png" alt="" class="w-100"></div>
        <div class="col-12 col-md-8 p-3 rounded-5 py-5 " id="info">
            <h4>Equipaje</h4>
            <p class="fs-5">Entérate de las condiciones que debes tener en cuenta al momento de preparar tu equipaje.</p>
        </div>
    </div>

        <div class="row w-75 mx-auto text-white text-center my-5">
            <div class="col-12 col-md-4 bg-white my-auto"><img src="../imagen/index/esflyInfo.png" alt="" class="w-100"></div>
            <div class="col-12 col-md-8 p-3 rounded-5 py-5 " id="info">
                <h4>ESfly information</h4>
                <p class="fs-5"> Adquiere información de vuelos seguros y cómodos. Con servicio excepcional, priorizamos tu experiencia de viaje. </p>
            </div>
        </div>

    <div class="row w-75 mx-auto text-white text-center my-5">
        <div class="col-12 col-md-4  bg-white"><img src="../imagen/index/experiencia.png" alt="" class="w-100"></div>
        <div class="col-12 col-md-8 p-3 rounded-5 py-5 " id="info">
            <h4>Experiencia esfly</h4>
            <p class="fs-5"> Descubre los servicios a bordo que te ofrecemos al volar con nosotros, escribe reseñas.</p>
        </div>
    </div>

</div> -->

<!--CUADROS DE INFORMACION-->
 <div class="container-fluid mt-5 mx-auto">
 

    <div class="card  mt-5 col-lg-12 mx-auto" style="max-width: 540px;">
        <div class="row g-0">

            <div class="col-md-4 my-auto">
                <img src="../imagen/index/equipaje.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Equipaje</h5>
                  <p class="card-text">Entérate de las condiciones que debes tener en cuenta al momento de preparar tu equipaje.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins   ago</small></p>
                </div>
            </div>
        </div>
    </div>

        
        <div class="card  mt-5 col-lg-12 mx-auto" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 my-auto">
                <img src="../imagen/index/esflyInfo.png" class="img-fluid rounded-start my-auto" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">ESfly information</h5>
                  <p class="card-text">Adquiere información de vuelos seguros y cómodos. Con servicio excepcional, priorizamos tu experiencia de viaje.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
        </div>


        
        <div class="card mb-3 mt-5 col-lg-12 mx-auto" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 my-auto">
                <img src="../imagen/index/experiencia.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Experiencia ESfly</h5>
                  <p class="card-text">Descubre los servicios a bordo que te ofrecemos al volar con nosotros, escribe reseñas.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
        </div>



 </div>

<!--FIN DE CUADROS DE INFORMACION-->


<!--Preparate para viajar-->
<div class="preparate">

    <!--centro de ayuda-->
    <div class="son">
        <div class="logito">
            <img src="..//imagen/index/ayuda.png" alt="">
        </div>
        <div class="texto">
            <h3>CENTRO DE AYUDA</h3>
            <p>Encuentra ayuda sobre la información que necesites.</p>
        </div>
    </div>
    <!--Fin centro de ayuda-->
    <!--requisitos de viajar-->
    <div class="son">
        <div class="logito">
            <img src="..//imagen/index/requisitos.png" alt="">
        </div>
        <div class="texto">
            <h3>REQUISITOS PARA VIAJAR</h3>
            <p>Informate acerca de visas, vacunas y demas documentos.</p>
        </div>
    </div>
    <!--fin requisitos de viajar-->
    <!--Check in online-->
    <div class="son">
        <div class="logito">
            <img src="..//imagen/index/check.png" alt="">
        </div>
        <div class="texto">
            <h3>Check-in online</h3>
            <p>Obten tu pase de abordar y ahorra tiempo en el aeropuerto.</p>
        </div>
    </div>
    <!--fin Check in online-->
</div>
<!--fin preparate pafa viaja-->
</div>
<footer class="mt-3 pt-3">
    <div class="container-fluid pt-2 ps-5"><img src="../imagen/logo.png" alt="" class="logo">
    </div>
    <div class="container-fluid text-white">
    <div class="row">
        <div class="col-6 col-sm-4 col-md-2" >
            <ul class="">
                <hr>
                <li><h6><b>AYUDA</b></h6></li>
                <li>Contáctanos</li>
                <li>Métodos de pago</li>
                <li>Cambios y devoluciones</li>
                <li>Preguntas frecuentes</li>
                <li>Promociones</li>
            </ul>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>ACERCA</b></h6></li>
                <li>Ubicación</li>
                <li>Redes</li>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>ACERCA</b></h6></li>
                <li>Ubicación</li>
                <li>Redes</li>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>NOSOTROS</b></h6></li>
                <li>Somos ESfly</li>
                <li>Alianzas y Beneficios</li>
                <li>Accecibilidad</li>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>NOSOTROS</b></h6></li>
                <li>Somos ESfly</li>
                <li>Alianzas y Beneficios</li>
                <li>Accecibilidad</li>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
            <ul class="">
                <hr>
                <li><h6><b>SIGUENOS</b></h6></li>
                <i class="bi bi-whatsapp"> 7720-9970</i><br>
                <i class="bi bi-instagram"> ESfly_official</i><br>
                <i class="bi bi-facebook"> ESfly_official</i><br>
                <i class="bi bi-youtube"> ESfly-official</i><br>
        </div>
    </div>    
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
