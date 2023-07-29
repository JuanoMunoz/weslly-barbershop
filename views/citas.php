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
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Citas </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Inicio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Citas</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <?php
if (isset($_GET['ss'])) {
     $list = $_GET['ss'];
    switch ($list) { //estructura switch que verifica el valor de la variable
        case 'active': ?>
    <!-- Contact Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-secondary p-5">
                                <p class="d-inline-block bg-dark text-primary py-1 px-4">¡Te esperamos!</p>
                                <h1 class="text-uppercase mb-4">¡AGENDA TU CITA CONㅤㅤ NOSOTROS</h1>
                                <form action="../controller/citac.php?cita=addC" method="POST">
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
                                                <input type="hidden" value="<?php echo $registro["correo"]; ?>" name="correo" class="form-control">
                                                <input type="text" class="form-control bg-transparent" id="name" value="<?php echo $registro["nombre_completo"];?>" name="mostrar" disabled>
                                                <label for="name">Tu nombre</label>
                                      <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="datetime-local" placeholder="Ingresa la fecha en la que quiere ser atendido" name="fecha" class="form-control bg-transparent" required>
                                                <label for="email">Fecha de la cita</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                            <select name="servicio" class="form-select bg-transparent" required>
                                                <?php
                                                include("../../model/conexion.php");
                                                $sql = $conexion->query("SELECT * FROM servicio");
                                                $lista = $sql->fetch_all(MYSQLI_ASSOC);
                                                foreach ($lista as $doc) {
                                                ?>
                                                    <option style="font-size: 18px; background-color: #191c24; color:antiquewhite;" value="<?php echo $doc['id_s'] ?>"><?php echo $doc['nombre_servicio'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <label for="numero">¡Elige un servicio!</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                            <select name="barbero" class="bg-transparent form-select " required>
                                                <?php
                                                include("../../model/conexion.php");
                                                $sql = $conexion->query("SELECT * FROM empleados");
                                                $lista = $sql->fetch_all(MYSQLI_ASSOC);
                                                foreach ($lista as $doc) {
                                                ?>
                                                    <option style="font-size: 18px; background-color: #191c24; color:antiquewhite;" value="<?php echo $doc['id_empleado'] ?>"><?php echo $doc['nombre_empleado'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <label for="numero">¡Elige un barbero!</label>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 50px;">
                                        <div class="form-floating">
                                            <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" required>
                                                <label for="numero">Tu número telefónico</label>
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
                            <div class="h-100" style="max-height: 577px;">
                                <img
                                src="../assets/img/pexels-cottonbro-3993466.jpg"
                                width="450px" height="577px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></img>
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
                                <p class="d-inline-block bg-dark text-primary py-1 px-4">¡Te esperamos!</p>
                                <h1 class="text-uppercase mb-4">¡AGENDA TU CITA CONㅤㅤ NOSOTROS</h1>
                                <form action="iniciosesion.php" method="POST">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" disabled>
                                                    <label for="numero">Tu nombre</label>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="datetime-local" placeholder="" name="fecha" class="form-control bg-transparent" disabled>
                                                <label for="email">Fecha de la cita</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" disabled>
                                                    <label for="numero">Elige el barbero</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" disabled>
                                                    <label for="numero">Elige el servicio</label>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 50px;">
                                        <div class="form-floating">
                                            <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" disabled>
                                                <label for="numero">Tu número telefónico</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">¡Debes iniciar sesión para pedir una cita!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100" style="max-height: 577px;">
                                <img
                                src="../assets/img/pexels-cottonbro-3993466.jpg"
                                width="450px" height="577px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php   break; }
}
else{ ?>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-secondary p-5">
                                <p class="d-inline-block bg-dark text-primary py-1 px-4">¡Te esperamos!</p>
                                <h1 class="text-uppercase mb-4">¡AGENDA TU CITA CONㅤㅤ NOSOTROS</h1>
                                <form action="iniciosesion.php" method="POST">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" disabled>
                                                    <label for="numero">Tu nombre</label>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="datetime-local" placeholder="" name="fecha" class="form-control bg-transparent" disabled>
                                                <label for="email">Fecha de la cita</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" disabled>
                                                    <label for="numero">Elige el barbero</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" disabled>
                                                    <label for="numero">Elige el servicio</label>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 50px;">
                                        <div class="form-floating">
                                            <input type="number" placeholder="Ingrese su número teléfonico..." name="telefono" class="form-control bg-transparent" min="1" pattern="[0-9]" disabled>
                                                <label for="numero">Tu número telefónico</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">¡Debes iniciar sesión para pedir una cita!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100" style="max-height: 577px;">
                                <img
                                src="../assets/img/pexels-cottonbro-3993466.jpg"
                                width="450px" height="577px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>
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