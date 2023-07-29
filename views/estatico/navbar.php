<?php
if (isset($_GET['ss'])) { //isset verifica si hay datos en el nombre request (variable que puede venir
    //de distintos archivos )
    $list = $_GET['ss'];
    switch ($list) { //estructura switch que verifica el valor de la variable

        case 'active':
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            break;

        case 'disabled':
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            session_unset();
            session_destroy();

            break;
        default:
            break;
    }
}
?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="../views/index.php" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="mb-0 text-primary text-uppercase"><i class="fa fa-cut me-3"></i>Weslly</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php
            if (isset($_GET['ss'])) {
                $list = $_GET['ss'];
                if ($list == 'active') {
                    $rol = $_SESSION['rol'];
                    if ($rol == "user") { ?>
                        <a href="../views/index.php?ss=<?php echo $list; ?>" class="nav-item nav-link active">Inicio</a>
                        <a href="../views/citas.php?ss=<?php echo $list; ?>" class="nav-item nav-link ">Citas</a>
                        <a href="../views/producto.php?ss=<?php echo $list; ?>" class="nav-item nav-link">Productos</a>
                        <a href="../views/servicios.php?ss=<?php echo $list; ?>" class="nav-item nav-link">Servicios</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nosotros</a>
                            <div class="dropdown-menu m-0">
                                <a href="../views/contacto.php?ss=<?php echo $list; ?>" class="dropdown-item">Contacto</a>
                                <a href="../views/misvis.php?ss=<?php echo $list; ?>" class="dropdown-item">Misión/Visión</a>
                                <a href="../views/nosotros.php?ss=<?php echo $list; ?>" class="dropdown-item">Conócenos</a>
                                <a href="../views/fichatecnica.php?ss=<?php echo $list; ?>" class="dropdown-item">Ficha técnica</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a href="../views/index.php?ss=<?php echo $list; ?>" class="nav-item nav-link active">Inicio</a>
                        <a href="../views/citas.php?ss=<?php echo $list; ?>" class="nav-item nav-link ">Citas</a>
                        <a href="../views/producto.php?ss=<?php echo $list; ?>" class="nav-item nav-link">Productos</a>
                        <a href="../views/servicios.php?ss=<?php echo $list; ?>" class="nav-item nav-link">Servicios</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nosotros</a>
                            <div class="dropdown-menu m-0">
                                <a href="../views/contacto.php?ss=<?php echo $list; ?>" class="dropdown-item">Contacto</a>
                                <a href="../views/misvis.php?ss=<?php echo $list; ?>" class="dropdown-item">Misión/Visión</a>
                                <a href="../views/nosotros.php?ss=<?php echo $list; ?>" class="dropdown-item">Conócenos</a>
                                <a href="../views/fichatecnica.php?ss=<?php echo $list; ?>" class="dropdown-item">Ficha técnica</a>
                            </div>
                        </div>
                    <?php
                    }
                }

                if ($list == 'disabled') { ?>
                    <a href="../views/index.php?ss=<?php echo $list; ?>" class="nav-item nav-link active">Inicio</a>
                    <a href="../views/citas.php?ss=<?php echo $list; ?>" class="nav-item nav-link ">Citas</a>
                    <a href="../views/producto.php?ss=<?php echo $list; ?>" class="nav-item nav-link">Productos</a>
                    <a href="../views/servicios.php?ss=<?php echo $list; ?>" class="nav-item nav-link">Servicios</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nosotros</a>
                        <div class="dropdown-menu m-0">
                            <a href="../views/contacto.php?ss=<?php echo $list; ?>" class="dropdown-item">Contacto</a>
                            <a href="../views/misvis.php?ss=<?php echo $list; ?>" class="dropdown-item">Misión/Visión</a>
                            <a href="../views/nosotros.php?ss=<?php echo $list; ?>" class="dropdown-item">Conócenos</a>
                            <a href="../views/fichatecnica.php?ss=<?php echo $list; ?>" class="dropdown-item">Ficha técnica</a>
                        </div>
                    </div>
                    <a href="../views/Registro.php?ss=<?php echo $list; ?>" class="nav-item nav-link">Registro</a>
                <?php }
            } else { ?>
                <a href="../views/index.php" class="nav-item nav-link active">Inicio</a>
                <a href="../views/citas.php" class="nav-item nav-link ">Citas</a>
                <a href="../views/producto.php" class="nav-item nav-link">Productos</a>
                <a href="../views/servicios.php" class="nav-item nav-link">Servicios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nosotros</a>
                    <div class="dropdown-menu m-0">
                        <a href="../views/contacto.php" class="dropdown-item">Contacto</a>
                        <a href="../views/misvis.php" class="dropdown-item">Misión/Visión</a>
                        <a href="../views/nosotros.php" class="dropdown-item">Conócenos</a>
                        <a href="../views/fichatecnica.php" class="dropdown-item">Ficha técnica</a>
                    </div>
                </div>
                <a href="../views/Registro.php" class="nav-item nav-link">Registro</a>
            <?php }
            ?>
        </div>

        <?php
        if (session_status() === PHP_SESSION_ACTIVE) {
            $rol = $_SESSION['rol'];
            if ($rol == "user") {
                echo ('<a href="../views/admin/ajustes.php" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Perfil<i class="fa fa-arrow-right ms-3"></i></a>');
            } else {
                echo ('<a href="../views/admin/dashboard.php?list=id" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Administrador<i class="fa fa-arrow-right ms-3"></i></a>');
            }
        } else {
            if (isset($_GET['ss'])) { ?>
                <a href="../views/iniciosesion.php?ss=<?php echo $list; ?>" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Inicio Sesión<i class="fa fa-arrow-right ms-3"></i></a>
        <?php } else {
                echo ('<a href="../views/iniciosesion.php" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Inicio Sesión<i class="fa fa-arrow-right ms-3"></i></a>');
            }
        }
        ?>
    </div>
</nav>
<!-- Navbar End -->