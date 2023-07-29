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
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Misión/Visión</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Nosotros</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Misión/Visión</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="../assets/img/pexels-thgusstavo-santana-2040189.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Barbería Weslly</p>
                        <h1 class="text-uppercase mb-4">Misión</h1>
                        <div>

                            <div class="d-flex justify-content-between border-bottom py-2">

                                <span class="text-uppercase">Buscamos ofrecer un servicio de alta calidad que supere las exigencias y necesidades de cada uno de nuestros clientes.
                                    Asi mismo, buscamos mostrar el profesionalismo y el respeto que nos caracteriza para generar una sensación de  estar en un ambiente familiar y generar en el cliente la necesidad de volver a Weslly.</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <br> <br> <br><br>
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Barbería Weslly</p>
                        <h1 class="text-uppercase mb-4">Visión</h1>
                        <div>

                            <div class="d-flex justify-content-between border-bottom py-2">

                                <span class="text-uppercase">Ser la barberia número  #1 comprometiendonos con nuestros clientes y ofrecer
                                    servicios con los mejores estándares de calidad donde superemos cualquier expectativa
                                    innovando día a día para su máxima satisfacción.
                      </span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-80">
                        <img class="img-fluid h-80" src="../assets/img/pexels-thgusstavo-santana-2521978.jpg" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Working Hours End -->


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