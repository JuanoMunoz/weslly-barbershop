<head>

</head>
<div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5" style="margin-left: 50px;">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Encuéntranos</h4>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-map-marker-alt text-primary"></span>
                    </div>
                    <span>Cl. 50 ## 39-295, Copacabana, Antioquia</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-phone-alt text-primary"></span>
                    </div>
                    <span>+57 304 490 7312</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-envelope-open text-primary"></span>
                    </div>
                    <span>Wesllyvergara@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <?php
                if (isset($_GET['ss'])) { 
                    $list= $_GET['ss'] ?>
                    <h4 class="text-uppercase mb-4">Links Rápidos</h4>
                    <a class="btn btn-link" href="../views/nosotros.php?ss=<?php echo $list ?>">Nosotros</a>
                    <a class="btn btn-link" href="../views/contacto.php?ss=<?php echo $list ?>">Contacto</a>
                    <a class="btn btn-link" href="../views/servicios.php?ss=<?php echo $list ?>">Nuestros servicios</a>
                <?php    } else { ?>
                    <h4 class="text-uppercase mb-4">Links Rápidos</h4>
                    <a class="btn btn-link" href="../views/nosotros.php">Nosotros</a>
                    <a class="btn btn-link" href="../views/contacto.php">Contacto</a>
                    <a class="btn btn-link" href="../views/servicios.php">Nuestros servicios</a>
                <?php    } ?>

            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">Avisos</h4>
                <a class="btn btn-lg-square btn-dark text-primary m-3" target="_blank" href="https://api.whatsapp.com/send?phone=3106750777"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-lg-square btn-dark text-primary m-3" target="_blank" href="https://www.facebook.com/people/Barber%C3%ADa-Weslly/100067966122657/"><i class="fab fa-facebook-f"></i></a>
                <a type="button" href="../views/Registro.php" class="btn btn-primary py-2">Regístrate</a>
            </div>

        </div>
    </div>

</div>