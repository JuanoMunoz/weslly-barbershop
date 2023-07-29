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
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Productos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Productos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Price Start -->
    <div class="container-xxl py-5">
    <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Productos</p>
                <h1 class="text-uppercase">¡Lo qué ofrecemos!</h1>
            </div>
            <div class="row g-4">
                <?php
            include("../model/conexion.php");
            $sql = $conexion->query("SELECT * FROM PRODUCTO ");
            $lista = $sql->fetch_all(MYSQLI_ASSOC);
            foreach ($lista as $servicio) { ?>
                <div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="<?php echo $servicio['icono']  ?>" alt="">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3"><?php echo $servicio['nombre']  ?></h3>
                            <p><?php echo $servicio['descripcion']  ?></p>
                            <span class="text-uppercase text-primary">$<?php echo $servicio['precio']  ?></span>
                        </div>
                        <a type="button" class="btn btn-square" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $servicio['id'] ?>"><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>

            <?php
             include('admin/modales/productosOfrecidos.php');
            } ?>
            </div>
            <!-- Testimonial Start -->
            <div class="container-xxl py-5" style="margin-top: 200px;">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonios</p>
                        <h1 class="text-uppercase">¿Qué dicen nuestros clientes?</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='../assets/img/testomonio.webp' alt=''>">
                            <h4 class="text-uppercase">Alejandro Muñoz</h4>
                            <p class="text-primary">Comprador, Máquina de afeitar</p>
                            <span class="fs-5">"Los productos que pides te llegan en un período corto de
                                tiempo"</span>
                        </div>
                        <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='../assets/img/testimonio.png' alt=''>">
                            <h4 class="text-uppercase">Edwin Mosquera</h4>
                            <p class="text-primary">Profesor,Corte de pelo</p>
                            <span class="fs-5">"En la Barbería Weslly prima el respeto y el buen trato a
                                los clientes"</span>
                        </div>
                        <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='../assets/img/testimonio2.png' alt=''>">
                            <h4 class="text-uppercase">Juan Camilo Yarce</h4>
                            <p class="text-primary">Estudiante, Corte de pelo</p>
                            <span class="fs-5">"¡Nunca me habían quedado las colitas tan ch##%$#!"</span>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Price End -->


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