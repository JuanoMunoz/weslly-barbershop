<!DOCTYPE html>
<html lang="en">

<head>
<?php
        require_once "../views/estatico/head.php";
   ?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php
        require_once "../views/estatico/navbar.php";
   ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Ficha Técnica</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Nosotros</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Ficha Técnica</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<!-- [Empieza span] -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                <div class=" h-100 d-flex flex-column justify-content-center p-5">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block bg-secondary text-primary py-1 px-4">Barbería Weslly</p>
                        <h1 class="text-uppercase">¡Mira cómo desarrollamos la página!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item text-start" data-dot="<img class='img-fluid' src='../assets/img/net.png' alt=''>">
                            <h4 class="text-uppercase">descripción del proyecto</h4>
                            <p class="text-primary">---------------</p>
                            <span class="fs-5">La Barberia weslly, ubicada en el barrio Fátima de Copacabana, presta servicio desde hace cinco años. <br> <br> <br>
                                El barbero dueño y encargado de la Barbería convocó una reunión con un  equipo de los estudiantes de 10-5 para intentar solucionar algunas problemáticas que  tiene en su negocio, en dicha reunión han determinado que la problemática principal de  la Barbería es que no se tiene un registro claro de las reservas de las citas de los clientes.<br> <br>
                                En la reunión se llegó a la conclusión como forma de resolver esta problemática principal la creación y el desarrollo de un aplicativo web que permita la comunicación entre la barbería y sus clientes.</span> <br> <br> <br>
                        </div>
                        <div class="testimonial-item " data-dot="<img class='img-fluid' src='../assets/img/next.webp' alt=''>">
                            <h4 class="text-uppercase">Tecnologías usadas</h4>
                            <p class="text-primary">---------------</p>
                            <span class="fs-5">Para realizar nuestro proyecto hicimos uso de las siguientes herramientas, estructuras y lenguajes.</span> <br> <br>
                            <p class="text-primary">Lenguajes</p> <br>
                            <span class="fs-5">>HTML 5 <br> >JavaScript <br> >PHP <br> >CSS3</span> <br> <br> <br>
                            <p class="text-primary">Herramientas</p> 
                            <span class="fs-5">>MySQL <br> >Visual Studio Code <br> >PHP <br> >Bootstrap 5 <br> >Xampp</span> <br> <br> <br>
                            <p class="text-primary">Estructura</p>
                            <span class="fs-5">>Estructura MVC. 

                        </div>
                    </div>   
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-secondary h-30 d-flex flex-column justify-content-center p-5">
                    <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Modelo Entidad-Relación
                    </p>
                    <a href="../assets/lib/Mer.docx" download="Mer" class="mx-auto">
                        <div class="row">
                            <div class="col-2">
                                <i class='fas fa-file-pdf' style='font-size:48px;color:red'></i>
                            </div>
                            <div class="col-10">
                                <h1 class="text-uppercase">Descargar</h1>
                            </div>  
                        </div>
                </div>
                <div class="bg-secondary h-30 d-flex flex-column justify-content-center p-5" style="margin-top: 30px;">
                    <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Presentación Barbería Weslly
                    </p>
                    <a href="https://www.emaze.com/@ALORTFOZO/barbera-weslly?autoplay" target="_blanck" class="mx-auto">
                        <div class="row">
                            <div class="col-2">
                                <i class='	fas fa-file-video' style='font-size:48px;color:red'></i>
                            </div>
                            <div class="col-10">
                                <h1 style="margin-left: 20px;" class="text-uppercase">Ver</h1>
                            </div>  
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ¨Termina -->
    <!-- Footer Start -->
    <?php
        require_once "../views/estatico/footer.php";
   ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>