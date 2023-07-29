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
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Contacto</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Nosotros</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contacto</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <?php
    if (isset($_GET['ss'])) {
        $list = $_GET['ss'];
        switch ($list) { //estructura switch que verifica el valor de la variable

            case 'active': ?>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-secondary p-5">
                                    <p class="d-inline-block bg-dark text-primary py-1 px-4">Contactános</p>
                                    <h1 class="text-uppercase mb-4">¡Soluciona tus dudas poníendote en contacto con nosotros!</h1>
                                    <form action="../controller/contactoc.php?cto=add" method="POST">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                    <?php
                                                        include("../model/conexion.php");
                                                        $correo= $_SESSION['email'];
                                                        $sql = $conexion->query("SELECT * FROM usuarios WHERE correo='$correo'");
                                                        $lista= $sql->fetch_all(MYSQLI_ASSOC); 
                                                        foreach ($lista as $registro) {
                                                    ?>
                                                <div class="form-floating">
                                                    <input type="hidden" name="nombre" value="<?php echo $registro["id"]; ?>">
                                                    <input type="text" class="form-control bg-transparent" id="name" value="<?php echo $registro["nombre_completo"];?>" name="mostrar" disabled>
                                                    <label for="name">Tú nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email" name="email"  readonly="readonly" class="form-control bg-transparent" id="email" value="<?php echo $registro["correo"]; } ?>">
                                                    <label for="email">Tú correo electrónico</label>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="number" name="numero" required class="form-control bg-transparent" id="numero" placeholder="Ingresa tú número telefónico" min="1" pattern="[0-9]">
                                                    <label for="numero">Tú número telefónico</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control bg-transparent" required name="mensaje" placeholder="Escribe tú mensaje" id="message" style="height: 100px"></textarea>
                                                    <label for="message">Mensaje</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensaje</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="h-100" style="min-height: 400px;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350.49054621481764!2d-75.5027779962235!3d6.348984347685506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4425156ff09dd7%3A0x94456b51ef301dc8!2sCl.%2050%20%2339-310%2C%20Copacabana%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1653056066869!5m2!1ses!2sco" width="600" height="632" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php break;

            case 'disabled': ?>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-secondary p-5">
                                    <p class="d-inline-block bg-dark text-primary py-1 px-4">Contactános</p>
                                    <h1 class="text-uppercase mb-4">¡Soluciona tus dudas poníendote en contacto con nosotros!</h1>
                                    <form action="iniciosesion.php?ss=disabled" method="POST">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Escribe tú nombre" name="nombre" disabled>
                                                    <label for="name">Tú nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email" name="email" disabled class="form-control bg-transparent" id="email" placeholder="Escribe tú correo electrónico">
                                                    <label for="email">Tú correo electrónico</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="number" name="numero" disabled class="form-control bg-transparent" id="numero" placeholder="Ingresa tú número telefónico" min="1" pattern="[0-9]">
                                                    <label for="numero">Tú número telefónico</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control bg-transparent" disabled name="mensaje" placeholder="Escribe tú mensaje" id="message" style="height: 100px"></textarea>
                                                    <label for="message">Mensaje</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100 py-3" type="submit">¡Para envíar un mensaje debes inciar sesión!</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="h-100" style="min-height: 400px;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350.49054621481764!2d-75.5027779962235!3d6.348984347685506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4425156ff09dd7%3A0x94456b51ef301dc8!2sCl.%2050%20%2339-310%2C%20Copacabana%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1653056066869!5m2!1ses!2sco" width="600" height="632" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php break;
            default:
                echo "sin acciones";
                break;
        }
        ?>

    <?php  } else { ?>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary p-5">
                            <p class="d-inline-block bg-dark text-primary py-1 px-4">Contactános</p>
                            <h1 class="text-uppercase mb-4">¡Soluciona tus dudas poníendote en contacto con nosotros!</h1>
                            <form action="iniciosesion.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" id="name" placeholder="Escribe tú nombre" name="nombre" disabled>
                                            <label for="name">Tú nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" disabled class="form-control bg-transparent" id="email" placeholder="Escribe tú correo electrónico">
                                            <label for="email">Tú correo electrónico</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" name="numero" disabled class="form-control bg-transparent" id="numero" placeholder="Ingresa tú número telefónico" min="1" pattern="[0-9]">
                                            <label for="numero">Tú número telefónico</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-transparent" disabled name="mensaje" placeholder="Escribe tú mensaje" id="message" style="height: 100px"></textarea>
                                            <label for="message">Mensaje</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">¡Para envíar un mensaje debes inciar sesión!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100" style="min-height: 400px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350.49054621481764!2d-75.5027779962235!3d6.348984347685506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4425156ff09dd7%3A0x94456b51ef301dc8!2sCl.%2050%20%2339-310%2C%20Copacabana%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1653056066869!5m2!1ses!2sco" width="600" height="632" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>

    <!-- Contact End -->


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